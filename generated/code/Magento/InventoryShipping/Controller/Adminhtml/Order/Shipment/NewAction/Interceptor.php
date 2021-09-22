<?php
namespace Magento\InventoryShipping\Controller\Adminhtml\Order\Shipment\NewAction;

/**
 * Interceptor class for @see \Magento\InventoryShipping\Controller\Adminhtml\Order\Shipment\NewAction
 */
class Interceptor extends \Magento\InventoryShipping\Controller\Adminhtml\Order\Shipment\NewAction implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Shipping\Controller\Adminhtml\Order\ShipmentLoader $shipmentLoader, ?\Magento\Shipping\Model\ShipmentProviderInterface $shipmentProvider = null)
    {
        $this->___init();
        parent::__construct($context, $shipmentLoader, $shipmentProvider);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        if (!$pluginInfo) {
            return parent::execute();
        } else {
            return $this->___callPlugins('execute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
