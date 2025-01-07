<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'selected_courses' => 'required|array|min:4|max:4', // Ensure at least one course is selected
            'selected_courses.*' => 'exists:courses,id', // Validate each course exists
        ];
    }

    public function messages(): array
    {
        return [
            'selected_courses.min:4' => 'You are required to select 4 subjects only.',
            'selected_courses.max:4' => 'You are required to select 4 subjects only.',
        ];
    }
}
