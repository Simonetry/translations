<?php

return [
    'system_visibility' => [
        'public' => 'Offentlig',
        'friends' => 'Endast vänner',
        'private' => 'Privat',
    ],

    'system_import_status' => [
        'pending' => 'Väntar',
        'processing' => 'Bearbetas',
        'completed' => 'Slutförd',
        'completed_with_errors' => 'Slutförd med fel',
        'failed' => 'Misslyckades',
    ],

    'system_user_role' => [
        'owner' => 'Ägare',
        'admin' => 'Admin',
        'partner' => 'Partner',
        'trusted' => 'Betrodd vän',
        'read_only' => 'Vän',
    ],

    'custom_field_type' => [
        'text' => 'Text',
        'number' => 'Nummer',
        'date' => 'Datum',
        'link' => 'Länk',
        'color' => 'Färg',
        'textarea' => 'Textfält',
        'markdown' => 'Markdown',
        'block_editor' => 'Blockredigerare',
    ],

    'custom_field_type_description' => [
        'text' => 'Ett enkelt textfält för korta inmatningar.',
        'number' => 'Ett fält som endast accepterar siffror.',
        'date' => 'Ett fält för att välja ett datum.',
        'link' => 'Ett fält för att ange en webbadress.',
        'color' => 'Ett fält för att välja en färg.',
        'textarea' => 'Ett större textområde för längre inmatningar.',
        'markdown' => 'Ett textfält som stöder Markdown-formatering.',
        'block_editor' => 'En avancerad redigerare för att skapa innehåll med block.',
    ],

    'system_permission' => [
        'front.edit' => 'Uppdatera :front',
        'front.view' => 'Visa status för :front',
        'journal.view' => 'Visa journal',
        'journal.edit' => 'Skriv i journal',
        'members.view' => 'Visa :members',
        'members.map' => 'Visa karta för :system',
        'members.edit' => 'Hantera :members',
        'custom-fields.view' => 'Visa anpassade fält',
        'chat.use' => 'Använd chatt',
        'polls.view' => 'Visa omröstningar',
        'polls.edit' => 'Hantera omröstningar',
        'system.manage' => 'Hantera :system',
        'device-tokens.manage' => 'Hantera enhetstoken',

        'notes.view' => 'Visa anteckningar',
        'notes.edit' => 'Hantera anteckningar',

        'front.edit_description' => 'Logga och uppdatera vem som är :fronting just nu',
        'front.view_description' => 'Se vem som är :fronting just nu',
        'journal.view_description' => 'Läs journalinlägg upp till tillåten nivå',
        'journal.edit_description' => 'Skapa och redigera journalinlägg',
        'members.view_description' => 'Visa :system :members och deras profiler',
        'members.map_description' => 'Visa kartan för :system som visar relationer mellan :members',
        'members.edit_description' => 'Lägg till, redigera och arkivera :system :members',
        'custom-fields.view_description' => 'Visa anpassade fält på profiler för :members',
        'chat.use_description' => 'Skicka och ta emot meddelanden i chatten för :system',
        'polls.view_description' => 'Visa omröstningar och rösta i dem',
        'polls.edit_description' => 'Skapa, redigera och ta bort omröstningar',
        'notes.view_description' => 'Visa anteckningar skapade av :system :members',
        'notes.edit_description' => 'Skapa, redigera och ta bort anteckningar',
        'system.manage_description' => 'Ändra inställningar och sekretessnivåer för :system',
        'device-tokens.manage_description' => 'Hantera token för push-notiser till enheter',
    ],

    'activity_action' => [
        'created' => 'Skapad',
        'updated' => 'Uppdaterad',
        'deleted' => 'Borttagen',
        'archived' => 'Arkiverad',
        'restored' => 'Återställd',
        'started' => 'Startad',
        'ended' => 'Avslutad',
    ],

    'poll_status' => [
        'open' => 'Öppen',
        'closed' => 'Stängd',
        'open_description' => 'Omröstningen tar emot röster',
        'closed_description' => 'Omröstningen är stängd för röster',
    ],

    'access_request_status' => [
        'pending' => 'Väntar',
        'approved' => 'Godkänd',
        'denied' => 'Nekad',
    ],

    'report_status' => [
        'pending' => 'Väntar',
        'upheld' => 'Fastställd',
        'dismissed' => 'Avvisad',
    ],

    'member_visibility' => [
        'public' => 'Alla',
        'friend' => 'Vänner & uppåt',
        'trusted' => 'Betrodda & uppåt',
        'partner' => 'Partners & uppåt',
        'admin' => 'Admins & uppåt',
        'owner_only' => 'Endast ägare',
    ],

    'profile_visibility' => [
        'public' => 'Offentlig',
        'friends' => 'Endast vänner',
        'private' => 'Privat',
        'hidden' => 'Dold',
    ],

    'layout_preset' => [
        'classic' => 'Klassisk',
        'card_grid' => 'Kortrutnät',
        'minimal' => 'Minimal',
        'bold' => 'Fet',
        'classic_description' => 'En traditionell profillayout med ett linjärt flöde',
        'card_grid_description' => 'Medlemmar visas i en kortbaserad rutnätslayout',
        'minimal_description' => 'En ren och distraktionsfri layout',
        'bold_description' => 'En slående layout med stor typografi och livfulla sektioner',
    ],

    'spacing_scale' => [
        'compact' => 'Kompakt',
        'default' => 'Standard',
        'spacious' => 'Rymlig',
    ],

    'border_radius' => [
        'none' => 'Ingen',
        'small' => 'Liten',
        'medium' => 'Mellan',
        'large' => 'Stor',
        'full' => 'Full',
    ],

    'data_export_format' => [
        'json' => 'JSON',
        'html' => 'HTML',
    ],

    'front_type' => [
        'front' => 'Front',
        'co_front' => 'Co-Front',
        'co_con' => 'Co-Con',
    ],

    'system_mood' => [
        'calm' => 'Lugn',
        'energetic' => 'Energisk',
        'tired' => 'Trött',
        'anxious' => 'Orolig',
        'happy' => 'Glad',
        'foggy' => 'Dimmig',
        'stressed' => 'Stressad',
        'cozy' => 'Mysig',
        'calm_tagline' => 'Det är lugnt och stilla i "headspace".',
        'energetic_tagline' => 'Det sjuder av energi i "headspace".',
        'tired_tagline' => 'Det är ont om "spoons" i "headspace".',
        'anxious_tagline' => 'Det är lite oroligt i "headspace" just nu.',
        'happy_tagline' => 'Det känns varmt och ljust i "headspace".',
        'foggy_tagline' => 'Det är dimmigt i "headspace" – ta det lugnt.',
        'stressed_tagline' => 'Det är hög press i "headspace" just nu.',
        'cozy_tagline' => 'Det känns tryggt och mysigt i "headspace".',
    ],

    'notification_type' => [
        'front_changed' => 'Front ändrad',
        'admin_announcement' => 'Admin-meddelande',
        'data_export_completed' => 'Datuexport slutförd',
        'data_export_failed' => 'Dataexport misslyckades',
        'user_invited' => 'Användare inbjuden',
        'user_joined' => 'Användare gick med',
        'user_removed' => 'Användare borttagen',
        'role_changed' => 'Roll ändrad',
        'invitation_received' => 'Inbjudan mottagen',
    ],

    'notification_description' => [
        'front_changed' => 'Få en notis när "front" ändras.',
        'admin_announcement' => 'Få viktiga meddelanden från systemadministratörer.',
        'data_export_completed' => 'Bli meddelad när din dataexport är redo för nedladdning.',
        'data_export_failed' => 'Bli meddelad om det uppstod ett problem med din dataexport.',
        'user_invited' => 'Få en notis när du blir inbjuden till ett system.',
        'user_joined' => 'Få en notis när en ny användare går med i systemet.',
        'user_removed' => 'Få en notis om du tas bort från systemet.',
        'role_changed' => 'Få en notis om din roll eller dina behörigheter ändras i systemet.',
        'invitation_received' => 'Få en notis i appen när någon bjuder in dig till sitt system.',
    ],

    'notification_type' => [
        'front_changed' => 'Front ändrad',
        'admin_announcement' => 'Admin meddelande',
        'data_export_completed' => 'Dataexport slutförd',
        'data_export_failed' => 'Dataexport misslyckades',
        'user_invited' => 'Användare inbjuden',
        'user_joined' => 'Användare gick med',
        'user_removed' => 'Användare borttagen',
        'role_changed' => 'Roll ändrad',
        'invitation_received' => 'Inbjudan mottagen',
    ],

    'notification_description' => [
        'front_changed' => 'Få en notis när front ändras.',
        'admin_announcement' => 'Få viktiga meddelanden från systemadministratörer.',
        'data_export_completed' => 'Bli meddelad när din dataexport är redo för nedladdning.',
        'data_export_failed' => 'Bli meddelad om det uppstod ett problem med din dataexport.',
        'user_invited' => 'Få en notis när du blir inbjuden till ett system.',
        'user_joined' => 'Få en notis när en ny användare går med i systemet.',
        'user_removed' => 'Få en notis om du tas bort från systemet.',
        'role_changed' => 'Få en notis om din roll eller dina behörigheter ändras i systemet.',
        'invitation_received' => 'Få en notis i appen när någon bjuder in dig till sitt system.',
    ],
];
