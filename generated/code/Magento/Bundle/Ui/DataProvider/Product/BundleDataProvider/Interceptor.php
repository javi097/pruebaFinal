<?php
namespace Magento\Bundle\Ui\DataProvider\Product\BundleDataProvider;

/**
 * Interceptor class for @see \Magento\Bundle\Ui\DataProvider\Product\BundleDataProvider
 */
class Interceptor extends \Magento\Bundle\Ui\DataProvider\Product\BundleDataProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct($name, $primaryFieldName, $requestFieldName, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $collectionFactory, \Magento\Bundle\Helper\Data $dataHelper, array $meta = [], array $data = [], array $addFieldStrategies = [], array $addFilterStrategies = [])
    {
        $this->___init();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $collectionFactory, $dataHelper, $meta, $data, $addFieldStrategies, $addFilterStrategies);
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        if (!$pluginInfo) {
            return parent::getData();
        } else {
            return $this->___callPlugins('getData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMeta()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMeta');
        if (!$pluginInfo) {
            return parent::getMeta();
        } else {
            return $this->___callPlugins('getMeta', func_get_args(), $pluginInfo);
        }
    }
}
