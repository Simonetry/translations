<?php

return [
    'description' => 'Invite people to join your system.',

    // Invitation list (system side)
    'invite_user' => 'Invite a user',
    'invite_role_label' => 'Role',
    'invite_message_label' => 'Personal note (optional)',
    'invite_message_placeholder' => 'Add a friendly note for the invitee.',
    'send_invite' => 'Send invitation',
    'resend_invite' => 'Resend',
    'invited_by' => 'Invited by :user',
    'invited_at' => 'Invited :time',
    'expires_at' => 'Expires :time',

    // Invitation accept (recipient side)
    'accept_title' => 'You\'ve been invited',
    'accept_subtitle' => ':inviter has invited you to join :system as :role.',
    'accept_message_label' => 'Personal note from :inviter',
    'accept_button' => 'Accept invitation',
    'decline_button' => 'Decline',
    'sign_in_to_accept' => 'Sign in to accept this invitation.',
    'create_account_to_accept' => 'Create an account to accept this invitation.',
    'log_in_or_create' => 'Log in or create an account to accept this invitation.',
    'log_in_to_accept' => 'Log In to Accept',
    'register' => 'Register',

    // Already a member
    'already_member' => 'Already a :member',
    'already_member_body' => 'You\'re already a :member of :system.',
    'go_to_dashboard' => 'Go to Dashboard',

    // Expired
    'expired_heading' => 'Invitation Expired',
    'expired_body' => 'This invitation expired :time. Ask :name to send a new one.',
    'expired_simple' => 'This invitation expired :time.',

    // Already accepted
    'already_accepted' => 'This invitation has already been accepted.',

    // Wrong account
    'wrong_account' => 'Wrong Account',
    'wrong_account_body' => 'This invitation was sent to :invited, but you\'re signed in as :current. Sign in with the invited address to accept.',

    // Accept ready
    'invited_to_join' => ':inviter has invited you to join :system as a :role.',
    'expires_on' => 'Expires :date',

    // Flash
    'invite_sent' => 'Invitation sent.',
    'invite_cancelled' => 'Invitation cancelled.',
    'invite_resent' => 'Invitation resent.',
    'invite_accepted' => 'Welcome to :system!',
    'invite_declined' => 'Invitation declined.',

    // Errors
    'invite_invalid' => 'This invitation is invalid or has expired.',
    'invite_already_used' => 'This invitation has already been used.',
    'invite_email_mismatch' => 'This invitation was sent to a different email address.',

    // Mailable (SystemInvitationMail) — subject + email body
    'mail_subject' => 'You\'ve been invited to join :system on PluralSpace',
    'mail_browser_title' => 'You\'ve been invited to :system',
    'mail_greeting' => 'Hi there,',
    'mail_intro_html' => '<strong>:inviter</strong> has invited you to join their system on PluralSpace as a <strong>:role</strong>.',
    'mail_invited_by' => 'Invited by :inviter',
    'mail_action_intro' => 'Click the button below to accept this invitation. You\'ll need to log in (or register) first if you don\'t have an account yet.',
    'mail_expires_note' => 'This invitation expires on :date. If you didn\'t expect this invitation, you can safely ignore this email.',
    'mail_button_fallback' => 'If the button doesn\'t work, copy and paste this link into your browser:',
];
