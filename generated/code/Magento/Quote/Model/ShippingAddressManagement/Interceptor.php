<?php
namespace Magento\Quote\Model\ShippingAddressManagement;

/**
 * Interceptor class for @see \Magento\Quote\Model\ShippingAddressManagement
 */
class Interceptor extends \Magento\Quote\Model\ShippingAddressManagement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Quote\Model\QuoteAddressValidator $addressValidator, \Psr\Log\LoggerInterface $logger, \Magento\Customer\Api\AddressRepositoryInterface $addressRepository, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Quote\Model\Quote\TotalsCollector $totalsCollector)
    {
        $this->___init();
        parent::__construct($quoteRepository, $addressValidator, $logger, $addressRepository, $scopeConfig, $totalsCollector);
    }

    /**
     * {@inheritdoc}
     */
    public function assign($cartId, \Magento\Quote\Api\Data\AddressInterface $address)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'assign');
        if (!$pluginInfo) {
            return parent::assign($cartId, $address);
        } else {
            return $this->___callPlugins('assign', func_get_args(), $pluginInfo);
        }
    }
}
