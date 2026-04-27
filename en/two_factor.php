<?php

return [
    // Setup
    'description' => 'Add extra security to your account with two-factor authentication.',
    'enable' => 'Enable two-factor authentication',
    'enabled_status' => 'You have enabled two-factor authentication.',
    'disabled_status' => 'You have not enabled two-factor authentication.',
    'finish_setup' => 'Finish enabling two-factor authentication.',
    'setup_instructions' => 'When two-factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone\'s authenticator application.',
    'qr_instructions' => 'Scan the following QR code using your phone\'s authenticator application.',
    'manual_setup_key' => 'Setup key',
    'verification_code' => 'Verification code',
    'disable_2fa' => 'Disable 2FA',
    'enable_2fa' => 'Enable 2FA',
    'enabled_intro' => 'With two-factor authentication enabled, you will be prompted for a secure, random pin during login, which you can retrieve from the TOTP-supported application on your phone.',
    'disabled_intro' => 'When you enable two-factor authentication, you will be prompted for a secure pin during login. This pin can be retrieved from a TOTP-supported application on your phone.',
    'enter_code_manually' => 'or, enter the code manually',

    // Recovery codes
    'recovery_codes' => 'Recovery codes',
    'recovery_codes_heading' => '2FA recovery codes',
    'recovery_codes_description' => 'Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two-factor authentication device is lost.',
    'recovery_codes_intro' => 'Recovery codes let you regain access if you lose your 2FA device. Store them in a secure password manager.',
    'show_recovery_codes' => 'Show recovery codes',
    'view_recovery_codes' => 'View recovery codes',
    'hide_recovery_codes' => 'Hide recovery codes',
    'regenerate_recovery_codes' => 'Regenerate recovery codes',
    'regenerate_codes' => 'Regenerate codes',
    'copy_codes' => 'Copy codes',
    'recovery_codes_footer' => 'Each recovery code can be used once to access your account and will be removed after use. If you need more, click Regenerate codes above.',

    // Challenge
    'authentication_code' => 'Authentication code',
    'authentication_code_description' => 'Enter the authentication code provided by your authenticator application.',
    'recovery_code_title' => 'Recovery code',
    'recovery_code_description' => 'Please confirm access to your account by entering one of your emergency recovery codes.',
    'use_recovery_code' => 'login using a recovery code',
    'use_authentication_code' => 'login using an authentication code',
    'or_you_can' => 'or you can',

    // Confirm identity (sudo)
    'confirm_identity_title' => 'Confirm your identity',
    'confirm_password_description' => 'This is a secure area of the application. Please confirm your password before continuing.',
    'verify_identity_title' => 'Verify your identity',
    'verify_identity_description' => 'We\'ve sent a 6-digit verification code to your email address.',
    'verify' => 'Verify',
    'resend_code' => 'Resend code',

    // OTP / sudo (ConfirmIdentity)
    'otp_incorrect' => 'That code didn\'t match. Please double-check and try again.',
    'otp_expired' => 'That code has expired. Please request a new one.',
    'otp_rate_limited' => 'You\'ve tried a few times. Please wait a moment before trying again.',
    'otp_generic_error' => 'Something went wrong verifying that code. Please try again.',

    // 2FA setup modal (Livewire Settings\TwoFactor)
    'setup_load_error' => 'Something went wrong loading the setup. Please refresh and try again.',
    'recovery_codes_load_error' => 'We couldn\'t load your recovery codes. Please refresh and try again.',
    'modal_enabled_title' => 'Two-factor authentication enabled',
    'modal_enabled_description' => 'Two-factor authentication is now enabled. Scan the QR code or enter the setup key in your authenticator app.',
    'modal_verify_title' => 'Verify authentication code',
    'modal_verify_description' => 'Enter the 6-digit code from your authenticator app.',
    'modal_enable_description' => 'To finish enabling two-factor authentication, scan the QR code or enter the setup key in your authenticator app.',
];
