<?php

namespace App\Http\Controllers\hardwareControl;

use Illuminate\Http\Request;

use App\Http\Requests\controlScRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Response;
use GuzzleHttp\Client;
use Validator;

class scSlideController extends Controller
{
    public function index()
    {
        $client = new Client();
        $item = $client->request(
                'GET',
                config('config.pathREST').'mediaController/mediaDisplay')->getbody();
        $itemShow = json_decode($item, true);
        $itemShowPage = $itemShow['data'];

        $playlist = $client->request(
                'GET',
                config('config.pathREST').'playlistManagement/playlistDisplay')->getbody();
        $playlistShow = json_decode($playlist, true);
        $playlistShowPage = $playlistShow['data'];
        return view('layouts.controls.scSlide',[
                'itemShow' => $itemShowPage,
                'playlistShow' => $playlistShowPage
        ]);
    }

    public function addImage(Request $request)
    {
        $cover_book = $request->input('cover_book');
        $type = $request->input('type');
        $input = $request->all();

        /*$validator = Validator::make($request->all(), [
            'cover_book' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);

        if ($validator->fails()) {

            return response()->json(['error'=>$validator->errors()->all()]);
        }else{*/

            return response()->json([$input,$type,$cover_book]);
        //}
    }

    public function addVideo(Request $request)
    {
        $image_cover = $request->input('image_cover');
        $video_content = $request->input('video_content');
        $type = $request->input('type');
        //$this->$request->all();
        //return redirect()->action('hardwareControl\slideController@index');
        return response()->json([$image_cover,$video_content,$type]);
    }

    public function create()
    {
        //return view('layouts.controls.scSlide');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = $request->input('media_type');
        if($type == 'radio_image'){
            $cover_book = $request->input('cover_book');

            $validator = Validator::make($request->all(), [
                'cover_book' => 'required|mimes:jpeg,jpg,bmp,png'
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator);
            }else{
                return redirect()->action('hardwareControl\slideController@index');
            }
        }else{
            $image_cover = $request->input('image_cover');
            $video_content = $request->input('video_content');
        }

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
        //
    }
}
