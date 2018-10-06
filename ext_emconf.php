<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "Acme.LayoutModified".
 *
 * Auto generated 29-04-2016 10:06
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'tt_content.layout modified',
	'description' => 'This extension changes tt_content.layout into a multiselect that allows selection of multiple class that will render into fluid_styled_content elements as CSS classes',
	'category' => 'misc',
	'shy' => 0,
	'version' => '0.0.2',
	'dependencies' => 'cms,extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'experimental',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author' => 'Riccardo De Contardi',
	'author_email' => 'erredeco@gmail.com',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '8.7-9.5.99',
			'cms' => '',
			'extbase' => '',
			'fluid' => '',
            'fluid_styled_content' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:0:{}',
	'suggests' => array(
	),
);
