<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use App\Models\Admin\Admin;

class CheckTwoFactorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
public function authorize()
    {
        $userId = session('id');
        $user = Admin::find($userId);

        // Check if the user and two_factor_code exist
        if (!$user || !$user->two_factor_code) {
            return false; 
        }
        
        return true;
    }


    // public function authorize1()
    // {

    //     $userId = session('id');
    //     $user = Admin::find($userId);

    //     abort_if(is_object($user->two_factor_code) === null,
    //         Response::HTTP_FORBIDDEN,
    //         '403 Forbidden'
    //     );

    //     return true;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'two_factor_code' => ['required', 'integer'],
        ];
    }
}