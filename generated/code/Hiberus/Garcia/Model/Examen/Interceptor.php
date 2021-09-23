<?php
namespace Hiberus\Garcia\Model\Examen;

/**
 * Interceptor class for @see \Hiberus\Garcia\Model\Examen
 */
class Interceptor extends \Hiberus\Garcia\Model\Examen implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getMark()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMark');
        if (!$pluginInfo) {
            return parent::getMark();
        } else {
            return $this->___callPlugins('getMark', func_get_args(), $pluginInfo);
        }
    }
}
