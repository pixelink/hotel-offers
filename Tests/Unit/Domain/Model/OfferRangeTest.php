<?php
namespace Pixelink\HotelOffers\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Benjamin Riezler <b.riezler@pixel-ink.de>
 */
class OfferRangeTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Pixelink\HotelOffers\Domain\Model\OfferRange
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Pixelink\HotelOffers\Domain\Model\OfferRange();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getOfferStartReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getOfferStart()
        );
    }

    /**
     * @test
     */
    public function setOfferStartForDateTimeSetsOfferStart()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setOfferStart($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'offerStart',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOfferEndReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getOfferEnd()
        );
    }

    /**
     * @test
     */
    public function setOfferEndForDateTimeSetsOfferEnd()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setOfferEnd($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'offerEnd',
            $this->subject
        );
    }
}
