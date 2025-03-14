<?php
// -----
// Since the languages are now loaded via classes, the $locales definition
// needs to be globalized for use in payment-methods (e.g. paypalwpp) and
// other processing.
// Finnish translation v2.0.0 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
global $locales;
$locales = ['fi_FI', 'fi_FI.utf8', 'fi'];
@setlocale(LC_TIME, $locales);

$define = [
    'ARIA_DELETE_ITEM_FROM_CART' => 'Poista tämä tuote ostoskorista',
    'ARIA_EDIT_QTY_IN_CART' => 'Muokkaa määrää ostoskorissa',
    'ARIA_PAGINATION_' => '',
    'ARIA_PAGINATION_CURRENTLY_ON' => ', nykyinensivu %s',
    'ARIA_PAGINATION_CURRENT_PAGE' => 'Nykinen Sivu',
    'ARIA_PAGINATION_ELLIPSIS_NEXT' => 'Hae seuraava sivuryhmä',
    'ARIA_PAGINATION_ELLIPSIS_PREVIOUS' => 'Hae edellinen sivuryhmä',
    'ARIA_PAGINATION_GOTO' => 'Mene ',
    'ARIA_PAGINATION_NEXT_PAGE' => 'Seuraava sivu',
    'ARIA_PAGINATION_PAGE_NUM' => 'Sivu %s',
    'ARIA_PAGINATION_PREVIOUS_PAGE' => 'Siirry edelliselle sivulle',
    'ARIA_PAGINATION_ROLE_LABEL_FOR' => '%s Sivunumerointi',
    'ARIA_PAGINATION_ROLE_LABEL_GENERAL' => 'Sivunumerointi',
    'ARIA_QTY_ADD_TO_CART' => 'Syötä ostoskoriin lisättävä määrä',
    'ASK_A_QUESTION' => 'Esitä kysymys tästä tuotteesta',
    'ATTRIBUTES_PRICE_DELIMITER_PREFIX' => ' ( ',
    'ATTRIBUTES_PRICE_DELIMITER_SUFFIX' => ' )',
    'ATTRIBUTES_WEIGHT_DELIMITER_PREFIX' => ' (',
    'ATTRIBUTES_WEIGHT_DELIMITER_SUFFIX' => ') ',
    'BOX_HEADING_BANNER_BOX' => 'Sponsorit',
    'BOX_HEADING_BANNER_BOX2' => 'Oletko nähnyt ...',
    'BOX_HEADING_BANNER_BOX_ALL' => 'Sponsorit',
    'BOX_HEADING_BESTSELLERS' => 'Myydyimmät',
    'BOX_HEADING_BRANDS' => 'Osta tuotemerkin mukaan',
    'BOX_HEADING_CATEGORIES' => 'Kategoriat',
    'BOX_HEADING_CURRENCIES' => 'Valuutat',
    'BOX_HEADING_CUSTOMER_ORDERS' => 'Nopea uudelleentilaus',
    'BOX_HEADING_FEATURED_PRODUCTS' => 'Esittelyssä',
    'BOX_HEADING_INFORMATION' => 'Tiedot',
    'BOX_HEADING_LANGUAGES' => 'Kielet',
    'BOX_HEADING_LINKS' => '&nbsp;&nbsp;[lisää]',
    'BOX_HEADING_MANUFACTURERS' => 'Valmistajat',
    'BOX_HEADING_MANUFACTURER_INFO' => 'Valmistajan tiedot',
    'BOX_HEADING_MORE_INFORMATION' => 'Lisää tietoa',
    'BOX_HEADING_NOTIFICATIONS' => 'Ilmoitukset',
    'BOX_HEADING_REVIEWS' => 'Arvostelut',
    'BOX_HEADING_SEARCH' => 'Etsi',
    'BOX_HEADING_SHOPPING_CART' => 'Ostoskori',
    'BOX_HEADING_SPECIALS' => 'Erikoistarjoukset',
    'BOX_HEADING_WHATS_NEW' => 'Uudet tuotteet',
    'BOX_INFORMATION_ABOUT_US' => 'Meistä',
    'BOX_INFORMATION_ACCESSIBILITY' => 'Esteettömyys',
    'BOX_INFORMATION_CONDITIONS' => 'Käyttöehdot',
    'BOX_INFORMATION_CONTACT' => 'Ota yhteyttä',
    'BOX_INFORMATION_DISCOUNT_COUPONS' => 'Alennuskupongit',
    'BOX_INFORMATION_ORDER_STATUS' => 'Tilauksen tila',
    'BOX_INFORMATION_PAGE_2' => 'Sivu 2',
    'BOX_INFORMATION_PAGE_3' => 'Sivu 3',
    'BOX_INFORMATION_PAGE_4' => 'Sivu 4',
    'BOX_INFORMATION_PRIVACY' => 'Tietosuojaseloste',
    'BOX_INFORMATION_SHIPPING' => 'Toimitus &amp; Palauttaa',
    'BOX_INFORMATION_SITE_MAP' => 'Sivustokartta',
    'BOX_INFORMATION_UNSUBSCRIBE' => 'Uutiskirjeen tilaus peruutetaan',
    'BOX_MANUFACTURER_INFO_HOMEPAGE' => '%s Etusivu',
    'BOX_MANUFACTURER_INFO_OTHER_PRODUCTS' => 'Muut tuotteet',
    'BOX_NOTIFICATIONS_NOTIFY' => 'Ilmoita minulle päivityksistä <strong>%s</strong>',
    'BOX_NOTIFICATIONS_NOTIFY_REMOVE' => 'Älä ilmoita minulle päivityksistä <strong>%s</strong>',
    'BOX_REVIEWS_NO_REVIEWS' => 'Tällä hetkellä ei löydy tuotearvioita.',
    'BOX_REVIEWS_TEXT_OF_5_STARS' => '%s tähdestä!',
    'BOX_REVIEWS_WRITE_REVIEW' => 'Kirjoita arvostelu tästä tuotteesta.',
    'BOX_SEARCH_ADVANCED_SEARCH' => 'Tarkennettu Haku',
    'BOX_SHOPPING_CART_EMPTY' => 'Ostoskorisi on tyhjä.',
    'CAPTION_UPCOMING_PRODUCTS' => 'ämä tuotteet ovat pian varastossa',
    'CART_ITEMS' => 'Tuotteet ostoskorissa: ',
    'CART_QUANTITY_SUFFIX' => '&nbsp;x ',
    'CART_SHIPPING_METHOD_ADDRESS' => 'Osoite:',
    'CART_SHIPPING_METHOD_ALL_DOWNLOADS' => '- Lataukset',
    'CART_SHIPPING_METHOD_FREE_TEXT' => 'Ilmainen toimitus',
    'CART_SHIPPING_METHOD_RATES' => 'Arvostelut',
    'CART_SHIPPING_METHOD_TEXT' => 'Saatavilla olevat toimitustavat',
    'CART_SHIPPING_METHOD_TO' => 'Lähettää: ',
    'CART_SHIPPING_OPTIONS' => 'Arvioi toimituskulut',
    'CART_SHIPPING_QUOTE_CRITERIA' => 'Toimitushinnat perustuvat hallitsemiisi osoitetietoihin:',
    'CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS' => 'Suositellut tuotteet ...',
    'CATEGORIES_BOX_HEADING_PRODUCTS_ALL' => 'Kaikki tuotteet ...',
    'CATEGORIES_BOX_HEADING_SPECIALS' => 'Erikoistarjoukset ...',
    'CATEGORIES_BOX_HEADING_WHATS_NEW' => 'Uudet tuotteet ...',
    'CATEGORY_COMPANY' => 'Yritystiedot',
    'CATEGORY_PERSONAL' => 'Henkilötietosi',
    'CHARSET' => 'utf-8',
    'DATE_FORMAT' => 'd.m.Y',
    'DATE_FORMAT_LONG' => '%A %d %B, %Y',
    'DB_ERROR_NOT_CONNECTED' => 'Virhe – yhteyttä tietokantaan ei voitu muodostaa',
    'DOB_FORMAT_STRING' => 'dd/mm/yyyy',
    'DOWNLOADS_CONTROLLER_ON_HOLD_MSG' => 'HUOMAA: Lataukset eivät ole saatavilla ennen kuin maksu on vahvistettu',
    'EMAIL_SALUTATION' => 'Hei',
    'EMAIL_SEND_FAILED' => 'VIRHE: Sähköpostin lähetys epäonnistui: "%s" <%s> aiheen kanssa: "%s"',
    'EMPTY_CART_TEXT_NO_QUOTE' => 'Oho! Istuntosi on vanhentunut ... Päivitä ostoskorisi toimitustarjousta varten ...',
    'EMP_SHOPPING_FOR_MESSAGE' => 'Tällä hetkellä ostoksilla %1$s (%2$s).',
    'ENTRY_CITY' => 'Kaupunki:',
    'ENTRY_CITY_ERROR' => 'Kaupungissasi on oltava vähintään ' . ENTRY_CITY_MIN_LENGTH . ' merkkiä.',
    'ENTRY_CITY_TEXT' => '*',
    'ENTRY_COMPANY' => 'Yrityksen nimi:',
    'ENTRY_COMPANY_ERROR' => 'Kirjoita yrityksen nimi.',
    'ENTRY_COMPANY_TEXT' => '',
    'ENTRY_COUNTRY' => 'Maa:',
    'ENTRY_COUNTRY_ERROR' => 'Sinun on valittava maa avattavasta Maat-valikosta.',
    'ENTRY_COUNTRY_TEXT' => '*',
    'ENTRY_CUSTOMERS_REFERRAL' => 'Viitekoodi:',
    'ENTRY_DATE_FROM' => 'Päivämäärä alkaen:',
    'ENTRY_DATE_OF_BIRTH' => 'Syntymäaika:',
    'ENTRY_DATE_OF_BIRTH_ERROR' => 'Onko syntymäaikasi oikein? Järjestelmämme vaatii päivämäärän tässä muodossa: DD/MM/YYYY (eg 21/01/1970)',
    'ENTRY_DATE_OF_BIRTH_TEXT' => '* (eg. 21/01/1970)',
    'ENTRY_DATE_TO' => 'Päivämäärä :',
    'ENTRY_EMAIL' => 'Sähköpostiosoite:',
    'ENTRY_EMAIL_ADDRESS' => 'Sähköpostiosoite:',
    'ENTRY_EMAIL_ADDRESS_CHECK_ERROR' => 'Valitettavasti järjestelmämme ei ymmärrä sähköpostiosoitettasi. Yritä uudelleen.',
    'ENTRY_EMAIL_ADDRESS_ERROR' => 'Onko sähköpostiosoitteesi oikein? Sen pitäisi sisältää ainakin ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' merkkiä. Yritä uudelleen.',
    'ENTRY_EMAIL_ADDRESS_ERROR_EXISTS' => 'Järjestelmässämme on jo tietue kyseisestä sähköpostiosoitteesta - yritä kirjautua sisään tällä sähköpostiosoitteella. Jos et enää käytä osoitetta, voit korjata sen Oma tili -alueella.',
    'ENTRY_EMAIL_ADDRESS_TEXT' => '*',
    'ENTRY_EMAIL_CONTENT_CHECK_ERROR' => 'Unohditko viestisi? Haluaisimme kuulla sinusta. Voit kirjoittaa kommenttisi alla olevaan tekstialueeseen.',
    'ENTRY_EMAIL_HTML_DISPLAY' => 'HTML',
    'ENTRY_EMAIL_NAME_CHECK_ERROR' => 'Anteeksi, onko nimesi oikein? Järjestelmämme vaatii vähintään ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' merkkiä. Yritä uudelleen.',
    'ENTRY_EMAIL_TEXT_DISPLAY' => 'TEXT-Only',
    'ENTRY_ENQUIRY' => 'Viesti:',
    'ENTRY_FAX_NUMBER' => 'Faksinumero:',
    'ENTRY_FAX_NUMBER_TEXT' => '',
    'ENTRY_FIRST_NAME' => 'Etunimi:',
    'ENTRY_FIRST_NAME_ERROR' => 'Onko etunimesi oikein? Järjestelmäsi vaatii vähintään ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' merkkiä. Yritä uudelleen.',
    'ENTRY_FIRST_NAME_TEXT' => '*',
    'ENTRY_GENDER' => 'Sukupuolinen:',
    'ENTRY_GENDER_ERROR' => 'Ole hyvä ja valitse sukupuoli',
    'ENTRY_GENDER_TEXT' => '*',
    'ENTRY_INCLUDE_SUBCATEGORIES' => 'Sisällytä alaluokat',
    'ENTRY_LAST_NAME' => 'Sukunimi:',
    'ENTRY_LAST_NAME_ERROR' => 'Onko sukunimesi oikein? Järjestelmämme vaatii vähintään ' . ENTRY_LAST_NAME_MIN_LENGTH . ' merkkiä. Yritä uudelleen.',
    'ENTRY_LAST_NAME_TEXT' => '*',
    'ENTRY_NAME' => 'Koko nimi:',
    'ENTRY_NEWSLETTER' => 'Tilaa uutiskirjeemme.',
    'ENTRY_NEWSLETTER_TEXT' => '',
    'ENTRY_NICK' => 'Foorumin lempinimi:',
    'ENTRY_NICK_DUPLICATE_ERROR' => 'Tämä lempinimi on jo käytössä. Kokeile toista.',
    'ENTRY_NICK_TEXT' => '*',
    'ENTRY_PASSWORD' => 'Salasana:',
    'ENTRY_PASSWORD_CONFIRMATION' => 'Vahvista salasana:',
    'ENTRY_PASSWORD_CONFIRMATION_TEXT' => '*',
    'ENTRY_PASSWORD_CURRENT' => 'Nykyinen salasana:',
    'ENTRY_PASSWORD_CURRENT_TEXT' => '*',
    'ENTRY_PASSWORD_ERROR' => 'Salasanasi tulee sisältää vähintään ' . ENTRY_PASSWORD_MIN_LENGTH . ' merkkiä.',
    'ENTRY_PASSWORD_ERROR_NOT_MATCHING' => 'Salasanan vahvistuksen on vastattava salasanaasi.',
    'ENTRY_PASSWORD_NEW' => 'Uusi salasana:',
    'ENTRY_PASSWORD_NEW_ERROR' => 'Uudessa salasanassasi on oltava vähintään ' . ENTRY_PASSWORD_MIN_LENGTH . ' merkkiä.',
    'ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING' => 'Salasanan vahvistuksen on vastattava uutta salasanaasi.',
    'ENTRY_PASSWORD_NEW_TEXT' => '*',
    'ENTRY_PASSWORD_TEXT' => '* (vähintään ' . ENTRY_PASSWORD_MIN_LENGTH . ' merkkiä)',
    'ENTRY_POST_CODE' => 'Postinumero:',
    'ENTRY_POST_CODE_ERROR' => 'Postinumerossasi on oltava vähintään ' . ENTRY_POSTCODE_MIN_LENGTH . ' merkkiä.',
    'ENTRY_POST_CODE_TEXT' => '*',
    'ENTRY_PRICE_FROM' => 'Hinta alkaen:',
    'ENTRY_PRICE_TO' => 'Hinta asti:',
    'ENTRY_RECIPIENT_NAME' => 'Vastaanottajan nimi:',
    'ENTRY_REQUIRED_SYMBOL' => '*',
    'ENTRY_STATE' => 'Maakunta:',
    'ENTRY_STATE_ERROR' => 'Maakuntasi on oltava vähintään ' . ENTRY_STATE_MIN_LENGTH . ' merkkiä.',
    'ENTRY_STATE_ERROR_SELECT' => 'Valitse maakunta alasvetovalikosta.',
    'ENTRY_STATE_TEXT' => '*',
    'ENTRY_STREET_ADDRESS' => 'Katuosoite:',
    'ENTRY_STREET_ADDRESS_ERROR' => 'Katuosoitteesi tulee sisältää vähintään ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' merkkiä.',
    'ENTRY_STREET_ADDRESS_TEXT' => '*',
    'ENTRY_SUBURB' => 'Osoiterivi 2:',
    'ENTRY_SUBURB_TEXT' => '',
    'ENTRY_TELEPHONE_NUMBER' => 'Puhelinnumero:',
    'ENTRY_TELEPHONE_NUMBER_ERROR' => 'Puhelinnumerossasi on oltava vähintään ' . ENTRY_TELEPHONE_MIN_LENGTH . ' merkkiä.',
    'ENTRY_TELEPHONE_NUMBER_TEXT' => '*',
    'ERROR_AT_LEAST_ONE_INPUT' => 'Vähintään yksi hakulomakkeen kentistä on syötettävä.',
    'ERROR_CART_UPDATE' => '<strong>Päivitä tilauksesi.</strong> ',
    'ERROR_CONDITIONS_NOT_ACCEPTED' => 'Vahvista, että olet lukenut ja hyväksyt tähän tilaukseen liittyvät ehdot rastittamalla ruutuun.',
    'ERROR_CORRECTIONS_HEADING' => 'Korjaa seuraava: <br>',
    'ERROR_CUSTOMERS_ID_INVALID' => 'Asiakastietoja ei voi vahvistaa!<br>Kirjaudu sisään tai luo tilisi uudelleen...',
    'ERROR_DATABASE_MAINTENANCE_NEEDED' => '<a href="https://docs.zen-cart.com/user/troubleshooting/error_71_maintenance_required/" rel="noopener" target="_blank">ERROR 0071 There appears to be a problem with the database. Maintenance is required.</a>',
    'ERROR_DESTINATION_DOES_NOT_EXIST' => 'Virhe: kohdetta ei ole olemassa.',
    'ERROR_DESTINATION_NOT_WRITEABLE' => 'Virhe: kohdetta ei voi kirjoittaa.',
    'ERROR_FILETYPE_NOT_ALLOWED' => 'Virhe: Tiedostotyyppiä ei sallita.',
    'ERROR_FILE_NOT_SAVED' => 'Virhe: Tiedostoa ei tallennettu.',
    'ERROR_FILE_TOO_BIG' => 'Varoitus: Tiedosto oli liian suuri ladattavaksi!<br>Voidaan tehdä tilaus, mutta ota meihin yhteyttä saadaksesi apua latauksessa',
    'ERROR_INVALID_FROM_DATE' => 'Virheellinen alkaen päivämäärä.',
    'ERROR_INVALID_KEYWORDS' => 'Virheelliset avainsanat.',
    'ERROR_INVALID_TO_DATE' => 'Ei kelpaa tähän päivään mennessä.',
    'ERROR_MAXIMUM_QTY' => 'Ostoskoriisi lisättyä määrää on muutettu sallitun enimmäismäärän rajoituksen vuoksi. Katso tämä kohde:<br>',
    'ERROR_MISSING_SEARCH_OPTIONS' => 'Puuttuvat hakuvaihtoehdot',
    'ERROR_NO_PAYMENT_MODULE_SELECTED' => 'Valitse tilauksellesi maksutapa.',
    'ERROR_PRICE_FROM_MUST_BE_NUM' => 'Hinnan alkaen on oltava numero.',
    'ERROR_PRICE_TO_LESS_THAN_PRICE_FROM' => 'Hinnan on oltava suurempi tai yhtä suuri kuin Hinta alkaen.',
    'ERROR_PRICE_TO_MUST_BE_NUM' => 'Hinnan tulee olla numero.',
    'ERROR_PRIVACY_STATEMENT_NOT_ACCEPTED' => 'Vahvista tietosuojaseloste rastittamalla alla oleva ruutu.',
    'ERROR_PRODUCT' => '<br>Tuote: ',
    'ERROR_PRODUCT_ATTRIBUTES' => '<br>Tuote: ',
    'ERROR_PRODUCT_OPTION_SELECTION' => '<br> ... Virheelliset vaihtoehdon arvot valittu ',
    'ERROR_PRODUCT_QUANTITY_MAX' => ' ... Virheiden suurin määrä - ',
    'ERROR_PRODUCT_QUANTITY_MAX_SHOPPING_CART' => ' ... Virheiden suurin määrä - ',
    'ERROR_PRODUCT_QUANTITY_MIN' => ',  ... Virheiden suurin määrä - ',
    'ERROR_PRODUCT_QUANTITY_MIN_SHOPPING_CART' => ', on vähimmäismäärärajoitus. ',
    'ERROR_PRODUCT_QUANTITY_ORDERED' => '<br>Tilasit yhteensä: ',
    'ERROR_PRODUCT_QUANTITY_UNITS' => ' ... Määräyksikkövirheet - ',
    'ERROR_PRODUCT_QUANTITY_UNITS_SHOPPING_CART' => ' ... Määräyksikkövirheet - ',
    'ERROR_PRODUCT_STATUS_SHOPPING_CART' => '<br>Pahoittelemme, mutta tämä tuote on tällä hetkellä poistettu valikoimastamme.<br>Tämä tuote on poistettu ostoskoristasi.',
    'ERROR_PRODUCT_STATUS_SHOPPING_CART_ATTRIBUTES' => '<br>Olemme pahoillamme, mutta tämän tuotteen valitut vaihtoehdot ovat muuttuneet ja ne on poistettu valikoimastamme tällä hetkellä.<br>Tämä tuote on poistettu ostoskoristasi.',
    'ERROR_QUANTITY_ADJUSTED' => 'Ostoskoriisi lisättyä määrää on muutettu. Haluamasi tuote ei ole saatavilla murto-osina. Tuotteen määrä:<br>',
    'ERROR_QUANTITY_CHANGED_FROM' => ', on vaihdettu kohteesta: ',
    'ERROR_QUANTITY_CHANGED_TO' => ' -> ',
    'ERROR_TEXT_COUNTRY_DISABLED_PLEASE_CHANGE' => 'Pahoittelemme, mutta emme enää hyväksy laskutus- tai toimitusosoitteita "%s".  Päivitä tämä osoite jatkaaksesi.',
    'ERROR_TO_DATE_LESS_THAN_FROM_DATE' => 'Päivämäärän on oltava suurempi tai yhtä suuri kuin Alkaen päivämäärä.',
    'FAILED_TO_ADD_UNAVAILABLE_PRODUCTS' => 'Valitut tuotteet eivät ole tällä hetkellä ostettavissa...',
    'FEMALE' => 'Rouva.',
    'FOOTER_TEXT_BODY' => 'Copyright &copy; ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '">' . STORE_NAME . '</a>. Powered by <a href="https://www.zen-cart.com" rel="noopener noreferrer" target="_blank">Zen Cart</a>',
    'FORM_REQUIRED_INFORMATION' => '* Vaadittu tieto',
    'FREE_SHIPPING_DESCRIPTION' => 'Ilmainen toimitus yli %s tilauksille',
    'HEADING_ADDRESS_INFORMATION' => 'Osoitetiedot',
    'HEADING_BILLING_ADDRESS' => 'Laskutusosoite',
    'HEADING_DELIVERY_ADDRESS' => 'Toimitusosoite',
    'HEADING_DOWNLOAD' => 'Lataa tiedostot napsauttamalla latauspainiketta ja valitsemalla ponnahdusvalikosta "Tallenna levylle".',
    'HEADING_ORDER_COMMENTS' => 'Erikoisohjeet tai tilauskommentit',
    'HEADING_ORDER_DATE' => 'Tilauspäivämäärä:',
    'HEADING_ORDER_HISTORY' => 'Tilahistoria &amp; Kommentit',
    'HEADING_ORDER_NUMBER' => 'Tilaus #%s',
    'HEADING_PAYMENT_METHOD' => 'Maksutapa',
    'HEADING_PRODUCTS' => 'Tuotteet',
    'HEADING_QUANTITY' => 'Kpl.',
    'HEADING_SEARCH_HELP' => 'Hakuapu',
    'HEADING_SHIPPING_METHOD' => 'Toimitustapa',
    'HEADING_TAX' => 'Vero',
    'HEADING_TOTAL' => 'Yhteensä',
    'HTML_PARAMS' => 'dir="ltr" lang="fi"',
    'ICON_ERROR_ALT' => 'Virhe',
    'ICON_IMAGE_ERROR' => 'error.png',
    'ICON_IMAGE_SUCCESS' => 'success.png',
    'ICON_IMAGE_TINYCART' => 'cart.gif',
    'ICON_IMAGE_TRASH' => 'small_delete.png',
    'ICON_IMAGE_UPDATE' => 'button_update_cart.png',
    'ICON_IMAGE_WARNING' => 'warning.png',
    'ICON_SUCCESS_ALT' => 'Menestys',
    'ICON_TINYCART_ALT' => 'Lisää tämä tuote ostoskoriin klikkaamalla tästä.',
    'ICON_TRASH_ALT' => 'Poista tämä tuote ostoskorista napsauttamalla tätä kuvaketta.',
    'ICON_UPDATE_ALT' => 'Muuta määrääsi korostamalla numero ruudussa, korjaamalla määrä ja napsauttamalla tätä painiketta.',
    'ICON_WARNING_ALT' => 'Varoitus',
    'IMAGE_ALT_PREFIX' => '(kuva varten)',
    'IMAGE_ALT_TEXT_NO_TITLE' => 'Yleinen kuva',
    'JS_ERROR' => 'Lomakkeesi käsittelyssä on tapahtunut virheitä.\n\nTee seuraavat korjaukset:\n\n',
    'JS_ERROR_NO_PAYMENT_MODULE_SELECTED' => '* Valitse tilauksellesi maksutapa.',
    'JS_ERROR_SUBMITTED' => 'Tämä lomake on jo lähetetty. Paina OK ja odota, että tämä prosessi on valmis.',
    'JS_REVIEW_RATING' => '* Valitse luokitus tälle tuotteelle.',
    'JS_REVIEW_TEXT' => '* Lisää kommentteihin vielä muutama sana. Arvostelussa on oltava vähintään ' . REVIEW_TEXT_MIN_LENGTH . ' merkkiä.',
    'LANGUAGE_CURRENCY' => 'EURO',
    'MALE' => 'Herra.',
    'META_TAG_PRODUCTS_PRICE_IS_FREE_TEXT' => 'Se on ilmainen!',
    'MORE_INFO_TEXT' => '... Lisätietoja',
    'NOT_LOGGED_IN_TEXT' => 'Ei kirjautunut sisään',
    'ORDER_HEADING_DIVIDER' => '&nbsp;-&nbsp;',
    'OTHER_BOX_NOTIFY_REMOVE_ALT' => 'Poista tämä tuoteilmoitus.',
    'OTHER_BOX_NOTIFY_YES_ALT' => 'Ilmoita minulle tämän tuotteen päivityksistä.',
    'OTHER_BOX_WRITE_REVIEW_ALT' => 'Kirjoita arvostelu tästä tuotteesta.',
    'OTHER_DOWN_FOR_MAINTENANCE_ALT' => 'Sivusto on tällä hetkellä pois käytöstä huollon vuoksi. Tule takaisin myöhemmin.',
    'OTHER_IMAGE_BLACK_SEPARATOR' => 'pixel_black.gif',
    'OTHER_IMAGE_BOX_NOTIFY_REMOVE' => 'box_products_notifications_remove.gif',
    'OTHER_IMAGE_BOX_NOTIFY_YES' => 'box_products_notifications.gif',
    'OTHER_IMAGE_BOX_WRITE_REVIEW' => 'box_write_review.gif',
    'OTHER_IMAGE_CALL_FOR_PRICE' => 'call_for_prices.png',
    'OTHER_IMAGE_CUSTOMERS_AUTHORIZATION' => 'customer_authorization.gif',
    'OTHER_IMAGE_CUSTOMERS_AUTHORIZATION_ALT' => 'ASIAKKAAN HYVÄKSYNTÄ ODOTTAA ...',
    'OTHER_IMAGE_DOWN_FOR_MAINTENANCE' => 'down_for_maintenance.png',
    'OTHER_IMAGE_PRICE_IS_FREE' => 'free.png',
    'OTHER_IMAGE_REVIEWS_RATING_STARS_FIVE' => 'stars_5_small.png',
    'OTHER_IMAGE_REVIEWS_RATING_STARS_FOUR' => 'stars_4_small.png',
    'OTHER_IMAGE_REVIEWS_RATING_STARS_ONE' => 'stars_1_small.png',
    'OTHER_IMAGE_REVIEWS_RATING_STARS_THREE' => 'stars_3_small.png',
    'OTHER_IMAGE_REVIEWS_RATING_STARS_TWO' => 'stars_2_small.png',
    'OTHER_REVIEWS_RATING_STARS_FIVE_ALT' => 'Viisi tähteä',
    'OTHER_REVIEWS_RATING_STARS_FOUR_ALT' => 'Neljä tähteä',
    'OTHER_REVIEWS_RATING_STARS_THREE_ALT' => 'Kolme tähteä',
    'OTHER_REVIEWS_RATING_STARS_TWO_ALT' => 'Kaksi tähteä',
    'OTHER_REVIEWS_RATING_STARS_ONE_ALT' => 'Yksi Tähti',  
    'OUT_OF_STOCK_CANT_CHECKOUT' => 'Tuotteet, jotka on merkitty ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' ovat loppuneet tai niitä ei ole tarpeeksi varastossa tilauksesi täyttämiseen.<br>Muuta merkillä merkittyjen tuotteiden määrää (' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . '). Kiitos',
    'OUT_OF_STOCK_CAN_CHECKOUT' => 'Tuotteet, jotka on merkitty ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' ovat loppuneet.<br>Tuotteet, joita ei ole varastossa, laitetaan jälkitilaukseen.',
    'PAGE_ACCOUNT' => 'Tilini',
    'PAGE_ACCOUNT_EDIT' => 'Tilitiedot',
    'PAGE_ACCOUNT_HISTORY' => 'Tilaushistoria',
    'PAGE_ACCOUNT_NOTIFICATIONS' => 'Uutiskirjeen tilaukset',
    'PAGE_ADDRESS_BOOK' => 'Osoitekirja',
    'PAGE_ADVANCED_SEARCH' => 'Etsi',
    'PAGE_CHECKOUT_SHIPPING' => 'Kassalle',
    'PAGE_FEATURED' => 'Esittelyssä',
    'PAGE_PRODUCTS_ALL' => 'Kaikki tuotteet',
    'PAGE_PRODUCTS_NEW' => 'Uudet tuotteet',
    'PAGE_REVIEWS' => 'Arvostelut',
    'PAGE_SHOPPING_CART' => 'Ostoskori',
    'PAGE_SPECIALS' => 'Tarjoukset',
    'PAYMENT_JAVASCRIPT_DISABLED' => 'Emme voineet jatkaa kassalla, koska Javascript on poistettu käytöstä. Sinun on otettava se käyttöön jatkaaksesi',
    'PAYMENT_METHOD_GV' => 'Lahjakortti/Alennuskuponki',
    'PAYMENT_MODULE_GV' => 'LK/AK',
    'PLEASE_SELECT' => 'Ole hyvä ja valitse ...',
    'PREVNEXT_BUTTON_NEXT' => '[Seuraava&nbsp;&raquo;]',
    'PREVNEXT_BUTTON_PREV' => '[&laquo;&nbsp;Edellinen]',
    'PREVNEXT_TITLE_NEXT_PAGE' => 'Seuraava sivu',
    'PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE' => 'Edelliset %d Sivua',
    'PREVNEXT_TITLE_PAGE_NO' => 'Sivu %d',
    'PREVNEXT_TITLE_PREVIOUS_PAGE' => 'Edellinen sivu',
    'PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE' => 'Seuraavat %d Sivua',
    'PREV_NEXT_PRODUCT' => 'Tuote ',
    'PRIMARY_ADDRESS_TITLE' => 'Ensisijainen osoite',
    'PRODUCTS_ORDER_QTY_TEXT' => 'Lisää ostoskoriin: ',
    'PRODUCTS_ORDER_QTY_TEXT_IN_CART' => 'Määrä ostoskorissa: ',
    'PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT' => 'Soita hintaa varten',
    'PRODUCTS_PRICE_IS_FREE_TEXT' => 'Se on ilmainen!',
    'PRODUCTS_QUANTITY_MAX_TEXT_LISTING' => 'Enintään:',
    'PRODUCTS_QUANTITY_MIN_TEXT_LISTING' => 'Vähintään: ',
    'PRODUCTS_QUANTITY_UNIT_TEXT_LISTING' => 'Yksikkö: ',
    'PRODUCT_PRICE_DISCOUNT_AMOUNT' => '&nbsp;pois',
    'PRODUCT_PRICE_DISCOUNT_PERCENTAGE' => '% ',
    'PRODUCT_PRICE_DISCOUNT_PREFIX' => 'Säästä:&nbsp;',
    'PRODUCT_PRICE_SALE' => 'Alennusmyynti:&nbsp;',
    'PRODUCT_PRICE_WHOLESALE' => 'Hintasi:&nbsp;',
    'PULL_DOWN_ALL' => 'Valitse',
    'PULL_DOWN_ALL_RESET' => '- NOLLAUS - ',
    'PULL_DOWN_DEFAULT' => 'Valitse maasi',
    'PULL_DOWN_MANUFACTURERS' => '- Nollaus -',
    'PULL_DOWN_SHIPPING_ESTIMATOR_SELECT' => 'Valitse',
    'SEND_TO_TEXT' => 'Lähetä sähköposti:',
    'SET_AS_PRIMARY' => 'Aseta ensisijaiseksi osoitteeksi',
    'SUCCESS_ADDED_TO_CART_PRODUCT' => 'Tuotteen lisäys ostoskoriin ...',
    'SUCCESS_ADDED_TO_CART_PRODUCTS' => 'Valittujen tuotteiden lisääminen ostoskoriin ...',
    'SUCCESS_FILE_SAVED_SUCCESSFULLY' => 'Onnistui:  tiedosto tallennettiin onnistuneesti.',
    'TABLE_ATTRIBUTES_QTY_PRICE_PRICE' => 'HINTA',
    'TABLE_ATTRIBUTES_QTY_PRICE_QTY' => 'KPL',
    'TABLE_HEADING_ADDRESS_DETAILS' => 'Osoitetiedot',
    'TABLE_HEADING_BUY_NOW' => 'Osta nyt',
    'TABLE_HEADING_BYTE_SIZE' => 'Tiedoston koko',
    'TABLE_HEADING_CREDIT_PAYMENT' => 'Rahaa käytettävissä',
    'TABLE_HEADING_DATE_EXPECTED' => 'Arvioitu saapumisaika',
    'TABLE_HEADING_DATE_OF_BIRTH' => 'Vahvista ikäsi',
    'TABLE_HEADING_DOWNLOAD_COUNT' => 'Jäljellä',
    'TABLE_HEADING_DOWNLOAD_DATE' => 'Linkki vanhenee',
    'TABLE_HEADING_DOWNLOAD_FILENAME' => 'Tiedoston nimi',
    'TABLE_HEADING_FEATURED_PRODUCTS' => 'Esittelyssä Tuotteet',
    'TABLE_HEADING_IMAGE' => 'Tuotekuva',
    'TABLE_HEADING_LOGIN_DETAILS' => 'Kirjautumistiedot',
    'TABLE_HEADING_MANUFACTURER' => 'Valmistaja',
    'TABLE_HEADING_MODEL' => 'Malli',
    'TABLE_HEADING_NEW_PRODUCTS' => ' %s uutuudet',
    'TABLE_HEADING_PHONE_FAX_DETAILS' => 'Lisäyhteystiedot',
    'TABLE_HEADING_PRICE' => 'Hinta',
    'TABLE_HEADING_PRIVACY_CONDITIONS' => 'Tietosuojaseloste',
    'TABLE_HEADING_PRODUCTS' => 'Tuotteen nimi',
    'TABLE_HEADING_PRODUCT_NAME' => 'Tuotteen nimi',
    'TABLE_HEADING_QUANTITY' => 'KPL.',
    'TABLE_HEADING_REFERRAL_DETAILS' => 'Suositteliko joku kauppaamme sinulle?',
    'TABLE_HEADING_SHIPPING_ADDRESS' => 'Toimitusosoite',
    'TABLE_HEADING_SPECIALS_INDEX' => ' %s tarjoukset',
    'TABLE_HEADING_STATUS_COMMENTS' => 'Kommentit',
    'TABLE_HEADING_STATUS_DATE' => 'Päivämäärä',
    'TABLE_HEADING_STATUS_ORDER_STATUS' => 'Tilauksen tila',
    'TABLE_HEADING_TOTAL' => 'Yhteensä',
    'TABLE_HEADING_UPCOMING_PRODUCTS' => 'Tulossa',
    'TABLE_HEADING_WEIGHT' => 'Paino',
    'TEXT_ADMIN_DOWN_FOR_MAINTENANCE' => 'HUOMAUTUS: Suoritamme sivulle huoltoa parhaillaan',
    'TEXT_ALL_CATEGORIES' => 'Kaikki kategoriat',
    'TEXT_ALL_MANUFACTURERS' => 'Kaikki valmistajat',
    'TEXT_ALSO_PURCHASED_PRODUCTS' => 'Asiakkaat, jotka ostivat tämän tuotteen, ostivat myös...',
    'TEXT_APPROVAL_REQUIRED' => '<strong>HUOMAUTUS:</strong>  Arvostelut edellyttävät ennakkohyväksyntää, ennen kuin ne voidaan näyttää.',
    'TEXT_ASCENDINGLY' => 'nousevasti',
    'TEXT_ATTRIBUTES_PRICE_WAS' => ' [oli: ',
    'TEXT_ATTRIBUTES_QTY_PRICES_HELP' => 'Valinnan määräalennus',
    'TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP' => 'Valinnan määräalennuksen kertamaksu',
    'TEXT_ATTRIBUTES_QTY_PRICE_HELP_LINK' => 'Määräalennuksia saatavilla',
    'TEXT_ATTRIBUTE_IS_FREE' => ' nyt on: Ilmainen]',
    'TEXT_AUTHORIZATION_PENDING_BUTTON_REPLACE' => 'ASIAKASTUNNUKSESI ODOTTAA AKTIVOINTIA',
    'TEXT_AUTHORIZATION_PENDING_CHECKOUT' => 'Kassalle Ei saatavilla - odottaa hyväksyntää',
    'TEXT_AUTHORIZATION_PENDING_PRICE' => 'Hintaa ei saatavilla',
    'TEXT_BANNER_BOX' => 'Vieraile sponsoriemme sivuilla ...',
    'TEXT_BANNER_BOX2' => 'Tarkastele tätä tänään!',
    'TEXT_BANNER_BOX_ALL' => 'Vieraile sponsoriemme sivuilla ...',
    'TEXT_BASE_PRICE' => 'Alkaen: ',
    'TEXT_BEFORE_DOWN_FOR_MAINTENANCE' => 'HUOMAUTUS: Tämä sivusto on tarkoitus sulkea huollon vuoksi: ',
    'TEXT_BY' => ' : ',
    'TEXT_CALL_FOR_PRICE' => 'Kysy hintaa',
    'TEXT_CCVAL_ERROR_INVALID_DATE' => 'Luottokortin vanhentumis päivämäärä on virheellinen. Ole hyvä ja tarkasta päivämäärä ja yritä uudelleen.',
    'TEXT_CCVAL_ERROR_INVALID_NUMBER' => 'Luottokorttisi numero on virheellinen. Ole hyvä ja tarkista numero ja yritä uudelleen.',
    'TEXT_CCVAL_ERROR_UNKNOWN_CARD' => 'Neljä ensimmäistä numeroa olivat: %s. Jos numero on oikein, me emme hyväksy kyseistä luottokorttia. Jos numero on väärä, korjaa se ja yritä uudelleen.',
    'TEXT_CHARGES_LETTERS' => 'Laskettu hinta:',
    'TEXT_CHARGES_WORD' => 'Hinta per sana:',
    'TEXT_CLICK_TO_ENLARGE' => 'suurempi kuva',
    'TEXT_CLOSE_WINDOW_IMAGE' => ' - Sulje napsauttamalla kuva',
    'TEXT_COUPON_GV_RESTRICTION_ZONES' => 'Laskutusosoiterajoituksia sovelletaan.',
    'TEXT_COUPON_HELP_DATE' => 'Kuponki on voimassa %s asti %s välillä',
    'TEXT_COUPON_HELP_HEADER' => 'Syöttämäsi alennuskupongin lunastuskoodi on tarkoitettu ',
    'TEXT_COUPON_HELP_MINORDER' => 'Sinun täytyy kuluttaa %s käyttääksesi tämän kupongin vaatimukset täyttäviin tuotteisiin.',
    'TEXT_COUPON_LINK_TITLE' => 'katso kuponkiehdot',
    'TEXT_CURRENT_CLOSE_WINDOW' => '[ Sulje ikkuna ]',
    'TEXT_CURRENT_REVIEWS' => 'Nykyiset arvostelut:',
    'TEXT_DATE_ADDED' => 'Tämä tuote on lisätty luetteloomme %s.',
    'TEXT_DATE_ADDED_LISTING' => 'Lisäyspäivä:',
    'TEXT_DATE_AVAILABLE' => 'Tämä tuote tulee olemaan varastossa %s.',
    'TEXT_DESCENDINGLY' => 'laskevasti',
    'TEXT_DISPLAY_NUMBER_OF_ORDERS' => 'Listattuna <strong>%d</strong> - <strong>%d</strong> (tilauksesta <strong>%d</strong>)',
    'TEXT_DISPLAY_NUMBER_OF_PRODUCTS' => 'Listattuna <strong>%d</strong> - <strong>%d</strong> (tuotteesta <strong>%d</strong>)',
    'TEXT_DISPLAY_NUMBER_OF_PRODUCTS_ALL' => 'Listattuna <strong>%d</strong> - <strong>%d</strong> (tuotteesta <strong>%d</strong>)',
    'TEXT_DISPLAY_NUMBER_OF_PRODUCTS_FEATURED_PRODUCTS' => 'Listattuna <strong>%d</strong> - <strong>%d</strong> (tuote-esittelystä <strong>%d</strong>)',
    'TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW' => 'Listattuna <strong>%d</strong> - <strong>%d</strong> (uutuudesta <strong>%d</strong>)',
    'TEXT_DISPLAY_NUMBER_OF_REVIEWS' => 'Listattuna <strong>%d</strong> - <strong>%d</strong> (kommentista <strong>%d</strong>)',
    'TEXT_DISPLAY_NUMBER_OF_SPECIALS' => 'Listattuna <strong>%d</strong> - <strong>%d</strong> (tarjouksesta <strong>%d</strong>)',
    'TEXT_DOWNLOADS_UNLIMITED' => 'Rajoittamaton',
    'TEXT_DOWNLOADS_UNLIMITED_COUNT' => '--- *** ---',
    'TEXT_ERROR' => 'Tapahtui virhe',
    'TEXT_ERROR_OPTION_FOR' => ' Valinnalle: ',
    'TEXT_EZPAGES_STATUS_FOOTER_ADMIN' => 'VAROITUS: EZ-PAGES FOOTER - Näytetään vain ylläpitäjän IP-osoitteelle',
    'TEXT_EZPAGES_STATUS_HEADER_ADMIN' => 'VAROITUS: EZ-PAGES HEADER - Näytetään vain ylläpitäjän IP-osoitteelle',
    'TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN' => 'VAROITUS: EZ-PAGES SIDEBOX - Näytetään vain ylläpitäjän IP-osoitteelle',
    'TEXT_FIELD_REQUIRED' => '&nbsp;<span class="alert">*</span>',
    'TEXT_FILESIZE_BYTES' => ' tavu',
    'TEXT_FILESIZE_KBS' => ' KB',
    'TEXT_FILESIZE_MEGS' => ' MB',
    'TEXT_FILESIZE_UNKNOWN' => 'Tuntematon',
    'TEXT_FOOTER_DISCOUNT_QUANTITIES' => '* Alennukset voivat vaihdella yllä olevien vaihtoehtojen mukaan',
    'TEXT_GV_NAME' => 'Lahjakortti',
    'TEXT_GV_NAMES' => 'Lahjakortit',
    'TEXT_GV_REDEEM' => 'Lunastuskoodi',
    'TEXT_HEADER_DISCOUNTS_OFF' => 'Määräalennus ei saatavilla ...',
    'TEXT_HEADER_DISCOUNT_PRICES_ACTUAL_PRICE' => 'Määräalennuksia uusi hinta',
    'TEXT_HEADER_DISCOUNT_PRICES_AMOUNT_OFF' => 'Määräalennus',
    'TEXT_HEADER_DISCOUNT_PRICES_PERCENTAGE' => 'Määräalennus',
    'TEXT_INFO_SORT_BY' => 'Järjestä:',
    'TEXT_INFO_SORT_BY_RECOMMENDED' => 'Suositeltava',
    'TEXT_INFO_SORT_BY_PRODUCTS_DATE' => 'Saapumispäivämäärä - Vanhimmat ensin',
    'TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC' => 'Saapumispäivämäärä - Uusimmat ensin',
    'TEXT_INFO_SORT_BY_PRODUCTS_MODEL' => 'Malli',
    'TEXT_INFO_SORT_BY_PRODUCTS_NAME' => 'Tuotteen nimi',
    'TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC' => 'Tuotteen nimi - Isommasta pienempään',
    'TEXT_INFO_SORT_BY_PRODUCTS_PRICE' => 'Hinta - Pienemmästä isompaan',
    'TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC' => 'Hinta - Isommasta pienempään',
    'TEXT_INVALID_COUPON_ORDER_LIMIT' => 'Olet ylittänyt sallitun tilauksen kokonaismäärän (%2$u), käyttää kuponkia "%1$s".',
    'TEXT_INVALID_COUPON_PRODUCT' => '"%1$s" kuponkia ei voi käyttää minkään korissasi olevan tuotteen kanssa.',
    'TEXT_INVALID_FINISHDATE_COUPON' => '"%1$s" kuponki on vanhentunut %2$s.',
    'TEXT_INVALID_REDEEM_COUPON' => '"%s" Virheellinen kupongin koodi.',
    'TEXT_INVALID_REDEEM_COUPON_MINIMUM' => 'Sinun on käytettävä vähintään %2$s lunastaaksesi tämän kupongin "%1$s".',
    'TEXT_INVALID_SELECTION' => ' Valitsit virheellisen valinnan: ',
    'TEXT_INVALID_STARTDATE_COUPON' => '"%1$s"kuponki ei ole saatavilla vielä %2$s.',
    'TEXT_INVALID_USER_INPUT' => 'Käyttäjän syöttö vaaditaan<br>',
    'TEXT_INVALID_USES_COUPON' => 'Kupongia "%1$s" on jo käytetty suurimpia sallittuja aikoja (%2$u).',
    'TEXT_INVALID_USES_USER_COUPON' => 'Olet käyttänyt kuponkia "%1$s" upongin käyttökerrat jotka on sallittu yhtä asiakasta kohden (%2$u).',
    'TEXT_LETTERS_FREE' => ' Kirjainta ilmaiseksi ',
    'TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE' => 'Kirjaudu sisään nähdäksesi hinta',
    'TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM' => 'Tuoteluettelo',
    'TEXT_LOGIN_FOR_PRICE_PRICE' => 'Hintaa ei saatavilla',
    'TEXT_LOGIN_FOR_PRICE_PRICE_SHOWROOM' => '',
    'TEXT_LOGIN_TO_SHOP_BUTTON_REPLACE' => 'Kirjaudu sisään',
    'TEXT_MANUFACTURER' => 'Valmistaja:',
    'TEXT_MAXIMUM_CHARACTERS_ALLOWED' => ' kirjainta sallittu enintään',
    'TEXT_MORE_INFORMATION' => 'Saat lisätietoja vierailemalla tämän tuotteen sivulla <a href="%s" rel="noreferrer noopener" target="_blank">web-sivulle</a>.',
    'TEXT_NO_ALL_PRODUCTS' => 'Lisää tuotteita lisätään pian. Tarkista myöhemmin uudelleen.',
    'TEXT_NO_CAT_RESTRICTIONS' => 'Tämä kuponki on voimassa kaikissa tuoteryhmissä.',
    'TEXT_NO_CAT_TOP_ONLY_DENY' => 'Tällä kupongilla on erityisiä tuoterajoituksia.',
    'TEXT_NO_FEATURED_PRODUCTS' => 'Lisää suositeltuja tuotteita lisätään pian. Tarkista myöhemmin uudelleen.',
    'TEXT_NO_NEW_PRODUCTS' => 'Lisää uusia tuotteita lisätään pian. Tarkista myöhemmin uudelleen.',
    'TEXT_NO_PROD_RESTRICTIONS' => 'Tämä kuponki on voimassa kaikkiin tuotteisiin.',
    'TEXT_NO_PROD_SALES' => 'Tämä kuponki ei koske myynnissä olevia tuotteita.',
    'TEXT_NO_SHIPPING_AVAILABLE_ESTIMATOR' => 'Anteeksi, meillä ei ole online-vaihtoehtoja tämän tilauksen toimittamiseksi valittuun osoitteeseen.<br><br>Kirjaudu sisään tai muokkaa haluamaasi toimitusosoitetta saadaksesi päivitetyt tarjoukset.<br><br>Jos tarjouksia ei vieläkään ole saatavilla, ota yhteyttä niin sovitaan vaihtoehtoiset järjestelyt!',
    'TEXT_NO_REVIEWS' => 'Tällä hetkellä ei löydy tuotearvioita.',
    'TEXT_NUMBER_SYMBOL' => '# ',
    'TEXT_OF_5_STARS' => '',
    'TEXT_ONETIME_CHARGES' => '*kertamaksu = ',
    'TEXT_ONETIME_CHARGES_EMAIL' => "\t" . '*kertamaksu = ',
    'TEXT_ONETIME_CHARGE_DESCRIPTION' => ' Kertamaksuja saatetaan periä',
    'TEXT_ONETIME_CHARGE_SYMBOL' => ' *',
    'TEXT_OPTION_DIVIDER' => '&nbsp;-&nbsp;',
    'TEXT_OUT_OF_STOCK' => 'Loppu varastosta',
    'TEXT_PASSWORD_FORGOTTEN' => 'Unohditko salasanasi?',
    'TEXT_PER_LETTER' => '<br>Hinta per kirje: ',
    'TEXT_PER_WORD' => '<br>Hinta per sana: ',
    'TEXT_PRICE' => 'Hinta:',
    'TEXT_PRIVACY_CONDITIONS_CONFIRM' => 'Olen lukenut ja hyväksynyt tietosuojaselosteen.',
    'TEXT_PRIVACY_CONDITIONS_DESCRIPTION' => 'Hyväksy, tietosuojaselosteemme tiedotteemme rastittamalla seuraava ruutu. Lue <a href="' . zen_href_link(FILENAME_PRIVACY) . '"><span class="pseudolink"> tietosuojaseloste </span></a>.',
    'TEXT_PRODUCTS_LISTING_ALPHA_SORTER' => '',
    'TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES' => 'Tuotteet jotka alkavat kirjaimella ...',
    'TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES_RESET' => '-- Tyhjätä --',
    'TEXT_PRODUCTS_MIX_OFF' => '*Sekoitus pois päältä',
    'TEXT_PRODUCTS_MIX_OFF_SHOPPING_CART' => '<br>*Et voi sekoittaa ominaisuuksia saadaksesi vähittäistilausmäärää.*<br>',
    'TEXT_PRODUCTS_MIX_ON' => '*Sekoitus päällä',
    'TEXT_PRODUCTS_MIX_ON_SHOPPING_CART' => '*Minimi määrä ominaisuuksien sekoitetuilla arvoilla sallittuja<br>',
    'TEXT_PRODUCTS_QUANTITY' => 'Varastossa: ',
    'TEXT_PRODUCTS_WEIGHT' => 'Paino: ',
    'TEXT_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART' => 'Lisää: ',
    'TEXT_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART' => 'Lisää: ',
    'TEXT_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART' => 'Lisää: ',
    'TEXT_PRODUCT_MANUFACTURER' => 'Valmistaja: ',
    'TEXT_PRODUCT_MODEL' => 'Malli: ',
    'TEXT_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART' => 'Lisää: ',
    'TEXT_PRODUCT_NOT_FOUND' => 'Valitettavasti tuotetta ei löytynyt.',
    'TEXT_PRODUCT_OPTIONS' => 'Valitse: ',
    'TEXT_PRODUCT_QUANTITY' => ' Yksikkö varastossa',
    'TEXT_PRODUCT_WEIGHT' => 'Kuljetuspaino: ',
    'TEXT_PRODUCT_WEIGHT_UNIT' => ' kg',
    'TEXT_REMOVE_REDEEM_COUPON_ZONE' => 'Kuponki "%s" ei kelpaa valitsemasi osoitteeseen.',
    'TEXT_RESULT_PAGE' => '',
    'TEXT_REVIEW_BY' => 'kirjoittaja %s',
    'TEXT_REVIEW_DATE_ADDED' => 'Lisäyspäivä: %s',
    'TEXT_SEARCH_HELP' => '<p>Avainsanat voidaan erottaa ja- ja/tai OR-lauseilla, jotta hakutuloksia voidaan hallita paremmin.<br>Esimerkiksi Microsoft JA hiiri palauttaa tulokset, jotka sisältävät molemmat sanat.<br>Hiiren TAI näppäimistön kohdalla palautetut tulokset sisältävät kuitenkin molemmat tai jommankumman sanat.</p><p>Tarkat haut löytyvät laittamalla avainsanat lainausmerkkeihin.<br>Esimerkiksi, "notebook computer" palauttaisi tulokset, jotka sisältävät tarkan merkkijonon.</p><p>Sulkuja voidaan käyttää myös tulosten tarkempaan hallintaan.<br>Esimerkiksi Microsoft AND (näppäimistö TAI hiiri TAI "visual basic").</p>',
    'TEXT_SEARCH_HELP_LINK' => 'Etsi Ohje [?]',
    'TEXT_SEARCH_IN_DESCRIPTION' => 'Etsi tuotekuvauksista',
    'TEXT_SHIPPING_BOXES' => 'Laatikoita',
    'TEXT_SHIPPING_WEIGHT' => ' kg',
    'TEXT_SHOWCASE_ONLY' => 'Ota yhteyttä',
    'TEXT_SORT_PRODUCTS' => 'Lajittele tuotteet ',
    'TEXT_TOP' => 'Yläosa',
    'TEXT_TOTAL_AMOUNT' => '&nbsp;&nbsp;Summa: ',
    'TEXT_TOTAL_ITEMS' => 'Tuotteita yhteensä: ',
    'TEXT_TOTAL_WEIGHT' => '&nbsp;&nbsp;Paino: ',
    'TEXT_UNKNOWN_TAX_RATE' => 'Myyntivero',
    'TEXT_VALID_COUPON' => 'Onnittelut, että olet lunastanut alennuskupongin',
    'TEXT_WORDS_FREE' => ' Sanat ilmaiseksi ',
    'TEXT_YOUR_IP_ADDRESS' => 'IP osoitteesi: ',
    'TYPE_BELOW' => 'Kirjoita valinta alle ...',
    'WARNING_COULD_NOT_LOCATE_LANG_FILE' => 'VAROITUS: Kielitiedostoa ei löytynyt: ',
    'WARNING_NO_FILE_UPLOADED' => 'VAROITUS:  tiedostoa ei ladattu.',
    'WARNING_PRODUCT_QUANTITY_ADJUSTED' => 'Määrä on oikaistu varastoon',
    'WARNING_SHOPPING_CART_COMBINED' => 'HUOM: Tuotteet jotka lisäsit koriin viimeksi kun olit kirjautuneena sisään ovat edelleen korissa. Tarkasta ostoskorin sisältö ennen tilausta.',
];

// Definitions that require references to other definitions
    $define['ATTRIBUTES_QTY_PRICE_SYMBOL'] = zen_image(DIR_WS_TEMPLATE_ICONS . 'icon_status_green.gif', $define['TEXT_ATTRIBUTES_QTY_PRICE_HELP_LINK'], 10, 10) . '&nbsp;';
    $define['BOX_HEADING_GIFT_VOUCHER'] = $define['TEXT_GV_NAME'] . ' Tili';
    $define['BOX_INFORMATION_GV'] = $define['TEXT_GV_NAME'] . ' UKK';
    $define['ENTRY_EMAIL_PREFERENCE'] = 'Uutiskirjeen ja sähköpostin tiedot';
    if (ACCOUNT_NEWSLETTER_STATUS === '0') {
       $define['ENTRY_EMAIL_PREFERENCE'] = 'Sähköpostitiedot';
    }
    $define['ERROR_NO_INVALID_REDEEM_GV'] = 'Virheellinen ' . $define['TEXT_GV_NAME'] . ' ' . $define['TEXT_GV_REDEEM'];
    $define['ERROR_NO_REDEEM_CODE'] = 'Et antanut ' . $define['TEXT_GV_REDEEM'] . 'a.';
    $define['ERROR_REDEEMED_AMOUNT'] = 'Onnittelut, olet lunastanut ';
    $define['GV_FAQ'] = $define['TEXT_GV_NAME'] . ' UKK';
    $define['TABLE_HEADING_CREDIT'] = 'Krediittejä saatavilla';
    $define['TEXT_AVAILABLE_BALANCE'] = 'Sinun ' . $define['TEXT_GV_NAME'] . ' Tilisi';
    $define['TEXT_BALANCE_IS'] = 'Sinun ' . $define['TEXT_GV_NAME'] . ' tilisi arvo on: ';
    $define['TEXT_COUPON_GV_RESTRICTION'] = '<p class="smallText">Alennuskuponkeja ei voi käyttää ostoon ' . $define['TEXT_GV_NAMES'] . '. Rajoitus 1 kuponki per tilaus.</p>';
    $define['TEXT_SEND_OR_SPEND'] = 'Sinun ' . $define['TEXT_GV_NAME'] . ' tilillä on rahaa. Voit käyttää ne omiin ostoksiisi tai lähettää niitä eteenpäin sähköpostilla.';
    $define['VOUCHER_BALANCE'] = $define['TEXT_GV_NAME'] . ' Tilin arvo ';

return $define;