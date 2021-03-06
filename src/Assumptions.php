<?php

if (!function_exists('assumeThat')) {
    /**
     * Make an assumption and throw
     * {@link MehrAlsNix\Assumptions\AssumptionViolatedException} if it fails.
     */
    function assumeThat(...$args)
    {
        call_user_func_array(
            array('MehrAlsNix\Assumptions\Assume', 'assumeThat'),
            $args
        );
    }
}

if (!function_exists('assumeTrue')) {
    /**
     * Make an assumption and throw
     * {@link MehrAlsNix\Assumptions\AssumptionViolatedException} if it fails.
     */
    function assumeTrue(...$args)
    {
        call_user_func_array(
            array('MehrAlsNix\Assumptions\Assume', 'assumeTrue'),
            $args
        );
    }
}

if (!function_exists('assumeFalse')) {
    /**
     * Make an assumption and throw
     * {@link MehrAlsNix\Assumptions\AssumptionViolatedException} if it fails.
     */
    function assumeFalse(...$args)
    {
        call_user_func_array(
            array('MehrAlsNix\Assumptions\Assume', 'assumeFalse'),
            $args
        );
    }
}

if (!function_exists('assumeNotNull')) {
    /**
     * Make an assumption and throw
     * {@link MehrAlsNix\Assumptions\AssumptionViolatedException} if it fails.
     */
    function assumeNotNull(...$args)
    {
        call_user_func_array(
            array('MehrAlsNix\Assumptions\Assume', 'assumeNotNull'),
            $args
        );
    }
}

if (!function_exists('assumePhpVersion')) {
    /**
     * Make an assumption and throw
     * {@link MehrAlsNix\Assumptions\AssumptionViolatedException} if it fails.
     */
    function assumePhpVersion(...$args)
    {
        call_user_func_array(
            array('MehrAlsNix\Assumptions\Assume', 'assumePhpVersion'),
            $args
        );
    }
}

if (!function_exists('assumeExtensionLoaded')) {
    /**
     * Make an assumption and throw
     * {@link MehrAlsNix\Assumptions\AssumptionViolatedException} if it fails.
     */
    function assumeExtensionLoaded(...$args)
    {
        call_user_func_array(
            array('MehrAlsNix\Assumptions\Assume', 'assumeExtensionLoaded'),
            $args
        );
    }
}

if (!function_exists('assumeSocket')) {
    /**
     * Make an assumption and throw
     * {@link MehrAlsNix\Assumptions\AssumptionViolatedException} if it fails.
     * @param ...$args
     */
    function assumeSocket(...$args)
    {
        call_user_func_array(['MehrAlsNix\Assumptions\Assume', 'assumeSocket'], $args);
    }
}

if (!function_exists('assumeEnvironment')) {
    /**
     * Make an assumption and throw
     * {@link MehrAlsNix\Assumptions\AssumptionViolatedException} if it fails.
     * @param ...$args
     */
    function assumeEnvironment(...$args)
    {
        call_user_func_array(['MehrAlsNix\Assumptions\Assume', 'assumeEnvironment'], $args);
    }
}

if (!function_exists('assumeFreeDiskSpace')) {
    /**
     * Make an assumption and throw
     * {@link MehrAlsNix\Assumptions\AssumptionViolatedException} if it fails.
     * @param ...$args
     */
    function assumeFreeDiskSpace(...$args)
    {
        call_user_func_array(['MehrAlsNix\Assumptions\Assume', 'assumeFreeDiskSpace'], $args);
    }
}

if (!function_exists('assumeCfgVar')) {
    /**
     * Make an assumption and throw
     * {@link MehrAlsNix\Assumptions\AssumptionViolatedException} if it fails.
     * @param ...$args
     */
    function assumeCfgVar(...$args)
    {
        call_user_func_array(['MehrAlsNix\Assumptions\Assume', 'assumeCfgVar'], $args);
    }
}
