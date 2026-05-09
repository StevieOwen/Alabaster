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
            'full_name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'profile_picture' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:6048'],
        ])->validate();

            $user_id="user_".random_int(100000,999999);
            $token=random_int(100000,999999);
            $path = null;
            if (isset($input['profile_picture'])) {
                // request() helper is globally available and helps with type detection
                $path = request()->file('profile_picture')->store('profiles', 'public');
            }
        return User::create([
            'user_id'=>$user_id,
            'full_name' => $input['full_name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'token'=>$token,
            'profile_picture' => $path,

        ]);
    }
}
