<?php

use App\Models\operator;

class operatorDTO
{
    public $operatorId = 'operatorId';
    public $operatorName = 'operatorName';
    public $operatorPerfix = 'operatorPerfix';
    public $operatorRate = 'operatorRate';
    public $response = null;
    public function store($countryNameList, $country_code, $operatorPrefix, $OperatorsName, $operatorRate)
    {
        $operator = new operator;
        $operator->country_id = $countryNameList;
        $operator->operator_perfix =  $country_code . $operatorPrefix;
        $operator->operator_name = $OperatorsName;
        $operator->operator_rate = $operatorRate;
        $operator->save();
    }

    public function getOperatorData()
    {
        $operatorData = operator::join('countries', 'operators.country_id', '=', 'countries.id')->get(['operators.*', 'countries.country_name'])->toArray();
        $returnArray = array();
        foreach ($operatorData as $operator) {
            array_push($returnArray, array(
                $this->operatorId => $operator['id'],
                $this->operatorName => $operator['operator_name'],
                'countryName' => $operator['country_name'],
                $this->operatorPerfix => $operator['operator_perfix'],
                $this->operatorRate => $operator['operator_rate'],
                'created_at' => $operator['created_at'],
                'updated_at' => $operator['updated_at'],
            ));
        }
        $this->response = $returnArray;
        return $returnArray;
    }
}
