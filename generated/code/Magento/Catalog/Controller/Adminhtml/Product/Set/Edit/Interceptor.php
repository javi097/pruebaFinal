<?php
namespace Magento\Catalog\Controller\Adminhtml\Product\Set\Edit;

/**
 * Interceptor class for @see \Magento\Catalog\Controller\Adminhtml\Product\Set\Edit
 */
class Interceptor extends \Magento\Catalog\Controller\Adminhtml\Product\Set\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Framework\View\Result\PageFactory $resultPageFactory, ?\Magento\Eav\Api\AttributeSetRepositoryInterface $attributeSetRepository = null)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $resultPageFactory, $attributeSetRepository);
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
