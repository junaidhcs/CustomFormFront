<?php
namespace Mytask\CustomFormFront\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Data extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('mytask_customform_data', 'data_id');
    }
}
