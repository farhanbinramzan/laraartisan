<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatusRequest extends FormRequest
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
            'image' => 'required',
            'title' => 'required',
            'description' => 'required',
            'no_of_client' => 'required',
            'client_title' => 'required',
            'client_desc' => 'required',
            'no_of_project' => 'required',
            'project_title' => 'required',
            'project_desc' => 'required',
            'no_of_hours' => 'required',
            'hours_title' => 'required',
            'hours_desc' => 'required',
            'no_of_workers' => 'required',
            'worker_title' => 'required',
            'worker_desc' => 'required'
        ];
    }
}
