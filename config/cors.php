<?php

return [
    'paths' => ['api/*'],
    'allowed_methods' => ['GET', 'POST'], // Only allow GET and POST methods
    'allowed_origins' => ['https://yourdomain.com'], // Only allow requests from this domain
    'allowed_headers' => ['Content-Type', 'Authorization'], // Allow only necessary headers
    'supports_credentials' => true, // Allow credentials if needed
];

