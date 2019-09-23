<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;
/**
 * Периодичность выполнения шаблона.
	 * 
 */
class OperationTemplateTimeInfoType
{

	/**
	 * Один раз.
	 * 
	 *
	 * @var string
	 */
	const ONCE = 'ONCE';

	/**
	 * Каждый день.
	 * 
	 *
	 * @var string
	 */
	const EVERY_DAY = 'EVERY_DAY';

	/**
	 * Каждый рабочий день.
	 * 
	 *
	 * @var string
	 */
	const EVERY_WORKDAY = 'EVERY_WORKDAY';

	/**
	 * Каждую неделю.
	 * 
	 *
	 * @var string
	 */
	const EVERY_WEEK = 'EVERY_WEEK';

	/**
	 * Каждый месяц.
	 * 
	 *
	 * @var string
	 */
	const EVERY_MONTH = 'EVERY_MONTH';

	/**
	 * Каждый последний день месяца.
	 * 
	 *
	 * @var string
	 */
	const EVERY_LAST_DAY_OF_MONTH = 'EVERY_LAST_DAY_OF_MONTH';

	/**
	 * Каждый год.
	 * 
	 *
	 * @var string
	 */
	const EVERY_YEAR = 'EVERY_YEAR';

}