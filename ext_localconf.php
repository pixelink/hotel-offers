<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Pixelink.HotelOffers',
            'Offers',
            [
                'Offer' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Offer' => 'list, show'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    offers {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('hotel_offers') . 'Resources/Public/Icons/user_plugin_offers.svg
                        title = LLL:EXT:hotel_offers/Resources/Private/Language/locallang_db.xlf:tx_hotel_offers_domain_model_offers
                        description = LLL:EXT:hotel_offers/Resources/Private/Language/locallang_db.xlf:tx_hotel_offers_domain_model_offers.description
                        tt_content_defValues {
                            CType = list
                            list_type = hoteloffers_offers
                        }
                    }
                }
                show = *
            }
       }'
    );
    }
);
