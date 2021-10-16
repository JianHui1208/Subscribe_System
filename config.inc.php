<?php
/*
 Database Credentials 
 Enter you database connection details below
*/
define('DATABASE_HOST', 'localhost');
define('DATABASE_USER', 'ENTER_DB_USER_HERE');
define('DATABASE_PASS', 'ENTER_DB_PASS_HERE');
define('DATABASE_NAME', 'ENTER_DB_NAME_HERE');

/*
Enter your SITE URL 
*/
define('FULL_SITE_URL', 'https://your-site-url.here');

/*
  App name
*/
define('APP_NAME', 'ENTER APP NAME HERE (ie. FansOnly - will appear in emails)');
/*
 App debug - configure if you want to see errors instead of - 500 error
*/
define('APP_DEBUG', true);

/* 
 App Locale - if you translate the app in order to translate dates put your locate here
 */
define('APP_LOCALE', 'en');

/*
Do not edit after this line: go to Admin Panel -> Mail Configuration instead
============================
*/
define('MAIL_DRIVER', 'smtp');
define('MAIL_HOST', 'smtp.mailtrap.io');
define('MAIL_PORT', '465');
define('MAIL_USERNAME', '48852d2588b2d1568');
define('MAIL_PASSWORD', '0f1004f0375517');
define('MAIL_ENCRYPTION', 'tls');
define('MAIL_FROM_ADDRESS', 'support@example.org');

/*
Don't edit here
*/
define('APP_KEY', 'base64:hPCchEh20pC+H/Xzsyj07kv19ZYZqQ3kpv8Qbmy04sY=');