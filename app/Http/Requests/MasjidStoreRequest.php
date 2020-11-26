<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MasjidStoreRequest extends FormRequest
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
            'email_takmir'       => 'required|email|unique:users,email',
            'nama_masjid'       => 'required',
            'alamat_masjid'       => 'required',
            'nama_takmir'       => 'required',
        ];
    }

    /**
    * Custom message for validation
    *
    * @return array
    */
    public function messages()
    {
        return [
             'email_takmir.email' => 'Email tidak valid',
            'email_takmir.unique' => 'Email ini sudah terdaftar silahkan pilih email lain',
        ];
    }
}
