<?php
namespace YourCompany\Blog\Block\Blog;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use YourCompany\Blog\Model\ResourceModel\Blog\CollectionFactory;
use Magento\Framework\UrlInterface;

class ListBlog extends Template
{
    protected $blogCollectionFactory;
    protected $urlBuilder;

    public function __construct(
        Context $context,
        CollectionFactory $blogCollectionFactory,
        UrlInterface $urlBuilder,
        array $data = []
    ) {
        $this->blogCollectionFactory = $blogCollectionFactory;
        $this->urlBuilder = $urlBuilder;
        parent::__construct($context, $data);
    }

    public function getBlogPosts()
    {
        $page = ($this->getRequest()->getParam('p')) ? $this->getRequest()->getParam('p') : 1;
        $limit = 10; // Number of blog posts per page

        $collection = $this->blogCollectionFactory->create();
        $collection->addFieldToFilter('status', 1); // Only show active blog posts
        $collection->setPageSize($limit);
        $collection->setCurPage($page);

        return $collection;
    }

    public function getPaginationHtml()
    {
        $pager = $this->getLayout()->createBlock('Magento\Theme\Block\Html\Pager', 'blog.list.pager');
        $pager->setAvailableLimit([10 => 10, 20 => 20, 30 => 30]);
        $pager->setCollection($this->getBlogPosts());
        return $pager->toHtml();
    }

    public function getPostUrl($post)
    {
        return $this->urlBuilder->getUrl('blog/post/view', ['id' => $post->getId()]);
    }

    public function truncateDescription($description, $length = 150)
    {
        $truncatedDescription = substr($description, 0, $length);
        if (strlen($description) > $length) {
            $truncatedDescription .= '...';
        }
        return $truncatedDescription;
    }
}
