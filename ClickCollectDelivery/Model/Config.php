<?php

namespace BA\ClickCollectDelivery\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Config
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    const XML_PATH_FIRSTNAME = 'carriers/click_and_collect/firstname';
    const XML_PATH_LASTNAME = 'carriers/click_and_collect/lastname';
    const XML_PATH_COMPANY = 'carriers/click_and_collect/company';
    const XML_PATH_REGION = 'carriers/click_and_collect/region';
    const XML_PATH_POSTCODE = 'carriers/click_and_collect/postcode';
    const XML_PATH_STREET = 'carriers/click_and_collect/street';
    const XML_PATH_HEADING = 'carriers/click_and_collect/sidebar_title';


    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    public function getHeading()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_HEADING,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    public function getFirstName()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_FIRSTNAME,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    public function getLastName()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_LASTNAME,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    public function getCompany()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_COMPANY,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    public function getStreet()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_STREET,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    public function getPostcode()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_POSTCODE,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    public function getRegion()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_REGION,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}
