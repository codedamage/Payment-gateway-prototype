<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;
/**
 * Категория операции.
	 * Transaction category.
	 * 
 */
class OperationTypeCategory
{

	/**
	 * Ввод средств.
	 * Operations that deposit funds to your MONETA.RU account.
	 * 
	 *
	 * @var string
	 */
	const DEPOSIT = 'DEPOSIT';

	/**
	 * Вывод средств.
	 * Operations that withdraw funds from your MONETA.RU account to an external payment system.
	 * 
	 *
	 * @var string
	 */
	const WITHDRAWAL = 'WITHDRAWAL';

	/**
	 * Внутренний перевод.
	 * Operations that transfer funds from your MONETA.RU account to another MONETA.RU account that belongs to you or to a different user. This operation type also includes currency exchange operations.
	 * 
	 *
	 * @var string
	 */
	const TRANSFER = 'TRANSFER';

	/**
	 * Товары и услуги.
	 * Merchant operations that include payments to a store, refunds, all MONETA.Assistant operations.
	 * 
	 *
	 * @var string
	 */
	const BUSINESS = 'BUSINESS';

}
