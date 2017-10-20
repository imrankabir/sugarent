<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$mod_strings = array(
    'TPL_ACTIVITY_CREATE' => 'สร้าง {{{str "TPL_ACTIVITY_RECORD" "Activities" object}}}{{#if object.module}} {{getModuleName object.module}}{{/if}} แล้ว',
    'TPL_ACTIVITY_POST' => '{{{value}}}{{{str "TPL_ACTIVITY_ON" "Activities" this}}}',
    'TPL_ACTIVITY_UPDATE' => 'อัปเดต {{#if updateStr}}{{{updateStr}}} ใน {{/if}}{{#if object.module}}{{{str "TPL_ACTIVITY_RECORD" "Activities" object}}}{{else}}{{object.name}}{{/if}} แล้ว',
    'TPL_ACTIVITY_UPDATE_FIELD' => '<a rel="tooltip" title="Changed: {{before}} To: {{after}}">{{field_label}}</a>',
    'TPL_ACTIVITY_LINK' => 'เชื่อมโยง {{{str "TPL_ACTIVITY_RECORD" "Activities" subject}}} กับ {{{str "TPL_ACTIVITY_RECORD" "Activities" object}}} แล้ว',
    'TPL_ACTIVITY_UNLINK' => 'เลิกเชื่อมโยง {{{str "TPL_ACTIVITY_RECORD" "Activities" subject}}} กับ {{{str "TPL_ACTIVITY_RECORD" "Activities" object}}} แล้ว',
    'TPL_ACTIVITY_ATTACH' => 'เพิ่มไฟล์ <a class="dragoff" target="sugar_attach" href="{{url}}" data-note-id="{{noteId}}">{{filename}}</a>{{{str "TPL_ACTIVITY_ON" "Activities" this}}} แล้ว',
    'TPL_ACTIVITY_DELETE' => 'ลบ {{{str "TPL_ACTIVITY_RECORD" "Activities" object}}} {{getModuleName object.module}} แล้ว',
    'TPL_ACTIVITY_UNDELETE' => 'เรียกคืน {{{str "TPL_ACTIVITY_RECORD" "Activities" object}}} {{getModuleName object.module}} แล้ว',
    'TPL_ACTIVITY_RECORD' => '{{#if module}}<a href="#{{buildRoute module=module id=id}}">{{name}}</a>{{else}}{{name}}{{/if}}',
    // We need the trailing space at the end of the next line so that the str
    // handlebars helper isn't confused by a template that returns no text.
    'TPL_ACTIVITY_ON' => '{{#if object}} ใน {{{str "TPL_ACTIVITY_RECORD" "Activities" object}}}.{{/if}}{{#if module}} ใน {{getModuleName module}}.{{else}} {{/if}}',
    'TPL_COMMENT' => '{{{value}}}',
    'TPL_MORE_COMMENT' => '{{this}} ความคิดเห็นเพิ่มเติม&hellip;',
    'TPL_MORE_COMMENTS' => '{{this}} ความคิดเห็นเพิ่มเติม&hellip;',
    'TPL_SHOW_MORE_MODULE' => 'โพสต์เพิ่มเติม...',
);
