<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;

/**
 * Запрос возможности провести операцию в системе МОНЕТА.РУ. Отличается от VerifyTransferRequest тем, что в качестве получателя можно указывать не только номер счета.
	 * Transaction validation request. Unlike VerifyTransferRequest, the payee element in this request can specify not only an account number, but also a transaction ID, e-mail address, or phone number.
	 * 
 */
class VerifyPaymentRequest extends PaymentRequestType
{
	
}
