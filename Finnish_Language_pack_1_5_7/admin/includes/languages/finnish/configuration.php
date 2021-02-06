<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |   
// | http://www.zen-cart.com/index.php                                    |   
// |                                                                      |   
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: configuration.php 1105 2005-04-04 22:05:35Z birdbrain $
//
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation Ver. 1.5.7 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
define('TABLE_HEADING_CONFIGURATION_TITLE', 'Nimi');
define('TABLE_HEADING_CONFIGURATION_VALUE', 'Arvo');
define('TABLE_HEADING_ACTION', 'Toiminto');

define('TEXT_INFO_EDIT_INTRO', 'Tee tarvittavat muutokset');
define('TEXT_INFO_DATE_ADDED', 'Lisäyspäivä:');
define('TEXT_INFO_LAST_MODIFIED', 'Viimeksi muokattu:');
define('TEXT_MIN_ADMIN_USER_LENGTH', 'Sen on oltava pituudeltaan vähintään 4.');
// Validation defines
define('TEXT_DATA_OUT_OF_RANGE', 'Tiedot ovat alueen ulkopuolella');
define('TEXT_MIN_GENERAL_ADMIN', 'Vähimmäisarvo syötetty arvo ei ollut kokonaisluku (kokonaisluku).');
define('TEXT_MAX_GENERAL_ADMIN', 'Maksimiarvona syötetty arvo ei ollut kokonaisluku (kokonaisluku).');

// These are the same now but may diverge in the future, so it's useful to have separate constants 
define('TEXT_MIN_ADMIN_FIRST_NAME_LENGTH','Arvon on oltava kokonaisluku'); 
define('TEXT_MIN_ADMIN_LAST_NAME_LENGTH','Arvon on oltava kokonaisluku'); 
define('TEXT_MIN_ADMIN_DOB_LENGTH','Arvon on oltava kokonaisluku'); 
define('TEXT_MIN_ADMIN_EMAIL_ADDRESS_LENGTH','Arvon on oltava kokonaisluku'); 
define('TEXT_MIN_ADMIN_STREET_ADDRESS_LENGTH','Arvon on oltava kokonaisluku'); 
define('TEXT_MIN_ADMIN_COMPANY_LENGTH', 'Arvon on oltava kokonaisluku'); 
define('TEXT_MIN_ADMIN_POSTCODE_LENGTH','Arvon on oltava kokonaisluku'); 
define('TEXT_MIN_ADMIN_CITY_LENGTH', 'Arvon on oltava kokonaisluku'); 
define('TEXT_MIN_ADMIN_STATE_LENGTH', 'Arvon on oltava kokonaisluku'); 
define('TEXT_MIN_ADMIN_TELEPHONE_LENGTH', 'Arvon on oltava kokonaisluku'); 
define('TEXT_MIN_ADMIN_PASSWORD_LENGTH','Arvon on oltava kokonaisluku'); 
define('TEXT_MIN_ADMIN_CC_OWNER_LENGTH', 'Arvon on oltava kokonaisluku'); 
define('TEXT_MIN_ADMIN_CC_NUMBER_LENGTH','Arvon on oltava kokonaisluku'); 
define('TEXT_MIN_ADMIN_CC_CVV_LENGTH', 'Arvon on oltava kokonaisluku'); 
define('TEXT_MIN_ADMIN_REVIEW_LENGTH', 'Arvon on oltava kokonaisluku'); 
define('TEXT_MIN_ADMIN_DISPLAY_BESTSELLERS_LENGTH', 'Arvon on oltava kokonaisluku');
define('TEXT_MIN_ADMIN_DISPLAY_ALSO_PURCHASED_LENGTH', 'Arvon on oltava kokonaisluku');
define('TEXT_MIN_ADMIN_ENTRY_NICK_LENGTH', 'Arvon on oltava kokonaisluku');

// Max values 
define('TEXT_MAX_ADMIN_ADDRESS_BOOK_ENTRIES_LENGTH', 'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_DISPLAY_SEARCH_RESULTS_LENGTH', 'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_DISPLAY_PAGE_LINKS_LENGTH',  'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_DISPLAY_PAGE_LINKS_MOBILE_LENGTH', 'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_DISPLAY_SPECIAL_PRODUCTS_LENGTH', 'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_DISPLAY_NEW_PRODUCTS_LENGTH', 'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_DISPLAY_UPCOMING_PRODUCTS_LENGTH', 'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_MANUFACTURERS_LIST_LENGTH', 'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_MUSIC_GENRES_LIST_LENGTH', 'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_RECORD_COMPANY_LIST_LENGTH', 'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_RECORD_COMPANY_NAME_LENGTH', 'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_MUSIC_GENRES_NAME_LENGTH', 'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_DISPLAY_MANUFACTURERS_NAME_LENGTH', 'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_DISPLAY_NEW_REVIEWS_LENGTH', 'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_RANDOM_SELECT_REVIEWS_LENGTH', 'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_RANDOM_SELECT_NEW_LENGTH', 'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_RANDOM_SELECT_SPECIALS_LENGTH', 'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_DISPLAY_CATEGORIES_PER_ROW_LENGTH', 'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_DISPLAY_PRODUCTS_NEW_LENGTH', 'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_DISPLAY_BESTSELLERS_LENGTH', 'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_DISPLAY_ALSO_PURCHASED_LENGTH', 'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_DISPLAY_PRODUCTS_IN_ORDER_HISTORY_BOX_LENGTH', 'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_DISPLAY_ORDER_HISTORY_LENGTH', 'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_DISPLAY_SEARCH_RESULTS_CUSTOMER_LENGTH', 'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_DISPLAY_SEARCH_RESULTS_ORDERS_LENGTH', 'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_DISPLAY_SEARCH_RESULTS_RESULTS_LENGTH', 'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_DISPLAY_RESULTS_CATEGORIES_LENGTH', 'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_DISPLAY_PRODUCTS_LISTING_LENGTH', 'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_ROW_LISTS_OPTIONS_LENGTH','Arvon on oltava kokonaisluku.');
define('TEXT_MAX_ADMIN_ROW_LISTS_ATTRIBUTES_CONTROLLER_LENGTH','Arvon on oltava kokonaisluku.');
define('TEXT_MAX_ADMIN_DISPLAY_SEARCH_RESULTS_DOWNLOADS_MANAGER_LENGTH','Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_DISPLAY_SEARCH_RESULTS_FEATURED_ADMIN_LENGTH','Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_DISPLAY_SEARCH_RESULTS_FEATURED_LENGTH','Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_DISPLAY_SEARCH_RESULTS_FEATURED_PRODUCTS_LENGTH','Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_RANDOM_SELECT_FEATURED_PRODUCTS_LENGTH','Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_DISPLAY_SPECIAL_PRODUCTS_INDEX_LENGTH','Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_SHOW_NEW_PRODUCTS_LIMIT_LENGTH','Arvon on oltava kokonaisluku.');
define('TEXT_MAX_ADMIN_LANGUAGE_FLAGS_COLUMNS_LENGTH','Arvon on oltava kokonaisluku.');
define('TEXT_MAX_ADMIN_DISPLAY_RESULTS_ORDERS_DETAILS_LISTING_LENGTH','Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_DISPLAY_SEARCH_RESULTS_PAYPAL_IPN_LENGTH', 'Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_DISPLAY_PRODUCTS_TO_CATEGORIES_COLUMNS_LENGTH','Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_ADMIN_DISPLAY_SEARCH_RESULTS_EZPAGE_LENGTH','Arvon on oltava kokonaisluku.'); 
define('TEXT_MAX_PREVIEW','Arvon on oltava kokonaisluku.'); 

