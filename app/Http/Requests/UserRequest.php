<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'statuses' => array_merge($this->input('statuses', []), [
                'status' => $this->input('statuses.status', User::STATUS_ACTIVE),
                'date' => $this->input('statuses.date', now()->toDateString()),
            ]),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'guild_id' => 'required|numeric',
            'discord_id' => 'required|string',
            'name' => 'required|string',
            'type' => ['string', Rule::in(User::TYPES) ],
            'statuses' => 'required|array',
            'statuses.status' => ['string', 'required', Rule::in(User::STATUSES)],
            'statuses.date' => 'date|nullable',
            'presentation_link' => 'nullable|string',
            'whatsapp' => 'nullable|string',
            'exp' => 'numeric',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'errors' => $validator->errors()
        ], 422));
    }
}
