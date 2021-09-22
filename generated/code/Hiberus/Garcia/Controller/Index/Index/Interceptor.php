<?php
namespace Hiberus\Garcia\Controller\Index\Index;

/**
 * Interceptor class for @see \Hiberus\Garcia\Controller\Index\Index
 */
class Interceptor extends \Hiberus\Garcia\Controller\Index\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $pageFactory, \Hiberus\Garcia\Api\ExamenRepositoryInterface $examenRepository, \Hiberus\Garcia\Api\Data\ExamenInterfaceFactory $examenInterfaceFactory, \Hiberus\Garcia\Model\ResourceModel\Examen $examenResource)
    {
        $this->___init();
        parent::__construct($context, $pageFactory, $examenRepository, $examenInterfaceFactory, $examenResource);
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
}
