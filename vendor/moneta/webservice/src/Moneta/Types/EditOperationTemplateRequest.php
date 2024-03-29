<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;

/**
 * Запрос на редактирование шаблона операции.
	 * 
 */
class EditOperationTemplateRequest extends OperationTemplate
{
	
	/**
	 * Платежный пароль счета плательщика.
	 * Поле необходимо указывать,
	 * если редактируется шаблон для регулярного выполнения (с типом OperationTemplateType.REGULAR)
	 * и в запросе есть хотя бы один из элементов:
	 * payer
	 * payee
	 * regularParameters.amountInfo
	 * regularParameters.timeInfo
	 * operationInfo
	 * Payment password for the payer's account.
	 * 
	 *
	 * @var AbstractAttributeObject
	 */
	 public $paymentPassword = null;

}
