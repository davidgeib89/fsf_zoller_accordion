<?php
namespace FREESIXTYFIVE\FsfZollerAccordion\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author David Geib <d.geib@freesixtyfive.de>
 */
class AccordionControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \FREESIXTYFIVE\FsfZollerAccordion\Controller\AccordionController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\FREESIXTYFIVE\FsfZollerAccordion\Controller\AccordionController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllAccordionsFromRepositoryAndAssignsThemToView()
    {

        $allAccordions = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $accordionRepository = $this->getMockBuilder(\FREESIXTYFIVE\FsfZollerAccordion\Domain\Repository\AccordionRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $accordionRepository->expects(self::once())->method('findAll')->will(self::returnValue($allAccordions));
        $this->inject($this->subject, 'accordionRepository', $accordionRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('accordions', $allAccordions);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
