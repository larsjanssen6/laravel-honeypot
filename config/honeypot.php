<?php

use Spatie\Honeypot\SpamResponder\BlankPageResponder;

return [

    /*
     * Here you can specify name of the honeypot field. Any requests that submit a non-empty
     * value for this name will be discarded. Make sure this name does not
     * collide with a form field that is actually used.
     */
    'name_field_name' => 'my_name',

    /*
     * When this is activated the name_field_name will be ignored. On every
     * page load a new random field name will be generated.
     */
    'random_name_field_name' => false,

    /*
     * This field contains the name of a form field that will be use to verify
     * if the form wasn't submitted too quickly. Make sure this name does not
     * collide with a form field that is actually used.
     */
    'valid_from_field_name' => 'valid_from',

    /*
     * If the form is submitted faster then this amout of seconds
     * the form submission will be considered invalid.
     */
    'amount_of_seconds' => 1,

    /*
     * This class is responsible for sending a response to request that
     * are detected as being spammy. By default a blank page is shown.
     *
     * A valid responder is any class that implements
     * `Spatie\Honeypot\SpamResponder\SpamResponder`
     */
    'respond_to_spam_with' => BlankPageResponder::class,

    /*
     * This switch determines if the honeypot protection should be activated.
     */
    'enabled' => true,
];
