# CoreShop Payment Bundle

## Installation
```bash
$ composer require coreshop/payment-bundle:^2.0
```

### Adding required bundles to kernel
You need to enable the bundle inside the kernel

If you're not using CoreShop bundles, you will also need to add CoreShopResourceBundle and its dependencies
to kernel. Don’t worry, everything was automatically installed via Composer.

```php
<?php

// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        new \JMS\SerializerBundle\JMSSerializerBundle(),

        new \CoreShop\Bundle\PaymentBundle\CoreShopPaymentBundle(),
        new \CoreShop\Bundle\ResourceBundle\CoreShopResourceBundle(),


        new \FOS\RestBundle\FOSRestBundle(),
        new \Doctrine\Bundle\DoctrineCacheBundle\DoctrineCacheBundle(),
        new \Payum\Bundle\PayumBundle\PayumBundle(),
        new \Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
    );
}
```

### Updating database schema
Run the following command.

```bash
$ php bin/console doctrine:schema:update --force
```

## Usage

This Bundle integrates Payment Component into Symfony and Doctrine

The Payment Bundle provides you with basic information needed for payment: Payment

The Bundle also introduces an Address Formatter, which formats addresses in country based formats.

## Doctrine Entities
 - Payment

 ## Pimcore UI

 - Payment Provider

How to use?

```javascript
coreshop.global.resource.open('coreshop.payment', 'payment_provider');
```