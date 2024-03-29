<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;

/**
 * Запрос на поиск и чтение шаблонов.
	 * Шаблоны можно искать либо по "идентификатору шаблона", либо по "фильтру".
	 * Если поиск был по "идентификатору шаблона", то в результате будет список, состоящий из одного элемента. Если шаблон не найден, то будет ошибка с кодом: 500.5.20.
	 * Если поиск был по "фильтру", то в результате будет список найденных шаблонов. Если шаблоны не найдены, будет пустой список.
	 * При поиске шаблонов по "фильтру" в ответе будут заполнены не все поля шаблона (например, не будет информации о "метках" и "operationInfo").
	 * 
 */
class FindOperationTemplatesRequest
{
	
}
