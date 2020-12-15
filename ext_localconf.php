<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'FREESIXTYFIVE.FsfZollerAccordion',
            'Zolleraccordion',
            [
                'Accordion' => 'list'
            ],
            // non-cacheable actions
            [
                'Accordion' => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        zolleraccordion {
                            iconIdentifier = fsf_zoller_accordion-plugin-zolleraccordion
                            title = LLL:EXT:fsf_zoller_accordion/Resources/Private/Language/locallang_db.xlf:tx_fsf_zoller_accordion_zolleraccordion.name
                            description = LLL:EXT:fsf_zoller_accordion/Resources/Private/Language/locallang_db.xlf:tx_fsf_zoller_accordion_zolleraccordion.description
                            tt_content_defValues {
                                CType = list
                                list_type = fsfzolleraccordion_zolleraccordion
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'fsf_zoller_accordion-plugin-zolleraccordion',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:fsf_zoller_accordion/Resources/Public/Icons/user_plugin_zolleraccordion.svg']
			);
		
    }
);
