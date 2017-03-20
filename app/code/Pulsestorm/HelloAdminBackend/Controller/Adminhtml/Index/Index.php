<?php
namespace Pulsestorm\HelloAdminBackend\Controller\Adminhtml\Index;

use Magento\Framework\View\Result\Page;

class Index extends \Magento\Backend\App\Action
{

	const ADMIN_RESOURCE = 'Pulsestorm_HelloAdminBackend::menu_1';

	protected $resultPageFactory;

	public function __construct(
		\Magento\Backend\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $resultPageFactory
	)
	{
		$this->resultPageFactory = $resultPageFactory;

		return parent::__construct( $context );
	}

	public function execute()
	{
		/** @var Page $page */
		$page = $this->resultPageFactory->create();

		// Highlights the relevant top-level menu section in the sidebar
		$page->setActiveMenu( 'Pulsestorm_HelloAdminBackend::a_menu_item' );

		// Set the title of the page
		$page->getConfig()->getTitle()->prepend( __( 'My Custom Title' ) );

		return $page;
	}
}
