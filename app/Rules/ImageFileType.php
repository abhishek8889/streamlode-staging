<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ImageFileType implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
       
        // Check if the file is an image and has a JPG or PNG extension
        return is_uploaded_file($value) && in_array($value->getClientOriginalExtension(), ['jpg', 'jpeg', 'png']);

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Image type must be of jpg , jpeg , png';
    }
}
