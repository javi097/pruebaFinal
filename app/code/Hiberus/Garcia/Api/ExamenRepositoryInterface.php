<?php

namespace Hiberus\Garcia\Api;

interface ExamenRepositoryInterface
{
    /**
     * @param \Hiberus\Garcia\Api\Data\ExamenInterface $examenInterface
     * @return \Hiberus\Garcia\Api\Data\ExamenInterface
     */
    public function save(\Hiberus\Garcia\Api\Data\ExamenInterface $examenInterface);

    /**
     * @param $idExam
     * @return \Hiberus\Garcia\Api\Data\ExamenInterface
     */
    public function getById($idExam);

    /**
     * @param \Hiberus\Garcia\Api\Data\ExamenInterface $examenInterface
     * @return bool
     */
    public function delete(\Hiberus\Garcia\Api\Data\ExamenInterface $examenInterface);

    /**
     * @param $idExam
     * @return bool
     */
    public function deleteById($idExam);
}