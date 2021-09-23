<?php

namespace Hiberus\Garcia\Model\ResourceModel\Examen;
use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;


class Collection extends AbstractCollection
{

    /**
     * Define resource model     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Hiberus\Garcia\Model\Examen', 'Hiberus\Garcia\Model\ResourceModel\Examen');
    }

}