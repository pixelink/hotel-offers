
plugin.tx_hoteloffers_offers {
    view {
        # cat=plugin.tx_hoteloffers_offers/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:hotel_offers/Resources/Private/Templates/
        # cat=plugin.tx_hoteloffers_offers/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:hotel_offers/Resources/Private/Partials/
        # cat=plugin.tx_hoteloffers_offers/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:hotel_offers/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_hoteloffers_offers//a; type=string; label=Default storage PID
        storagePid =
    }
}
