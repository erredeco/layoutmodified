<?php
defined('TYPO3_MODE') or die();

$GLOBALS['TCA']['tt_content']['columns']['layout']['config']['renderType'] = 'selectCheckBox';
$GLOBALS['TCA']['tt_content']['columns']['layout']['config']['maxitems'] = 1000;
/*
$GLOBALS['TCA']['tt_content']['columns']['layout']['config']['items'] = array(
    array(
        'None',
        ''
    ),
    array(
        'Single top margin',
        'Formatting--margin-top-1 '
    ),
    array(
        'Double top margin',
        'Formatting--margin-top-2 '
    ),
    array(
        'Triple top margin',
        'Formatting--margin-top-3 '
    ),
    array(
        'Single bottom margin',
        'Formatting--margin-bottom-1 '
    ),
    array(
        'Double bottom margin',
        'Formatting--margin-bottom-2 '
    ),
    array(
        'Triple bottom margin',
        'Formatting--margin-bottom-3 '
    ),
); 

$GLOBALS['TCA']['tt_content']['columns']['layout']['config']['default'] = '';
*/