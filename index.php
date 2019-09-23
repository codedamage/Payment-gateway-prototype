<?php
include_once(__DIR__ . "/vendor/autoload.php");
$monetaSDK = new Moneta\MonetaSdk();



$monetaSDK->processCleanChoosenPaymentSystem();
$monetaSDK->showCreateUserForm();



$tid = rand(10000, 99999); // TRANSACTION ID
$amount = '100';
$email = 'example@mail.com';

$result = $monetaSDK->showPaymentFrom($tid, $amount, 'RUB', 'Оплата заказа #'.$tid.'');
echo $result->render;



// CREATING USER AND TRANSACTION

$transaction = R::dispense( 'transactions' );
$transaction->tid = $tid;
$transaction->amount = $amount;
$transaction->email = $email;
$transaction->status = '0';
$id = R::store( $transaction );
