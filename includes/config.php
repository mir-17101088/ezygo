<?php
/*
 * Site settings — the only file to edit before going live.
 * includes/ is blocked from the web by .htaccess.
 */
return [
    // Send an email for every form? true = yes. Every submission is ALSO saved
    // to /home/<account>/ezygo-submissions/ (outside the website) either way.
    'mail_enabled' => true,

    // Where notification emails go. The site shows hello@ezygobd.com to visitors;
    // the old handler used info@ezygobd.com. Use an inbox that really exists.
    'mail_to' => 'hello@ezygobd.com',

    // Sender address. Must be an address on the ezygobd.com domain so cPanel's
    // mail server (SPF/DKIM) accepts it. It does not need a real inbox.
    'mail_from' => 'noreply@ezygobd.com',

    // Rental emails never contain the NID number or home address; staff read
    // those in the private submissions folder. Set true only if the owner
    // explicitly wants them in email (not recommended).
    'mail_sensitive' => false,

    // Links that the old site had as "#" (going nowhere). Paste the real address
    // to switch each one on. Empty = icon hidden, or the card shows "Coming soon".
    'links' => [
        'youtube'           => '',
        'founder_linkedin'  => '',
        'founder_x'         => '',
        'founder_facebook'  => '',
        'team_sazzatul_linkedin' => '', 'team_sazzatul_email' => '',
        'team_evan_linkedin'     => '', 'team_evan_email'     => '',
        'team_jinia_linkedin'    => '', 'team_jinia_email'    => '',
        'news'              => '',
        'user_manual'       => '',
        'charging_map'      => '',
        'safety_guidelines' => '',
        'google_play'       => '',
        'app_store'         => '',
    ],

    // Spam protection: max submissions per visitor (IP) per 10 minutes.
    'rate_limit' => 6,
];
