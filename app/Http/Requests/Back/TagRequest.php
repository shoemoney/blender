<?php

namespace App\Http\Requests\Back;

use App\Http\Requests\Request;

class TagRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        foreach (config('app.locales') as $locale) {
            $rules[translate_field_name('name', $locale)] = 'required';
        }

        return $rules;
    }
}
