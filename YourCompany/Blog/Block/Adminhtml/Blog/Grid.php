<?php
namespace YourCompany\Blog\Block\Adminhtml\Blog;

class Grid extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_controller = 'adminhtml_blog';
        $this->_blockGroup = 'YourCompany_Blog';
        $this->_headerText = __('Blog Posts');
        $this->_addButtonLabel = __('Add New Post');
        parent::_construct();
    }
}
