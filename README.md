## PagOnline Sdk Library
### This sdk is same as (mattiabasone/PagOnline)[https://github.com/mattiabasone/PagOnline] but whit remove all laravel dependency

This library can be used with PagOnline Payment Gateway and it can be easily integrated in Laravel.

With this package I'm trying to improve the crappy IGFS CG PHP Library provided by PagOnline Payment gateway.

### Basic Usage

Demo scripts can be found in `tests/demo`, example Init Request:

```php
<?php 

require __DIR__.'/vendor/autoload.php';

$init = new \VanssataPagOnlineSDK\Init\IgfsCgInit();
$init->serverURL = "https://payment-gateway-example.com/IGFS_CG_SERVICES/services";
$init->tid = "MY-TID-CODE";
$init->kSig = '1234567890987654321';
$init->shopID = 'my-transaction-id';
$init->shopUserRef = "email@example.org";
$init->trType = "AUTH";
$init->currencyCode = "EUR";
$init->amount = 500; // Amount without comma (500 = 5,00)
$init->langID = "IT";
$init->notifyURL = "http://my-domain.tld/verify.php";
$init->errorURL = "http://my-domain.tld/error.php";
$init->addInfo1 = 'myFirstAddintionalInfo';

// if you need to edit http client parameters...
$init->setRequestTimeout(10); // Seconds
$init->setConnectTimeout(5); // Seconds
$init->setHttpProxy('tcp://some.proxy'); // Proxy server for requests
$init->setHttpAuthUser('username'); // HTTP Basic Auth username
$init->setHttpAuthPass('password'); // HTTP Basic Auth password

if (!$init->execute()) {
    // Something went wrong
} else {
    // Redirect user to payment gateway
    header("location: ".$init->redirectURL);
}
```

#### .env file configuration
Set the following environment variables in your `.env` file:
- `PAGONLINE_SERVER_URL` payment gateway server url (_default: null_)
- `PAGONLINE_REQUEST_TIMEOUT` maximum timeout in seconds for completing a request (_default: 15_)
- `PAGONLINE_CONNECT_TIMEOUT` maximum timeout in seconds for connecting to the server (_default: 5_)
- `PAGONLINE_TERMINAL_ID` identifier provided by the payment gateway (_default: null_)
- `PAGONLINE_SIGNATURE_KEY` signature key provided by the payment gateway (_default: null_)
- `PAGONLINE_CURRENCY_CODE` currency code (_default: EUR_)
- `PAGONLINE_LANGUAGE_ID` language code (_default: IT_)
