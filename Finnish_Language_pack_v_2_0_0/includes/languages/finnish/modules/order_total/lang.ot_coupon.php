<?php
// Finnish translation v2.0.0 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
$define = [
    'MODULE_ORDER_TOTAL_COUPON_TITLE' => 'Alennuskupongit',
    'MODULE_ORDER_TOTAL_COUPON_HEADER' => TEXT_GV_NAMES . '/Alennuskuponki',
    'MODULE_ORDER_TOTAL_COUPON_DESCRIPTION' => 'Alennuskuponki',
    'MODULE_ORDER_TOTAL_COUPON_TEXT_ENTER_CODE' => TEXT_GV_REDEEM,
    'MODULE_ORDER_TOTAL_COUPON_REDEEM_INSTRUCTIONS' => '<p>Kirjoita kuponkisi koodi kenttään. Kupongin arvo vähennetään tilauksestasi kun painat "seuraava"</p><p>Huom! voit käyttää vain yhden koodin per tilaus.</p>',
    'MODULE_ORDER_TOTAL_COUPON_TEXT_CURRENT_CODE' => 'Tämän hetkinen hyvitys koodi: ',
    'TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER' => 'POISTA',
    'TEXT_REMOVE_REDEEM_COUPON' => 'Alennuskuponki poistettu!',
    'MODULE_ORDER_TOTAL_COUPON_INCLUDE_ERROR' => ' Asetuksessa Include tax = true, pitäisi tapahtua ainoastaan silloin, kun recalculate = None',
];

$define['MODULE_ORDER_TOTAL_COUPON_REMOVE_INSTRUCTIONS'] = '<p>Poistaaksesi kupongin tilauksesta, kirjoita kenttään REMOVE ja paina enter: ' . $define['TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER'] . '</p>';

return $define;
