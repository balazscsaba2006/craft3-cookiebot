<?php

namespace humandirect\cookiebot\variables;

use humandirect\cookiebot\Cookiebot;

/**
 * CookiebotVariable class
 *
 * @author    Balazs Csaba <csaba.balazs@humandirect.eu>
 * @copyright 2018 Human Direct
 */
class CookiebotVariable
{
    /**
     * @return bool
     */
    public function hasConsent(): bool
    {
        return Cookiebot::$plugin->hasConsent();
    }

    /**
     * @return bool
     */
    public function hasPreferencesConsent(): bool
    {
        return Cookiebot::$plugin->hasPreferencesConsent();
    }

    /**
     * @return bool
     */
    public function hasStatisticsConsent(): bool
    {
        return Cookiebot::$plugin->hasStatisticsConsent();
    }

    /**
     * @return bool
     */
    public function hasMarketingConsent(): bool
    {
        return Cookiebot::$plugin->hasMarketingConsent();
    }

    /**
     * Renders CookieBot dialog script
     *
     * @param string|null $culture
     *
     * @return string
     * @throws \Exception
     */
    public function dialogScript(string $culture = null): string
    {
        return Cookiebot::$plugin->renderDialogScript($culture);
    }

    /**
     * Renders CookieBot declaration script
     *
     * @param string|null $culture
     *
     * @return string
     * @throws \Exception
     */
    public function declarationScript(string $culture = null): string
    {
        return Cookiebot::$plugin->renderDeclarationScript($culture);
    }
}
