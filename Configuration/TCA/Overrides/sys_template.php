<?php
defined('TYPO3_MODE') || die();

/**
 * Prevents defining global variables
 */
call_user_func(function()
{
    /**
     * Default Static TypoScript for bhsiteconf
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'layoutmodified',
        'Configuration/TypoScript',
        'Add multiple layout classes'
    );
});