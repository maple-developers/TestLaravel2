<?php

namespace App\Http\Controllers;

use App\Models\operator;
use Illuminate\Http\Request;

use htmlHelper;
use countriesDTOClass;
use operatorDTO;

require __DIR__ . '/DDL.php';
require __DIR__ . '/DTOs/countriesDTO.php';
require __DIR__ . '/DTOs/operatorDTO.php';

class operatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $countries = new htmlHelper();
        $countries = new countriesDTOClass();
        $operators = new operatorDTO();
        $countriesData = $countries->getViewData();
        $operatersData = $operators->getOperatorData();
        return view('operatorPrefix', [
            'countries' => $countriesData,
            'operatersData' => $operatersData
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'countryNameList' => 'required',
            'countryCodeList' => 'required',
            'OperatorsName' => 'required',
            'operatorPrefix' => 'required',
        ]);
        $operatorDTO = new operatorDTO();
        $operatorDTO->store(
            $request->countryNameList,
            $request->country_code,
            $request->operatorPrefix,
            $request->OperatorsName,
            $request->operatorRate
        );
        return redirect('addOperator');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\operator  $operator
     * @return \Illuminate\Http\Response
     */
    public function show(operator $operator)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\operator  $operator
     * @return \Illuminate\Http\Response
     */
    public function getOperator()
    {
        $countries = new countriesDTOClass();
        $countriesData = $countries->getViewData();
        print_r($countriesData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\operator  $operator
     * @return \Illuminate\Http\Response
     */
    public function edit(operator $operator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\operator  $operator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validator = $request->validate([
            'editOperatorPrefixId' => 'required',
            'editOperatorPrefix' => 'required',
        ]);
        $operator = operator::findOrFail($request->editOperatorPrefixId);
        $operator->operator_perfix = $request->editOperatorPrefix;
        $operator->save();
        return redirect()->back()->with('Sucsess', 'THE Operator is Updated Sucsessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\operator  $operator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $teacher = operator::where('id', '=', $request->id)->delete();
    }
}
