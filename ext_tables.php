<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'FREESIXTYFIVE.FsfZollerAccordion',
            'Zolleraccordion',
            'Zoller Akkordeon '
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('fsf_zoller_accordion', 'Configuration/TypoScript', 'Zoller Akkordeon');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_fsfzolleraccordion_domain_model_accordion', 'EXT:fsf_zoller_accordion/Resources/Private/Language/locallang_csh_tx_fsfzolleraccordion_domain_model_accordion.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_fsfzolleraccordion_domain_model_accordion');

    }
);
