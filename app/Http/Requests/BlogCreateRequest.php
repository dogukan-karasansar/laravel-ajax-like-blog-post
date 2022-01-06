<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required | min:3',
            'description'=>'required',
            'image'=>'image|nullable|max:1024',
            'category'=>'required',
        ];

    }
    public function attributes()
    {
        return[
            'title'=>'Blog Başlığı',
            'image'=>'Fotoğraf',
            'description'=>'Blog İçeriği',
            'category'=>'Kategori',
        ];
    }
}
