<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->hasRole('admin');
    }

    public function rules(): array
    {
        return [
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title.en' => 'required|string|max:255',
            'title.sw' => 'required|string|max:255',
            'content.en' => 'required|string',
            'content.sw' => 'required|string',
        ];
    }
}
