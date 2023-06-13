<?php
namespace Mytask\CustomFormFront\Model\ResourceModel\Data;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Mytask\CustomFormFront\Model\Data', 'Mytask\CustomFormFront\Model\ResourceModel\Data');
    }
}
