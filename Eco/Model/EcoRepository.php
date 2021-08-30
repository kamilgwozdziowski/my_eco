<?php

namespace My\Eco\Model;

use My\Eco\Api\Data\EcoInterface;
use My\Eco\Api\EcoRepositoryInterface;
use My\Eco\Model\ResourceModel\Eco\CollectionFactory as EcoCollectionFactory;
use My\Eco\Model\ResourceModel\Eco\Collection as EcoCollection;

class EcoRepository implements EcoRepositoryInterface {

  private $ecoCollection;

  public function __construct(
    EcoCollectionFactory $ecoCollection
  ) {
    $this->ecoCollection = $ecoCollection;
  }

  public function getAll(): EcoCollection {
    return $this->ecoCollection->create();
  }

  public function getEcoByProductId(int $productId): EcoInterface {
    $ecoCollection = $this->ecoCollection->create();
    return $ecoCollection->addFieldToFilter('product_id', ['eq' => $productId])->getLastItem();
  }

}