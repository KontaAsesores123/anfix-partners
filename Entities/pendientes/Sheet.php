<?php

/*
* 2006-2015 Lucid Networks
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
*
* DISCLAIMER
*
*  Date: 9/2/16 18:57
*  @author Networkkings <info@lucidnetworks.es>
*  @copyright  2006-2015 Lucid Networks
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*/

namespace Anfix;

class Sheet extends StaticModel
{
    private static $applicationId = '3';
	
   /*
	* Generación del Balance de situación.
	* @param array $params Parámetros
	* @param $companyId Identificador de la empresa
	* @return Object
	*/
	public static function balance(array $params,$companyId){
		$obj = new static([],false,$companyId);
        $result = self::send($params,$companyId,'balance');
        return $result->outputData->{$obj->Model};
	}
	
   /*
	* Generación de la cuenta de Pérdidas y ganancias.
	* @param array $params Parámetros
	* @param $companyId Identificador de la empresa
	* @return Object
	*/
	public static function pyg(array $params,$companyId){
		$obj = new static([],false,$companyId);
        $result = self::send($params,$companyId,'pyg');
        return $result->outputData->{$obj->Model};
	}

}