<?php
namespace Magento\Catalog\Controller\Adminhtml\Product\Save;

/**
 * Interceptor class for @see \Magento\Catalog\Controller\Adminhtml\Product\Save
 */
class Interceptor extends \Magento\Catalog\Controller\Adminhtml\Product\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Catalog\Controller\Adminhtml\Product\Builder $productBuilder, \Magento\Catalog\Controller\Adminhtml\Product\Initialization\Helper $initializationHelper, \Magento\Catalog\Model\Product\Copier $productCopier, \Magento\Catalog\Model\Product\TypeTransitionManager $productTypeManager, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, ?\Magento\Framework\Escaper $escaper = null, ?\Psr\Log\LoggerInterface $logger = null, ?\Magento\Catalog\Api\CategoryLinkManagementInterface $categoryLinkManagement = null, ?\Magento\Store\Model\StoreManagerInterface $storeManager = null)
    {
        $this->___init();
        parent::__construct($context, $productBuilder, $initializationHelper, $productCopier, $productTypeManager, $productRepository, $escaper, $logger, $categoryLinkManagement, $storeManager);
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
