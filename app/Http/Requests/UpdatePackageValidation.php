<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePackageValidation extends FormRequest
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
        $maxNewPrice = 999999999;
        if (request()->has('harga_lama')) {
            $maxNewPrice = request('harga_lama');
        }

        return [
            'judul' => ['required', 'string', 'min:3', 'max:100'],
            'harga_lama' => ['sometimes', 'gt:harga_baru', 'numeric'],
            'harga_baru' => ['required', 'numeric', 'max:' . $maxNewPrice],
            'deskripsi' => ['required']
        ];
    }
}
