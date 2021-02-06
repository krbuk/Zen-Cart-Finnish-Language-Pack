Finnish language pack

For ZenCart version 1.5.7
Revision 5 (27.01.2021)
Released under GNU General Public License, version 2 (GPL v.2)

Finnish translation update v1.5.7 by Nida Verkkopalvelu Oy www.nida.fi (Ihsan Yuz) <ihsan@nida.fi>

Thanks to:
 -> Translated by JNT Finland Oy - Pasi Rajala <pasi.rajala@jnt-finland.fi> for the translation for 1.5.0 version 
 -> Text partially verified by Marika Rajala <mia-marika.rajala@jnt-finland.fi>
 -> FrilansReklam for the translation for 1.3.9 version. (Thou this release is not based on their work)
 -> Joni Borgström <joni.borgstrom@it-idea.fi> 
 -> Laeticia @ ZenCart Forum
 -> Ricambi Heikka (www.heikka.fi) for finding a too obvious spelling error!
 -> Moto-Häme (www.moto-hame.fi) for pointing out some encoding errors.

Releases:
 - ZC 1.5.7  rev. 5 Released 27.01.2021
 - ZC 1.5.6c rev. 4 Released 24.07.2019
 - ZC 1.5.5  rev. 3 Released 01.01.2018
 - ZC 1.5.0  rev. 2 Released 04.01.2012
 - ZC 1.5.0  rev. 1 Released 15.11.2011
 - v.1.5 Released 15.12.2009
 - v.1.4 Released 02.01.2008
 - v.1.3 Released 30.12.2006
 - v.1.2 Released 22.11.2006

-------------------------------------------------------------
CHANGES
1.5.7 Rev 5:
Updated to ZenCart 1.5.7 All files are UTF-8

1.5.6c Rev 4:
Updated to ZenCart 1.5.6c. All files are now UTF-8

1.5.5 Rev 3:
Updated to ZenCart 1.5.5. All files are now UTF-8

1.5.0 Rev 2:
Added a missing constant into admin main language file.

1.5.0 Rev 1:
Notice new versioning schema: For ZenCart version X.X.X + revision.
Updated to ZenCart 1.5.0.
All files are now UTF-8
Spelling errors corrected where found.
Some missing admin image buttons added and translated.
Added HTML templates for emails.
Included MD5 checksums of original files.
Included basic PHP syntax check log to verify everything is ok.
Made file and directory default permissions sane 
Updated all file timestamps for better tracking of changed files.

-------------------------------------------------------------
This package has been tested well, but errors are quaranteed.
-------------------------------------------------------------
INSTALL:

Move the includes/ and admin/ directory (and sub dirs) to
your ZenCart root and add the language in the admin pages
(refer to ZenCart documentation on how to do this).

Move the buttons/ directory to your templates button directory.

Optional: Move the email/ directory to the root directory.
(you should make your own templates anyway!)

That's it... Enjoy!

NOTE: Remember to edit the define_pages and customize the E-mails if neccessary.

-------------------------------------------------------------
CURRENT STATUS:

99% of all files are translated. The ones that are not translated are mostly shipping/payment modules
not available in Finland anyway.

Things todo in catalog side:
 - Mostly spell checking and checking that everything is translated correctly

Things todo in admin side:
 - Further spell checking needed
 - Some of the strings were translated without prior knowledge of how certain functions work
   and may be totally incorrect!

Files not translated:
client -> languages/finnish/modules/payment/authorizenet.php
client -> languages/finnish/modules/payment/authorizenet_aim.php
client -> languages/finnish/modules/payment/firstdata_hco.php
client -> languages/finnish/modules/payment/paypal.php
client -> languages/finnish/modules/payment/paypaldp.php
client -> languages/finnish/modules/payment/paypalwpp.php
client -> languages/finnish/modules/payment/square.php
zc_plugins