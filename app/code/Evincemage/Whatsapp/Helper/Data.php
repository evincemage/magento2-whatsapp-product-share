<?php

namespace Evincemage\Whatsapp\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
	public function __construct(
    	\Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }
	public function getButtonSize(){
		return $this->scopeConfig->getValue('whatsapp/active_display/button_size', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
	
	public function getButtonPos(){
		return $this->scopeConfig->getValue('whatsapp/active_display/button_position', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
	
	public function getIsEnable()
	{
		return $this->scopeConfig->getValue('whatsapp/active_display/enabled', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
		
	}

	public function getCustomShareMessage()
	{
		return $this->scopeConfig->getValue('whatsapp/active_display/custom_message', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
		
	}


	public function getBackcolor()
	{
		return $this->scopeConfig->getValue('whatsapp/active_display/bg_color', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	
	}
}