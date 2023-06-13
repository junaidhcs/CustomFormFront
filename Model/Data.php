<?php
namespace Mytask\CustomFormFront\Model;

use Magento\Framework\Model\AbstractModel;

class Data extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Mytask\CustomFormFront\Model\ResourceModel\Data');
    }
}
