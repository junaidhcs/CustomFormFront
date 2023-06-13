<?php
namespace Mytask\CustomFormFront\Block;

use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;
use Mytask\CustomFormFront\Model\DataFactory;

class Hello extends Template
{
    protected $dataFactory;

    public function __construct(
        Context $context,
        DataFactory $dataFactory,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->dataFactory = $dataFactory;
    }

    public function saveFormData($name, $email, $telephone)
    {
        $data = $this->dataFactory->create();
        $data->setName($name);
        $data->setEmail($email);
        $data->setTelephone($telephone);
        $data->save();
        // You can perform additional operations here, like sending email notifications, etc.
    }
}
