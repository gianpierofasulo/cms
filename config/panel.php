<?php

return [
    'date_format'         => 'Y-m-d',
    'time_format'         => 'H:i:s',
    
     // System config
    'registration_approval' => env('REGISTRATION_APPROVAL_REQUIRED', 1),
    'send_email_to_admin' => env('SEND_EMAIL_TO_ADMIN', 1),

    'verification_required' => env('VERIFICATION_REQUIRED', 1),

];



