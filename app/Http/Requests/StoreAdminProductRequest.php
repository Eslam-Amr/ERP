<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class StoreAdminProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
'name'=>'required|unique:product_translations,name',
'model'=>'required',
'description'=>'required',
'name_ar'=>'required|unique:product_translations,name',
'model_ar'=>'required',
'description_ar'=>'required',
'weight'=>'required|numeric',
'price'=>'required|numeric',
'discount'=>'required|numeric',
'colorsAr' => 'required|array|min:1', // Ensure color is an array and has at least 1 item
'colorsEn' => 'required|array|min:1', // Ensure color is an array and has at least 1 item
'quantities' => 'required|array|min:1', // Ensure quantity is an array and has at least 1 item

'colorsAr.*'=>'required',
'colorsEn.*'=>'required',
'quantities.*'=>'required'
        ];
    }
    public function messages()
    {
        // return [
        //     'colors.required' => 'At least one color is required.',
        //     'colors.array' => 'The color field must be an array.',
        //     'colors.min' => 'At least one color must be provided.',
        //     'colors.*.required' => 'Each color is required.',
        //     'quantities.required' => 'At least one quantity is required.',
        //     'quantities.array' => 'The quantity field must be an array.',
        //     'quantities.min' => 'At least one quantity must be provided.',
        //     'quantities.*.required' => 'Each quantity is required.',
        // ];
        $messages = [
            'colors.required' => 'At least one color is required.',
            'colors.array' => 'The color field must be an array.',
            'colors.min' => 'At least one color must be provided.',
            'colors.*.required' => 'Each color is required.',
            'quantities.required' => 'At least one quantity is required.',
            'quantities.array' => 'The quantity field must be an array.',
            'quantities.min' => 'At least one quantity must be provided.',
            'quantities.*.required' => 'Each quantity is required.',
        ];

        return array_unique($messages); // Ensure no duplicate messages
    }
    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();
        $aggregatedMessages = [];

        // Check for color and quantity errors
        if ($errors->has('colors')) {
            $aggregatedMessages[] = 'At least one color is required.';
        }

        if ($errors->has('quantities')) {
            $aggregatedMessages[] = 'At least one quantity is required.';
        }

        // Collect individual field errors
        foreach ($errors->messages() as $field => $messages) {
            if (!in_array($field, ['colors', 'quantities'])) {
                foreach ($messages as $message) {
                    $aggregatedMessages[] = $message;
                }
            }
        }

        // Throw a validation exception with aggregated messages
        // throw new ValidationException($validator, response()->json([
        //     'errors' => array_unique($aggregatedMessages)
        // ], 422));
        throw new ValidationException($validator, redirect()->back()->withInput()->withErrors(array_unique($aggregatedMessages)));

    }
}
