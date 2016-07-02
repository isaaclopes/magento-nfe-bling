<?php

class Lema21_Nfe_Model_Observer
{
	public function addMassAction($observer) {
		$block = $observer->getEvent()->getBlock();
		if ($block->getType() == 'adminhtml/widget_grid_massaction' && in_array($block->getRequest()->getControllerName(), array('sales_order', 'adminhtml_sales_order'))
		) {
			$block->addItem('nfe', array(
				'label' => 'Geração de Nf-e',
				'url' => $block->getUrl('nfe/adminhtml_nfe/sendMass'),
			));
		} elseif ($block->getType() == 'adminhtml/sales_order_view') {
			$block->addButton('call_to_send_nfe', array(
				'label' => Mage::helper('Sales')->__('Emitir NF-e'),
				'onclick' =>'setLocation('.$block->getUrl('nfe/adminhtml_nfe/send').')',
				'class' => 'scalable success',
			), 0, 100, 'header', 'header');
		}
	}
}
