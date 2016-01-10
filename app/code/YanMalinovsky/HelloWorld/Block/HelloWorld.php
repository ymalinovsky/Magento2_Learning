<?php
namespace YanMalinovsky\HelloWorld\Block;
use Magento\Framework\View\Element\Template;

class HelloWorld extends Template
{
    protected function _prepareLayout()
    {
        $this->setMessage('Hello World');
    }
}