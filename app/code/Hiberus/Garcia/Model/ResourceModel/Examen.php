<?php

namespace Hiberus\Garcia\Model\ResourceModel;

use Aws\Api\AbstractModel;
use Dotdigitalgroup\Email\Model\Abandoned;
use Hiberus\Garcia\Api\Data\ExamenInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Tests\NamingConvention\true\mixed;



class Examen extends AbstractDb
{

    /**
     * @param \Magento\Framework\Model\ResourceModel\Db\Context $context
     * @param \Magento\Framework\EntityManager\MetadataPool $metadataPool
     * @param \Magento\Framework\EntityManager\EntityManager $entityManager
     * @param null $connectionName
     */
    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context,
        \Magento\Framework\EntityManager\MetadataPool $metadataPool,
        \Magento\Framework\EntityManager\EntityManager $entityManager,
                                                          $connectionName=null
    )
    {return $this->pageFactory->create();
        $this->metadatapool = $metadataPool;
        $this->entityManager = $entityManager;

        parent::__construct($context,$connectionName);
    }

    /**
     * @inheridoc
     */
    protected function _construct()
    {
        $this->_init(ExamenInterface::TABLE_NAME, ExamenInterface::COLUMN_ID);
    }

    /**
     * @param \Magento\Framework\Model\AbstractModel $object
     * @return $this|AbstractDb
     * @throws \Exception
     */
    public function save(\Magento\Framework\Model\AbstractModel $object)
    {
        $this->entityManager->save($object);
        return $this;
    }

    /**
     * @param \Magento\Framework\Model\AbstractModel $object
     * @param mixed $value
     * @param null $field
     * @return AbstractDb|mixed
     */
    public function load(\Magento\Framework\Model\AbstractModel $object, $value, $field=null)
    {
        return $this->entityManager->load($object, $value);
    }

    /**
     * @param \Magento\Framework\Model\AbstractModel $object
     * @return AbstractDb|mixed
     * @throws \Exception
     */

    public function delete(\Magento\Framework\Model\AbstractModel $object)
    {
        $this->entityManager->delete($object);
    }

}