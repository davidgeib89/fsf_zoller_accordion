<?php
namespace FREESIXTYFIVE\FsfZollerAccordion\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author David Geib <d.geib@freesixtyfive.de>
 */
class AccordionTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \FREESIXTYFIVE\FsfZollerAccordion\Domain\Model\Accordion
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \FREESIXTYFIVE\FsfZollerAccordion\Domain\Model\Accordion();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty()
    {
        self::markTestIncomplete();
    }
}
