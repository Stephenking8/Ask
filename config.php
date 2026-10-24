<?php
/** Edit these values for your hosting account. Never serve this file as plain text. */
return [
    'db_host' => 'mysql-3707be98-optictopus.a.aivencloud.com',
    'db_port' => '27975',
    'db_name' => 'defaultdb',
    'db_user' => 'avnadmin',             // Replace with InfinityFree MySQL username when deployed.
    'db_pass' => 'AVNS_S0-9ELBWDyXHKek9PSz',                 // XAMPP default only; set your host password when deployed.
    'base_path' => '', // XAMPP folder path; use '' when installed at domain root.
    'site_url' => 'https://optictopus-f2oqom1od-tepen-jays-projects.vercel.app/',               // Optional: https://your-domain.example (no trailing slash).
    'pretty_urls' => true,          // Set false if Apache rewrite is unavailable.
    'app_key' => 'c5ab87161234806217bb623d5c4f3e34225ad97f53b5a1028ed4a7ce7894139d', // Generate a fresh key before deployment.
    'trusted_cloudflare' => false, // True ONLY after protecting the domain behind Cloudflare.
];
