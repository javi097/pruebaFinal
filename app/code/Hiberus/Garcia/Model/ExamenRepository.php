<?php

namespace Hiberus\Garcia\Model;

use Hiberus\Garcia\Api\ExamenRepositoryInterface;
use Hiberus\Garcia\Api\Data\ExamenInterface;
use Magento\Framework\Exception\CouldNotSaveException;

class ExamenRepository implements ExamenRepositoryInterface
{

    protected ResourceModel\Examen $resourceExamen;
    protected ExamenRepositoryInterface $examenRepository;

    /**
     * @param ResourceModel\Examen $resourceExamen
     * @param ExamenRepositoryInterface $examenRepository
     */
    public function __construct(
        \Hiberus\Garcia\Model\ResourceModel\Examen $resourceExamen,
        \Hiberus\Garcia\Api\Data\ExamenInterfaceFactory $examenInterfaceFactory
    ) {
        $this->resourceExamen = $resourceExamen;
        $this->examenInterfaceFactory = $examenInterfaceFactory;
    }

    /**
     * @param ExamenInterface $examen
     * @return ExamenInterface
     * @throws CouldNotSaveException
     */
    public function save(ExamenInterface $examen) {

        try {
            $this->resourceExamen->save($examen);
        } catch(\Exception $e) {
            throw new CouldNotSaveException(__($e->getMessage()));
        }

        return $examen;

    }

    /**
     * @param $idExam
     * @return mixed
     */
    public function getById($idExam)
    {
        try {
            $examen = $this->examenInterfaceFactory->create();
            $examen->setIdExam($idExam);
            $this->resourceExamen->load($examen, $idExam);
        } catch (\Exception $e) {
            $examen = $this->examenInterfaceFactory->create();
        }

        return $examen;
    }

    /**
     * @param ExamenInterface $examen
     * @return bool
     */
    public function delete(ExamenInterface $examen)
    {
        try {
            $this->resourceExamen->delete($examen);
        } catch (\Exception $e) {

            return false;
        }

        return true;
    }

    /**
     * @param int $idExam
     * @return bool
     */
    public function deleteById($idExam)
    {
        return $this->delete($this->getById($idExam));
    }

}
