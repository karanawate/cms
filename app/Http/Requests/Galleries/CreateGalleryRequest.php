<?php

namespace App\Http\Requests\Galleries;

use Illuminate\Foundation\Http\FormRequest;

class CreateGalleryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return
         [
        //     'title' => 'required ',
        //     'description' => 'required ',
        //    'category' => 'required ',
        //    'image' => 'required ',
        //    'thumbnail' => 'required'
        ];
    }
}
