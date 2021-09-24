<?php

namespace Hiberus\Garcia\Block;

use Hiberus\Garcia\Api\ExamenRepositoryInterface;
use Hiberus\Garcia\Model\ResourceModel\Examen as ResourceExamen;
use Hiberus\Garcia\Model\Examen;
use Hiberus\Garcia\Api\Data\ExamenInterfaceFactory;
use \Magento\Framework\View\Element\Template\Context;
use \Magento\Framework\Registry;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;

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
     ScopeConfigInterface $scopeConfig,
     array                     $data = []
    )
    {
        $this->scopeConfig = $scopeConfig;
        $this->registry = $registry;
        $this->examen = $examen;
        $this->examenRepository = $examenRepository;
        $this->examenInterfaceFactory = $examenInterfaceFactory;
        $this->examenResource = $examenResource;
        parent::__construct($context, $data);
    }

//  Metodo para obtener todos los datos del alumno
    public function getAlumno()
    {

        $crearAlumno = $this->examenInterfaceFactory->create();

        return $crearAlumno->getCollection();

    }

    //Metodo para obtener la nota media de todos los alumnos
    public function getNotaMedia()
    {
        $notas = 0;
        $alumnos = $this->getAlumno();
        foreach ($alumnos as $alumno) {
            $notas += $alumno->getMark();
        }
        return $notasTotal = $notas / count($alumnos);

    }

    //Metodo par obtener las tres mejores notas de todos los alumnos
    public function getNotasMax()
    {
        $totalAlumnos = $this->getAlumno();
        $notas = [];
        $notasMaximas = [];
        $notaMax = 0;
        foreach ($totalAlumnos as $item) {
            $notas[] = $item->getMark();
        }
        $max = max($notas);
        foreach ($notas as $nota) {
            $notaGeneral = $nota;
            if ($notaGeneral <= $max && count($notasMaximas) < 3) {
                $notaMax = $notaGeneral;
                $notasMaximas[] = $notaMax;
            }
        }

        return $notasMaximas;
    }

    public function getNotaMasAlta() {
        $alumnos = $this->examenInterfaceFactory->create()->getCollection()->getData();
        $notaMaxima = 0;
        foreach ($alumnos as $alumno) {
            if ($alumno['mark'] > $notaMaxima) {
                $notaMaxima = $alumno['mark'];
            }
        }
        return $notaMaxima;
    }

    public function getRegistros()
    {
        $data = $this->scopeConfig->getValue('hiberus_nombre/general/registros', ScopeInterface::SCOPE_STORE);
        $alumnos = $this->getAlumno();
        return $data ?: count($alumnos);
    }

    public function getNotaMin()
    {
        $data = $this->scopeConfig->getValue('hiberus_nombre/general/notaMin', ScopeInterface::SCOPE_STORE);
        return $data ?: 5;
    }

}