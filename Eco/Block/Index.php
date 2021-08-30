<?php

namespace My\Eco\Block;

use Magento\Framework\View\Element\Template;
use My\Eco\Api\Data\EcoInterface;
use My\Eco\Model\ResourceModel\Eco\Collection as EcoCollection;
use My\Eco\Model\EcoRepository;

class Index extends \Magento\Framework\View\Element\Template {

  private $ecoRepository;

  public function __construct(
    Template\Context            $context,
    EcoRepository $ecoRepository,
    array                       $data = []) {
    $this->ecoRepository = $ecoRepository;
    parent::__construct($context, $data);
  }

  public function getEco(): EcoCollection {
    return $this->ecoRepository->getAll();
  }

  public function getByProduct(int $productId): EcoInterface {
    return $this->ecoRepository->getEcoByProductId($productId);
  }

}