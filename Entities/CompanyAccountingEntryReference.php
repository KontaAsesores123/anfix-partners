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

class CompanyAccountingEntryReference extends BaseModel
{
    protected $applicationId = '3';
    protected $apiUrlSufix = 'company/accountingentryreference/';
    protected $update = true;
    protected $create = true;
    protected $delete = true;

    /*
     * Completar asiento contable a partir de asiento predefinido.
	 * @param array $params AccountingPeriodYear, AccountingEntryPredefinedEntryId y CompanyAccountingAccountNumber obligatorios
     * @param $companyId Identificador de la empresa
     * @return Object
     */
    public static function completepredefined(array $params, $companyId){
        $obj = new static([],false,$companyId);
        $result = self::send($params,$companyId,'completepredefined');

        return $result->outputData->{$obj->Model};
    }

    /*
     * Traslado de asientos contables entre cuentas.
     * @param array $params AccountingPeriodYear, DestinationCompanyAccountingAccountNumber, SourceCompanyAccountingAccountNumber y CompanyAccountingEntryNote obligatorios
     * @param $companyId Identificador de la empresa
     * @return true
     */
    public static function transfer(array $params, $companyId){
        self::send($params,$companyId,'transfer');

        return true;
    }

    /*
     * Selección de datos de asientos
     * @param array $params AccountingPeriodYear y AccountingEntryId obligatorios
     * @param $companyId Identificador de la empresa
     * @return Object
     */
    public static function select(array $params, $companyId){
        $obj = new static([],false,$companyId);

        $result = self::send($params,$companyId,'select');

        return $result->outputData->{$obj->Model};
    }
}