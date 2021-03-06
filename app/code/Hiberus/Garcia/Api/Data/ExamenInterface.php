<?php

namespace Hiberus\Garcia\Api\Data;
use Magento\Framework\Api\ExtensibleDataInterface;

interface ExamenInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{
    const TABLE_NAME = 'hiberus_garcia';

    const  COLUMN_ID = 'id_exam';

    /**
     * @return int
     */
    public function getIdExam();

    /**
     * @param int $idExam
     * @return $this
     */
    public function setIdExam($idExam);

    /**
     * @return string
     */
    public function getFirstname();

    /**
     * @param string $firstname
     * @return $this
     */
    public function setFirstname($firstname);

    /**
     * @return string
     */
    public function getLastname();

    /**
     * @param string $lastname
     * @return $this
     */
    public function setLastname($lastname);

    /**
     * @return float
     */
    public function getMark();

    /**
     * @param float $mark
     * @return $this
     */
    public function setMark($mark);

}