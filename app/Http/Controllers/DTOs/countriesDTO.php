<?php

use App\Models\countries;

class countriesDTOClass
{
    public $countryId = 'countryId';
    public $countryName = 'countryName';
    public $countryCode = 'countryCode';
    public $response = null;
    public function getViewData()
    {
        $countryData = countries::all()->toArray();
        $returnData = array();
        foreach ($countryData as $country) {
            array_push($returnData, array(
                $this->countryId => $country['id'],
                $this->countryName => $country['country_name'],
                $this->countryCode => $country['country_code'],
            ));
        }
        $this->response = $returnData;
        return $returnData;
    }

    public function get($whatToGet = '*')
    {
        print_r($whatToGet);
        $countryData = countries::all($whatToGet);
        $returnData = array();

        if (gettype($whatToGet) == 'array') {
        }
        foreach ($countryData as $country) {
            array_push($returnData, array());
        }
    }

    public function getOperatorData()
    {
    }
}
