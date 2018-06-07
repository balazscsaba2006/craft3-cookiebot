<?php

namespace humandirect\cookiebot\variables;

use humandirect\cookiebot\Cookiebot as Plugin;

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
        return Plugin::$plugin->cookiebot->hasConsent();
    }

    /**
     * @return bool
     */
    public function hasPreferencesConsent(): bool
    {
        return Plugin::$plugin->cookiebot->hasPreferencesConsent();
    }

    /**
     * @return bool
     */
    public function hasStatisticsConsent(): bool
    {
        return Plugin::$plugin->cookiebot->hasStatisticsConsent();
    }

    /**
     * @return bool
     */
    public function hasMarketingConsent(): bool
    {
        return Plugin::$plugin->cookiebot->hasMarketingConsent();
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
        return Plugin::$plugin->cookiebot->renderDialogScript($culture);
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
        return Plugin::$plugin->cookiebot->renderDeclarationScript($culture);
    }
}
