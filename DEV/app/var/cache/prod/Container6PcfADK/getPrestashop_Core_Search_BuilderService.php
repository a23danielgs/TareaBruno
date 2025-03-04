<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.search.builder' shared service.

return $this->services['prestashop.core.search.builder'] = new \PrestaShop\PrestaShop\Core\Search\Builder\ChainedFiltersBuilder([0 => ($this->services['prestashop.core.search.builder.typed'] ?? $this->load('getPrestashop_Core_Search_Builder_TypedService.php')), 1 => ($this->services['prestashop.core.search.builder.repository'] ?? $this->load('getPrestashop_Core_Search_Builder_RepositoryService.php')), 2 => ($this->services['prestashop.core.search.builder.request'] ?? ($this->services['prestashop.core.search.builder.request'] = new \PrestaShop\PrestaShop\Core\Search\Builder\RequestFiltersBuilder())), 3 => ($this->services['prestashop.core.search.builder.event'] ?? $this->load('getPrestashop_Core_Search_Builder_EventService.php')), 4 => ($this->services['prestashop.core.search.builder.persist'] ?? $this->load('getPrestashop_Core_Search_Builder_PersistService.php'))]);
