<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {
    // Add the FlexForm
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['fsfzolleraccordion_zolleraccordion'] = 'recursive,select_key,pages';
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['fsfzolleraccordion_zolleraccordion'] = 'pi_flexform';
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        'fsfzolleraccordion_zolleraccordion',
        'FILE:EXT:fsf_zoller_accordion/Configuration/FlexForms/flexform.xml'
    );
});
