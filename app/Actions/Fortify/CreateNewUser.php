<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\guidedetail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Str;


class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ])->validate();
        
        
        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'prefix' => $input['prefix'],
            'utype' => $input['utype'],
            'country' => $input['country'],
            'birthday' => $input['birthday'],
            'city' => $input['city'],
            'address' => $input['address'],
            'zip' => $input['zip'],
            'homephone' => $input['homephone'],
            'cellphone' => $input['cellphone'],
            'skypename' => $input['skypename'],
            'contacttime' => $input['contacttime'],
            'licensed' => $input['licensed'],
            'licensedetail' => $input['licensedetail'],
            'detail' => $input['detail'],
            'notes' => $input['notes'],
            'token' => $input['password'],
            'password' => Hash::make($input['password']),
            'biography' => $input['biography'],
            'credentials' => $input['credentials'],
            'bangla' => $input['bangla'],
            'english' => $input['english'],
            'arabic' => $input['arabic'],
            'hindi' => $input['hindi'],
            'alternate_email_one' => $input['alternate_email_one'],
            // 'alternate_email_two' => $input['alternate_email_two'],
            // 'alternate_email_thtee' => $input['alternate_email_three'],
            'newsletter' => $input['newsletter'],
            'status' => $input['status'],
            'location_id' => $input['location_id'],
            'location' => $input['location'],
            'guidenumber' => $input['guidenumber'],
            'tour_place_id' => $input['tour_place_id'],
            
        ]);
    }
}
