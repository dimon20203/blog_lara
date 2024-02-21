<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title'=>'required|string',
            'content'=>'required|string',
            'preview_image'=>'required|file',
            'main_image'=>'required|file',
            'category_id'=>'required|integer|exists:categories,id',
            'tag_ids'=>'nullable|array',
            'tag_ids.*'=>'nullable|integer|exists:tags,id',

                   ];
    }

    public function messages()
    {
        return [
'title.required' => 'This field must be filled',
'title.string' => 'This data must be string type',
'content.required' => 'This field must be filled',
'content.string' => 'This data must be string type',
'preview_image.required' => 'This field must be filled',
'preview_image.file' => 'need to select a file',
'main_image.required' => 'This field must be filled',
'main_image.file' => 'need to select a file',
'category_id.required' => 'this field must be filled',
'category_id.integer' => 'category_id must be integer',
'category_id.exists' => 'category_id must be in DB',
'tag_ids.array' => 'need to send the array of data',
        ];
    }

}
