<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\skill;
use Illuminate\Validation\Rule;
class storeSkillRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'name'=>['required','min:5','max:20'],
            // 'slug'=>['required','unique:skills,'.$this->skill->id]
            'slug'=>['required',Rule::unique('skills')->ignore($this->skill)]

        ];
    }
}
