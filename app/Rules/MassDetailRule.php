<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MassDetailRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    private $mass_detail_ack;
    public function __construct($mass_detail_ack)
    {
        $this->mass_detail_ack = $mass_detail_ack;
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
        if(is_null($this->mass_detail_ack))
        {
            return false;
        }else{
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'This field is required.';
    }
}
