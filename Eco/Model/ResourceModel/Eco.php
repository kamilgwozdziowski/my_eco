<?php

namespace My\Eco\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;

class Eco extends AbstractDb {

  public function __construct(
    Context $context
  )
  {
    parent::__construct($context);
  }

  protected function _construct() {
    $this->_init('my_eco', 'entity_id');
  }

}