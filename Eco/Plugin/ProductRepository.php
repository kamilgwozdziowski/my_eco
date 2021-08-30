<?php

namespace My\Eco\Plugin;

use My\Eco\Api\EcoRepositoryInterface;
use My\Eco\Api\Data\EcoInterfaceFactory;
use My\Eco\Api\Data\EcoInterface;

class ProductRepository {

  private EcoRepositoryInterface $ecoRepository;

  private EcoInterfaceFactory $ecoFactory;

  public function __construct(
    EcoRepositoryInterface $ecoRepository,
    EcoInterfaceFactory $ecoFactory
  ) {
    $this->ecoRepository = $ecoRepository;
    $this->ecoFactory = $ecoFactory;
  }

  public function afterGet(\Magento\Catalog\Model\ProductRepository $subject, $result)
  {
    /** @var \Magento\Catalog\Api\Data\ProductExtension $extensionAttributes */
    $extensionAttributes = $result->getExtensionAttributes();
    if ($extensionAttributes === null) {
      $extensionAttributes = $this->productExtensionFactory->create();
    }

    /** @var EcoInterface $ecoExtension */
    $ecoExtension = $this->ecoRepository->getEcoByProductId(1);
    $extensionAttributes->setEco($ecoExtension);

    $result->setExtensionAttributes($extensionAttributes);
    return $result;
  }
}