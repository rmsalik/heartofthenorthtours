<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class OctetStream implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Check if the MIME type is 'application/octet-stream'
        return $value->getClientMimeType() === 'application/octet-stream';
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must be an octet stream.';
    }
}
