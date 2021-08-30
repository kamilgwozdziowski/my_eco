<?php

namespace My\Eco\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\View\Result\Page;
use My\Eco\Model\EcoFactory;

class Index implements ActionInterface {

  private PageFactory $resultPageFactory;
  public function __construct(
    PageFactory $resultPageFactory
  )
  {
    $this->resultPageFactory = $resultPageFactory;
  }

  public function execute() {
    /** @var Page $resultPage */
    $resultPage = $this->resultPageFactory->create();
    $resultPage->getConfig()->getTitle()->set(__('My Eco'));

    return $resultPage;
  }

}