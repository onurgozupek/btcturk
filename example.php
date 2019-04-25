<?php


include("src/Client.php");

$key = 'PUBLIC_KEY'; // Your API Public Key
$secret = 'PRIVATE_KEY';  // Your API Private Key

$request = new BtcTurk ($key, $secret);

// Check balances
print_r($request->getBalances());

// Market Sell Order for XMLTRY pair
print_r($request->getMarketSell("XLMTRY","20","00", 4));

// Market Buy Order for BTCTRY pair
print_r($request->getMarketBuy("BTCTRY","0","01", 2));

// Stop Buy Order for XLMTRY pair
// Place 20.00XLM buy order at 0.6000TRY when last price is 0.6140
print_r($request->getStopBuy("XLMTRY","20","00","0","6000","0","6140", 4));

// Stop Sell Order for XLMTRY pair
// Place 20.75XRP sell order at 1.80TRY when last price is 1.81
print_r($request->getStopSell("XRPTRY","20","75","1","80","1","81", 2));

// Limit Buy Order for XLMTRY pair
// Place 20.00XLM buy order at 0.6000TRY
print_r($request->getLimitBuy("XLMTRY","20","00","0","6000", 4));

// Limit Sell Order for XLMTRY pair
// Place 20.75XRP sell order at 1.80TRY
print_r($request->getLimitSell("XRPTRY","20","75","1","80", 2));
