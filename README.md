## BtcTurk Api V1 PHP Client

Bu Api ile Neler Yapılır ?
-------------

    - [x] Tüm işlem çiftleri için anlık fiyat bilgisi alınabilir.
    - [x] Tüm işlem çiftleri için alış ve satışlardaki değerler görüntülenebilir.
    - [x] BTC market geçmişi görüntülenebilir.
    - [x] Günlük BTC fiyat grafiği mumlarına erişilebilir.
    - [x] Kullanıcı Alış/Satış işlem geçmişi görüntülenebilir.
    - [x] Açık Emirler görüntülenebilir.
    - [x] Tüm bakiyeler görüntülenebilir.
    - [x] Emir iptali yapılabilir.
    - [x] Alış ve satışta Market, Limit ve Stop Limit emir tipleri kullanılabilir.


> English Document


PHP wrapper class for Btcturk API V1 
-------------

This class is a wrapper for the Btcturk cryptocurrency trading platform API (https://www.btcturk.com/api).
You can use it to check market values, place or cancel orders, write your own trading bot, etc.

Requirements
-------------
* You obviously need a BtcYurk account. https://www.btcturk.com/
* You need to create an API key on your account settings

Usage 
-------------

	$key = 'PUBLIC_KEY'; // use your key and secret
	$secret = 'PRIVATE_KEY';

	$request = new BtcTurk ($key, $secret);
	
	$list = $request->getBalances();




> Türkçe Döküman


PHP Btcturk API Class
-------------

Bu Class Btcturk Api v1 için yapılmıştır (https://www.btcturk.com/api).
Piyasa değerlerini kontrol etmek, bakiyeniz ile ticaret yapmak, kendi ticaret botunuzu yazmak vs. için kullanabilirsiniz.


Gereksinimler
-------------

* Bir Btcturk Hesabı https://www.btcturk.com/
* Hesap > Api Erişimi kısmından bir Api hesabı oluşturmak

Kullanımı
-------------

	$key = 'PUBLIC_KEY'; // API Erişimi sayfasında API anahtarı oluşturup Public ve Private Key'lerini kullanın
	$secret = 'PRIVATE_KEY';

	$request = new BtcTurk ($key, $secret);
	
	$list = $request->getBalances();


[Source](https://github.com/BTCTrader/broker-api-docs)

License
-----

BtcTurk-Api is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

Donations/Support
-----

If you find this library to your liking and enjoy using it, please consider a donation to one of the following addresses:
* BTC: 18EzrJFZpTbBZ4aHe2w33rTDiQtWdHx3CM
* ETH: 0x40e9b726748DCC1a4D0f4cC7168b1215459a83Bd
