# CookieBot for Craft3

CookieBot integration into Craft CMS 3.

## Requirements
This plugin requires Craft CMS 3.0.0-RC1 or later.

## Install

- Install with Composer via: ``composer require balazscsaba2006/cookiebot``
- Navigate to `Settings -> Plugins` and click the "Install" button
- Navigate to `Settings -> Plugins` and configure settings for Cookiebot
 
## Usage
Can be used to render dialog and declaration script on Twig templates
### Render dialog script:
```twig
{{ craft.cookiebot.dialogScript()|raw }}
```

### Render declaration script:
```twig
{{ craft.cookiebot.dialogScript()|raw }}
```

### Render dialog/declaration script in a certain language:
```twig
{{ craft.cookiebot.dialogScript(craft.app.locale.id)|raw }}
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