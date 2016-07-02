<?php

$attributeGroup = 'Nf-e Bling';

$attributes = array(
    'codigo_origem' => array(
        'group'			            => $attributeGroup,
        'input'			            => 'text',
        'type'			            => Varien_Db_Ddl_Table::TYPE_TEXT,
        'label'			            => 'Origem',
        'visible'		            => true,
        'required'		            => false,
        'user_defined'		        => true,
        'searchable'		        => false,
        'filterable'		        => false,
        'comparable'		        => false,
        'visible_on_front'	        => false,
        'visible_in_advanced_search'    => false,
        'is_html_allowed_on_front'      => false,
        'used_for_promo_rules'	        => false,
        'global'		                => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
        'apply_to'		                => 'simple,grouped,configurable,bundle'
    ),
    'operation_name' => array(
        'group'			            => $attributeGroup,
        'input'			            => 'text',
        'type'			            => Varien_Db_Ddl_Table::TYPE_TEXT,
        'label'			            => 'Descriçao',
        'visible'		            => true,
        'required'		            => false,
        'user_defined'		        => true,
        'searchable'		        => false,
        'filterable'		        => false,
        'comparable'		        => false,
        'visible_on_front'	        => false,
        'visible_in_advanced_search'    => false,
        'is_html_allowed_on_front'      => false,
        'used_for_promo_rules'	        => false,
        'global'		                => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
        'apply_to'		                => 'simple,grouped,configurable,bundle'
    ),
    'operation_unit' => array(
        'group'			            => $attributeGroup,
        'input'			            => 'select',
        'type'			            => Varien_Db_Ddl_Table::TYPE_VARCHAR,
        'note'                      => 'ex. se é "PÇ", "KG"',
        'label'			            => 'Unidade',
        'backend'                   => 'eav/entity_attribute_backend_array',
        'visible'		            => true,
        'required'		            => false,
        'user_defined'		        => true,
        'searchable'		        => false,
        'filterable'		        => false,
        'comparable'		        => false,
        'visible_on_front'	        => false,
        'visible_in_advanced_search'    => false,
        'is_html_allowed_on_front'      => false,
        'used_for_promo_rules'	        => false,
        'global'		                => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
        'apply_to'		                => 'simple,grouped,configurable,bundle',
        'option'                        => array('values' => array (0 => 'PC', 1 => 'KG', 2 => 'UN'))
    ),
    'codigo_ncm' => array(
        'group'			            => $attributeGroup,
        'input'			            => 'text',
        'type'			            => Varien_Db_Ddl_Table::TYPE_TEXT,
        'label'			            => 'NCM',
        'visible'		            => true,
        'required'		            => false,
        'user_defined'		        => true,
        'searchable'		        => false,
        'filterable'		        => false,
        'comparable'		        => false,
        'visible_on_front'	        => false,
        'visible_in_advanced_search'    => false,
        'is_html_allowed_on_front'      => false,
        'used_for_promo_rules'	        => false,
        'global'		                => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
        'apply_to'		                => 'simple,grouped,configurable,bundle'
    )
);


/* @var $installer Mage_Catalog_Model_Resource_Setup */
$installer = new Mage_Catalog_Model_Resource_Setup('core_setup');
$installer->startSetup();

foreach($installer->getAllAttributeSetIds(Mage_Catalog_Model_Product::ENTITY) as $attributeSet) {
    $installer->addAttributeGroup(Mage_Catalog_Model_Product::ENTITY, $attributeSet, $attributeGroup, 1000);
}

foreach($attributes as $attributeCode => $options) {
    $installer->addAttribute(Mage_Catalog_Model_Product::ENTITY, $attributeCode, $options);
}

$installer->endSetup();
