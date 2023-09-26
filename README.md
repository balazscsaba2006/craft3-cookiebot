# CookieBot for Craft3 and Craft4

CookieBot integration into Craft CMS 3 or 4.

## Requirements
This plugin requires Craft CMS 3.0.0 or later.

## Install

- Install with Composer via: ``composer require balazscsaba2006/cookiebot``
- Navigate to `Settings -> Plugins` and click the "Install" button

## Configure
- Navigate to `Settings -> Plugins` and configure settings for Cookiebot

### Overriding plugin settings

If you create a [config file](https://craftcms.com/docs/config-settings) in your `config/` folder called `cookiebot.php`, you can override
the plugin’s settings in the Control Panel. Since that config file is fully [multi-environment](https://craftcms.com/docs/multi-environment-configs) aware, this is
a handy way to have different settings across multiple environments.

Here’s what that config file might look like along with a list of all of the possible values you can override.

```php
    <?php

    return [
        'domainGroupID' => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx',
        'defaultPreferences' => true,
        'defaultStatistics' => true,
        'defaultMarketing' => false,
        'europeanCDN' => false
    ];
```
 
## Usage
Can be used to render dialog and declaration script on Twig templates
### Render dialog script:
```twig
{{ craft.cookiebot.dialogScript()|raw }}
```

### Render declaration script:
```twig
{{ craft.cookiebot.declarationScript()|raw }}
```

### Render dialog/declaration script in a certain language:
```twig
{# dialog script #}
{{ craft.cookiebot.dialogScript(craft.app.locale.id)|raw }}

{# declaration script #}
{{ craft.cookiebot.declarationScript(craft.app.locale.id)|raw }}
```


Can be used to check for consent on certain cookie categories like: Preferences, Statistics and Marketing.
### Checking for any consent:
```twig
{% if craft.cookiebot.hasConsent %}
    {# ... #}
{% endif %}
```

### Checking for consent on a specific category:
Preferences:
```twig
{% if craft.cookiebot.hasPreferencesConsent %}
    {# ... #}
{% endif %}
```

Statistics:
```twig
{% if craft.cookiebot.hasStatisticsConsent %}
    {# ... #}
{% endif %}
```

Marketing:
```twig
{% if craft.cookiebot.hasMarketingConsent %}
    {# ... #}
{% endif %}
```
