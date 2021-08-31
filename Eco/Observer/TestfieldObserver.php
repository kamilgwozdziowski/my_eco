<?php

namespace My\Eco\Observer;

use Magento\Framework\DataObject\Copy;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class TestfieldObserver implements ObserverInterface {

  protected Copy $objectCopyService;

  public function __construct(
    Copy $objectCopyService
  ) {
    $this->objectCopyService = $objectCopyService;
  }

  public function execute(Observer $observer)
  {
    $order = $observer->getEvent()->getData('order');
    $quote = $observer->getEvent()->getData('quote');
    $this->objectCopyService->copyFieldsetToTarget('sales_convert_quote', 'to_order', $quote, $order);
    return $this;
  }

}