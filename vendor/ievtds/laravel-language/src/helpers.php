<?php

if (!function_exists('language')) {
    /**
     * Get the language instance.
     *
     * @return \ievtds\Language\Language
     */
    function language()
    {
        return app('language');
    }
}
