Floating Buy Button for Magento 2
=====================

A simple way that allows the integration of a Floating Buy Button in your store;
No matter how much content it has, like, long product description or a lot of 
reviews, the button follow your customers along each product page. Bringing the 
product name, price and of course, the buy button.
Get your customer attention the most important action in your online store, the 
purchase.

[![Packagist](https://img.shields.io/packagist/v/magestat/module-floating-buy-button.svg)](https://packagist.org/packages/magestat/module-floating-buy-button)

## 1. Installation

### Install via composer (recommend)

Run the following command in Magento 2 root folder:
```sh
composer require magestat/module-floating-buy-button
```

### Using GIT clone

Run the following command in Magento 2 root folder:
```sh
git clone git@github.com:magestat/magento2-floating-buy-button.git app/code/Magestat/FloatingBuyButton
```

## 2. Activation

Run the following command in Magento 2 root folder:
```sh
php bin/magento module:enable Magestat_FloatingBuyButton --clear-static-content
php bin/magento setup:upgrade
```

Clear the caches:
```sh
php bin/magento cache:clean
```

## 3. Configuration

1. Go to **Stores** > **Configuration** > **Magestat** > **Floating Buy Button**:
2. In **Enable Module** tab, select **Enabled** option to enable module.
3. In **Settings** tab, choose the options to better compose your store.

## Contribution

Want to contribute to this extension? The quickest way is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).

## Support

If you encounter any problems or bugs, please open an issue on [GitHub](https://github.com/magestat/magento2-floating-buy-button/issues).

Need help setting up or want to customize this extension to meet your business needs? Please email willianlkeller@outlook.com and if we like your idea we will add this feature for free or at a discounted rate.

© Magestat.
