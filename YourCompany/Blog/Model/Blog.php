<?php
namespace YourCompany\Blog\Model;

use Magento\Framework\Model\AbstractModel;
use YourCompany\Blog\Api\Data\BlogInterface;

class Blog extends AbstractModel implements BlogInterface
{
    protected function _construct()
    {
        $this->_init('YourCompany\Blog\Model\ResourceModel\Blog');
    }

    public function getId()
    {
        return $this->getData(self::ID);
    }

    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    public function getDescription()
    {
        return $this->getData(self::DESCRIPTION);
    }

    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }

    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }

    public function setDescription($description)
    {
        return $this->setData(self::DESCRIPTION, $description);
    }

    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }
}
