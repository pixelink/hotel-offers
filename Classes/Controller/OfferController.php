<?php
namespace Pixelink\HotelOffers\Controller;

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
 * OfferController
 */
class OfferController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * offerRepository
     *
     * @var \Pixelink\HotelOffers\Domain\Repository\OfferRepository
     * @inject
     */
    protected $offerRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $offers = $this->offerRepository->findAll();
        $this->view->assign('offers', $offers);
    }

    /**
     * action show
     *
     * @param \Pixelink\HotelOffers\Domain\Model\Offer $offer
     * @return void
     */
    public function showAction(\Pixelink\HotelOffers\Domain\Model\Offer $offer)
    {
        $this->view->assign('offer', $offer);
    }
}
