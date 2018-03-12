<?php
namespace Pixelink\HotelOffers\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Benjamin Riezler <b.riezler@pixel-ink.de>
 */
class OfferControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Pixelink\HotelOffers\Controller\OfferController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Pixelink\HotelOffers\Controller\OfferController::class)
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
    public function listActionFetchesAllOffersFromRepositoryAndAssignsThemToView()
    {

        $allOffers = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $offerRepository = $this->getMockBuilder(\Pixelink\HotelOffers\Domain\Repository\OfferRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $offerRepository->expects(self::once())->method('findAll')->will(self::returnValue($allOffers));
        $this->inject($this->subject, 'offerRepository', $offerRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('offers', $allOffers);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenOfferToView()
    {
        $offer = new \Pixelink\HotelOffers\Domain\Model\Offer();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('offer', $offer);

        $this->subject->showAction($offer);
    }
}
