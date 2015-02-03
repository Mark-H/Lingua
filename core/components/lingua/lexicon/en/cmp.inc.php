<?php

$_lang['lingua.language'] = 'Language';
$_lang['lingua.languages'] = 'Languages';
$_lang['lingua.about'] = 'About';
$_lang['lingua.settings'] = 'Settings';
$_lang['lingua.settings_desc'] = 'Global settings for language and localization purposes.';
$_lang['lingua.active'] = 'Active';
$_lang['lingua.local_name'] = 'Local Name';
$_lang['lingua.lang_code'] = 'Language Code';
$_lang['lingua.lcid_string'] = 'LCID String';
$_lang['lingua.lcid_dec'] = 'LCID Decimal';
$_lang['lingua.date_format_lite'] = 'Date Lite';
$_lang['lingua.date_format_full'] = 'Date Full';
$_lang['lingua.rtl'] = 'RTL';
$_lang['lingua.ref'] = 'Ref.';
$_lang['lingua.right_to_left'] = 'Right to Left';
$_lang['lingua.flag'] = 'Flag';
$_lang['lingua.update'] = 'Update';
$_lang['lingua.delete'] = 'Delete';
$_lang['lingua.lang_create'] = 'Add new language data';
$_lang['lingua.delete_lang_confirm'] = 'Are you sure you want to delete this language from the Lingua\'s database?';
$_lang['lingua.delete_tv_confirm'] = 'Are you sure you want to remove the translation this TV?';
$_lang['lingua.search...'] = 'Search...';
$_lang['lingua.tmplvars_desc'] = 'Define which Template Variable that needs to be translated';
$_lang['lingua.add_tv'] = 'Add Template Variable';
$_lang['lingua.list'] = 'List';
$_lang['lingua.cloningpatterns'] = 'Cloning Patterns';
$_lang['lingua.cloningpatterns_desc'] = 'When cloning Template Variables, Lingua needs to replace any IDs in TV\'s input form to avoid Javascript\'s confliction.  Please use <code>{{tvId}}</code> as the "search" pattern, and <code>{{tvCloneId}}</code> as its "replacement".';
$_lang['lingua.add_pattern'] = 'Add Pattern';
$_lang['lingua.replacement'] = 'Replacement';
$_lang['lingua.pattern_exists'] = 'Search and Pattern exist for "[[+type]]" type.';
$_lang['lingua.scopes'] = 'Scopes';
$_lang['lingua.scopes_desc'] = 'Set grain scopes here to override Global Settings';
$_lang['lingua.context_scope_desc'] = 'To specify languages on context scope, please go to context\'s setting, add "lingua.langs" key and fill its value with (comma delimited if many) languages\' iso code(s).' ;
$_lang['lingua.resource_scope_desc'] = 'Specify languages on resource scope.' ;
$_lang['lingua.as_parent'] = 'As Parent' ;
$_lang['lingua.as_parent_desc'] = 'Apply properties to the direct children of this resource.' ;
$_lang['lingua.as_ancestor'] = 'As Ancestor' ;
$_lang['lingua.as_ancestor_desc'] = 'Apply properties to all descendants of this resource.' ;
$_lang['lingua.exclude_self'] = 'Exclude Self' ;
$_lang['lingua.exclude_self_desc'] = 'Exclude the properties to this resource, revert to Global/Context\'s Settings' ;
$_lang['lingua.resourcescope_create'] = 'Add new setting for a resource';
$_lang['lingua.delete_resourcescope_confirm'] = 'Are you sure you want to delete this resource scope?';
$_lang['lingua.languages_field_desc'] = 'Fill languages with (comma delimited if many) 2-letters ISO code(s), eg: en,de,es.';
$_lang['lingua.tools'] = 'Tools';
$_lang['lingua.sync'] = 'Synchronize';
$_lang['lingua.sync_desc'] = 'Synchronize resources to their translations according to the given language codes in General Settings, System Settings, and resource scope.<br>'
        . '<b>Inexisting translation will be added, unused translation will be deleted, but existing one will not be overriden.</b><br>'
        . '<ol><li>Auto Synchronize will check all resources.</li>'
        . '<li>Manual Synchronize will only check defined resources below.</li></ol>';
$_lang['lingua.auto_sync'] = 'Auto Synchronize';
$_lang['lingua.select_context'] = 'Select Context';
$_lang['lingua.auto_sync_confirm'] = 'Are you sure you want to run Auto Synchronize?';
$_lang['lingua.manual_sync'] = 'Manual Synchronize';
$_lang['lingua.please_wait'] = 'Please wait...';
