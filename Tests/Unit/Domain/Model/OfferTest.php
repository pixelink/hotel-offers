<?php
namespace Pixelink\HotelOffers\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Benjamin Riezler <b.riezler@pixel-ink.de>
 */
class OfferTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Pixelink\HotelOffers\Domain\Model\Offer
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Pixelink\HotelOffers\Domain\Model\Offer();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTeaserReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTeaser()
        );
    }

    /**
     * @test
     */
    public function setTeaserForStringSetsTeaser()
    {
        $this->subject->setTeaser('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'teaser',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getServicesReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getServices()
        );
    }

    /**
     * @test
     */
    public function setServicesForStringSetsServices()
    {
        $this->subject->setServices('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'services',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPriceReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getPrice()
        );
    }

    /**
     * @test
     */
    public function setPriceForFloatSetsPrice()
    {
        $this->subject->setPrice(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'price',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getBookingRangeStartReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getBookingRangeStart()
        );
    }

    /**
     * @test
     */
    public function setBookingRangeStartForDateTimeSetsBookingRangeStart()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setBookingRangeStart($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'bookingRangeStart',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBookingRangeEndReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getBookingRangeEnd()
        );
    }

    /**
     * @test
     */
    public function setBookingRangeEndForDateTimeSetsBookingRangeEnd()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setBookingRangeEnd($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'bookingRangeEnd',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPersonsReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPersons()
        );
    }

    /**
     * @test
     */
    public function setPersonsForStringSetsPersons()
    {
        $this->subject->setPersons('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'persons',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLinkBookingToolReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLinkBookingTool()
        );
    }

    /**
     * @test
     */
    public function setLinkBookingToolForStringSetsLinkBookingTool()
    {
        $this->subject->setLinkBookingTool('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'linkBookingTool',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getImageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getImage()
        );
    }

    /**
     * @test
     */
    public function setImageForFileReferenceSetsImage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setImage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'image',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPreviewImageReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPreviewImage()
        );
    }

    /**
     * @test
     */
    public function setPreviewImageForStringSetsPreviewImage()
    {
        $this->subject->setPreviewImage('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'previewImage',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCategoryReturnsInitialValueForCategory()
    {
        self::assertEquals(
            null,
            $this->subject->getCategory()
        );
    }

    /**
     * @test
     */
    public function setCategoryForCategorySetsCategory()
    {
        $categoryFixture = new \Pixelink\HotelOffers\Domain\Model\Category();
        $this->subject->setCategory($categoryFixture);

        self::assertAttributeEquals(
            $categoryFixture,
            'category',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOfferRangeReturnsInitialValueForOfferRange()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getOfferRange()
        );
    }

    /**
     * @test
     */
    public function setOfferRangeForObjectStorageContainingOfferRangeSetsOfferRange()
    {
        $offerRange = new \Pixelink\HotelOffers\Domain\Model\OfferRange();
        $objectStorageHoldingExactlyOneOfferRange = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneOfferRange->attach($offerRange);
        $this->subject->setOfferRange($objectStorageHoldingExactlyOneOfferRange);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneOfferRange,
            'offerRange',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addOfferRangeToObjectStorageHoldingOfferRange()
    {
        $offerRange = new \Pixelink\HotelOffers\Domain\Model\OfferRange();
        $offerRangeObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $offerRangeObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($offerRange));
        $this->inject($this->subject, 'offerRange', $offerRangeObjectStorageMock);

        $this->subject->addOfferRange($offerRange);
    }

    /**
     * @test
     */
    public function removeOfferRangeFromObjectStorageHoldingOfferRange()
    {
        $offerRange = new \Pixelink\HotelOffers\Domain\Model\OfferRange();
        $offerRangeObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $offerRangeObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($offerRange));
        $this->inject($this->subject, 'offerRange', $offerRangeObjectStorageMock);

        $this->subject->removeOfferRange($offerRange);
    }
}
