<?php

namespace BA\ClickCollectDelivery\Plugin;

use BA\ClickCollectDelivery\Model\Config;

class ShippingAddr
{
    /**
     * 
     * @var \BA\ClickCollectDelivery\Model\Config
     */
    protected $config;

    public function __construct(
        Config $config
    ) {
        $this->config = $config;
    }

    public function beforeSaveAddressInformation(
        \Magento\Checkout\Model\ShippingInformationManagement $subject,
        $cartId,
        $addressInformation
    ) {

        $methodCode = $addressInformation->getShippingMethodCode();
        if ($methodCode == 'click_and_collect') {
            $address = $addressInformation->getShippingAddress();
            $address->setFirstName($this->config->getFirstName());
            $address->setLastName($this->config->getLastName());
            $address->setStreet($this->config->getStreet());
            $address->setCity($this->config->getRegion());
            $address->setCompany($this->config->getCompany());
            $address->setPostCode($this->config->getPostcode());
            $addressInformation->setShippingAddress($address);
        }

        return [$cartId, $addressInformation];
    }
}
