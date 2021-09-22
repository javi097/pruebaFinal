<?php

namespace Hiberus\Garcia\Controller\Index;

use Hiberus\Garcia\Api\ExamenRepositoryInterface;
use Hiberus\Garcia\Api\Data\ExamenInterfaceFactory;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Hiberus\Garcia\Model\ResourceModel\Examen;

class Index implements HttpGetActionInterface
{
    protected \Magento\Framework\View\Result\PageFactory $pageFactory;
    protected ExamenRepositoryInterface $examenRepository;
    protected ExamenInterfaceFactory $examenInterfaceFactory;
    protected Examen $examenResource;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        ExamenRepositoryInterface $examenRepository,
        ExamenInterfaceFactory $examenInterfaceFactory,
        Examen $examenResource

    ) {
        $this->pageFactory = $pageFactory;
        $this->examenRepository = $examenRepository;
        $this->examenInterfaceFactory = $examenInterfaceFactory;
        $this->examenResource = $examenResource;
    }

    public function execute()
    {
        //return $this->pageFactory->create();
        echo "hola";
        die();
    }

    /**
     * @throws \Exception
     */
    public function insertAlumno($firstname, $lastname) {

        $alumno = $this->examenInterfaceFactory->create();
        $alumno->setFirstname($firstname);
        $alumno->setLastname($lastname);

        $this->examenResource->save($alumno);
        return $alumno->getEntityId();

    }
}