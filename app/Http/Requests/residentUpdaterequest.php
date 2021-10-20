<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class residentUpdaterequest extends FormRequest
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
            'lname' => ['required', 'string', 'max:255'],
            'fname' => ['required', 'string', 'max:255'],
            'mname' => ['required', 'string', 'max:255'],
            'age' => ['required', 'string',  'max:255'],
            'address' => ['required', 'string',  'max:255'],
            'placeofbirth' => ['required', 'string', 'max:255'],
            'dateofbirth' => ['required', 'string',  'max:255'],
            'sex' => ['required', 'string', 'max:255'],
            'civilstatus' => ['required', 'string',  'max:255'],
            'citizenship' => ['required', 'string',  'max:255'],
            'occupation' => ['required', 'string',  'max:255'],
            'ps' => ['required', 'string', 'max:255', ],
        ];
      
    }
}
