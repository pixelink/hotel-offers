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

        //$categories = $this->offerRepository->findAllCategories();
        //$category = $this->offerRepository->findCategoryById($this->request->getArgument('category'));

        $offers = $this->offerRepository->findAll();
        //$offers = $this->offerRepository->findByCategory($this->request->getArgument('category'));
        $this->view->assign('offers', $offers);
        //$this->view->assign('categories', $categories);
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
