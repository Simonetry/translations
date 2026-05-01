<?php

return[
  "access_request_status" => [
    "approved" => "Approved",
    "denied" => "Denied",
    "pending" => "Pending"
  ],
  "activity_action" => [
    "archived" => "Archived",
    "created" => "Created",
    "deleted" => "Deleted",
    "ended" => "Ended",
    "restored" => "Restored",
    "started" => "Started",
    "updated" => "Updated"
  ],
  "border_radius" => [
    "full" => "Full",
    "large" => "Large",
    "medium" => "Medium",
    "none" => "None",
    "small" => "Small"
  ],
  "custom_field_type" => [
    "block_editor" => "Block Editor",
    "color" => "Color",
    "date" => "Date",
    "link" => "Link",
    "markdown" => "Markdown",
    "number" => "Number",
    "text" => "Text",
    "textarea" => "Text Field"
  ],
  "custom_field_type_description" => [
    "block_editor" => "An advanced editor for creating rich content with blocks.",
    "color" => "A field for picking a color.",
    "date" => "A field for selecting a date.",
    "link" => "A field for entering a URL.",
    "markdown" => "A text field that supports Markdown formatting.",
    "number" => "A field that accepts numeric input only.",
    "text" => "A simple text field for short inputs.",
    "textarea" => "A larger text area for longer inputs."
  ],
  "data_export_format" => [
    "html" => "HTML",
    "json" => "JSON"
  ],
  "front_type" => [
    "co_con" => "Co-Con",
    "co_front" => "Co-Front",
    "front" => "Front"
  ],
  "layout_preset" => [
    "bold" => "Bold",
    "bold_description" => "A striking layout with large typography and vibrant sections",
    "card_grid" => "Card Grid",
    "card_grid_description" => "Members displayed in a card-based grid layout",
    "classic" => "Classic",
    "classic_description" => "A traditional profile layout with a linear flow",
    "minimal" => "Minimal",
    "minimal_description" => "A clean, distraction-free layout"
  ],
  "member_visibility" => [
    "admin" => "Admins & above",
    "friend" => "Friends & above",
    "owner_only" => "Owner only",
    "partner" => "Partners & above",
    "public" => "Everyone",
    "trusted" => "Trusted & above"
  ],
  "notification_description" => [
    "admin_announcement" => "Receive important announcements from system administrators.",
    "data_export_completed" => "Get notified when your data export is ready to download.",
    "data_export_failed" => "Get notified if there was an issue with your data export.",
    "front_changed" => "Receive a notification when the front changes.",
    "invitation_received" => "Get notified in-app when someone invites you to join their system.",
    "role_changed" => "Get notified if your role or permissions change within the system.",
    "user_invited" => "Receive a notification when you are invited to join a system.",
    "user_joined" => "Get notified when a new user joins the system.",
    "user_removed" => "Receive a notification if you are removed from the system."
  ],
  "notification_type" => [
    "admin_announcement" => "Admin Announcement",
    "data_export_completed" => "Data Export Completed",
    "data_export_failed" => "Data Export Failed",
    "front_changed" => "Front Changed",
    "invitation_received" => "Invitation Received",
    "role_changed" => "Role Changed",
    "user_invited" => "User Invited",
    "user_joined" => "User Joined",
    "user_removed" => "User Removed"
  ],
  "poll_status" => [
    "closed" => "Closed",
    "closed_description" => "Poll is no longer accepting votes",
    "open" => "Open",
    "open_description" => "Poll is accepting votes"
  ],
  "profile_visibility" => [
    "friends" => "Friends only",
    "hidden" => "Hidden",
    "private" => "Private",
    "public" => "Public"
  ],
  "report_status" => [
    "dismissed" => "Dismissed",
    "pending" => "Pending",
    "upheld" => "Upheld"
  ],
  "spacing_scale" => [
    "compact" => "Compact",
    "default" => "Default",
    "spacious" => "Spacious"
  ],
  "system_import_status" => [
    "completed" => "Completed",
    "completed_with_errors" => "Completed with errors",
    "failed" => "Failed",
    "pending" => "Pending",
    "processing" => "Processing"
  ],
  "system_mood" => [
    "anxious" => "Anxious",
    "anxious_tagline" => "The headspace is a little uneasy right now.",
    "calm" => "Calm",
    "calm_tagline" => "The headspace is calm and settled.",
    "cozy" => "Cozy",
    "cozy_tagline" => "The headspace feels safe and cozy.",
    "energetic" => "Energetic",
    "energetic_tagline" => "The headspace is buzzing with energy.",
    "foggy" => "Foggy",
    "foggy_tagline" => "The headspace is hazy — take it slow.",
    "happy" => "Happy",
    "happy_tagline" => "The headspace is feeling warm and bright.",
    "stressed" => "Stressed",
    "stressed_tagline" => "The headspace is under some pressure.",
    "tired" => "Tired",
    "tired_tagline" => "The headspace is running low on spoons."
  ],
  "system_permission" => [
    "chat.use" => "Use chat",
    "chat.use_description" => "Send and receive messages in the :system chat",
    "custom-fields.view" => "View custom fields",
    "custom-fields.view_description" => "View custom fields on :member profiles",
    "device-tokens.manage" => "Manage device tokens",
    "device-tokens.manage_description" => "Manage device push notification tokens",
    "front.edit" => "Update :front",
    "front.edit_description" => "Log and update who is currently :fronting",
    "front.view" => "View :front status",
    "front.view_description" => "See who is currently :fronting",
    "journal.edit" => "Write journal",
    "journal.edit_description" => "Create and edit journal entries",
    "journal.view" => "View journal",
    "journal.view_description" => "Read journal entries up to their permitted tier",
    "members.edit" => "Manage :members",
    "members.edit_description" => "Add, edit, and archive :system :members",
    "members.map" => "View :system map",
    "members.map_description" => "View the :system map showing :member relationships",
    "members.view" => "View :members",
    "members.view_description" => "View :system :members and their profiles",
    "notes.edit" => "Manage notes",
    "notes.edit_description" => "Create, edit, and delete notes",
    "notes.view" => "View notes",
    "notes.view_description" => "View notes created by :system :members",
    "polls.edit" => "Manage polls",
    "polls.edit_description" => "Create, edit, and delete polls",
    "polls.view" => "View polls",
    "polls.view_description" => "View polls and vote on them",
    "system.manage" => "Manage :system",
    "system.manage_description" => "Change :system settings and privacy tiers"
  ],
  "system_user_role" => [
    "admin" => "Admin",
    "owner" => "Owner",
    "partner" => "Partner",
    "read_only" => "Friend",
    "trusted" => "Trusted Friend"
  ],
  "system_visibility" => [
    "friends" => "Friends only",
    "private" => "Private",
    "public" => "Public"
  ]
];