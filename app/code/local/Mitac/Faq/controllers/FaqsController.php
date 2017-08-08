<?php
class Mitac_Faq_FaqsController extends Mage_Core_Controller_Front_Action
{
	public function indexAction()
	{
		$this->loadLayout();
		$this->renderLayout();
	}

	public function gridAction()
	{
		$this->loadLayout();
		$this->getResponse()->setBody(
		$this->getLayout()->createBlock('awfaq/adminhtml_faqs_grid')->toHtml()
		);
	}

	protected function _isAllowed()
	{
		return Mage::getSingleton('admin/session')->isAllowed('mitacfaq/mitacfaq_list');
	}	
	
}