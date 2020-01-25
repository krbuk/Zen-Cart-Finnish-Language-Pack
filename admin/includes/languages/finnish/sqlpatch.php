<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: sqlpatch.php 19537 2011-09-20 17:14:44Z drbyte $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi> and Joni Borgström <joni.borgstrom@it-idea.fi>
// Finnish translation v1.5.5 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
  define('HEADING_TITLE','Suorita SQL kysely ');
  define('HEADING_WARNING','VARMISTA ETTÄ OLET TEHNYT TÄYDELLISEN VARMISTUSKOPION TIETOKANNASTA ENNEN KUIN SUORITAT SQL KYSELYN');
  define('HEADING_WARNING2','Jos olet asentamassa kolmannen osapuolen tekemää lisäosaa, teet sen omalla vastuullasi.<br />Zen Cart&trade; ei ota vastuuta kolmansien osapuolien toimittamista lisäosista. Testaa ennen ajamista tuotantokantaan!');
  define('HEADING_WARNING_INSTALLSCRIPTS', 'HUOM: Zen Cart tietokantapäivitystä EI kuulu ajaa tältä sivulta.<br />Lisää uusi päivtys <strong>zc_install</strong> kansioon ja aja päivitys sieltä saadaksesi paremman toimivuuden.');
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
'<h2>Monipuolisemmat toiminnot</h2>Seuraavat komennot ovat käytössä monipuolisempiin toimintoihin:<br />
Ajaaksesi useampia komentoja yhdessä, siten että ne tulkitaan yhdeksi komennoksi, tarvitsee sinun käyttää komentoa: "<code>#NEXT_X_ROWS_AS_ONE_COMMAND:xxx</code>" .<br />
Jos suoritat tämän tiedoston phpMyAdmin-ohjelmalla tai vastaavalla, "#NEXT..." komentoa ei ajeta ja koodi toimii myös siellä.<br />
<br /><strong>HUOMIO: </strong>SELECT.... FROM... ja LEFT JOIN komennoissa pitää olla "FROM" tai "LEFT JOIN" omalla rivilläään jotta tietokannan nimi lisätään taulun nimen eteen.<br /><br />
<em><strong>Esimerkkejä:</strong></em>
<ul><li><code>#NEXT_X_ROWS_AS_ONE_COMMAND:4<br />
SET @t1=0;<br />
SELECT (@t1:=configuration_value) as t1 <br />
FROM configuration <br />
WHERE configuration_key = \'KEY_NAME_HERE\';<br />
UPDATE product_type_layout SET configuration_value = @t1 WHERE configuration_key = \'KEY_NAME_TO_CHECK_HERE\';<br />
DELETE FROM configuration WHERE configuration_key = \'KEY_NAME_HERE\';<br />&nbsp;</li>

<li>#NEXT_X_ROWS_AS_ONE_COMMAND:1<br />
INSERT INTO tablename <br />
(col1, col2, col3, col4)<br />
SELECT col_a, col_b, col_3, col_4<br />
FROM table2;<br />&nbsp;</li>

<li>#NEXT_X_ROWS_AS_ONE_COMMAND:1<br />
INSERT INTO table1 <br />
(col1, col2, col3, col4 )<br />
SELECT p.othercol_a, p.othercol_b, po.othercol_c, pm.othercol_d<br />
FROM table2 p, table3 pm<br />
LEFT JOIN othercol_f po<br />
ON p.othercol_f = po.othercol_f<br />
WHERE p.othercol_f = pm.othercol_f;</li>
</ul></code>' );
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
?>