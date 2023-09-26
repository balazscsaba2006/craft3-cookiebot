# Changelog

## 1.0.0 - 2018-06-07
### Added
- Initial release

## 1.0.1 - 2018-06-07
### Fixed issue
- Fixed issue of cookiebot service naming; renamed `service` component to `cookiebot`
- Set `$hasCpSettings` to `true`

## 1.0.2 - 2018-06-08
### Fixed issue
- Fixed service template rendering issues
### Added
- Added settings override possibility from `cookiebot.php` config file

## 1.0.3 - 2018-06-08
### Fixed issue
- Removed version from composer.json (see composer/packagist#587)

## 1.0.4 - 2018-06-08
### Fixed issue
- Changed hasCpSettings to true in composer.json and removed public property from Plugin class

## 1.0.5 - 2018-07-06
### Added
- Added minimum PHP version 7.1

## 1.0.6 - 2018-07-06
### Fixed
- Downgraded to PHP 7.0 support

## 1.0.7 - 2019-04-20
### Fixed
- Upgraded cookiebot support for version 2 of the cookie, that handles cookies that don't require consent
## 2.1.3 - 2023-09-27
### Added
- Option to change TLD