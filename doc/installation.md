# Installation

## Overview:
GENERAL
- [Requirements](#requirements)
- [Composer](#composer)
- [Basic configuration](#basic-configuration)
---
ADDITIONAL
- [Tests](#tests)
- [Known Issues](#known-issues)
---

## Requirements:
We work on stable, supported and up-to-date versions of packages. We recommend you to do the same.

| Package       | Version         |
|---------------|-----------------|
| PHP           | \>=8.0          |
| sylius/sylius | 1.12.x - 1.13.x |
| MySQL         | \>= 5.7         |

## Composer:
```bash
composer require bitbag/poczta-polska-shipping-export-plugin
```

## Basic configuration:
Add plugin dependencies to your `config/bundles.php` file:

```php
# config/bundles.php

return [
    ...
    BitBag\SyliusShippingExportPlugin\BitBagSyliusShippingExportPlugin::class => ['all' => true],
    BitBag\SyliusPocztaPolskaShippingExportPlugin\BitBagSyliusPocztaPolskaShippingExportPlugin::class => ['all' => true],
];
```

Import required config in your `config/packages/bitbag_shipping_export_plugin.yaml` file (if it doesn't exist):

```yaml
# config/packages/bitbag_shipping_export_plugin.yaml

imports:
    ...
    - { resource: "@BitBagSyliusShippingExportPlugin/Resources/config/config.yml" }
```

Import routing in your `config/routes/bitbag_shipping_export_plugin.yaml` file (if it doesn't exist):
```yaml
# config/routes/bitbag_shipping_export_plugin.yaml

bitbag_shipping_export_plugin:
    resource: "@BitBagSyliusShippingExportPlugin/Resources/config/routing.yml"
    prefix: /admin
```

### Update your database
First, please run legacy-versioned migrations by using command:
```bash
bin/console doctrine:migrations:migrate
```

After migration, please create a new diff migration and update database:
```bash
bin/console doctrine:migrations:diff
bin/console doctrine:migrations:migrate
```
**Note:** If you are running it on production, add the `-e prod` flag to this command.

### Clear application cache by using command:
```bash
bin/console cache:clear
```
**Note:** If you are running it on production, add the `-e prod` flag to this command.

## Tests
Recommended Node version for testing = 14.*

To run the tests, execute the commands:
```bash
composer install
cd tests/Application
yarn install
yarn run encore dev
bin/console doctrine:database:create --env=test 
bin/console doctrine:schema:create --env=test
bin/console sylius:fixtures:load --env=test
APP_ENV=test symfony server:start --dir=public/
cd ../..
vendor/bin/behat
vendor/bin/phpspec run
```

## Known issues
### Translations not displaying correctly
For incorrectly displayed translations, execute the command:
```bash
bin/console cache:clear
```
