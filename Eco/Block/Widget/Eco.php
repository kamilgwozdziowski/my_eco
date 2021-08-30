<?php

namespace My\Eco\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class Eco extends Template implements BlockInterface {
  protected $_template = "widget/eco.phtml";
}