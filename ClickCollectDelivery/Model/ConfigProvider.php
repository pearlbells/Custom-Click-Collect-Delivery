<?php

namespace BA\ClickCollectDelivery\Model;

use Magento\Checkout\Model\ConfigProviderInterface;
use BA\ClickCollectDelivery\Model\Config;

class ConfigProvider implements ConfigProviderInterface
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

    public function getConfig()
    {
        return [
            'heading' => $this->config->getHeading(),
            'firstname' => implode(" ", [$this->config->getFirstName(), $this->config->getLastName()]),
            'street' => $this->config->getStreet(),
            'region' => $this->config->getRegion(),
            'company' => $this->config->getCompany(),
            'postcode' => $this->config->getPostcode()
        ];
    }
}
