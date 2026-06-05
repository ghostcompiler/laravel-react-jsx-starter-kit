<?php

return [
    'login' => 'resources/js/pages/auth/login.jsx',
    'register' => 'resources/js/pages/auth/register.jsx',
    'welcome' => 'resources/js/pages/welcome.jsx',
    'profile' => 'resources/js/pages/settings/profile.jsx',
    'security' => 'resources/js/pages/settings/security.jsx',
    'verify_email' => 'resources/js/pages/auth/verify-email.jsx',
    'two_factor_challenge' => 'resources/js/pages/auth/two-factor-challenge.jsx',
    'confirm_password' => 'resources/js/pages/auth/confirm-password.jsx',
    'auth_types' => 'resources/js/types/auth.js',

    'two_factor_files' => [
        'resources/js/components/manage-two-factor.jsx',
        'resources/js/components/two-factor-setup-modal.jsx',
        'resources/js/components/two-factor-recovery-codes.jsx',
        'resources/js/components/ui/input-otp.jsx',
        'resources/js/hooks/use-two-factor-auth.js',
    ],

    'two_factor_otp_package' => 'input-otp',

    'passkey_files' => [
        'resources/js/components/passkey-item.jsx',
        'resources/js/components/passkey-register.jsx',
        'resources/js/components/passkey-verify.jsx',
        'resources/js/components/manage-passkeys.jsx',
    ],
];