<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;

/**
 * Тип для запроса подтверждения операции.
	 * Parameters for requests that confirm transactions.
	 * 
 */
class ConfirmTransactionRequestType
{
	
	/**
	 * Номер операции.
	 * Transaction ID.
	 * 
	 *
	 * @var long
	 */
	 public $transactionId = null;

	/**
	 * Платежный пароль счета плательщика.
	 * Payment password for the payer's account.
	 * 
	 *
	 * @var normalizedString
	 */
	 public $paymentPassword = null;

	/**
	 * Код протекции.
	 * Protection code.
	 * 
	 *
	 * @var string
	 */
	 public $protectionCode = null;

	/**
	 * Набор полей, которые необходимо сохранить в качестве атрибутов операции. Значения дат в формате dd.MM.yyyy HH:mm:ss
	 * Key-value pairs that will be saved as transaction attributes. For dates, use the following format: dd.MM.yyyy HH:mm:ss
	 * 
	 *
	 * @var OperationInfo
	 */
	 public $operationInfo = null;

	/**
	 * Сумма операции.
	 * Если флаг isPayerAmount отсутствует и пользователь имеет доступ только к счету плательщика, то интерпретируется как сумма к списанию (в валюте плательщика).
	 * Если флаг isPayerAmount отсутствует и пользователь имеет доступ только к счету получателя, то интерпретируется как сумма к зачислению (в валюте получателя).
	 * Transaction amount. The currency of the transaction is specified by the isPayerAmount
	 * element. If a request does not include the isPayerAmount element, MONETA.RU uses the
	 * following rules to determine the currency of the transaction:
	 * If a user has access only to the payer's account, MONETA.RU uses the currency of the payer's account for the transaction.
	 * If a user has access only to the payee's account, MONETA.RU uses the currency of the payee's account for the transaction.
	 * 
	 *
	 * @var decimal
	 */
	 public $amount = null;

	/**
	 * Если пользователь имеет доступ как к счету плательщика, так и счету получателя, то флаг isPayerAmount обязателен.
	 * Если флаг isPayerAmount установлен (true), то amount используется как сумма к списанию (в валюте плательщика).
	 * Если флаг isPayerAmount сброшен (false), то amount используется как сумма к зачислению (в валюте получателя).
	 * This element is required if a user has access to the payer's and to the payee's accounts. Valid values:
	 * true. MONETA.RU uses the currency of the payer's account for the transaction amount.
	 * false. MONETA.RU uses the currency of the payee's account for the transaction amount.
	 * 
	 *
	 * @var boolean
	 */
	 public $isPayerAmount = null;

	/**
	 * Запрос для платежного пароля.
	 * Challenge passcode that you received in the GetAccountPaymentPasswordChallenge response in the paymentPasswordChallenge element. Specify this element in the following cases:
	 * If a user gets payment passwords by SMS, set paymentPasswordChallenge to SMS. Set paymentPassword to the value that the user receives in the SMS from MONETA.RU.
	 * If a user gets a sequence number (index) for a password from a list of transaction authentication numbers (TANs), set paymentPasswordChallenge to the TAN index. Set paymentPassword to the TAN that has the specified index.
	 * 
	 *
	 * @var string
	 */
	 public $paymentPasswordChallenge = null;

	/**
	 * Внешний номер операции.
	 * Merchant transaction ID.
	 * 
	 *
	 * @var string
	 */
	 public $clientTransaction = null;

	/**
	 * Персональные данные пользователя.
	 * Personal information.
	 * 
	 *
	 * @var PersonalInformation
	 */
	 public $personalInformation = null;

}