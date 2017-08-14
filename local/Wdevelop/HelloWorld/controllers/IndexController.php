<?php
class Wdevelop_HelloWorld_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function formparamAction() {
        $this->loadLayout();
        $this->renderLayout();
    }

}