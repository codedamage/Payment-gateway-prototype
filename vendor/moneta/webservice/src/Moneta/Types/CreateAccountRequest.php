<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;

/**
 * Запрос на создание счета. Счет создается для указанного пользователя или, если это поле не указано - для текущего пользователя.
	 * Request for creating a MONETA.RU account for the user that is specified in the unitId element. If unitId is omitted, an account is created for the current user.
	 * 
 */
class CreateAccountRequest
{
	
	/**
	 * Валюта счета.
	 * Account currency.
	 * 
	 *
	 * @var string
	 */
	 public $currency = null;

	/**
	 * Название счета. Название счета должно быть уникальным среди счетов одного пользователя.
	 * Account alias. Specify a unique name among the other accounts of the specified user.
	 * 
	 *
	 * @var string
	 */
	 public $alias = null;

	/**
	 * Тип платежного пароля
	 * Payment password type
	 * 
	 *
	 * @var string
	 */
	 public $paymentPasswordType = null;

	/**
	 * Платежный пароль. Минимальная длина - 5 символов.
	 * Payment password. Minimum length is 5 symbols.
	 * 
	 *
	 * @var string
	 */
	 public $paymentPassword = null;

	/**
	 * Пользователь, которому будет принадлежать данный счет. Если это поле не задано, то счет создается для текущего пользователя.
	 * The owner of the account. If you omit this element, the account will belong to the current user.
	 * 
	 *
	 * @var long
	 */
	 public $unitId = null;

	/**
	 * URL после списания средств.
	 * Specifies the URL of the script that MONETA.RU calls after debiting the payer's account.
	 * 
	 *
	 * @var string
	 */
	 public $onSuccessfulDebitUrl = null;

	/**
	 * URL после зачисления средств.
	 * Specifies the URL of the script that MONETA.RU calls after crediting the payee's account.
	 * 
	 *
	 * @var string
	 */
	 public $onSuccessfulCreditUrl = null;

	/**
	 * Код проверки целостности данных.
	 * Signature that MONETA.RU uses to verify data integrity submitted from a payment form.
	 * 
	 *
	 * @var string
	 */
	 public $signature = null;

	/**
	 * Если баланс счета меньше данного значения, то раз в сутки уходит уведомление об этом событии.
	 * Specifies the minimum balance threshold for an account. If the balance drops below the threshold, MONETA.RU sends daily notifications to the account owner.
	 * 
	 *
	 * @var decimal
	 */
	 public $lowBalanceThreshold = null;

	/**
	 * Если баланс счета больше данного значения, то раз в сутки уходит уведомление об этом событии.
	 * Specifies the maximum balance threshold for an account. If the balance exceeds the threshold, MONETA.RU sends daily notifications to the account owner.
	 * 
	 *
	 * @var decimal
	 */
	 public $highBalanceThreshold = null;

	/**
	 * Счет-прототип с которого берутся свойства "по умолчанию".
	 * Prototype account number. Settings from this account are used as default values.
	 * 
	 *
	 * @var long
	 */
	 public $prototypeAccountId = null;

	/**
	 * URL после отмены списания средств.
	 * Specifies the URL of the script that MONETA.RU calls if a debit transaction is canceled.
	 * 
	 *
	 * @var string
	 */
	 public $onCancelledDebitUrl = null;

	/**
	 * URL после отмены зачисления средств.
	 * Specifies the URL of the script that MONETA.RU calls if a deposit transaction is canceled.
	 * 
	 *
	 * @var string
	 */
	 public $onCancelledCreditUrl = null;

	/**
	 * Свойства счета.
	 * Данные представляются в виде "ключ-значение". Возможные ключи:
	 * alias. Название счета. Название счета должно быть уникальным среди счетов одного пользователя.
	 * Если необходимо Название счета (Псевдоним) сделать публичным, то в элементе attribute для поля alias следует передать элемент published со значение true.
	 * Account properties.
	 * Information about an account contains a list of key-value pairs. Valid keys for account are:
	 * alias. Account alias. Specify a unique name among the other accounts of the specified user.
	 * 
	 *
	 * @var KeyValueAttribute
	 */
	 public $attribute = null;

	/**
	 * Свойства счета.
	 * Данные представляются в виде "ключ-значение". Возможные ключи:
	 * alias. Название счета. Название счета должно быть уникальным среди счетов одного пользователя.
	 * Если необходимо Название счета (Псевдоним) сделать публичным, то в элементе attribute для поля alias следует передать элемент published со значение true.
	 * Account properties.
	 * Information about an account contains a list of key-value pairs. Valid keys for account are:
	 * alias. Account alias. Specify a unique name among the other accounts of the specified user.
	 * 
	 *
	 * @param KeyValueAttribute
	 *
	 * @return void
	 */
	public function addAttribute(KeyValueAttribute $item)
	{
		$this->attribute[] = $item;
	}

}
