<?php
namespace Magento\AdminNotification\Controller\Adminhtml\Notification\MassRemove;

/**
 * Interceptor class for @see \Magento\AdminNotification\Controller\Adminhtml\Notification\MassRemove
 */
class Interceptor extends \Magento\AdminNotification\Controller\Adminhtml\Notification\MassRemove implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\AdminNotification\Model\InboxFactory $inboxModelFactory)
    {
        $this->___init();
        parent::__construct($context, $inboxModelFactory);
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
