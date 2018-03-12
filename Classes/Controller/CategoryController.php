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
 * CategoryController
 */
class CategoryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $categories = $this->categoryRepository->findAll();
        $this->view->assign('categories', $categories);
    }

    /**
     * action show
     *
     * @param \Pixelink\HotelOffers\Domain\Model\Category $category
     * @return void
     */
    public function showAction(\Pixelink\HotelOffers\Domain\Model\Category $category)
    {
        $this->view->assign('category', $category);
    }
}
