<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class NotRefferingExisting implements Rule
{   
    protected $user;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {   
        if($this->user->referrals->contains('email', $value)){
            return false;
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'You\'ve already sent a referral to that person.';
    }
}
