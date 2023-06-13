<?php
namespace Mytask\CustomFormFront\Controller\Hello;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Mytask\CustomFormFront\Model\Data;

class Submit extends Action
{
    protected $dataModel;

    public function __construct(
        Context $context,
        Data $dataModel
    ) {
        parent::__construct($context);
        $this->dataModel = $dataModel;
    }

    public function execute()
    {
        $post = $this->getRequest()->getPostValue();

        if (!empty($post)) {
            $name = $post['name'];
            $email = $post['email'];
            $telephone = $post['telephone'];

            $this->saveFormData($name, $email, $telephone);
        }

        // Redirect the user to a success page or wherever you want
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('customform/index/success');
        return $resultRedirect;
    }

    public function saveFormData($name, $email, $telephone)
    {
        $data = $this->dataModel;
        $data->setName($name);
        $data->setEmail($email);
        $data->setTelephone($telephone);
        $data->save();
        // You can perform additional operations here, like sending email notifications, etc.
    }
}
