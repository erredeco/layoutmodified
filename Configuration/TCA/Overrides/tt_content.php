<?php
defined('TYPO3_MODE') or die();

$GLOBALS['TCA']['tt_content']['columns']['layout']['config']['renderType'] = 'selectMultipleSideBySide';
$GLOBALS['TCA']['tt_content']['columns']['layout']['config']['maxitems'] = 50;




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


*/
$GLOBALS['TCA']['tt_content']['columns']['layout']['config']['default'] = '';

/*
    Override the basic palette for the layout section!
    
*/
    
$GLOBALS['TCA']['tt_content']['palettes']['frames'] = [
    'showitem' => '
        layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout_formlabel,--linebreak--,
        frame_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class_formlabel,
        space_before_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_before_class_formlabel,
        space_after_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_after_class_formlabel,
    ',
];

