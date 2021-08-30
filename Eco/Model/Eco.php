<?php

namespace My\Eco\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;
use My\Eco\Api\Data\EcoInterface;

class Eco extends AbstractModel implements IdentityInterface, EcoInterface {

  const CACHE_TAG = 'my_eco';

  protected $_cacheTag = 'my_eco';

  protected $_eventPrefix = 'my_eco';

  protected function _construct()
  {
    $this->_init('My\Eco\Model\ResourceModel\Eco');
  }

  public function getIdentities()
  {
    return [self::CACHE_TAG . '_' . $this->getId()];
  }

  public function getDefaultValues()
  {
    $values = [];

    return $values;
  }

  public function getProductId(): int {
    return $this->getData(self::PRODUCT_ID);
  }

  public function setProductId(int $productId) {
    $this->setData(self::PRODUCT_ID, $productId);
  }

  public function getMaterial(): string {
    return $this->getData(self::MATERIAL);
  }

  public function setMaterial(string $material) {
    $this->setData(self::MATERIAL, $material);
  }

  public function getColor(): string {
    return $this->getData(self::COLOR);
  }

  public function setColor(string $color) {
    $this->setData(self::COLOR, $color);
  }

}