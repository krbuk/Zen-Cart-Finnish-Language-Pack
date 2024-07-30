<?php
// Finnish translation v2.0.0 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
$define = [
    'MODULE_PAYMENT_MONEYORDER_TEXT_TITLE' => 'Käteistilaus',
    'MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION' => 'Asiakkaat voivat lähettää maksunsa postitse. Heidän tilausvahvistussähköpostinsa pyytää heitä tekemään niin: <br><br>Tee sekkisi tai maksumääräys maksettavaksi osoitteeseen:<br>' . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '<br>(your store name)') . '<br><br>Lähetä maksusi osoitteeseen:<br>' . nl2br(STORE_NAME_ADDRESS) . '<br><br>' . 'Tilaustasi ei lähetetä ennen kuin olemme vastaanottaneet maksun.',
];
if (defined('MODULE_PAYMENT_MONEYORDER_STATUS')) {
    $define['MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER'] = 'Tee sekkisi tai maksumääräys maksettavaksi osoitteeseen:' . "\n\n" . MODULE_PAYMENT_MONEYORDER_PAYTO . "\n\n" . 'Lähetä maksusi osoitteeseen:' . "\n" . STORE_NAME_ADDRESS . "\n\n" . 'Tilaustasi ei lähetetä ennen kuin olemme vastaanottaneet maksun.';
}

return $define;
