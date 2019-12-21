<?php

return [

    /*
     * Activate under construction mode.
     */
    'enabled' => env('UNDER_CONSTRUCTION_ENABLED', true),

    /*
     * Hash for the current pin code
     */
    'hash' => env('UNDER_CONSTRUCTION_HASH', null),

    /*
     * Under construction title.
     */
    'title' => '網站施工中',

    /*
     * Back button translation.
     */
    'back-button' => '倒退',

    /*
    * Show button translation.
    */
    'show-button' => '顯示',

    /*
     * Hide button translation.
     */
    'hide-button' => '隱藏',

    /*
     * Show loader.
     */
    'show-loader' => true,

    /*
     * Redirect url after a successful login.
     */
    'redirect-url' => '/',

    /*
     * Enable throttle (max login attempts).
     */
    'throttle' => true,

        /*
        |--------------------------------------------------------------------------
        | Throttle settings (only when throttle is true)
        |--------------------------------------------------------------------------
        |
        */

        /*
        * Set the amount of digits (max 6).
        */
        'total_digits' => 6,

        /*
         * Set the maximum number of attempts to allow.
         */
        'max_attempts' => 3,

        /*
         * Show attempts left.
         */
        'show_attempts_left' => true,

        /*
         * Attempts left message.
         */
        'attempts_message' => '還有 %i 次嘗試機會',

        /*
         * Too many attempts message.
         */
        'seconds_message' => '嘗試登入太多次，請在 %i 秒後再試。',

        /*
         * Set the number of minutes to disable login.
         */
        'decay_minutes' => 5,

        /*
         * Prevent the site from being indexed by Robots when locked
         */
        'lock_robots' => true,
];
