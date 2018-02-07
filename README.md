Floating Buy Button for Magento 2
==================

A simple way that allows the integration of a Floating Buy Button in your store;
No matter how much content it has, like, long product description or a lot of 
reviews, the button follow your customers along each product page. Bringing the 
product name, price and of course, the buy button.
Get your customer attention the most important action in your online store, the 
purchase.

Installation
-------------
**Using Composer**


Install all dependencies via [Composer](https://getcomposer.org) (from root of 
your Magento2 Installation):
```sh
composer config repositories.magestat-module-floating-buy-button git git@github.com:magestat/magento2-floating-buy-button.git
composer require magestat/module-floating-buy-button:dev-master
```

**Using GIT Clone**

Run the following series of command (from root of your Magento2 Installation):
```sh
mkdir -p app/code/Magestat && git clone git@github.com:magestat/magento2-floating-buy-button.git app/code/Magestat/FloatingBuyButton
```

**Enabling module**

After installation by either means, enable the extension by running following 
commands (again from root of Magento2 installation):
```sh
php bin/magento module:enable Magestat_FloatingBuyButton --clear-static-content
php bin/magento setup:upgrade
```

Go to *Stores* > *Configuration* > *Magestat* > *General*:
Enable module and choose the "Position to be Displayed" like: top, left, right 
and bottom

Clear the caches:
```sh
php bin/magento cache:clean
```

By default, this extension retrieves your current theme color patterns.


Uninstall
-------------

You need to remove the module.
```sh
composer remove magestat/module-floating-buy-button
```