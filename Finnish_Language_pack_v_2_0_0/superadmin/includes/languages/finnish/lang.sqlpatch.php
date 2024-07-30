<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: torvista 2022 Feb 26 New in v1.5.8-alpha $
 * Finnish translation v2.0.0 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
*/

$define = [
    'HEADING_TITLE' => 'Suorita SQL kysely',
    'HEADING_INFO' => 'SQL-kyselyn suorittaja avulla voit suorittaa SQL-kyselyjä suoraan tietokannassa liittämällä komentosarjan tekstialueelle tai lataamalla komentosarjan sisältävän tekstitiedoston. Se on tarkoitettu laajennuksia-kenttien ja omien korjausten/lisäysten manuaaliseen asentamiseen.',
    'HEADING_WARNING_INSTALLSCRIPTS' => 'Tämän työkalun pitäisi <b>EI</b> käyttää Zen Cart -tietokannan päivityskomentosarjojen suorittamiseen: käytä Zen Cart -asennusohjelmaa ohjeiden mukaisesti.',
    'HEADING_WARNING' => '<p>ENNEN KUIN suoritat MITÄÄN tietokantatoimintoa tällä työkalulla, varmista, että sinulla on VAHVISTETTU varmuuskopio tietokannastasi ja osaat palauttaa sen.<br>Jos asennat kolmannen osapuolen muutoksia/laajennuksia, huomaa, että teet sen omalla vastuullasi. Zen Cart&reg; ei takaa kolmansien osapuolten toimittamien skriptien turvallisuutta.</p><p>Testaa aina jokainen skripti DEVELOPMENT-palvelimella ennen käyttöä live-kaupassasi!</p>',
    'TEXT_QUERY_RESULTS' => 'Kyselyn tulos:',
    'TEXT_ENTER_QUERY_STRING' => 'Syötä kysely<br>to be executed:&nbsp;&nbsp;<br><br>Varmista että<br>lopussa on ";"',
    'TEXT_QUERY_FILENAME' => 'Tuo tiedostosta:',
    'ERROR_NOTHING_TO_DO' => 'Virhe: Ei toimitoa - ei kyselyä tai kysely-tiedostoa määriteltynä.',
    'SQLPATCH_HELP_TEXT' => 'SQL-kyselyn suorittajan avulla voit suorittaa SQL-kyselyitä suoraan liittämällä komentosarjan tekstialueelle tai lataamalla komentosarjan sisältävän tekstitiedoston.',
    'REASON_TABLE_ALREADY_EXISTS' => 'Taulua %s ei voida luoda, koska sen niminen taulu on jo olemassa.',
    'REASON_TABLE_DOESNT_EXIST' => 'Taulua %s ei voida pudottaa, koska sen nimistä taulua ei ole olemassa.',
    'REASON_TABLE_NOT_FOUND' => 'Ei voida suorittaa, koska taulua %s ei löydy.',
    'REASON_CONFIG_KEY_ALREADY_EXISTS' => 'Ei voitu lisätä configuration_key "%s" koska se on jo olemassa.',
    'REASON_COLUMN_ALREADY_EXISTS' => 'Saraketta %s ei voitu lisätä, koska se on jo olemassa.',
    'REASON_COLUMN_DOESNT_EXIST_TO_DROP' => 'Saraketta %s ei voida pudottaa, koska sitä ei löydy.',
    'REASON_COLUMN_DOESNT_EXIST_TO_CHANGE' => 'Saraketta %s ei voida muuttaa, koska sitä ei löydy.',
    'REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS' => 'prod-type-layout configuration_key "%s" ei voida lisätä, koska se on jo olemassa.',
    'REASON_INDEX_DOESNT_EXIST_TO_DROP' => 'Indeksiä %s taulussa %s ei voida pudottaa, koska sitä ei löydy.',
    'REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP' => 'Primary key:tä taulussa %s ei voida pudottaa, koska sitä ei löydy.',
    'REASON_INDEX_ALREADY_EXISTS' => 'Indeksiä %s tauluun %s ei voida lisätä, koska se on jo olemassa.',
    'REASON_PRIMARY_KEY_ALREADY_EXISTS' => 'Primary key:tä tauluun %s ei voida lisätä, koska se on jo olemassa.',
    'REASON_NO_PRIVILEGES' => 'Käyttäjällä ' . DB_SERVER_USERNAME . '@' . DB_SERVER . ' ei ole %s oikeuksia tietokantaan ' . DB_DATABASE . '.',
    'ERROR_RENAME_TABLE' => 'RENAME TABLE SQLpatch-työkalu ei tue komentoa. Käytä phpMyAdmin ohjelma.',
    'ERROR_LINE_INCOMPLETE' => 'Kysely epätäydellinen: puuttuu sulkupiste.',
    'TEXT_EXECUTE_SUCCESS' => 'Onnistuminen: %u käsite (t) käsitelty.',
    'ERROR_EXECUTE_FAILED' => 'Kysely epäonnistui: %u käsite (t) käsitelty.',
    'ERROR_EXECUTE_IGNORED' => 'Huomautus: %u lausunnot ohitetaan. Katso lisätietoja tietokantataulukosta "upgrade_exceptions".',
    'TEXT_UPLOADQUERY_SUCCESS' => 'Onnistuminen: %u tiedosto (t) käsitelty tiedostojen lataamisen kautta',
    'ERROR_UPLOADQUERY_FAILED' => 'Kysely epäonnistui: %u tiedosto (t) käsitelty tiedostojen lataamisen kautta',
    'ERROR_UPLOADQUERY_IGNORED' => 'Huomautus: %u lausunnot ohitettiin tiedostojen lataamisen kautta. Katso lisätietoja tietokantataulukosta "upgrade_exceptions".',
];

return $define;
