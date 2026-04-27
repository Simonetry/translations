<?php

return [
    'description' => 'Build apps and integrations on the PluralSpace API.',

    // Dashboard
    'dashboard_title' => 'Developer dashboard',
    'dashboard_subtitle' => 'Manage your OAuth applications & API access',
    'your_apps' => 'Your apps',
    'create_app' => 'New app',
    'no_apps' => 'You haven\'t created any apps yet.',
    'docs' => 'API docs',
    'wrapped_docs' => 'Wrapped API',
    'new_application' => 'New Application',
    'total_applications' => 'Total Applications',
    'active_tokens' => 'Active Tokens',
    'no_applications_yet' => 'No applications yet',
    'register_first_app' => 'Register your first OAuth application to start using the API.',
    'last_used' => 'Last used :time',
    'never_used' => 'Never used',
    'token_count' => ':count :label',
    'token_singular' => 'token',
    'token_plural' => 'tokens',
    'confidential' => 'Confidential',
    'public_pkce' => 'Public (PKCE)',

    // Quick reference
    'quick_reference' => 'Quick Reference',
    'authorization_endpoint' => 'Authorization Endpoint',
    'token_endpoint' => 'Token Endpoint',
    'token_revocation' => 'Token Revocation',

    // Create page
    'back_to_dashboard' => 'Back to Dashboard',
    'new_application_subtitle' => 'Register an OAuth application to access the API.',
    'application_created' => 'Application Created',
    'application_name' => 'Application Name',
    'application_name_placeholder' => 'My Application',
    'redirect_uris' => 'Redirect URI(s)',
    'redirect_uris_placeholder' => 'https://example.com/callback',
    'redirect_uris_help' => 'Separate multiple URIs with commas.',
    'client_type' => 'Client Type',
    'confidential_description' => 'Server-side app that can keep a secret',
    'public_pkce_description' => 'SPA or mobile app that cannot store a secret securely',
    'go_to_application' => 'Go to Application',
    'create_application' => 'Create Application',
    'copy_secret_now' => 'Copy this secret now. It will not be shown again.',

    // Show page
    'application_details' => 'Application details & configuration',
    'credentials' => 'Credentials',
    'secret_shown_once' => 'The secret was shown once when the application was created and cannot be retrieved.',
    'public_no_secret' => 'Public client — no secret',
    'danger_zone' => 'Danger Zone',
    'delete_this_application' => 'Delete this application',
    'delete_this_application_body' => 'This will revoke all tokens and cannot be undone.',
    'delete_application_heading' => 'Delete Application?',
    'delete_application_confirm' => 'This will permanently revoke :name and all its tokens. This action cannot be undone.',
    'delete_application_button' => 'Delete Application',

    // App form
    'app_name' => 'App name',
    'app_name_placeholder' => 'My awesome app',
    'app_description_placeholder' => 'What does this app do?',
    'app_homepage' => 'Homepage URL',
    'app_redirect_uris' => 'Redirect URIs',
    'app_redirect_uris_help' => 'One URL per line. Used to redirect users back after they authorize your app.',
    'app_logo' => 'App logo',
    'app_confidential' => 'Confidential client',
    'app_confidential_help' => 'Confidential clients can keep secrets (server apps). Public clients (mobile, SPA) cannot.',

    // Show
    'client_id' => 'Client ID',
    'client_secret' => 'Client secret',
    'client_secret_warning' => 'Copy this now — you won\'t see it again.',
    'regenerate_secret' => 'Regenerate client secret',
    'regenerate_secret_confirm' => 'Regenerating will immediately invalidate the existing secret. Apps using it will stop working until you update them. Continue?',
    'delete_app' => 'Delete app',
    'delete_app_confirm' => 'Delete this app? Any user authorizations will be revoked.',

    // Flash
    'app_created' => 'App created.',
    'app_updated' => 'App updated.',
    'app_deleted' => 'App deleted.',
    'secret_regenerated' => 'Client secret regenerated. Copy it now.',

    // Docs
    'getting_started' => 'Getting started',
    'authentication' => 'Authentication',
    'scopes' => 'Scopes',
    'rate_limits' => 'Rate limits',
    'webhooks' => 'Webhooks',
    'api_docs_title' => 'API Documentation',
    'api_docs_subtitle' => 'PluralSpace REST API reference',
    'wrapped_docs_title' => 'Wrapped API Documentation',
    'wrapped_docs_subtitle' => 'Animation specs & Flutter reference for the Wrapped experience',
    'no_published_release' => 'No published wrapped release found for your system.',
    'no_published_release_help' => 'Create and publish a wrapped release in the admin panel, then compute snapshots to see live data here.',

    // Flash messages (Livewire ClientShow)
    'application_updated' => 'Application updated.',
];
