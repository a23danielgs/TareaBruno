<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker\ProductMultipleShopsAssociatedAccessibilityChecker' shared autowired service.

return $this->privates['PrestaShop\\PrestaShop\\Core\\Grid\\Action\\Row\\AccessibilityChecker\\ProductMultipleShopsAssociatedAccessibilityChecker'] = new \PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker\ProductMultipleShopsAssociatedAccessibilityChecker(($this->services['prestashop.adapter.shop.context'] ?? ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context())));
