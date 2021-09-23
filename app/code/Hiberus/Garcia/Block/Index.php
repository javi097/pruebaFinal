<?php

namespace Hiberus\Garcia\Block;

use Hiberus\Garcia\Api\ExamenRepositoryInterface;
use Hiberus\Garcia\Model\ResourceModel\Examen as ResourceExamen;
use Hiberus\Garcia\Model\Examen;
use Hiberus\Garcia\Api\Data\ExamenInterfaceFactory;
use \Magento\Framework\View\Element\Template\Context;
use \Magento\Framework\Registry;

class Index extends \Magento\Framework\View\Element\Template
{


    protected Registry $registry;

    protected Examen $examen;

    protected ExamenRepositoryInterface $examenRepository;

    protected ExamenInterfaceFactory $examenInterfaceFactory;

    protected ResourceExamen $examenResource;


    public function __construct
    (Context                   $context,
     Registry                  $registry,
     Examen                    $examen,
     ExamenRepositoryInterface $examenRepository,
     ExamenInterfaceFactory    $examenInterfaceFactory,
     ResourceExamen            $examenResource,
     array                     $data = []
    )
    {
        $this->registry = $registry;
        $this->examen = $examen;
        $this->examenRepository = $examenRepository;
        $this->examenInterfaceFactory = $examenInterfaceFactory;
        $this->examenResource = $examenResource;
        parent::__construct($context, $data);
    }

    public function getAlumno()
    {

        $crearAlumno = $this->examenInterfaceFactory->create();

        return $crearAlumno->getCollection();

    }


}