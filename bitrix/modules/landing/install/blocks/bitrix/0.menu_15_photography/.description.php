<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
		'name' => Loc::getMessage('LANDING_BLOCK_0.MENU_1_NAME_NEW'),
		'section' => 'menu',
		'subtype' => 'menu',
		'subtype_params' => array(
			'selector' => '.landing-block-node-menu-list-item-link',
			'count' => 5,
			'source' => 'catalog'
		),
		'version' => '18.4.0',
	),
	'cards' => array(
		'.landing-block-node-card-menu-contact' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_0.MENU_1_NODES_LANDINGBLOCKNODEMENU_CARD_CONTACT'),
			'label' => array('.landing-block-node-menu-contact-title'),
			'presets' => include __DIR__ . '/presets.php',
		),
		'.landing-block-node-menu-list-item' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_0.MENU_1_NODES_LANDINGBLOCKNODEMENULISTITEMLINK'),
			'label' => array('.landing-block-node-menu-list-item-link'),
		),
	),
	'nodes' => array(
		'.landing-block-node-menu-contact-title' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_0.MENU_1_NODES_LANDINGBLOCKNODEMENUCONTACTTITLE_NEW'),
			'type' => 'text',
		),
		'.landing-block-node-menu-contact-link' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_MENU_15_NODE_MENUCONTACTLINK'),
			'type' => 'link',
		),
		'.landing-block-node-menu-contact-text' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_0.MENU_1_NODES_LANDINGBLOCKNODEMENUCONTACT_TEXT'),
			'type' => 'text',
		),
		//todo: social
		//			'.landing-block-node-menu-list-social' =>
		//				array(
		//					'name' => Loc::getMessage('LANDING_BLOCK_0.MENU_1_NODES_LANDINGBLOCKNODEMENULISTSOCIAL'),
		//					'type' => 'ul',
		//				),
		//			'.landing-block-node-menu-social-list-item-link' =>
		//				array(
		//					'name' => Loc::getMessage('LANDING_BLOCK_0.MENU_1_NODES_LANDINGBLOCKNODEMENUSOCIALLISTITEMLINK'),
		//					'type' => 'link',
		//				),
		//			'.landing-block-node-menu-social-list-item-img' =>
		//				array(
		//					'name' => Loc::getMessage('LANDING_BLOCK_0.MENU_1_NODES_LANDINGBLOCKNODEMENUSOCIALLISTITEMIMG'),
		//					'type' => 'img',
		//				),
		'.landing-block-node-menu-list-item-link' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_0.MENU_1_NODES_LANDINGBLOCKNODEMENULISTITEMLINK'),
			'type' => 'link',
		),
		'.landing-block-node-menu-logo-link' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_0.MENU_1_NODES_LANDINGBLOCKNODEMENULOGOLINK'),
			'type' => 'link',
			'group' => 'logo',
		),
		'.landing-block-node-menu-logo' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_0.MENU_1_NODES_LANDINGBLOCKNODEMENULOGO'),
			'type' => 'img',
			'group' => 'logo',
			'dimensions' => array('width' => 180, 'height' => 60),
		),
	),
	'style' => array(
		'block' => array(
			'type' => array('display'),
		),
		'nodes' => array(
			'.landing-block-node-top-block' => array(
				'name' => Loc::getMessage('LANDING_BLOCK_0.MENU_1_STYLE_LANDINGBLOCKNODE_TOP_BLOCK'),
				'type' => array('background-color', 'background-gradient'),
			),
			'.landing-block-node-bottom-block' => array(
				'name' => Loc::getMessage('LANDING_BLOCK_0.MENU_1_STYLE_LANDINGBLOCKNODE_BOTTOM_BLOCK'),
				'type' => array('background-color', 'background-gradient'),
			),
			'.landing-block-node-menu-contact-title' => array(
				'name' => Loc::getMessage('LANDING_BLOCK_0.MENU_1_NODES_LANDINGBLOCKNODEMENUCONTACTTITLE_NEW'),
				'type' => 'typo',
			),
			'.landing-block-node-menu-contact-link' => array(
				'name' => Loc::getMessage('LANDING_BLOCK_MENU_15_NODE_MENUCONTACTLINK'),
				'type' => 'link',
			),
			'.landing-block-node-menu-contact-text' => array(
				'name' => Loc::getMessage('LANDING_BLOCK_0.MENU_1_NODES_LANDINGBLOCKNODEMENUCONTACT_TEXT'),
				'type' => 'typo',
			),
			//			'.landing-block-node-menu-social-list-item' =>
			//				array(
			//					'name' => Loc::getMessage('LANDING_BLOCK_0.MENU_1_STYLE_LANDINGBLOCKNODEMENUSOCIALLISTITEM'),
			//					'type' => 'box',
			//				),
			'.landing-block-node-menu-list-item-link' => array(
				'name' => Loc::getMessage('LANDING_BLOCK_0.MENU_1_STYLE_LANDINGBLOCKNODEMENULISTITEMLINK'),
				'type' => ['typo-simple']
			),
			'.navbar' => array(
				'name' => Loc::getMessage('LANDING_BLOCK_0.MENU_1_STYLE_LANDINGBLOCKNODEMENULIST'),
				'type' => ['navbar'],
			),
		),
	),
	'assets' => array(
		'ext' => array('landing_menu'),
	),
	'groups' => array(
		'logo' => Loc::getMessage('LANDING_BLOCK_0.MENU_1_NODES_LANDINGBLOCKNODEMENULOGO'),
	),


);