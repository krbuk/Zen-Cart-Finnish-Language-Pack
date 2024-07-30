<?php
// Finnish translation v2.0.0 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
$define = [
    'NAVBAR_TITLE' => 'Istunto aikakatkaistu',
    'HEADING_TITLE' => 'Hups! Istuntosi on vanhentunut.',
    'HEADING_TITLE_LOGGED_IN' => 'Hups! Anteeksi, mutta et saa suorittaa pyydettyä toimintoa. ',
    'TEXT_INFORMATION' => '<p>Jos teet tilauksen, kirjaudu sisään ja ostoskorisi palautetaan. Tämän jälkeen voit palata kassalle ja suorittaa lopulliset ostoksesi.</p><p>Jos olet suorittanut tilauksen ja haluat tarkistaa sen' . (DOWNLOAD_ENABLED == 'true' ? ', tai jos haluat ladata ostamiasi tiedostoja' : '') . ', mene <a href="' . zen_href_link(FILENAME_ACCOUNT) . '">oma tili</a> sivulle.</p>',
    'TEXT_INFORMATION_LOGGED_IN' => 'Olet edelleen kirjautuneena tilillesi ja voit jatkaa ostoksia. Valitse kohde valikosta.',
    'HEADING_RETURNING_CUSTOMER' => 'Kirjaudu sisään',
];

return $define;
