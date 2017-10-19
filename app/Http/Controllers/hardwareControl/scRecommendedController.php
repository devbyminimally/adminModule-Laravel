<?php

namespace App\Http\Controllers\hardwareControl;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Session;

use nusoap_client;

class scRecommendedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client();
        $result = $client->request(
                'GET',
                config('config.pathREST').'recommendedBook/show')->getbody();
        $bookShow = json_decode($result, true);
        $bookShowPage = $bookShow['data'];
        return view('layouts.controls.scRecommended',[
                'bookShow' => $bookShowPage
        ]);
    }

    public function searchBook($txtSearchBook)
    {
        include(app_path() . '/Http/Controllers/nusoap.php');
        $client = new nusoap_client(config('config.pathSOAP'),true); 
        $checkstatus = array('Barcode' => $txtSearchBook );
        $result = $client->call('checkstatus',$checkstatus); 
            
        return response()->json(['result' => $result[0]]);
        //return response()->$txtSearchBook;

    }

    public function deleteBook(Request $request , $bookID)
    {
        $client = new Client();
        $result = $client->request(
                'delete',
                config('config.pathREST').'recommendedBook/delete/'.$bookID)->getbody();
        $request->session()->flash('status', 'ลบหนังสือแนะนำสำเร็จ');
        return back();



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
        $bookID = $request->input('bookID');
        $bookName = $request->input('bookName');
        $bookImg = $request->input('bookImg');
        $userCreate = session()->get('userInfo')['data']['userName'];

        $client = new Client();
        $result = $client->request(
                'POST',
                config('config.pathREST').'recommendedBook/add', 
                ['form_params' => [
                        'bookID' => $bookID,
                        'bookName' => $bookName,
                        'bookImg' => $bookImg,
                        'userCreate' => $userCreate
                    ]
                ])->getbody();
        $userInfo = json_decode($result, true);
        if($userInfo['status'] == 'FAIL'){
            $request->session()->flash('statusFail', 'หนังสือรหัสนี้ถูกเพิ่มแล้ว');
        }else{
           $request->session()->flash('status', 'เพิ่มหนังสือแนะนำเรียบร้อยแล้ว'); 
        }
        
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
                
}
