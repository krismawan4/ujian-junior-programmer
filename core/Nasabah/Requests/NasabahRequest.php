<?php

namespace Core\Nasabah\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NasabahRequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return [
                    'nama' => 'string|required',
                    'tempat_lahir' => 'string|required',
                    'tanggal_lahir' => 'date|required',
                    'penghasilan' => 'integer|required',

                ];
            }
            case 'PUT': {
                return [
                    'nama' => 'string|required',
                    'tempat_lahir' => 'string|required',
                    'tanggal_lahir' => 'date|required',
                    'penghasilan' => 'integer|required',

                ];
            }
        }
    }
}
