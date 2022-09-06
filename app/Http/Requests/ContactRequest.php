<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'subject' => 'required|min:10|max:50',
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:10|max:255'//
        ];
    }

    // public function attributes(){
    //     return [
    //         'name' => 'имя',
    //         'email' => 'почта',
    //         'subject' => 'тема',
    //         'message' => 'сообщение',
    //     ];
    // }

    public function messages(){
        return [
            'name.required' => 'Поле имя обязательно для заполнения',
            'email.required' => 'Поле почта обязательно для заполнения',
            'email.email' => 'Почта введена неправильно',
            'subject.required' => 'Поле тема сообщения обязательно для заполнения',
            'message.required' => 'Поле сообщение обязательно для заполнения',
            'message.min' => 'Поле сообщение слишком короткое',
            'message.max' => 'Поле сообщение слишком длинное',
            'subject.min' => 'Поле тема сообщения слишком короткое',
            'subject.max' => 'Поле тема сообщения слишком длинное'
        ];
    }
}
