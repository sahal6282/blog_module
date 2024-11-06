<?php
namespace YourCompany\Blog\Model\ResourceModel\Blog;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init('YourCompany\Blog\Model\Blog', 'YourCompany\Blog\Model\ResourceModel\Blog');
    }
}
