<?php

namespace humandirect\cookiebot;

use craft\base\Model;
use craft\base\Plugin;
use craft\web\twig\variables\CraftVariable;

use humandirect\cookiebot\models\Settings;
use humandirect\cookiebot\services\CookiebotService;
use humandirect\cookiebot\variables\CookiebotVariable;

use yii\base\Event;
use yii\base\InvalidConfigException;

/**
 * Cookiebot class
 *
 * @author    Balazs Csaba <csaba.balazs@humandirect.eu>
 * @copyright 2018 Human Direct
 *
 * @property CookiebotService $cookiebot The CookieBot service
 */
class Cookiebot extends Plugin
{
    /**
     * @var Cookiebot
     */
    public static $plugin;

    /**
     * Initialize plugin.
     */
    public function init(): void
    {
        parent::init();
        self::$plugin = $this;

        Event::on(CraftVariable::class, CraftVariable::EVENT_INIT, function(Event $event) {
            /** @var CraftVariable $variable */
            $variable = $event->sender;
            $variable->set('cookiebot', CookiebotVariable::class);
        });

        $this->setComponents(['cookiebot' => CookiebotService::class]);

        \Craft::info(
            \Craft::t('cookiebot', '{name} plugin loaded', [
                'name' => $this->name
            ]),
            __METHOD__
        );
    }

    /**
     * Returns the cookiebot service.
     *
     * @return CookiebotService The twitter service
     *
     * @throws InvalidConfigException
     */
    public function getCookiebot(): CookiebotService
    {
        return $this->get('cookiebot');
    }

    /**
     * @inheritdoc
     */
    protected function createSettingsModel(): ?Model
    {
        return new Settings();
    }

    /**
     * @inheritdoc
     */
    protected function settingsHtml(): string
    {
        // Get and pre-validate the settings
        /** @var Settings $settings */
        $settings = $this->getSettings();
        $settings->validate();

        // Get the settings that are being defined by the config file
        $overrides = \Craft::$app->getConfig()->getConfigFromFile(strtolower($this->handle));

        return \Craft::$app->view->renderTemplate('cookiebot/settings', [
            'settings' => $settings,
            'overrides' => array_keys($overrides),
        ]);
    }
}
