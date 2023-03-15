<?php

class XSSPrevention {

    public static function sanitize($input) {

        $options = [
            'flags' => FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_ENCODE_AMP
        ];

        $sanitized_input = filter_var($input, FILTER_SANITIZE_STRING, $options);
        $sanitized_input = strip_tags($sanitized_input);
        $sanitized_input = htmlspecialchars($sanitized_input, ENT_QUOTES, 'UTF-8');

        return $sanitized_input;

    }

    public static function CSP() {
        header("Content-Security-Policy: default-src 'self' *.cloudflare.com");
    }

}