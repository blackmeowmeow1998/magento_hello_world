<?php
namespace BlackModule\HelloWorld\Block;

class Helloworld extends \Magento\Framework\View\Element\Template
{
  public function getHelloWorldTxt()
  {
      return 'Hello world!';
  }
}