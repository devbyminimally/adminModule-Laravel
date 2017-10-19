<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class controlScRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if($request->input('type') == 'radio_image'){
            return [
            'cover_book' => 'required|mimes:jpeg,jpg,bmp,png'
        ];
        }else{
            return [
            'image_cover' => 'required|mimes:jpeg,jpg,bmp,png',
            'video_content' => 'required|mimetype:video/avi,video/mp4'
        ];
        }
        
    }
}
