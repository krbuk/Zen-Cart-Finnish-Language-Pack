<?php
// Finnish translation v2.0.0 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
$define = [
    'NAVBAR_TITLE' => 'Luo tili',
    'HEADING_TITLE' => 'Oma tilitiedot',
    'TEXT_ORIGIN_LOGIN' => '<strong class="note">HUOMAUTUS:</strong> Jos sinulla on jo tili meillä, kirjaudu sisään osoitteessa <a href="%s">kirjaudu sisään</a>.',
    'ERROR_CREATE_ACCOUNT_SPAM_DETECTED' => 'Kiitos, tilisi pyyntösi on lähetetty tarkistettavaksi.',
    'EMAIL_SUBJECT' => 'Tervetuloa ' . STORE_NAME,
    'EMAIL_GREET_MR' => 'Hei. %s,' . "\n\n",
    'EMAIL_GREET_MS' => 'Hei. %s,' . "\n\n",
    'EMAIL_GREET_NONE' => 'Hei %s,' . "\n\n",
    'EMAIL_WELCOME' => 'Tervetuloa <strong>' . STORE_NAME . '</strong> verkkokaupan jäseneksi!.',
    'EMAIL_SEPARATOR' => '--------------------',
    'EMAIL_COUPON_INCENTIVE_HEADER' => 'Kiitos että loit verkkokauppaamme henkilökohtaisen käyttäjätilin! Kiitokseksi olemme luoneet sinulle alennuskupongin jota voit käyttää tehdessäsi ostoksia verkkokaupassamme. Alla näet kupongin tiedot.' . "\n\n",
    'EMAIL_COUPON_REDEEM' => 'Käyttääksesi alennuskuponkia, kirjoita ' . TEXT_GV_REDEEM . ' <strong>%s</strong> ollessasi kassalla' . "\n\n",
    'EMAIL_GV_INCENTIVE_HEADER' => 'Koska poikkesit verkkokaupassamme, annamme sinulle %s arvoisen ' . TEXT_GV_NAME . ' in!' . "\n",
    'EMAIL_GV_REDEEM' => '' . TEXT_GV_NAME . 'in ' . TEXT_GV_REDEEM . ' on: %s ' . "\n\n" . 'Voit käyttää ' . TEXT_GV_REDEEM . ' maksaessasi verkkokauppa kassalla. ',
    'EMAIL_GV_LINK' => ' Tai voit lunastaa sen nyt seuraamalla linkkiä: ' . "\n",
    'EMAIL_GV_LINK_OTHER' => 'Kun olet lisännyt ' . TEXT_GV_NAME . ' in tunnuksellesi, voit käyttää ' . TEXT_GV_NAME . ' tia itse tai lähettää sen ystävälle!' . "\n\n",
    'EMAIL_TEXT' => 'Sinulla on nyt tili ' . STORE_NAME . ' verkkokauppaamme henkilökohtaisen käyttäjätilin!' . "\n\n<ul>" . '<li><strong>Tilaushistoria</strong> - Näytä tilaustiedot.</li>' . "\n\n" . '<li><strong>Pysyvä ostoskori</strong> - Ostoskoriin lisäämäsi tuotteet pysyvät siellä, kunnes ne poistetaan tai ostetaan.</li>' . "\n\n" . '<li><strong>Osoitekirja</strong> - Määritä lisää osoitteita (esimerkiksi lahjan lähettämiseksi).</li>' . "\n\n" . '<li><strong>Tuotearvostelut</strong> - Jaa mielipiteesi tuotteistamme muiden asiakkaiden kanssa.</li>' . "\n\n</ul>",
    'EMAIL_CONTACT' => 'Jos tarvitset apua minkä tahansa verkkokauppapalvelumme suhteen, lähetä sähköpostia myymälän omistajalle: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">' . STORE_OWNER_EMAIL_ADDRESS . "</a>\n\n",
    'EMAIL_GV_CLOSURE' => "\n" . 'Terveisin,' . "\n\n" . STORE_OWNER . "\nVerkkokaupan omistaja\n\n" . '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">' . HTTP_SERVER . DIR_WS_CATALOG . "</a>\n\n",
    'EMAIL_DISCLAIMER_NEW_CUSTOMER' => 'Tämän sähköpostiosoitteen annoit meille sinä tai joku asiakkaistamme. Jos et rekisteröinyt tiliä tai uskot saavasi tämän sähköpostin vahingossa, lähetä sähköposti osoitteeseen %s ',
];

return $define;
