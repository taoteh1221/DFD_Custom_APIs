
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Developed by Michael Kilday <mike@dragonfrugal.com>, released free / open source under GPL v3
https://dragonfrugal.com/downloads/
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

This is a PHP-based RESTful API interface for connecting to multiple APIs. Currently in the works are Bitcoin / Ethereum / STEEM custom APIs, with more to come in the future. You can add you own API by using the BLANK.api.class.php template file in /lib/classes/custom-api/, and adding that API in the allowed APIs in the config.php file. You must set you API key creation password on the web page /api/v1/create-api-key.php after uploading to your server. If you have any issues with this, make sure your /api/v1/data/ directory is fully writable (chmod 777 on linux) on your server filesystem.

The /client/ directory can be installed on any remote PHP webserver, seperate from the server you install the /api/ directory on. A connection example is in /client/request-params.php. Adjust as needed for your API requests in this file.

See API_NAME.README.txt files for specifics on configuring your particular API(s) in this script, so they connect to your native application(s) remote interface(s) smoothly.

Feature requests and bug reports can be filed at the following URLS:

https://github.com/taoteh1221/DFD_Custom_APIs/issues

https://dragonfrugal.com/contact/

Donations are welcome to support further development... 

BTC: 1FfWHekHPLH7hQcU4d5MBVQ4WekJiA8Mk2 

ETH: 0xf3da0858c3cfcc28a75c1232957a7fb190d7e5e9

STEEM: taoteh1221

MANY OTHER CRYPTOCURRENCIES AND PAYPAL ACCEPTED HERE: https://dragonfrugal.com/donate/
