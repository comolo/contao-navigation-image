<?php

/**
 * Contao Navigation Image
 *
 * @copyright 2016 MADE/YOUR/DAY <mail@madeyourday.co>
 * @copyright 2017 Comolo GmbH
 * @license MIT
 */


/**
 * Palettes
 */
foreach($GLOBALS['TL_DCA']['tl_page']['palettes'] as $name => $palette){
	if($name === '__selector__'){
		continue;
	}
	$GLOBALS['TL_DCA']['tl_page']['palettes'][$name] = str_replace('{meta_legend}', '{navigationImage_legend:hide},navigationImage;{meta_legend}', $palette);
}

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_page']['fields']['navigationImage'] = array(
	'label'     => &$GLOBALS['TL_LANG']['tl_page']['navigationImage'],
	'inputType' => 'fileTree',
	'exclude'   => true,
	'eval'      => array(
		'fieldType'  => 'radio',
		'files'      => true,
		'filesOnly'  => true,
		'extensions' => 'jpg,jpeg,gif,png'
	),
    'sql'       => 'binary(16) NULL',
);
