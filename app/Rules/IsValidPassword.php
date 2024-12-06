<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Str;

class isValidPassword implements ValidationRule
{
    /**
     * Determine if the Length Validation Rule passes.
     *
     * @var bool
     */
    public $lengthPasses = true;

    /**
     * Determine if the Uppercase Validation Rule passes.
     *
     * @var bool
     */
    public $uppercasePasses = true;

    /**
     * Determine if the Numeric Validation Rule passes.
     *
     * @var bool
     */
    public $numericPasses = true;

    /**
     * Determine if the Special Character Validation Rule passes.
     *
     * @var bool
     */
    public $specialCharacterPasses = true;

    /**
     * Run the validation rule.
     */
    public function validate(string $attribute, mixed $value, \Closure $fail): void
    {
        $this->lengthPasses = (Str::length($value) >= 10);
        $this->uppercasePasses = (Str::lower($value) !== $value);
        $this->numericPasses = ((bool) preg_match('/[0-9]/', $value));
        $this->specialCharacterPasses = ((bool) preg_match('/[^A-Za-z0-9]/', $value));

        if (! $this->lengthPasses || ! $this->uppercasePasses || ! $this->numericPasses || ! $this->specialCharacterPasses) {
            $fail($this->message());
        }
    }

    /**
     * Get the validation error message.
     */
    public function message(): string
    {
        switch (true) {
            case ! $this->uppercasePasses && $this->numericPasses && $this->specialCharacterPasses:
                return 'The :attribute must be at least 10 characters and contain at least one uppercase character.';

            case ! $this->numericPasses && $this->uppercasePasses && $this->specialCharacterPasses:
                return 'The :attribute must be at least 10 characters and contain at least one number.';

            case ! $this->specialCharacterPasses && $this->uppercasePasses && $this->numericPasses:
                return 'The :attribute must be at least 10 characters and contain at least one special character.';

            case ! $this->uppercasePasses && ! $this->numericPasses && $this->specialCharacterPasses:
                return 'The :attribute must be at least 10 characters and contain at least one uppercase character and one number.';

            case ! $this->uppercasePasses && ! $this->specialCharacterPasses && $this->numericPasses:
                return 'The :attribute must be at least 10 characters and contain at least one uppercase character and one special character.';

            case ! $this->uppercasePasses && ! $this->numericPasses && ! $this->specialCharacterPasses:
                return 'The :attribute must be at least 10 characters and contain at least one uppercase character, one number, and one special character.';

            default:
                return 'The :attribute must be at least 10 characters.';
        }
    }
}
