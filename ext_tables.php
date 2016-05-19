<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

/* Add default Static Typoscript */
TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Add multiple layout classes');

