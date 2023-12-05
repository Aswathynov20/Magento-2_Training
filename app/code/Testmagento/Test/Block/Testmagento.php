<?php
namespace Testmagento\Test\Block;
class Testmagento extends \Magento\Framework\View\Element\Template
{
public function __construct(\Magento\Framework\View\Element\Template\Context $context)
{
parent::__construct($context);
}
public function sayWelcome()
{
  // Your PHP logic here
  $result = "Hello, this is your custom content!";
  return $result;
}
}