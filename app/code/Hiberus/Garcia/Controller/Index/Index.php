<?php

namespace Hiberus\Garcia\Controller\Index;

use Hiberus\Garcia\Api\ExamenRepositoryInterface;
use Hiberus\Garcia\Api\Data\ExamenInterfaceFactory;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Hiberus\Garcia\Model\ResourceModel\Examen;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;

class Index implements HttpGetActionInterface
{

    protected \Magento\Framework\View\Result\PageFactory $pageFactory;
    protected ExamenRepositoryInterface $examenRepository;
    protected ExamenInterfaceFactory $examenInterfaceFactory;
    protected Examen $examenResource;

    public function __construct
    (
        Context                   $context,
        PageFactory               $pageFactory,
        ExamenRepositoryInterface $examenRepository,
        ExamenInterfaceFactory    $examenInterfaceFactory,
        Examen                    $examenResource)
    {
        $this->pageFactory = $pageFactory;
        $this->examenRepository = $examenRepository;
        $this->ExamenInterfaceFactory = $examenInterfaceFactory;
        $this->examenResource = $examenResource;
    }

    public function execute()
    {
        return $this->pageFactory->create();
    }
}
