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
 * OfferRange
 */
class OfferRange extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * offerStart
     *
     * @var \DateTime
     */
    protected $offerStart = null;

    /**
     * offerEnd
     *
     * @var \DateTime
     */
    protected $offerEnd = null;

    /**
     * Returns the offerStart
     *
     * @return \DateTime $offerStart
     */
    public function getOfferStart()
    {
        return $this->offerStart;
    }

    /**
     * Sets the offerStart
     *
     * @param \DateTime $offerStart
     * @return void
     */
    public function setOfferStart(\DateTime $offerStart)
    {
        $this->offerStart = $offerStart;
    }

    /**
     * Returns the offerEnd
     *
     * @return \DateTime $offerEnd
     */
    public function getOfferEnd()
    {
        return $this->offerEnd;
    }

    /**
     * Sets the offerEnd
     *
     * @param \DateTime $offerEnd
     * @return void
     */
    public function setOfferEnd(\DateTime $offerEnd)
    {
        $this->offerEnd = $offerEnd;
    }
}
