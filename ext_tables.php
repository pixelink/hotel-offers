<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Pixelink.HotelOffers',
            'Offers',
            'Offers'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('hotel_offers', 'Configuration/TypoScript', 'Hotel offers');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_hoteloffers_domain_model_offer', 'EXT:hotel_offers/Resources/Private/Language/locallang_csh_tx_hoteloffers_domain_model_offer.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_hoteloffers_domain_model_offer');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_hoteloffers_domain_model_category', 'EXT:hotel_offers/Resources/Private/Language/locallang_csh_tx_hoteloffers_domain_model_category.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_hoteloffers_domain_model_category');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_hoteloffers_domain_model_offerrange', 'EXT:hotel_offers/Resources/Private/Language/locallang_csh_tx_hoteloffers_domain_model_offerrange.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_hoteloffers_domain_model_offerrange');

    }
);
