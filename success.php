<?php
include_once(__DIR__ . "/vendor/autoload.php");
$monetaSDK = new Moneta\MonetaSdk();
$result = $monetaSDK->processInputData();
echo $result->render;


$tid = $_GET['MNT_TRANSACTION_ID'];

// UNDATING DB
$transaction = R::findOne('transactions', 'tid = '.$tid.'');
$transaction->status = '1';
R::store( $transaction );