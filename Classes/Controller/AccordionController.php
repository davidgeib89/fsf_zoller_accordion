<?php
namespace FREESIXTYFIVE\FsfZollerAccordion\Controller;


/***
 *
 * This file is part of the "Zoller Akkordeon" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 David Geib <d.geib@freesixtyfive.de>, FREESIXTYFIVE
 *
 ***/
/**
 * AccordionController
 */
class AccordionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * accordionRepository
     * 
     * @var \FREESIXTYFIVE\FsfZollerAccordion\Domain\Repository\AccordionRepository
     */
    protected $accordionRepository = null;

    /**
     * @param \FREESIXTYFIVE\FsfZollerAccordion\Domain\Repository\AccordionRepository $accordionRepository
     */
    public function injectAccordionRepository(\FREESIXTYFIVE\FsfZollerAccordion\Domain\Repository\AccordionRepository $accordionRepository)
    {
        $this->accordionRepository = $accordionRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $accordions = $this->accordionRepository->findAll();
        $this->view->assign('accordions', $accordions);
    }
}
