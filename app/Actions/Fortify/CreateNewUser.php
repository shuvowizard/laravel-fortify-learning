<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     *
     * @throws ValidationException
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ],[
            'name.required' => 'Please enter your name',
            'name.string' => 'Name must be a string',
            'name.max' => 'Name must not exceed 255 characters',
            'email.required' => 'Please enter your email address',
            'email.string' => 'Email must be a string',
            'email.email' => 'Please enter a valid email address',
            'email.max' => 'Email must not exceed 255 characters',
            'email.unique' => 'This email address is already registered',
            'password.required' => 'Please enter a password',
            'password.string' => 'Password must be a string',
            'password.min' => 'Password must be at least 8 characters',
            'password.confirmed' => 'Password confirmation does not match',             
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
