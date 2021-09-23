<?php

namespace Hiberus\Garcia\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use Hiberus\Garcia\Block\Index;

class ExamenCommand extends Command
{

    //const NAME = 'nombre';

    /**
     * @var \Hiberus\Garcia\Model\Examen
     */
    protected \Hiberus\Garcia\Model\Examen $examens;
    protected Index $block;

    /**
     * @param \Hiberus\Garcia\Model\Examen $examens
     * @param string|null $name
     */
    public function __construct(
        \Hiberus\Garcia\Model\Examen $examens, Index $block
    )
    {
        $this->examens = $examens;
        $this->block = $block;
        parent::__construct(/*$name*/);
    }

    protected function configure()
    {

        $this->setName('hiberus:garcia')
            ->setDescription('Mostrar Tabla de Examenes')/*->addOption(
                self::NAME,
                null,
                InputOption::VALUE_OPTIONAL,
                'Name'
            )*/
        ;

        parent::configure();

    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void
     */
    protected function execute(
        InputInterface  $input,
        OutputInterface $output
    )
    {

        /* if ($input->getOption(self::NAME)) {
             $name = $input->getOption(self::NAME);
         } else {
             $name = $this->author->getAuthorName();
         }*/
        $alumnos = $this->block->getAlumno();
        foreach ($alumnos as $alumno) {
            $this->examens->setIdExam($alumno->getIdExam());
            $this->examens->setFirstName($alumno->getFirstName());
            $this->examens->setLastName($alumno->getLastName());
            $this->examens->setMark($alumno->getMark());
            $output->writeln('<info> ID: ' . $this->examens->getIdExam() . ' | Nombre: ' . $this->examens->getFirstName() . ' | Apellidos: ' . $this->examens->getLastName() .
                ' | Nota: ' . $this->examens->getMark() . '</info>');
        }

    }

}