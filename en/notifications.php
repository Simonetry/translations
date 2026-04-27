<?php

return [
    // Bell / dropdown
    'mark_all_read' => 'Mark all as read',
    'mark_all_read_short' => 'Mark all read',
    'mark_read' => 'Mark as read',
    'mark_unread' => 'Mark as unread',
    'view_all' => 'View all notifications',
    'no_notifications' => 'You\'re all caught up.',
    'no_notifications_short' => 'No notifications yet',
    'unread_count' => ':count unread',
    'new_notifications' => 'You have new notifications.',
    'all_caught_up' => 'All caught up',
    'see_when_something_happens' => 'You\'ll see notifications here when something happens',

    // History page
    'history_title' => 'Notification history',
    'history_description' => 'Everything we\'ve sent you across all channels.',
    'filter_unread' => 'Unread',
    'filter_read' => 'Read',
    'no_history' => 'No notifications yet.',
    'clear_all' => 'Clear all',
    'clear_read' => 'Clear read',

    // Per-notification line items
    'sent_via_email' => 'Sent via email',
    'sent_via_push' => 'Sent via push',
    'sent_via_inapp' => 'In-app only',

    // Front change
    'front_changed_title' => 'Front changed',
    'front_changed_body' => ':member is now fronting.',

    // Invitation
    'invitation_received_body' => ':inviter invited you to join :system.',

    // Data export
    'export_ready_body' => 'Your :format export is ready to download.',
    'export_failed_body' => 'We hit a problem preparing your data export. Try again, or contact support if it keeps failing.',

    // Admin announcement
    'announcement_title' => 'Announcement',

    // Default fallback
    'invitation_email_subject' => 'You\'ve been invited to join :system',
    'invitation_email_greeting' => 'You\'ve been invited!',
    'invitation_email_line' => ':inviter has invited you to join :system as :role.',
    'invitation_email_action' => 'View invitation',
    'invitation_db_body' => ':inviter invited you to join as :role.',
    'user_invited_email_subject' => 'New invitation to :system',
    'user_invited_email_greeting' => 'A new user has been invited!',
    'user_invited_email_line' => ':inviter invited someone to join :system as :role.',
    'user_invited_email_action' => 'View :system',
    'user_invited_db_body' => ':inviter invited someone to join as :role.',

    // UserJoinedNotification
    'user_joined_email_subject' => 'New :member joined :system',
    'user_joined_email_greeting' => 'A new :member has joined!',
    'user_joined_email_line' => ':user has joined :system.',
    'user_joined_email_action' => 'View :system',
    'user_joined_db_body' => ':user has joined the :system.',

    // UserRemovedNotification
    'user_removed_email_subject' => ':member removed from :system',
    'user_removed_email_greeting' => 'A :member has been removed',
    'user_removed_email_line' => ':remover removed :user from :system.',
    'user_removed_email_action' => 'View :system',
    'user_removed_db_body' => ':remover removed :user from the :system.',

    // UserRoleChangedNotification
    'role_changed_email_subject' => 'Role changed in :system',
    'role_changed_email_greeting' => 'A :member\'s role has changed',
    'role_changed_email_line' => ':user\'s role in :system was changed from :old to :new.',
    'role_changed_email_action' => 'View :system',
    'role_changed_db_body' => ':user\'s role changed from :old to :new.',

    // DataExportCompleted (full mail)
    'export_ready_email_subject' => 'Your data export is ready',
    'export_ready_email_greeting' => 'Your data export is ready!',
    'export_ready_email_intro' => 'Your :system data export in :format format is complete.',
    'export_ready_email_file_size' => '**File size:** :size',
    'export_ready_email_expires' => '**Expires:** :date',
    'export_ready_email_action' => 'Download export',
    'export_ready_email_outro' => 'This export will expire in 7 days. Please download it before then.',
    'export_ready_db_title' => 'Data export ready',
    'export_ready_db_body' => 'Your :system :format export is ready to download.',

    // DataExportFailed
    'export_failed_email_greeting' => 'Your data export failed',
    'export_failed_email_intro' => 'We were unable to complete your :system data export in :format format.',
    'export_failed_email_outro' => 'Please try again. If the problem persists, contact support.',
    'export_failed_email_salutation' => 'Sorry for the inconvenience.',
    'export_failed_db_title' => 'Data export failed',
    'export_failed_db_body' => 'Your :system :format export failed. Please try again.',

    // EmailChangeRequestedNotification (sent to old address)
    'email_change_requested_subject' => 'Security alert: email change requested',
    'email_change_requested_line_one' => 'Someone requested to change the email on your PluralSpace account to :email.',
    'email_change_requested_line_two' => 'The change will only take effect once it is confirmed from the new address.',
    'email_change_requested_line_three' => 'If this was not you, reset your password immediately and contact support. The pending change can be cancelled from your profile settings.',
    'email_change_requested_action' => 'Review profile settings',

    // ConfirmPendingEmailNotification (sent to new address)
    'email_change_confirm_subject' => 'Confirm your new email address',
    'email_change_confirm_line_one' => 'A request was made to change the email on your PluralSpace account to :email.',
    'email_change_confirm_line_two' => 'Click the button below to confirm the change. This link expires in 60 minutes.',
    'email_change_confirm_action' => 'Confirm email change',
    'email_change_confirm_line_three' => 'If you did not request this, you can ignore this email — the change will not take effect.',

    // FeatureAccessApprovedNotification
    'feature_access_approved_email_subject' => 'You\'ve been granted access to :feature',
    'feature_access_approved_email_greeting' => 'Good news!',
    'feature_access_approved_email_line_one' => 'Your request for **:feature** has been approved.',
    'feature_access_approved_email_line_two' => 'You can now access this feature from your system settings.',
    'feature_access_approved_email_action' => 'Go to settings',
    'feature_access_approved_db_title' => 'Feature access approved',
    'feature_access_approved_db_body' => 'Your request for :feature has been approved.',

    // ProfileReportedNotification (admin-facing)
    'profile_reported_email_subject' => 'Profile report submitted — :system',
    'profile_reported_email_line_intro' => 'A profile report has been submitted for system: **:system**',
    'profile_reported_email_line_reporter' => '**Reported by:** :reporter',
    'profile_reported_email_line_reason' => '**Reason:** :reason',
    'profile_reported_email_action' => 'Review in admin panel',
];
