<?php

return [
    /*
     * ----------------------------------------------------------------
     * Contact fields
     * ----------------------------------------------------------------
     *
     */
    'contact_fields'=>
    [
        'phone_number','fullname','community'
    ],

    /*
     * ---------------------------------------------------------------
     * Contact fields rules
     * ---------------------------------------------------------------
     *
     */
    'contact_fields_rules'=>
        [
            'phone_number'=>'required',
            'fullname'=>'required',
            'community'=>'required'
        ],

    /*
     * ----------------------------------------------------------------
     * SMS fields
     * ----------------------------------------------------------------
     *
     */
    'newsms_fields'=>[
        'message'
    ],

    /*
     * ----------------------------------------------------------------
     * SMS fields rules
     * ----------------------------------------------------------------
     *
     */
    'newsms_fields_rules'=>[
//        'contacts'=>'required',
        'message'=>'required'
    ]
];