<?php

namespace Pixelink\HotelOffers\Domain\Repository;

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
 * The repository for Offers
 */

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Database\Query\QueryBuilder;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class OfferRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * @var array
     */
    protected $defaultOrderings = [
        'sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
    ];


    /**
     *
     * @return
     */
    public function findAllCategories()
    {

        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('tx_hoteloffers_domain_model_category');
        $rows = $queryBuilder
            ->select('uid','title')
            ->from('tx_hoteloffers_domain_model_category')
            ->execute()
            ->fetchAll();

        return $rows;

    }


    /**
     *
     * @param array $category of offer
     * @return array
     */
    public function findByCategory($category)
    {

        $query = $this->createQuery();

        $query->matching(
            $query->contains('categories', $category->getUid())
        );
        $query->setOrderings(array('sorting' => 'ASC'));
        $offerArray = $query->execute()->toArray();

        return $offerArray;
    }


    /**
     * @param integer $id
     * @return array|\Pixelink\HotelOffers\Domain\Model\Category
     */
    public function findCategoryById($id){
        $query = $this->findAll()->toArray();

        $thisCategories = array();
        foreach($query as $offer){
            \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($offer);
            $categories = $offer->getCategory();
            /** @var \Pixelink\HotelOffers\Domain\Model\Category $category */
            foreach($categories as $category){
                if($category->getUid() == $id){
                    $thisCategories = $category;
                }
            }
        }

        return $thisCategories;
    }
}
