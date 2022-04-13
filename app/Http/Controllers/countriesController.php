<?php

namespace App\Http\Controllers;

use htmlHelper;
use Illuminate\Http\Request;

require __DIR__ . '/DDL.php';
class countriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* $countries = new countries;
        $countriesData = $countries->all()->toArray();
        $filePath = public_path('/uploads/') . 'countries.csv';
        $fileObj = fopen($filePath, "w");
        $headers = array('country_name', 'id', 'country_code');
        fputcsv($fileObj, $headers);
        foreach ($countriesData as $country) {
            fputcsv($fileObj, $country);
        }
        fclose($fileObj);
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=theincircle_csv.csv",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );
        return response()->download($filePath, 'countries.csv', $headers) */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\countries  $countries
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $DDL = new htmlHelper();
        $return_back = $DDL->HTMLgenetaor();
        $countries = $DDL->print_out_countries();
        return view('welcome', [
            'table' => $return_back,
            'countries' => $countries,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\countries  $countries
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\countries  $countries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\countries  $countries
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }

    public function getCurrentCalls()
    {
        return file_get_contents('http://95.217.89.96/MapleVoipFilter/apiManager/getCurrentCalls');
    }
}
