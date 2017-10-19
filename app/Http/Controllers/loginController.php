<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\loginRequest;

use App\Http\Requests;
use GuzzleHttp\Client;
use Session;

class loginController extends Controller
{

    public function checkLoginAPI(loginRequest $request){
    	$username = $request->input('username');
    	$password = $request->input('password');

    	$client = new Client();
    	$result = $client->request(
                'POST',
                config('config.pathREST').'checkLogin/check', 
                ['form_params' => [
                        'txtUsername' => $username,
                        'txtPassword' => $password
                    ]
                ])->getbody();
    	$userInfo = json_decode($result, true);
    	//$userInfo = $result;
    	if($userInfo['status'] == 'FAIL'){
    		return redirect()->back()->withErrors(['failure' => 'The credentials you entered did not match our records. Try again!',]);
    	}else{
            $userID = $userInfo['data']['userID'];
            Session::set('userId',$userID);
            Session::set('userInfo',$userInfo);

            $resultControl = $client->request('GET',config('config.pathREST').'permControl/'.$userID)->getbody();
            $permControl1 = json_decode($resultControl, true);

            Session::set('permControl1', $permControl1);

            $resultReport = $client->request('GET',config('config.pathREST').'permReport/'.$userID)->getbody();
            $permReport1 = json_decode($resultReport, true);

            Session::set('permReport1', $permReport1);

    		return redirect('/home');
    	}


    	
    }
}
