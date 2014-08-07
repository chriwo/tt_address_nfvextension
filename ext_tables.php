<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
$tempColumns = array (
	'tx_ttaddressnfvextension_color' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:tt_address_nfvextension/locallang_db.xml:tt_address.tx_ttaddressnfvextension_color',		
		'config' => array (
			'type' => 'text',	
			'cols' => '30',	
			'rows' => '3',	
			//'eval' => 'trim',
		)
	),
	'tx_ttaddressnfvextension_address2' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:tt_address_nfvextension/locallang_db.xml:tt_address.tx_ttaddressnfvextension_address2',		
		'config' => array (
			'type' => 'input',	
			'size' => '30',
		)
	),
	'tx_ttaddressnfvextension_zip2' => array (		
		'exclude' => 0,
		'label' => 'LLL:EXT:tt_address_nfvextension/locallang_db.xml:tt_address.tx_ttaddressnfvextension_zip2',		
		'config' => array (
			'type' => 'input',	
			'size' => '30',	
			'max' => '20',	
			'eval' => 'trim',
		)
	),
	'tx_ttaddressnfvextension_city2' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:tt_address_nfvextension/locallang_db.xml:tt_address.tx_ttaddressnfvextension_city2',		
		'config' => array (
			'type' => 'input',	
			'size' => '30',	
			'max' => '80',	
			'eval' => 'trim',
		)
	),
	'tx_ttaddressnfvextension_phone2' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:tt_address_nfvextension/locallang_db.xml:tt_address.tx_ttaddressnfvextension_phone2',		
		'config' => array (
			'type' => 'input',	
			'size' => '30',	
			'max' => '30',	
			'eval' => 'trim',
		)
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_address',$tempColumns,1);

$TCA['tt_address']['ctrl']['dividers2tabs'] = true;
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_address','--div--;Vereinsinfo,tx_ttaddressnfvextension_color;;;;1-1-1, tx_ttaddressnfvextension_address2, tx_ttaddressnfvextension_zip2, tx_ttaddressnfvextension_city2, tx_ttaddressnfvextension_phone2');

?>