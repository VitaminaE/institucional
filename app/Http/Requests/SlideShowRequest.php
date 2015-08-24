<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SlideShowRequest extends Request
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
            'imagem' => 'required|image|max:2000',
            'descricao' => 'string'
        ];
    }
}
