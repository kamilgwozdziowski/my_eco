<?php

namespace My\Eco\Model\ResourceModel\Eco;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection {
  protected $_idFieldName = 'entity_id';
  protected $_eventPrefix = 'my_eco_collection';
  protected $_eventObject = 'my_eco';

  /**
   * Define resource model
   *
   * @return void
   */
  protected function _construct()
  {
    $this->_init('My\Eco\Model\Eco', 'My\Eco\Model\ResourceModel\Eco');
  }
}