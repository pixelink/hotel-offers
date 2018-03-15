<?php
namespace Pixelink\HotelOffers\Domain\Model;

/***
 *
 * This file is part of the "Hotel offers" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Benjamin Riezler <b.riezler@pixel-ink.de>, Pixel Ink
 *
 ***/

/**
 * Offer
 */
class Offer extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * title
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * teaser
     *
     * @var string
     */
    protected $teaser = '';

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * services
     *
     * @var string
     */
    protected $services = '';

    /**
     * price
     *
     * @var float
     */
    protected $price = 0.0;

    /**
     * bookingRangeStart
     *
     * @var \DateTime
     */
    protected $bookingRangeStart = null;

    /**
     * bookingRangeEnd
     *
     * @var \DateTime
     */
    protected $bookingRangeEnd = null;

    /**
     * persons
     *
     * @var string
     */
    protected $persons = '';

    /**
     * linkBookingTool
     *
     * @var string
     */
    protected $linkBookingTool = '';

    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $image = null;

    /**
     * previewImage
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $previewImage = '';

    /**
     * category
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pixelink\HotelOffers\Domain\Model\Category>
     * @cascade remove
     */
    protected $category = null;

    /**
     * offerRange
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pixelink\HotelOffers\Domain\Model\OfferRange>
     * @cascade remove
     */
    protected $offerRange = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->category = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->offerRange = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the teaser
     *
     * @return string $teaser
     */
    public function getTeaser()
    {
        return $this->teaser;
    }

    /**
     * Sets the teaser
     *
     * @param string $teaser
     * @return void
     */
    public function setTeaser($teaser)
    {
        $this->teaser = $teaser;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the services
     *
     * @return string $services
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Sets the services
     *
     * @param string $services
     * @return void
     */
    public function setServices($services)
    {
        $this->services = $services;
    }

    /**
     * Returns the price
     *
     * @return float $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets the price
     *
     * @param float $price
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Returns the bookingRangeStart
     *
     * @return \DateTime $bookingRangeStart
     */
    public function getBookingRangeStart()
    {
        return $this->bookingRangeStart;
    }

    /**
     * Sets the bookingRangeStart
     *
     * @param \DateTime $bookingRangeStart
     * @return void
     */
    public function setBookingRangeStart(\DateTime $bookingRangeStart)
    {
        $this->bookingRangeStart = $bookingRangeStart;
    }

    /**
     * Returns the bookingRangeEnd
     *
     * @return \DateTime $bookingRangeEnd
     */
    public function getBookingRangeEnd()
    {
        return $this->bookingRangeEnd;
    }

    /**
     * Sets the bookingRangeEnd
     *
     * @param \DateTime $bookingRangeEnd
     * @return void
     */
    public function setBookingRangeEnd(\DateTime $bookingRangeEnd)
    {
        $this->bookingRangeEnd = $bookingRangeEnd;
    }

    /**
     * Returns the persons
     *
     * @return string $persons
     */
    public function getPersons()
    {
        return $this->persons;
    }

    /**
     * Sets the persons
     *
     * @param string $persons
     * @return void
     */
    public function setPersons($persons)
    {
        $this->persons = $persons;
    }

    /**
     * Returns the linkBookingTool
     *
     * @return string $linkBookingTool
     */
    public function getLinkBookingTool()
    {
        return $this->linkBookingTool;
    }

    /**
     * Sets the linkBookingTool
     *
     * @param string $linkBookingTool
     * @return void
     */
    public function setLinkBookingTool($linkBookingTool)
    {
        $this->linkBookingTool = $linkBookingTool;
    }

    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }

    /**
     * Adds a OfferRange
     *
     * @param \Pixelink\HotelOffers\Domain\Model\OfferRange $offerRange
     * @return void
     */
    public function addOfferRange(\Pixelink\HotelOffers\Domain\Model\OfferRange $offerRange)
    {
        $this->offerRange->attach($offerRange);
    }

    /**
     * Removes a OfferRange
     *
     * @param \Pixelink\HotelOffers\Domain\Model\OfferRange $offerRangeToRemove The OfferRange to be removed
     * @return void
     */
    public function removeOfferRange(\Pixelink\HotelOffers\Domain\Model\OfferRange $offerRangeToRemove)
    {
        $this->offerRange->detach($offerRangeToRemove);
    }

    /**
     * Returns the offerRange
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pixelink\HotelOffers\Domain\Model\OfferRange> $offerRange
     */
    public function getOfferRange()
    {
        return $this->offerRange;
    }

    /**
     * Sets the offerRange
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pixelink\HotelOffers\Domain\Model\OfferRange> $offerRange
     * @return void
     */
    public function setOfferRange(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $offerRange)
    {
        $this->offerRange = $offerRange;
    }

    /**
     * Returns the previewImage
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference previewImage
     */
    public function getPreviewImage()
    {
        return $this->previewImage;
    }

    /**
     * Sets the previewImage
     *
     * @param string $previewImage
     * @return void
     */
    public function setPreviewImage($previewImage)
    {
        $this->previewImage = $previewImage;
    }

    /**
     * Adds a Category
     *
     * @param \Pixelink\HotelOffers\Domain\Model\Category $category
     * @return void
     */
    public function addCategory(\Pixelink\HotelOffers\Domain\Model\Category $category)
    {
        $this->category->attach($category);
    }

    /**
     * Removes a Category
     *
     * @param \Pixelink\HotelOffers\Domain\Model\Category $categoryToRemove The Category to be removed
     * @return void
     */
    public function removeCategory(\Pixelink\HotelOffers\Domain\Model\Category $categoryToRemove)
    {
        $this->category->detach($categoryToRemove);
    }

    /**
     * Returns the category
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pixelink\HotelOffers\Domain\Model\Category> $category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets the category
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pixelink\HotelOffers\Domain\Model\Category> $category
     * @return void
     */
    public function setCategory(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $category)
    {
        $this->category = $category;
    }
}
