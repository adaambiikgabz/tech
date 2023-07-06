<?php

namespace App\Validation;

use Config\Services;
use ReCaptcha\ReCaptcha;
use CodeIgniter\Validation\Exceptions\ValidationException;

class RecaptchaRules
{
    public function validateRecaptcha(string $str, string &$error = null): bool
    {
        // Retrieve the reCAPTCHA secret key from your configuration
        $secretKey = config('Recaptcha')->secretKey;

        // Create a new instance of the reCAPTCHA class
        $recaptcha = new ReCaptcha($secretKey);

        // Verify the reCAPTCHA response
        $response = $recaptcha->verify($str, $_SERVER['REMOTE_ADDR']);

        if (!$response->isSuccess()) {
            $error = 'The reCAPTCHA verification failed.';
            return false;
        }

        return true;
    }
}
