<?php
namespace Hiberus\Garcia\Console\ExamenCommand;

/**
 * Interceptor class for @see \Hiberus\Garcia\Console\ExamenCommand
 */
class Interceptor extends \Hiberus\Garcia\Console\ExamenCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Hiberus\Garcia\Model\Examen $examens, \Hiberus\Garcia\Block\Index $block)
    {
        $this->___init();
        parent::__construct($examens, $block);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        if (!$pluginInfo) {
            return parent::run($input, $output);
        } else {
            return $this->___callPlugins('run', func_get_args(), $pluginInfo);
        }
    }
}
