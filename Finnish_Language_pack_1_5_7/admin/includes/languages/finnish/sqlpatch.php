<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Steve 2020 Apr 16 Modified in v1.5.7 $
 */
// Finnish translation Ver. 1.5.7 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi> 
  define('HEADING_TITLE','Suorita SQL kysely');
  define('HEADING_WARNING','VARMISTA ETTÄ OLET TEHNYT TÄYDELLISEN VARMISTUSKOPION TIETOKANNASTA ENNEN KUIN SUORITAT SQL KYSELYN');
  define('HEADING_WARNING2','Jos olet asentamassa kolmannen osapuolen tekemää lisäosaa, teet sen omalla vastuullasi.<br>Zen Cart&trade; ei ota vastuuta kolmansien osapuolien toimittamista lisäosista. Testaa ennen ajamista tuotantokantaan!');
  define('HEADING_WARNING_INSTALLSCRIPTS', 'HUOM: Zen Cart tietokantapäivitystä EI kuulu ajaa tältä sivulta.<br>Lisää uusi päivtys <strong>zc_install</strong> kansioon ja aja päivitys sieltä saadaksesi paremman toimivuuden.');
  define('TEXT_QUERY_RESULTS','Kyselyn tulos:');
  define('TEXT_ENTER_QUERY_STRING','Syötä kysely <br />joka ajetaan:&nbsp;&nbsp;<br /><br />Varmista että<br />lopussa on ;');
  define('TEXT_QUERY_FILENAME','Tuo tiedostosta:');
  define('ERROR_NOTHING_TO_DO','Virhe: Ei toimitoa - ei kyselyä tai kysely-tiedostoa määriteltynä.');
  define('TEXT_CLOSE_WINDOW', '[ sulje ikkuna ]');
  define('SQLPATCH_HELP_TEXT','SQLPATCH työkalu antaa sinun asentaa järjetelmän päivityksiä, syöttämällä SQL koodia suoraan tekstialue-laatikkoon '.
  							  'sivulla, tai voit tuoda koodi-tiedoston (.SQL).<br />' .
  							  'Kun valmistelet koodia käytettäväksi tällä työkalulla, ÄLÄ lisää taulun alkuun tietokannan nimeä, koska tämä työkalu '.
  							  'lisää automaattisesti tarvittavat alkuosat, perustuen asetuksiin jotka on laitettu '.
  							  'admin/includes/configure.php tiedostoon (DB_PREFIX määritys).<br /><br />' .
  							  'Komennot jotka syötetään tai tuodaan tiedostosta, voivat alkaa seuraavilla komennoilla ja niiden TÄYTYY olla ISOLLA kirjoitettu:'.
  							  '<br /><ul><li>DROP TABLE IF EXISTS</li><li>CREATE TABLE</li><li>INSERT INTO</li><li>INSERT IGNORE INTO</li><li>ALTER TABLE</li>' .
                              '<li>UPDATE (vain yksi taulu)</li><li>UPDATE IGNORE (vain yksi taulu)</li><li>DELETE FROM</li><li>DROP INDEX</li><li>CREATE INDEX</li>' .
                              '<br /><li>SELECT </li></ul>' .
'<h2>Advanced Methods</h2>The following methods can be used to issue more complex statements.<br>
To run some blocks of code together so that they are treated as one command by MySQL, you need the "<code>#NEXT_X_ROWS_AS_ONE_COMMAND:xxx</code>" value set.  The parser will then treat X number of commands as one.<br>
If you are running this file via phpMyAdmin or an equivalent, the "#NEXT..." comment is ignored, and the script will process fine.<br>
<br><strong>NOTE: </strong>SELECT.... FROM... and LEFT JOIN statements need the "FROM" or "LEFT JOIN" to be on a line by itself in order for the parse script to add the table prefix.<br><br>
<em><strong>Examples:</strong></em>
<ul><li><code>#NEXT_X_ROWS_AS_ONE_COMMAND:4<br>
SET @t1=0;<br>
SELECT (@t1:=configuration_value) as t1 <br>
FROM configuration <br>
WHERE configuration_key = \'KEY_NAME_HERE\';<br>
UPDATE product_type_layout SET configuration_value = @t1 WHERE configuration_key = \'KEY_NAME_TO_CHECK_HERE\';<br>
DELETE FROM configuration WHERE configuration_key = \'KEY_NAME_HERE\';</code><br>&nbsp;</li>

<li><code>#NEXT_X_ROWS_AS_ONE_COMMAND:1<br>
INSERT INTO tablename <br>
(col1, col2, col3, col4)<br>
SELECT col_a, col_b, col_3, col_4<br>
FROM table2;</code><br>&nbsp;</li>

<li><code>#NEXT_X_ROWS_AS_ONE_COMMAND:1<br>
INSERT INTO table1 <br>
(col1, col2, col3, col4 )<br>
SELECT p.othercol_a, p.othercol_b, po.othercol_c, pm.othercol_d<br>
FROM table2 p, table3 pm<br>
LEFT JOIN othercol_f po<br>
ON p.othercol_f = po.othercol_f<br>
WHERE p.othercol_f = pm.othercol_f;</code><br>&nbsp;</li>
</ul>' );
  define('REASON_TABLE_ALREADY_EXISTS','Taulua %s ei voida luoda, koska sen niminen taulu on jo olemassa.');
  define('REASON_TABLE_DOESNT_EXIST','Taulua %s ei voida pudottaa, koska sen nimistä taulua ei ole olemassa.');
  define('REASON_TABLE_NOT_FOUND','Ei voida suorittaa, koska taulua %s ei löydy.');
  define('REASON_CONFIG_KEY_ALREADY_EXISTS','Ei voitu lisätä configuration_key "%s" koska se on jo olemassa.');
  define('REASON_COLUMN_ALREADY_EXISTS','Saraketta %s ei voitu lisätä, koska se on jo olemassa.');
  define('REASON_COLUMN_DOESNT_EXIST_TO_DROP','Saraketta %s ei voida pudottaa, koska sitä ei löydy.');
  define('REASON_COLUMN_DOESNT_EXIST_TO_CHANGE','Saraketta %s ei voida muuttaa, koska sitä ei löydy.');
  define('REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS','prod-type-layout configuration_key "%s" ei voida lisätä, koska se on jo olemassa.');
  define('REASON_INDEX_DOESNT_EXIST_TO_DROP','Indeksiä %s taulussa %s ei voida pudottaa, koska sitä ei löydy.');
  define('REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP','Primary key:tä taulussa %s ei voida pudottaa, koska sitä ei löydy.');
  define('REASON_INDEX_ALREADY_EXISTS','Indeksiä %s tauluun %s ei voida lisätä, koska se on jo olemassa.');
  define('REASON_PRIMARY_KEY_ALREADY_EXISTS','Primary key:tä tauluun %s ei voida lisätä, koska se on jo olemassa.');
  define('REASON_NO_PRIVILEGES','Käyttäjällä '.DB_SERVER_USERNAME.'@'.DB_SERVER.' ei ole %s oikeuksia tietokantaan '.DB_DATABASE.'.');
  
define('ERROR_RENAME_TABLE', 'SQLpatch-työkalu ei tue RENAME TABLE -komentoa. Käytä sen sijaan phpMyAdminia.');
define('ERROR_LINE_INCOMPLETE', 'Kysely epätäydellinen: puuttuu sulkupiste.');

define('TEXT_EXECUTE_SUCCESS', 'Onnistuminen: %u käsite (t) käsitelty.');
define('ERROR_EXECUTE_FAILED', 'Kysely epäonnistui: %u käsite (t) käsitelty.');
define('ERROR_EXECUTE_IGNORED', 'Huomautus: %u lausunnot ohitetaan. Katso lisätietoja tietokantataulukosta "upgrade_exceptions".');

define('TEXT_UPLOADQUERY_SUCCESS', 'Onnistuminen: %u tiedosto (t) käsitelty tiedostojen lataamisen kautta');
define('ERROR_UPLOADQUERY_FAILED', 'Kysely epäonnistui: %u tiedosto (t) käsitelty tiedostojen lataamisen kautta');
define('ERROR_UPLOADQUERY_IGNORED', 'Huomautus: %u lausunnot ohitettiin tiedostojen lataamisen kautta. Katso lisätietoja tietokantataulukosta "upgrade_exceptions".');
