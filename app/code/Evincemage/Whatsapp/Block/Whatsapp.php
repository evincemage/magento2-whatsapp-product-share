<?php

namespace Evincemage\Whatsapp\Block;

use Magento\Catalog\Model\Product;

class Whatsapp extends \Magento\Framework\View\Element\Template {

    protected $registry;

    protected $whatsapphelper;

    protected $request;

     public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Evincemage\Whatsapp\Helper\Data $whatsapphelper,
        \Magento\Framework\App\Request\Http $request,
        \Magento\Framework\Registry $registry,
        array $data = []
    ) {
        $this->_coreRegistry = $registry;
        $this->whatsapphelper= $whatsapphelper;
        $this->request = $request;
        parent::__construct($context, $data);
    }
    

    public function getButtonSize()
    {
        return $this->whatsapphelper->getButtonSize();
    }

    public function getButtonPos()
    {
        return $this->whatsapphelper->getButtonPos();
    }

    public function getCustomShareMessage()
    {
        return $this->whatsapphelper->getCustomShareMessage();
    }

    public function getFullActionName()
    {
        return $this->request->getFullActionName();
    }

    public function getBackcolor()
    {
        return $this->whatsapphelper->getBackcolor();
    }

    public function getProduct()
    {
        return $this->_coreRegistry->registry('current_product');
    }

}
