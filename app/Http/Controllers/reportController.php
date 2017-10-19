<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use GuzzleHttp\Client;

class reportController extends Controller
{
    public function scBasic(){
    	$client = new Client();
        $result = $client->request(
                'GET',
                config('config.pathREST').'scReport/today')->getbody();
        $scBasic = json_decode($result, true);
        $scBasicPage = $scBasic['data'];
        return view('layouts.report.sc.basic',[
                'scBasic' => $scBasicPage
        ]);
    }

    public function scRequest(Request $request){
        //$username = $request->input('username');
        //$password = $request->input('password');

        return response()->json(['msg' => $request->all()]);
    }

}
