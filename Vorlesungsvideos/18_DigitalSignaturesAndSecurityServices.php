<!DOCTYPE html>
<html  dir="ltr" lang="de" xml:lang="de">
<head>
    <title>Krypto2020: Video &quot;Lecture 18: Digital Signatures and Security Services&quot;</title>
    <link rel="icon" href="//lernen.h-da.de/pluginfile.php/1/theme_adaptable/favicon/1593743412/moodle.png" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="moodle, Krypto2020: Video &quot;Lecture 18: Digital Signatures and Security Services&quot;" />
<link rel="stylesheet" type="text/css" href="https://lernen.h-da.de/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css" /><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="https://lernen.h-da.de/theme/styles.php/adaptable/1593743412_1/all" />
<script type="text/javascript">
//<![CDATA[
var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
M.cfg = {"wwwroot":"https:\/\/lernen.h-da.de","sesskey":"2OOunWPYPj","themerev":"1593743412","slasharguments":1,"theme":"adaptable","iconsystemmodule":"core\/icon_system_standard","jsrev":"1593743413","admin":"admin","svgicons":true,"usertimezone":"Europa\/Berlin","contextid":508472};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''}
if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else{me.path=component+'/'+component+'.'+me.type}};
YUI_config = {"debug":false,"base":"https:\/\/lernen.h-da.de\/lib\/yuilib\/3.17.2\/","comboBase":"https:\/\/lernen.h-da.de\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui2":{"base":"https:\/\/lernen.h-da.de\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"https:\/\/lernen.h-da.de\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"https:\/\/lernen.h-da.de\/theme\/yui_combo.php?m\/1593743413\/","combine":true,"comboBase":"https:\/\/lernen.h-da.de\/theme\/yui_combo.php?","ext":false,"root":"m\/1593743413\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-event":{"requires":["event-custom"]},"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-formchangechecker":{"requires":["base","event-focus","moodle-core-event"]},"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core-dock":{"requires":["base","node","event-custom","event-mouseenter","event-resize","escape","moodle-core-dock-loader","moodle-core-event"]},"moodle-core-dock-loader":{"requires":["escape"]},"moodle-core-languninstallconfirm":{"requires":["base","node","moodle-core-notification-confirm","moodle-core-notification-alert"]},"moodle-core-popuphelp":{"requires":["moodle-core-tooltip"]},"moodle-core-tooltip":{"requires":["base","node","io-base","moodle-core-notification-dialogue","json-parse","widget-position","widget-position-align","event-outside","cache-base"]},"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-checknet":{"requires":["base-base","moodle-core-notification-alert","io-base"]},"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core_availability-form":{"requires":["base","node","event","event-delegate","panel","moodle-core-notification-dialogue","json"]},"moodle-backup-backupselectall":{"requires":["node","event","node-event-simulate","anim"]},"moodle-backup-confirmcancel":{"requires":["node","node-event-simulate","moodle-core-notification-confirm"]},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-course-modchooser":{"requires":["moodle-core-chooserdialogue","moodle-course-coursebase"]},"moodle-course-formatchooser":{"requires":["base","node","node-event-simulate"]},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-form-showadvanced":{"requires":["node","base","selector-css3"]},"moodle-form-passwordunmask":{"requires":[]},"moodle-form-shortforms":{"requires":["node","base","selector-css3","moodle-core-event"]},"moodle-form-dateselector":{"requires":["base","node","overlay","calendar"]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-question-qbankmanager":{"requires":["node","selector-css3"]},"moodle-question-preview":{"requires":["base","dom","event-delegate","event-key","core_question_engine"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_attendance-groupfilter":{"requires":["base","node"]},"moodle-mod_forum-subscriptiontoggle":{"requires":["base-base","io-base"]},"moodle-mod_quiz-modform":{"requires":["base","node","event"]},"moodle-mod_quiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_quiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-base","moodle-mod_quiz-util-page","moodle-mod_quiz-util-slot","moodle-course-util"]},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_quiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_quiz-util","querystring-parse"]},"moodle-mod_quiz-repaginate":{"requires":["base","event","node","io","moodle-core-notification-dialogue"]},"moodle-mod_quiz-util":{"requires":["node","moodle-core-actionmenu"],"use":["moodle-mod_quiz-util-base"],"submodules":{"moodle-mod_quiz-util-base":{},"moodle-mod_quiz-util-slot":{"requires":["node","moodle-mod_quiz-util-base"]},"moodle-mod_quiz-util-page":{"requires":["node","moodle-mod_quiz-util-base"]}}},"moodle-mod_quiz-quizbase":{"requires":["base","node"]},"moodle-mod_scheduler-studentlist":{"requires":["base","node","event","io"]},"moodle-mod_scheduler-saveseen":{"requires":["base","node","event"]},"moodle-mod_scheduler-delselected":{"requires":["base","node","event"]},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-filter_glossary-autolinker":{"requires":["base","node","io-base","json-parse","event-delegate","overlay","moodle-core-event","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-filter_mathjaxloader-loader":{"requires":["moodle-core-event"]},"moodle-editor_atto-rangy":{"requires":[]},"moodle-editor_atto-editor":{"requires":["node","transition","io","overlay","escape","event","event-simulate","event-custom","node-event-html5","node-event-simulate","yui-throttle","moodle-core-notification-dialogue","moodle-core-notification-confirm","moodle-editor_atto-rangy","handlebars","timers","querystring-stringify"]},"moodle-editor_atto-plugin":{"requires":["node","base","escape","event","event-outside","handlebars","event-custom","timers","moodle-editor_atto-menu"]},"moodle-editor_atto-menu":{"requires":["moodle-core-notification-dialogue","node","event","event-custom"]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-gradereport_grader-gradereporttable":{"requires":["base","node","event","handlebars","overlay","event-hover"]},"moodle-gradereport_history-userselector":{"requires":["escape","event-delegate","event-key","handlebars","io-base","json-parse","moodle-core-notification-dialogue"]},"moodle-tool_capability-search":{"requires":["base","node"]},"moodle-tool_lp-dragdrop-reorder":{"requires":["moodle-core-dragdrop"]},"moodle-tool_monitor-dropdown":{"requires":["base","event","node"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","transition","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-alert","moodle-core-notification-warning","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-atto_accessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_accessibilityhelper-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_align-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_bold-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_charmap-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_clear-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_collapse-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emoticon-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_equation-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_html-codemirror":{"requires":["moodle-atto_html-codemirror-skin"]},"moodle-atto_html-beautify":{},"moodle-atto_html-button":{"requires":["promise","moodle-editor_atto-plugin","moodle-atto_html-beautify","moodle-atto_html-codemirror","event-valuechange"]},"moodle-atto_image-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_indent-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_italic-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_link-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-usedfiles":{"requires":["node","escape"]},"moodle-atto_media-button":{"requires":["moodle-editor_atto-plugin","moodle-form-shortforms"]},"moodle-atto_noautolink-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_orderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_recordrtc-recording":{"requires":["moodle-atto_recordrtc-button"]},"moodle-atto_recordrtc-button":{"requires":["moodle-editor_atto-plugin","moodle-atto_recordrtc-recording"]},"moodle-atto_rtl-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_strike-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_subscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_superscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_table-button":{"requires":["moodle-editor_atto-plugin","moodle-editor_atto-menu","event","event-valuechange"]},"moodle-atto_title-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_underline-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_undo-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_unorderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_wiris-button":{"requires":["moodle-editor_atto-plugin","get"]}}},"gallery":{"name":"gallery","base":"https:\/\/lernen.h-da.de\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"https:\/\/lernen.h-da.de\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1593743413\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"https:\/\/lernen.h-da.de\/lib\/javascript.php\/1593743413\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker","moodle-core-notification-dialogue"]},"core_comment":{"name":"core_comment","fullpath":"https:\/\/lernen.h-da.de\/lib\/javascript.php\/1593743413\/comment\/comment.js","requires":["base","io-base","node","json","yui2-animation","overlay","escape"]},"mathjax":{"name":"mathjax","fullpath":"https:\/\/cdnjs.cloudflare.com\/ajax\/libs\/mathjax\/2.7.2\/MathJax.js?delayStartupUntil=configured"}}};
M.yui.loader = {modules: {}};

//]]>
</script>

<script type="text/x-mathjax-config"> MathJax.Hub.Config({
MMLorHTML: { prefer: "HTML" },
tex2jax: {
displayMath: [['\\[', '\\]']],
inlineMath: [['\\(', '\\)']],
processEscapes: true
},
TeX: {
extensions: ['enclose.js'],
Macros: { pounds: '{\\it\\unicode{xA3}}', euro: '\\unicode{x20AC}' }
}
});
</script>
<script type="text/javascript" async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-MML-AM_CHTML"> </script>    <!-- CSS print media -->
    <link rel="stylesheet" type="text/css" href="https://lernen.h-da.de/theme/adaptable/style/print.css" media="print">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Twitter Card data -->
    <meta name="twitter:card" value="summary">
    <meta name="twitter:site" value="Kurse der Hochschule Darmstadt" />
    <meta name="twitter:title" value="Krypto2020: Video &quot;Lecture 18: Digital Signatures and Security Services&quot;" />

    <!-- Open Graph data -->
    <meta property="og:title" content="Krypto2020: Video &quot;Lecture 18: Digital Signatures and Security Services&quot;" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://lernen.h-da.de" />
    <meta name="og:site_name" value="Kurse der Hochschule Darmstadt" />

    <!-- Chrome, Firefox OS and Opera on Android -->
    <meta name="theme-color" content="#e69119" />

    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#e69119" />

    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#e69119" />

    <!-- Load FA icons -->
    <link rel="stylesheet" href="https://lernen.h-da.de/theme/adaptable/style/font-awesome.min.css">

    
    
    </head>

<body  id="page-mod-url-view" class="format-weeks  path-mod path-mod-url gecko dir-ltr lang-de yui-skin-sam yui3-skin-sam lernen-h-da-de pagelayout-incourse course-10694 context-508472 cmid-395687 category-1030 two-column nozoom has-region-side-post used-region-side-post has-region-course-section-a empty-region-course-section-a side-post-only">

<div class="skiplinks">
    <a href="#maincontent" class="skip">Zum Hauptinhalt</a>
</div><script type="text/javascript" src="https://lernen.h-da.de/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js"></script><script type="text/javascript" src="https://lernen.h-da.de/theme/jquery.php/core/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://lernen.h-da.de/theme/jquery.php/theme_adaptable/pace-min.js"></script>
<script type="text/javascript" src="https://lernen.h-da.de/theme/jquery.php/theme_adaptable/jquery-flexslider-min.js"></script>
<script type="text/javascript" src="https://lernen.h-da.de/theme/jquery.php/theme_adaptable/tickerme.js"></script>
<script type="text/javascript" src="https://lernen.h-da.de/theme/jquery.php/theme_adaptable/jquery-easing-min.js"></script>
<script type="text/javascript" src="https://lernen.h-da.de/theme/jquery.php/theme_adaptable/adaptable.js"></script>
<script type="text/javascript" src="https://lernen.h-da.de/lib/javascript.php/1593743413/lib/javascript-static.js"></script>
<script type="text/javascript">
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>


<div id="page" class="container-fluid fullin showblockicons">

    <header id="page-header-wrapper"  >
    <div id="above-header">
        <div class="clearfix container userhead">
            <div class="pull-left">
                <ul class="usermenu2 nav navbar-nav navbar-right"></ul>            </div>

            <div class="headermenu row">
        <div class="dropdown secondone">
            <a class="dropdown-toggle usermendrop" data-toggle="dropdown">

<img src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/u/f1" class="userpicture defaultuserpic" width="80" height="80" alt="Nutzerbild von Ronja Wolf" title="Nutzerbild von Ronja Wolf" />Ronja Wolf                <span class="fa fa-angle-down"></span>
            </a>

    <ul class="dropdown-menu usermen" role="menu">

<li><a href="https://lernen.h-da.de/user/profile.php" title="Profil anzeigen"><i class="fa fa-user"></i>Profil anzeigen</a></li><li><a href="https://lernen.h-da.de/user/edit.php" title="Profil bearbeiten"><i class="fa fa-cog"></i>Profil bearbeiten</a></li><li><a href="https://lernen.h-da.de/user/files.php" title="Meine Dateien"><i class="fa fa-file"></i>Meine Dateien</a></li><li><a href="https://lernen.h-da.de/grade/report/overview/index.php" title="Bewertungen"><i class="fa fa-list-alt"></i>Bewertungen</a></li><li><a href="https://lernen.h-da.de/user/preferences.php" title="Einstellungen"><i class="fa fa-cog"></i>Einstellungen</a></li><li><a href="https://lernen.h-da.de/login/logout.php?sesskey=2OOunWPYPj" title="Abmelden"><i class="fa fa-sign-out"></i>Abmelden</a></li>
    </ul>
</div>
</div>

<div style="float: right; position: relative; display: inline; margin-left: 15px; height:20px;">
</div>

<div class="pull-right popover-region collapsed">
    <a id="message-drawer-toggle-5f009b81978c15f009b8193b194" class="nav-link d-inline-block popover-region-toggle position-relative" href="#"
            role="button">
        <img class="icon " alt="Mitteilungen" title="Mitteilungen" src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/t/message" />
        <div class="count-container hidden" data-region="count-container"
        aria-label="0 ungelesene Diskussionen">0</div>
    </a>
</div><div class="popover-region collapsed popover-region-notifications"
    id="nav-notification-popover-container" data-userid="54768"
    data-region="popover-region">
    <div class="popover-region-toggle nav-link"
        data-region="popover-region-toggle"
        role="button"
        aria-controls="popover-region-container-5f009b81986b55f009b8193b195"
        aria-haspopup="true"
        aria-label="Mitteilungsfenster ohne neue Systemnachrichten anzeigen"
        tabindex="0">
                <img class="icon " alt="Systemnachrichten" title="Systemnachrichten" src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/notifications" />
        <div class="count-container hidden" data-region="count-container"
        aria-label="0 ungelesene Systemnachrichten">0</div>

    </div>
    <div 
        id="popover-region-container-5f009b81986b55f009b8193b195"
        class="popover-region-container"
        data-region="popover-region-container"
        aria-expanded="false"
        aria-hidden="true"
        aria-label="Mitteilungsfenster"
        role="region">
        <div class="popover-region-header-container">
            <h3 class="popover-region-header-text" data-region="popover-region-header-text">Systemnachrichten</h3>
            <div class="popover-region-header-actions" data-region="popover-region-header-actions">        <a class="mark-all-read-button"
           href="#"
           title="Alle als gelesen markieren"
           data-action="mark-all-read"
           role="button">
            <span class="normal-icon"><img class="icon " alt="Alle als gelesen markieren" title="Alle als gelesen markieren" src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/t/markasread" /></span>
            <span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
        </a>
        <a href="https://lernen.h-da.de/message/notificationpreferences.php?userid=54768"
           title="Systemnachrichten">
            <img class="icon " alt="Systemnachrichten" title="Systemnachrichten" src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/settings" />
        </a>
</div>
        </div>
        <div class="popover-region-content-container" data-region="popover-region-content-container">
            <div class="popover-region-content" data-region="popover-region-content">
                        <div class="all-notifications"
            data-region="all-notifications"
            role="log"
            aria-busy="false"
            aria-atomic="false"
            aria-relevant="additions"></div>
        <div class="empty-message" tabindex="0" data-region="empty-message">Keine Systemnachrichten</div>

            </div>
            <span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
        </div>
                <a class="see-all-link"
                    href="https://lernen.h-da.de/message/output/popup/notifications.php">
                    <div class="popover-region-footer-container">
                        <div class="popover-region-seeall-text">Alle anzeigen</div>
                    </div>
                </a>
    </div>
</div>    </div>
</div>



<div id="page-header" class="clearfix container">

<div id="logocontainer"><a href=https://lernen.h-da.de><img src=//lernen.h-da.de/pluginfile.php/1/theme_adaptable/logo/1593743412/hda.png alt="logo" id="logo" /></a></div><div id="sitetitle"><h1>Kryptologie (Krauß, SS2020)<h1></div>
            <div class="socialbox pull-right">
                <div class="socialbox"></div>            </div>
            
    
        <div id="course-header">
                    </div>
    </div>


    <div id="navwrap">
        <div class="container">
            <div class="navbar">
                <nav role="navigation" class="navbar-inner">
                    <div class="container-fluid">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <div class="nav-collapse collapse ">
                            <ul class="nav navbar-nav"><li><a title="" href="https://lernen.h-da.de/?redirect=0"><i class="fa fa-home"></i> Home</a></li><li class="dropdown"><a href="https://lernen.h-da.de/my/index.php" class="dropdown-toggle" data-toggle="dropdown" title=""><i class="fa fa-briefcase"></i> Meine Kurse</a><ul class="dropdown-menu"><li><a title="Datenbanken 1 (Döhring) SS&#039;20" href="https://lernen.h-da.de/course/view.php?id=11088">Datenbanken 1 (Döhring) SS'20</a></li><li><a title="Kryptologie (Krauß, SS2020)" href="https://lernen.h-da.de/course/view.php?id=10694">Kryptologie (Krauß, SS2020)</a></li><li><a title="Netzwerke (Valentin)" href="https://lernen.h-da.de/course/view.php?id=9915">Netzwerke (Valentin)</a></li><li><a title="Software-Engineering SS20 Renz" href="https://lernen.h-da.de/course/view.php?id=10631">Software-Engineering SS20 Renz</a></li><li><a title="(Zander) Nutzerzentrierte Softwareentwicklung" href="https://lernen.h-da.de/course/view.php?id=6802">(Zander) Nutzerzentrierte S...</a></li></ul><li class="dropdown"><a href="https://lernen.h-da.de/mod/url/view.php?id=395687" class="dropdown-toggle" data-toggle="dropdown" title=""><i class="fa fa-sitemap"></i><span class="menutitle">Dieser Kurs</span></a><ul class="dropdown-menu"><li><a title="" href="https://lernen.h-da.de/user/index.php?id=10694"><i class="fa fa-users"></i>Personen</a></li><li><a title="" href="https://lernen.h-da.de/grade/report/index.php?id=10694"><img class="icon icon" alt="" aria-hidden="true" src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/grades" />Bewertungen</a></li><li><a href="https://lernen.h-da.de/course/resources.php?id=10694"><img class="icon icon" alt="" aria-hidden="true" src="https://lernen.h-da.de/theme/image.php/adaptable/mod_page/1593743412/icon" />Arbeitsmaterial</a></li><li><a href="https://lernen.h-da.de/mod/assign/index.php?id=10694"><img class="icon icon" alt="" aria-hidden="true" src="https://lernen.h-da.de/theme/image.php/adaptable/assign/1593743412/icon" />Aufgaben</a></li><li><a href="https://lernen.h-da.de/mod/forum/index.php?id=10694"><img class="icon icon" alt="" aria-hidden="true" src="https://lernen.h-da.de/theme/image.php/adaptable/forum/1593743412/icon" />Foren</a></li></ul></ul><ul class="nav navbar-nav"><li><a title="Kursbereiche" href="https://lernen.h-da.de/course/index.php">Kursbereiche</a></li><li class="dropdown"><a href="#cm_submenu_3" class="dropdown-toggle" data-toggle="dropdown" title="Infos">Infos</a><ul class="dropdown-menu"><li><a title=" § 60 UrhWissG" href="https://lernen.h-da.de/mod/page/view.php?id=197510"> § 60 UrhWissG</a></li><li class="dropdown-submenu"><a href="#cm_submenu_4" class="dropdown-toggle" data-toggle="dropdown" title=" E-Lectures an der h_da"> E-Lectures an der h_da</a><ul class="dropdown-menu"><li><a title=" Was sind E-Lectures?" href="https://oc3.itda.h-da.de/paella/ui/watch.html?id=08439e85-67f9-496a-8090-d3dee4bfdb13"> Was sind E-Lectures?</a></li><li><a title=" Offene E-Lectures der h_da" href="https://lernen.h-da.de/course/view.php?id=3443"> Offene E-Lectures der h_da</a></li></ul><li class="dropdown-submenu"><a href="#cm_submenu_5" class="dropdown-toggle" data-toggle="dropdown" title=" Moodle"> Moodle</a><ul class="dropdown-menu"><li><a title=" Informationen für Mitarbeiter" href="https://lernen.h-da.de/course/view.php?id=1145"> Informationen für Mitarbeiter</a></li><li><a title=" Informationen für Studierende" href="https://lernen.h-da.de/course/view.php?id=1125"> Informationen für Studierende</a></li><li><a title=" Fachtagungen E-Learning" href="https://lernen.h-da.de/course/view.php?id=1139"> Fachtagungen E-Learning</a></li></ul></ul><li class="dropdown"><a href="#cm_submenu_6" class="dropdown-toggle" data-toggle="dropdown" title="Navigation">Navigation</a><ul class="dropdown-menu"><li><a title=" Dashboard" href="https://lernen.h-da.de/my/index.php"> Dashboard</a></li><li><a title=" Kalender" href="https://lernen.h-da.de/calendar/view.php?view=month"> Kalender</a></li></ul></ul>
        <ul class="nav pull-right">
           <li class="hbl">
               <a href="javascript:void(0);" class="moodlezoom" title="Blöcke verbergen">
                   <i class="fa fa-indent fa-lg"></i>
               <span class="zoomdesc">Blöcke verbergen</span>
           </a>
       </li>
       <li class="sbl">
               <a href="javascript:void(0);" class="moodlezoom" title="Blöcke anzeigen">
               <i class="fa fa-outdent fa-lg"></i>
               <span class="zoomdesc">Blöcke anzeigen</span>
           </a>
       </li>
        <li class="hbll">
            <a href="javascript:void(0);" class="moodlewidth" title="Volle Breite">
                <i class="fa fa-expand fa-lg"></i>
                <span class="zoomdesc">Volle Breite</span>
            </a>
        </li>
        <li class="sbll">
            <a href="javascript:void(0);" class="moodlewidth" title="Feste Breite">
                <i class="fa fa-compress fa-lg"></i>
                <span class="zoomdesc">Feste Breite</span>
            </a>
            </li>
        </ul>
                            <div id="edittingbutton" class="pull-right breadcrumb-button">
                                                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

</header>


<div class="container outercont">
    <div id="page-content" class="row-fluid">
        <div id="page-navbar" class="span12"><ul class="breadcrumb"><li><a href="https://lernen.h-da.de/"><i title="Home" class="fa fa-home fa-lg"></i></a></li><span class="separator"><i class="fa-angle-right fa"></i>
                             </span><li><span tabindex="0">Meine Kurse</span></li><span class="separator"><i class="fa-angle-right fa"></i>
                             </span><li><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="https://lernen.h-da.de/course/index.php?categoryid=9"><span itemprop="title">Informatik</span></a></span></li><span class="separator"><i class="fa-angle-right fa"></i>
                             </span><li><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="https://lernen.h-da.de/course/index.php?categoryid=127"><span itemprop="title">Informatik (B.Sc)</span></a></span></li><span class="separator"><i class="fa-angle-right fa"></i>
                             </span><li><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="https://lernen.h-da.de/course/index.php?categoryid=1030"><span itemprop="title">Sommersemester 2020</span></a></span></li><span class="separator"><i class="fa-angle-right fa"></i>
                             </span><li><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" title="Kryptologie (Krauß, SS2020)" href="https://lernen.h-da.de/course/view.php?id=10694"><span itemprop="title">Krypto2020</span></a></span></li><span class="separator"><i class="fa-angle-right fa"></i>
                             </span><li><span tabindex="0">26. Juni - 2. Juli</span></li><span class="separator"><i class="fa-angle-right fa"></i>
                             </span><li><a href="https://lernen.h-da.de/mod/url/view.php?id=395687" id="action_link5f009b8193b196" class="" >Video "Lecture 18: Digital Signatures and Security Services"</a></li></ul></div>
        <section id="region-main" class="span9 desktop-first-column">
            <span class="notifications" id="user-notifications"></span><div role="main"><span id="maincontent"></span><h2>Video "Lecture 18: Digital Signatures and Security Services"</h2><div class="urlworkaround">Klicken Sie auf '<a href="https://www.youtube.com/watch?v=jbBe4AS5pk0" onclick="this.target='_blank';">https://www.youtube.com/watch?v=jbBe4AS5pk0</a>', um die Ressource zu öffnen</div></div>        </section>

        <aside id="block-region-side-post" class="span3 block-region" data-blockregion="side-post" data-droptarget="1"><a class="skip skip-block" id="fsb-1" href="#sb-1">Einstellungen überspringen</a><div id="inst5" class="block_settings block" role="navigation" data-block="settings" data-instanceid="5" aria-labelledby="instance-5-header"><div class="header"><div class="title"><div class="block_action"></div><h2 id="instance-5-header">Einstellungen</h2></div></div><div class="content"><div id="settingsnav" class="box block_tree_box"><ul class="block_tree list" role="tree" data-ajax-loader="block_navigation/site_admin_loader"><li class="type_course depth_1 contains_branch" tabindex="-1" aria-labelledby="label_1_1"><p class="tree_item root_node tree_item branch" role="treeitem" aria-expanded="false" aria-owns="random5f009b8193b191_group"><span tabindex="0">Kurs-Administration</span></p><ul id="random5f009b8193b191_group" role="group" aria-hidden="true"><li class="type_setting depth_2 item_with_icon" tabindex="-1" aria-labelledby="label_2_1"><p class="tree_item hasicon tree_item leaf" role="treeitem"><a href="https://lernen.h-da.de/enrol/self/unenrolself.php?enrolid=23859"><img class="icon navicon" alt="" aria-hidden="true" src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/user" />Ausschreiben aus 'Krypto2020'</a></p></li></ul></li></ul></div></div></div><span class="skip-block-to" id="sb-1"></span></aside>    </div>
</div>

<div
    id="message-drawer-5f009b819e9175f009b8193b198"
    class="message-drawer bg-light hidden"
    aria-expanded="false"
    aria-hidden="true"
    data-region="message-drawer"
    role="region"
>
    <div class="drawer-top border-bottom bg-secondary text-right">
        <div class="p-2">
            <a id="message-drawer-close-5f009b819e9175f009b8193b198" href="#">
                <img class="icon " alt="Mitteilungen" title="Mitteilungen" src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/window_close" />
            </a>
        </div>
    </div>
    <div class="header-container position-relative" data-region="header-container">
        <div class="hidden border-bottom px-2 py-3" aria-hidden="true" data-region="view-contacts">
            <div class="d-flex align-items-center">
                <div class="align-self-stretch">
                    <a class="h-100 d-flex align-items-center mr-2" href="#" data-route-back role="button">
                        <span class="dir-rtl-hide"><img class="icon " alt="" aria-hidden="true" src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/t/collapsed_rtl" /></span>
                        <span class="dir-ltr-hide"><img class="icon " alt="" aria-hidden="true" src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/t/collapsed" /></span>                    </a>
                </div>
                <div>
                    Kontakte
                </div>
                <div class="ml-auto">
                    <a href="#" data-route="view-search" role="button" aria-label="Suchen">
                        <img class="icon " alt="" aria-hidden="true" src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/a/search" />
                    </a>
                </div>
            </div>
        </div>        
        <div
            class="hidden bg-white position-relative border-bottom px-2 py-2"
            aria-hidden="true"
            data-region="view-conversation"
        >
            <div class="hidden" data-region="header-content"></div>
            <div class="hidden" data-region="header-edit-mode">
                
                <div class="d-flex p-2 align-items-center">
                    Ausgewählte Mitteilungen:
                    <span class="ml-1" data-region="message-selected-court">1</span>
                    <button type="button" class="ml-auto close" aria-label="Mitteilungsauswahl abbrechen"
                        data-action="cancel-edit-mode">
                            <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div data-region="header-placeholder">
                <div class="d-flex">
                    <div class="align-self-stretch" >
                        <a class="h-100 mr-2 d-flex align-items-center" href="#" data-route-back role="button">
                            <span class="dir-rtl-hide"><img class="icon " alt="" aria-hidden="true" src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/t/collapsed_rtl" /></span>
                            <span class="dir-ltr-hide"><img class="icon " alt="" aria-hidden="true" src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/t/collapsed" /></span>                        </a>
                    </div>
                    <div
                        class="ml-2 rounded-circle bg-pulse-grey align-self-center"
                        style="height: 38px; width: 38px"
                    >
                    </div>
                    <div class="ml-2 " style="flex: 1">
                        <div
                            class="mt-1 bg-pulse-grey w-75"
                            style="height: 16px;"
                        >
                        </div>
                    </div>
                    <div
                        class="ml-2 bg-pulse-grey align-self-center"
                        style="height: 16px; width: 20px"
                    >
                    </div>
                </div>
            </div>
            <div
                class="hidden position-absolute"
                data-region="confirm-dialogue-container"
                style="top: 0; bottom: -1px; right: 0; left: 0; background: rgba(0,0,0,0.3);"
            ></div>
        </div>        <div class="border-bottom px-2 py-3" aria-hidden="false" data-region="view-overview">
            <div class="d-flex align-items-center">
                <div class="input-prepend d-flex flex-grow m-0">
                    <span class="add-on bg-white pr-0">
                        <img class="icon " alt="" aria-hidden="true" src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/a/search" />
                    </span>
                    <input
                        type="text"
                        class="form-control border-left-0 searchinput"
                        placeholder="Suchen"
                        aria-label="Suchen"
                        data-region="view-overview-search-input"
                    >
                </div>
                <div class="ml-2">
                    <a
                        href="#"
                        data-route="view-settings"
                        data-route-param="54768"
                        aria-label="Einstellungen"
                        role="button"
                    >
                        <img class="icon " alt="" aria-hidden="true" src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/t/edit" />
                    </a>
                </div>
            </div>
            <div class="text-right mt-3">
                <a href="#" data-route="view-contacts" role="button">
                    <img class="icon " alt="" aria-hidden="true" src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/user" />
                    Kontakte
                    <span class="badge bg-primary ml-2 hidden"
                    data-region="contact-request-count"
                    aria-label="Es gibt 0 anstehende Kontaktanfragen.">
                        0
                    </span>
                </a>
            </div>
        </div>
        
        <div class="hidden border-bottom px-2 py-3 view-search" aria-hidden="true" data-region="view-search">
            <div class="d-flex align-items-center">
                <a
                    class="mr-2 align-self-stretch d-flex align-items-center"
                    href="#"
                    data-route-back
                    data-action="cancel-search"
                    role="button"
                >
                    <span class="dir-rtl-hide"><img class="icon " alt="" aria-hidden="true" src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/t/collapsed_rtl" /></span>
                    <span class="dir-ltr-hide"><img class="icon " alt="" aria-hidden="true" src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/t/collapsed" /></span>                </a>
                <div class="input-append m-0 d-flex flex-grow">
                    <input
                        type="text"
                        class="form-control border-right-0 searchinput"
                        placeholder="Suchen"
                        aria-label="Suchen"
                        data-region="search-input"
                    >
                    <button
                        class="btn m-0"
                        type="button"
                        data-action="search"
                        aria-label="Suchen"
                    >
                        <span data-region="search-icon-container">
                            <img class="icon " alt="" aria-hidden="true" src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/a/search" />
                        </span>
                        <span class="hidden" data-region="loading-icon-container">
                            <span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>        
        <div class="hidden border-bottom px-2 py-3" aria-hidden="true" data-region="view-settings">
            <div class="d-flex align-items-center">
                <div class="align-self-stretch" >
                    <a class="h-100 d-flex mr-2 align-items-center" href="#" data-route-back role="button">
                        <span class="dir-rtl-hide"><img class="icon " alt="" aria-hidden="true" src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/t/collapsed_rtl" /></span>
                        <span class="dir-ltr-hide"><img class="icon " alt="" aria-hidden="true" src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/t/collapsed" /></span>                    </a>
                </div>
                <div>
                    Einstellungen
                </div>
            </div>
        </div>
    </div>
    <div class="body-container position-relative" data-region="body-container">
        
        <div
            class="hidden"
            data-region="view-contact"
            aria-hidden="true"
        >
            <div class="p-2 pt-3" data-region="content-container"></div>
        </div>        <div class="hidden h-100" aria-hidden="true" data-region="view-contacts" data-user-id="54768">
            <div class="d-flex flex-column h-100">
                <div class="p-3 border-bottom">
                    <ul class="nav nav-pills d-flex m-0" role="tablist">
                        <li class="nav-item w-50 align-self-stretch text-center active">
                            <a
                                id="contacts-tab-5f009b819e9175f009b8193b198"
                                class="nav-link"
                                href="#contacts-tab-panel-5f009b819e9175f009b8193b198"
                                data-toggle="tab"
                                data-action="show-contacts-section"
                                role="tab"
                                aria-controls="contacts-tab-panel-5f009b819e9175f009b8193b198"
                                aria-selected="true"
                            >
                                Kontakte
                            </a>
                        </li>
                        <li class="nav-item w-50 text-center">
                            <a
                                id="requests-tab-5f009b819e9175f009b8193b198"
                                class="nav-link"
                                href="#requests-tab-panel-5f009b819e9175f009b8193b198"
                                data-toggle="tab"
                                data-action="show-requests-section"
                                role="tab"
                                aria-controls="requests-tab-panel-5f009b819e9175f009b8193b198"
                                aria-selected="false"
                            >
                                Anfragen
                                <span class="badge bg-primary ml-2 hidden"
                                data-region="contact-request-count"
                                aria-label="Es gibt 0 anstehende Kontaktanfragen.">
                                    0
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content d-flex flex-column h-100">
                            <div
            class="tab-pane fade in active h-100"
            style="overflow-y: auto"
            aria-live="polite"
            data-region="lazy-load-list"
            data-user-id="54768"
                                id="contacts-tab-panel-5f009b819e9175f009b8193b198"
                    data-section="contacts"
                    role="tabpanel"
                    aria-labelledby="contacts-tab-5f009b819e9175f009b8193b198"

        >
            <div class="onepix">
            </div>
            
            <div class="hidden text-center p-2" data-region="empty-message-container">
                Keine Kontakte
            </div>
            <div class="hidden list-group" data-region="content-container">
                
            </div>
            <div class="list-group" data-region="placeholder-container">
                
            </div>
            <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                <span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
            </div>
        </div>
        
                            <div
            class="tab-pane fade h-100"
            style="overflow-y: auto"
            aria-live="polite"
            data-region="lazy-load-list"
            data-user-id="54768"
                                id="requests-tab-panel-5f009b819e9175f009b8193b198"
                    data-section="requests"
                    role="tabpanel"
                    aria-labelledby="requests-tab-5f009b819e9175f009b8193b198"

        >
            <div class="onepix">
            </div>
            
            <div class="hidden text-center p-2" data-region="empty-message-container">
                Keine Kontaktanfragen
            </div>
            <div class="hidden list-group" data-region="content-container">
                
            </div>
            <div class="list-group" data-region="placeholder-container">
                
            </div>
            <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                <span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
            </div>
        </div>
                </div>
            </div>
        </div>        
        <div
            class="view-conversation hidden h-100"
            aria-hidden="true"
            data-region="view-conversation"
            data-user-id="54768"
            data-midnight="1593813600"
            data-message-poll-min="10"
            data-message-poll-max="120"
            data-message-poll-after-max="300"
            style="overflow-y: auto; overflow-x: hidden"
        >
            <div class="position-relative h-100" data-region="content-container" style="overflow-y: auto; overflow-x: hidden">
                <div class="content-message-container hidden h-100 px-2 pt-0" data-region="content-message-container" role="log" style="overflow-y: auto; overflow-x: hidden">
                    <div class="py-3 bg-light sticky-top z-index-1 border-bottom text-center hidden" data-region="contact-request-sent-message-container">
                        <p class="m-0">Kontaktanfrage gesendet</p>
                        <p class="font-italic font-weight-light" data-region="text"></p>
                    </div>
                    <div class="hidden text-center p-3" data-region="more-messages-loading-icon-container"><span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
</div>
                </div>
                <div class="p-4 w-100 h-100 hidden position-absolute" data-region="confirm-dialogue-container" style="top: 0; background: rgba(0,0,0,0.3);">
                    
                    <div class="p-3 bg-white" data-region="confirm-dialogue" role="alert">
                        <h3 class="h6 hidden" data-region="dialogue-header"></h3>
                        <p class="text-muted" data-region="dialogue-text"></p>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-block">
                            <span data-region="dialogue-button-text">Blockieren</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-unblock">
                            <span data-region="dialogue-button-text">Blockierung aufheben</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-remove-contact">
                            <span data-region="dialogue-button-text">Löschen</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-add-contact">
                            <span data-region="dialogue-button-text">Hinzufügen</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-delete-selected-messages">
                            <span data-region="dialogue-button-text">Löschen</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-delete-conversation">
                            <span data-region="dialogue-button-text">Löschen</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="request-add-contact">
                            <span data-region="dialogue-button-text">Kontaktanfrage senden</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="accept-contact-request">
                            <span data-region="dialogue-button-text">Annehmen und zu Kontakten hinzufügen</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
</span>
                        </button>
                        <button type="button" class="btn btn-secondary btn-block hidden" data-action="decline-contact-request">
                            <span data-region="dialogue-button-text">Ablehnen</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
</span>
                        </button>
                        <button type="button" class="btn btn-secondary btn-block" data-action="cancel-confirm">Abbrechen</button>
                    </div>
                </div>
                <div class="px-2 pb-2 pt-0" data-region="content-placeholder">
                    <div class="h-100 d-flex flex-column">
                        <div
                            class="px-2 pb-2 pt-0 bg-light h-100"
                            style="overflow-y: auto"
                        >
                            <div class="mt-4">
                                <div class="mb-4">
                                    <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                            </div>                            <div class="mt-4">
                                <div class="mb-4">
                                    <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                            </div>                            <div class="mt-4">
                                <div class="mb-4">
                                    <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                            </div>                            <div class="mt-4">
                                <div class="mb-4">
                                    <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                            </div>                            <div class="mt-4">
                                <div class="mb-4">
                                    <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                            </div>                        </div>
                    </div>                </div>
            </div>
        </div>
        
        <div
            class="hidden"
            aria-hidden="true"
            data-region="view-group-info"
        >
            <div
                class="pt-3 h-100 d-flex flex-column"
                data-region="group-info-content-container"
                style="overflow-y: auto"
            ></div>
        </div>        <div class="h-100 view-overview-body" aria-hidden="false" data-region="view-overview" data-user-id="54768">
            <div id="message-drawer-view-overview-container" class="d-flex flex-column h-100" style="overflow-y: auto">
                    
                    <div
                        class="accordion-group section border-0 "
                        data-region="view-overview-favourites"
                    >
                        <div id="view-overview-favourites-toggle" class="accordion-heading" data-region="toggle">
                            <button
                                class="btn btn-link w-100 text-left p-2 m-0 d-flex align-items-center overview-section-toggle collapsed"
                                data-toggle="collapse"
                                data-parent="#message-drawer-view-overview-container"
                                data-target="#view-overview-favourites-target"
                                aria-expanded="false"
                                aria-controls="view-overview-favourites-target"
                            >
                                <span class="collapsed-icon-container">
                                    <img class="icon " alt="" aria-hidden="true" src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/t/collapsed" />
                                </span>
                                <span class="expanded-icon-container">
                                    <img class="icon " alt="" aria-hidden="true" src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/t/expanded" />
                                </span>
                                <strong>Favoriten</strong>
                                <small class="hidden ml-1" data-region="section-total-count-container"
                                aria-label="Insgesamt  Kommunikationen">
                                    (<span data-region="section-total-count"></span>)
                                </small>
                                <span class="hidden ml-2" data-region="loading-icon-container">
                                    <span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
                                </span>
                                <span class="hidden badge badge-pill badge-primary ml-auto bg-primary"
                                data-region="section-unread-count"
                                >
                                    
                                </span>
                            </button>
                        </div>
                                            <div
                        class=" accordion-body collapse border-bottom "
                        style="overflow-y: auto"
                        aria-live="polite"
                        data-region="lazy-load-list"
                        data-user-id="54768"
                                    id="view-overview-favourites-target"
            aria-labelledby="view-overview-favourites-toggle"
            data-parent="#message-drawer-view-overview-container"

                    >
                        <div class="onepix">
                        </div>
                        
                        <div class="hidden text-center p-2" data-region="empty-message-container">
                                    <p class="text-muted mt-2">Keine Kommunikation als Favorit markiert</p>

                        </div>
                        <div class="hidden list-group" data-region="content-container">
                            
                        </div>
                        <div class="list-group" data-region="placeholder-container">
                                    <div class="text-center py-2"><span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
</div>

                        </div>
                        <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                            <span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
                        </div>
                    </div>
                    </div>
                    
                    <div
                        class="accordion-group section border-0 "
                        data-region="view-overview-group-messages"
                    >
                        <div id="view-overview-group-messages-toggle" class="accordion-heading" data-region="toggle">
                            <button
                                class="btn btn-link w-100 text-left p-2 m-0 d-flex align-items-center overview-section-toggle collapsed"
                                data-toggle="collapse"
                                data-parent="#message-drawer-view-overview-container"
                                data-target="#view-overview-group-messages-target"
                                aria-expanded="false"
                                aria-controls="view-overview-group-messages-target"
                            >
                                <span class="collapsed-icon-container">
                                    <img class="icon " alt="" aria-hidden="true" src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/t/collapsed" />
                                </span>
                                <span class="expanded-icon-container">
                                    <img class="icon " alt="" aria-hidden="true" src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/t/expanded" />
                                </span>
                                <strong>Gruppe</strong>
                                <small class="hidden ml-1" data-region="section-total-count-container"
                                aria-label="Insgesamt  Kommunikationen">
                                    (<span data-region="section-total-count"></span>)
                                </small>
                                <span class="hidden ml-2" data-region="loading-icon-container">
                                    <span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
                                </span>
                                <span class="hidden badge badge-pill badge-primary ml-auto bg-primary"
                                data-region="section-unread-count"
                                >
                                    
                                </span>
                            </button>
                        </div>
                                            <div
                        class=" accordion-body collapse border-bottom "
                        style="overflow-y: auto"
                        aria-live="polite"
                        data-region="lazy-load-list"
                        data-user-id="54768"
                                    id="view-overview-group-messages-target"
            aria-labelledby="view-overview-group-messages-toggle"
            data-parent="#message-drawer-view-overview-container"

                    >
                        <div class="onepix">
                        </div>
                        
                        <div class="hidden text-center p-2" data-region="empty-message-container">
                                    <p class="text-muted mt-2">Keine Gruppenkommunikation</p>

                        </div>
                        <div class="hidden list-group" data-region="content-container">
                            
                        </div>
                        <div class="list-group" data-region="placeholder-container">
                                    <div class="text-center py-2"><span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
</div>

                        </div>
                        <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                            <span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
                        </div>
                    </div>
                    </div>
                    
                    <div
                        class="accordion-group section border-0 "
                        data-region="view-overview-messages"
                    >
                        <div id="view-overview-messages-toggle" class="accordion-heading" data-region="toggle">
                            <button
                                class="btn btn-link w-100 text-left p-2 m-0 d-flex align-items-center overview-section-toggle collapsed"
                                data-toggle="collapse"
                                data-parent="#message-drawer-view-overview-container"
                                data-target="#view-overview-messages-target"
                                aria-expanded="false"
                                aria-controls="view-overview-messages-target"
                            >
                                <span class="collapsed-icon-container">
                                    <img class="icon " alt="" aria-hidden="true" src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/t/collapsed" />
                                </span>
                                <span class="expanded-icon-container">
                                    <img class="icon " alt="" aria-hidden="true" src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/t/expanded" />
                                </span>
                                <strong>Persönlich</strong>
                                <small class="hidden ml-1" data-region="section-total-count-container"
                                aria-label="Insgesamt  Kommunikationen">
                                    (<span data-region="section-total-count"></span>)
                                </small>
                                <span class="hidden ml-2" data-region="loading-icon-container">
                                    <span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
                                </span>
                                <span class="hidden badge badge-pill badge-primary ml-auto bg-primary"
                                data-region="section-unread-count"
                                >
                                    
                                </span>
                            </button>
                        </div>
                                            <div
                        class=" accordion-body collapse border-bottom "
                        style="overflow-y: auto"
                        aria-live="polite"
                        data-region="lazy-load-list"
                        data-user-id="54768"
                                    id="view-overview-messages-target"
            aria-labelledby="view-overview-messages-toggle"
            data-parent="#message-drawer-view-overview-container"

                    >
                        <div class="onepix">
                        </div>
                        
                        <div class="hidden text-center p-2" data-region="empty-message-container">
                                    <p class="text-muted mt-2">Keine persönliche Kommunikation</p>

                        </div>
                        <div class="hidden list-group" data-region="content-container">
                            
                        </div>
                        <div class="list-group" data-region="placeholder-container">
                                    <div class="text-center py-2"><span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
</div>

                        </div>
                        <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                            <span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
        
        <div
            data-region="view-search"
            aria-hidden="true"
            class="h-100 hidden"
            data-user-id="54768"
            data-users-offset="0"
            data-messages-offset="0"
            style="overflow-y: auto"
        >
            <div class="hidden" data-region="search-results-container" style="overflow-y: auto">
                
                <div class="d-flex flex-column">
                    <div class="mb-3 bg-white" data-region="all-contacts-container">
                        <div data-region="contacts-container"  class="pt-2">
                            <h4 class="h6 px-2">Kontakte</h4>
                            <div class="list-group" data-region="list"></div>
                        </div>
                        <div data-region="non-contacts-container" class="pt-2 border-top">
                            <h4 class="h6 px-2">Weitere Personen</h4>
                            <div class="list-group" data-region="list"></div>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-link text-primary" data-action="load-more-users">
                                <span data-region="button-text">Mehr laden</span>
                                <span data-region="loading-icon-container" class="hidden"><span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
</span>
                            </button>
                        </div>
                    </div>
                    <div class="bg-white" data-region="messages-container">
                        <h4 class="h6 px-2 pt-2">Mitteilungen</h4>
                        <div class="list-group" data-region="list"></div>
                        <div class="text-right">
                            <button class="btn btn-link text-primary" data-action="load-more-messages">
                                <span data-region="button-text">Mehr laden</span>
                                <span data-region="loading-icon-container" class="hidden"><span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
</span>
                            </button>
                        </div>
                    </div>
                    <p class="hidden p-3 text-center" data-region="no-results-container">Keine Ergebnisse</p>
                </div>            </div>
            <div class="hidden" data-region="loading-placeholder">
                <div class="text-center pt-3 icon-size-4"><span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
</div>
            </div>
            <div class="p-3 text-center" data-region="empty-message-container">
                <p>Personen und Mitteilungen suchen</p>
            </div>
        </div>        
        <div class="h-100 hidden bg-white" aria-hidden="true" data-region="view-settings">
            <div class="hidden" data-region="content-container">
                
                <div data-region="settings" class="p-3">
                    <h3 class="h6 font-weight-bold">Datenschutz</h3>
                    <p>Sie können einschränken, welche Person Ihnen eine Mitteilung senden kann.</p>
                    <div data-preference="blocknoncontacts" class="mb-3">
                            <div class="custom-control custom-radio mb-2">
                                <input
                                    type="radio"
                                    name="message_blocknoncontacts"
                                    class="custom-control-input"
                                    id="block-noncontacts-5f009b819e9175f009b8193b198-1"
                                    value="1"
                                >
                                <label class="custom-control-label ml-2" for="block-noncontacts-5f009b819e9175f009b8193b198-1">
                                    Nur meine Kontakte
                                </label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input
                                    type="radio"
                                    name="message_blocknoncontacts"
                                    class="custom-control-input"
                                    id="block-noncontacts-5f009b819e9175f009b8193b198-0"
                                    value="0"
                                >
                                <label class="custom-control-label ml-2" for="block-noncontacts-5f009b819e9175f009b8193b198-0">
                                    Meine Kontakte und jeder aus meinen Kursen
                                </label>
                            </div>
                    </div>
                
                    <div class="hidden" data-region="notification-preference-container">
                        <h3 class="mb-2 mt-4 h6 font-weight-bold">Systemnachrichten</h3>
                    </div>
                
                    <h3 class="mb-2 mt-4 h6 font-weight-bold">Allgemein</h3>
                    <div data-preference="entertosend">
                        <span class="switch">
                            <input type="checkbox"
                                id="enter-to-send-5f009b819e9175f009b8193b198"
                                
                            >
                            <label for="enter-to-send-5f009b819e9175f009b8193b198">
                                Zum Senden die Eingabetaste tippen
                            </label>
                        </span>
                    </div>
                </div>
            </div>
            <div data-region="placeholder-container">
                
                <div class="d-flex flex-column p-3">
                    <div class="w-25 bg-pulse-grey h6" style="height: 18px"></div>
                    <div class="w-75 bg-pulse-grey mb-4" style="height: 18px"></div>
                    <div class="mb-3">
                        <div class="w-100 d-flex mb-3">
                            <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                            <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                        </div>
                        <div class="w-100 d-flex mb-3">
                            <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                            <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                        </div>
                        <div class="w-100 d-flex mb-3">
                            <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                            <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                        </div>
                    </div>
                    <div class="w-50 bg-pulse-grey h6 mb-3 mt-2" style="height: 18px"></div>
                    <div class="mb-4">
                        <div class="w-100 d-flex mb-2 align-items-center">
                            <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                            <div class="bg-pulse-grey w-25 ml-2" style="height: 18px"></div>
                        </div>
                        <div class="w-100 d-flex mb-2 align-items-center">
                            <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                            <div class="bg-pulse-grey w-25 ml-2" style="height: 18px"></div>
                        </div>
                    </div>
                    <div class="w-25 bg-pulse-grey h6 mb-3 mt-2" style="height: 18px"></div>
                    <div class="mb-3">
                        <div class="w-100 d-flex mb-2 align-items-center">
                            <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                            <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                        </div>
                    </div>
                </div>            </div>
        </div>    </div>
    <div class="footer-container position-relative" data-region="footer-container">
        
        <div
            class="hidden border-top bg-white position-relative"
            aria-hidden="true"
            data-region="view-conversation"
            data-enter-to-send="0"
        >
            <div class="hidden p-2" data-region="content-messages-footer-container">
                
                <div class="d-flex mt-1">
                    <textarea
                        dir="auto"
                        data-region="send-message-txt"
                        class="form-control bg-light m-0 flex-grow"
                        rows="3"
                        data-auto-rows
                        data-min-rows="3"
                        data-max-rows="5"
                        role="textbox"
                        aria-label="Mitteilung schreiben..."
                        placeholder="Mitteilung schreiben..."
                        style="resize: none"
                    ></textarea>
                    <button
                        class="btn btn-link btn-icon icon-size-3 ml-1 mt-auto"
                        aria-label="Mitteilung senden"
                        data-action="send-message"
                    >
                        <span data-region="send-icon-container"><img class="icon " alt="" aria-hidden="true" src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/sendmessage" /></span>
                        <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
</span>
                    </button>
                </div>
            </div>
            <div class="hidden p-2" data-region="content-messages-footer-edit-mode-container">
                
                <div class="d-flex p-3">
                    <button
                        class="btn btn-link btn-icon my-1 icon-size-4 ml-auto"
                        data-action="delete-selected-messages"
                        data-toggle="tooltip"
                        data-placement="top"
                        title="Ausgewählte Mitteilungen löschen"
                    >
                        <span data-region="icon-container"><img class="icon " alt="" aria-hidden="true" src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/trash" /></span>
                        <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
</span>
                        <span class="sr-only">Ausgewählte Mitteilungen löschen</span>
                    </button>
                </div>
            </div>
            <div class="hidden bg-secondary p-3" data-region="content-messages-footer-require-contact-container">
                
                <div class="p-3 bg-white">
                    <p data-region="title"></p>
                    <p class="text-muted" data-region="text"></p>
                    <button type="button" class="btn btn-primary btn-block" data-action="request-add-contact">
                        <span data-region="dialogue-button-text">Kontaktanfrage senden</span>
                        <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
</span>
                    </button>
                </div>
            </div>
            <div class="hidden bg-secondary p-3" data-region="content-messages-footer-require-unblock-container">
                
                <div class="p-3 bg-white">
                    <p class="text-muted" data-region="text">Sie haben diese Person blockiert.</p>
                    <button type="button" class="btn btn-primary btn-block" data-action="request-unblock">
                        <span data-region="dialogue-button-text">Blockierung für diese Person aufheben</span>
                        <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><img class="icon " alt="Laden ..." title="Laden ..." src="https://lernen.h-da.de/theme/image.php/adaptable/core/1593743412/i/loading" /></span>
</span>
                    </button>
                </div>
            </div>
            <div class="hidden bg-secondary p-3" data-region="content-messages-footer-unable-to-message">
                
                <div class="p-3 bg-white">
                    <p class="text-muted" data-region="text">Sie können dieser Person keine Mitteilung senden.</p>
                </div>
            </div>
            <div class="p-2" data-region="placeholder-container">
                <div class="d-flex">
                    <div class="bg-pulse-grey w-100" style="height: 80px"></div>
                    <div class="mx-2 mb-2 align-self-end bg-pulse-grey" style="height: 20px; width: 20px"></div>
                </div>            </div>
            <div
                class="hidden position-absolute"
                data-region="confirm-dialogue-container"
                style="top: -1px; bottom: 0; right: 0; left: 0; background: rgba(0,0,0,0.3);"
            ></div>
        </div>    </div>
</div>
<footer id="page-footer">

<div id="course-footer"></div>
                <div class="container blockplace1"><div class="row-fluid"><div class="left-col span3">         </div><div class="left-col span3">         </div><div class="left-col span3">         </div><div class="left-col span3">         </div></div></div>        <div class="container">
            <div class="row-fluid">
                <div class="span12 pagination-centered">
<div class="socialbox"></div>                </div>
            </div>
        </div>

    <div class="info container2 clearfix">
        <div class="container">
            <div class="row-fluid">
                <div class="span4">
                         </div>

                <div class="span4 helplink">
                </div>
                <div class="span4">
                    <a href="https://download.moodle.org/mobile?version=2018120309.01&amp;lang=de&amp;iosappid=633359593&amp;androidappid=com.moodle.moodlemobile">Laden Sie die mobile App</a><div class="policiesfooter"><a href="https://lernen.h-da.de/admin/tool/policy/viewall.php?returnurl=https%3A%2F%2Flernen.h-da.de%2Fmod%2Furl%2Fview.php%3Fid%3D395687">Datenschutzinformation</a></div>                </div>
            </div>
        </div>
    </div>
</footer>


<a class="back-to-top" href="#top" ><i class="fa fa-angle-up "></i></a>


<script type="text/javascript">
//<![CDATA[
var require = {
    baseUrl : 'https://lernen.h-da.de/lib/requirejs.php/1593743413/',
    // We only support AMD modules with an explicit define() statement.
    enforceDefine: true,
    skipDataMain: true,
    waitSeconds : 0,

    paths: {
        jquery: 'https://lernen.h-da.de/lib/javascript.php/1593743413/lib/jquery/jquery-3.2.1.min',
        jqueryui: 'https://lernen.h-da.de/lib/javascript.php/1593743413/lib/jquery/ui-1.12.1/jquery-ui.min',
        jqueryprivate: 'https://lernen.h-da.de/lib/javascript.php/1593743413/lib/requirejs/jquery-private'
    },

    // Custom jquery config map.
    map: {
      // '*' means all modules will get 'jqueryprivate'
      // for their 'jquery' dependency.
      '*': { jquery: 'jqueryprivate' },
      // Stub module for 'process'. This is a workaround for a bug in MathJax (see MDL-60458).
      '*': { process: 'core/first' },

      // 'jquery-private' wants the real jQuery module
      // though. If this line was not here, there would
      // be an unresolvable cyclic dependency.
      jqueryprivate: { jquery: 'jquery' }
    }
};

//]]>
</script>
<script type="text/javascript" src="https://lernen.h-da.de/lib/javascript.php/1593743413/lib/requirejs/require.min.js"></script>
<script type="text/javascript">
//<![CDATA[
M.util.js_pending("core/first");require(['core/first'], function() {
;
require(["media_videojs/loader"], function(loader) {
    loader.setUp(function(videojs) {
        videojs.options.flash.swf = "https://lernen.h-da.de/media/player/videojs/videojs/video-js.swf";
videojs.addLanguage("de",{
 "Play": "Wiedergabe",
 "Pause": "Pause",
 "Replay": "Erneut abspielen",
 "Current Time": "Aktueller Zeitpunkt",
 "Duration Time": "Dauer",
 "Remaining Time": "Verbleibende Zeit",
 "Stream Type": "Streamtyp",
 "LIVE": "LIVE",
 "Loaded": "Geladen",
 "Progress": "Status",
 "Fullscreen": "Vollbild",
 "Non-Fullscreen": "Kein Vollbild",
 "Mute": "Ton aus",
 "Unmute": "Ton ein",
 "Playback Rate": "Wiedergabegeschwindigkeit",
 "Subtitles": "Untertitel",
 "subtitles off": "Untertitel aus",
 "Captions": "Untertitel",
 "captions off": "Untertitel aus",
 "Chapters": "Kapitel",
 "You aborted the media playback": "Sie haben die Videowiedergabe abgebrochen.",
 "A network error caused the media download to fail part-way.": "Der Videodownload ist aufgrund eines Netzwerkfehlers fehlgeschlagen.",
 "The media could not be loaded, either because the server or network failed or because the format is not supported.": "Das Video konnte nicht geladen werden, da entweder ein Server- oder Netzwerkfehler auftrat oder das Format nicht unterstützt wird.",
 "The media playback was aborted due to a corruption problem or because the media used features your browser did not support.": "Die Videowiedergabe wurde entweder wegen eines Problems mit einem beschädigten Video oder wegen verwendeten Funktionen, die vom Browser nicht unterstützt werden, abgebrochen.",
 "No compatible source was found for this media.": "Für dieses Video wurde keine kompatible Quelle gefunden.",
 "Play Video": "Video abspielen",
 "Close": "Schließen",
 "Modal Window": "Modales Fenster",
 "This is a modal window": "Dies ist ein modales Fenster",
 "This modal can be closed by pressing the Escape key or activating the close button.": "Durch Drücken der Esc-Taste bzw. Betätigung der Schaltfläche \"Schließen\" wird dieses modale Fenster geschlossen.",
 ", opens captions settings dialog": ", öffnet Einstellungen für Untertitel",
 ", opens subtitles settings dialog": ", öffnet Einstellungen für Untertitel",
 ", selected": ", ausgewählt",
 "captions settings": "Untertiteleinstellungen",
 "subtitles settings": "Untertiteleinstellungen",
 "descriptions settings": "Einstellungen für Beschreibungen",
 "Close Modal Dialog": "Modales Fenster schließen",
 "Descriptions": "Beschreibungen",
 "descriptions off": "Beschreibungen aus",
 "The media is encrypted and we do not have the keys to decrypt it.": "Die Entschlüsselungsschlüssel für den verschlüsselten Medieninhalt sind nicht verfügbar.",
 ", opens descriptions settings dialog": ", öffnet Einstellungen für Beschreibungen",
 "Audio Track": "Tonspur",
 "Text": "Schrift",
 "White": "Weiß",
 "Black": "Schwarz",
 "Red": "Rot",
 "Green": "Grün",
 "Blue": "Blau",
 "Yellow": "Gelb",
 "Magenta": "Magenta",
 "Cyan": "Türkis",
 "Background": "Hintergrund",
 "Window": "Fenster",
 "Transparent": "Durchsichtig",
 "Semi-Transparent": "Halbdurchsichtig",
 "Opaque": "Undurchsictig",
 "Font Size": "Schriftgröße",
 "Text Edge Style": "Textkantenstil",
 "None": "Kein",
 "Raised": "Erhoben",
 "Depressed": "Gedrückt",
 "Uniform": "Uniform",
 "Dropshadow": "Schlagschatten",
 "Font Family": "Schristfamilie",
 "Proportional Sans-Serif": "Proportionale Sans-Serif",
 "Monospace Sans-Serif": "Monospace Sans-Serif",
 "Proportional Serif": "Proportionale Serif",
 "Monospace Serif": "Monospace Serif",
 "Casual": "Zwanglos",
 "Script": "Schreibeschrift",
 "Small Caps": "Small-Caps",
 "Reset": "Zurücksetzen",
 "restore all settings to the default values": "Alle Einstellungen auf die Standardwerte zurücksetzen",
 "Done": "Fertig",
 "Caption Settings Dialog": "Einstellungsdialog für Untertitel",
 "Beginning of dialog window. Escape will cancel and close the window.": "Anfang des Dialogfensters. Esc bricht ab und schließt das Fenster.",
 "End of dialog window.": "Ende des Dialogfensters.",
 "Audio Player": "Audio-Player",
 "Video Player": "Video-Player",
 "Progress Bar": "Forschrittsbalken",
 "progress bar timing: currentTime={1} duration={2}": "{1} von {2}",
 "Volume Level": "Lautstärkestufe"
});

    });
});;
M.util.js_pending('theme_adaptable/bsoptions');
require(['theme_adaptable/bsoptions'], function(amd) {
    amd.init(true);
    M.util.js_complete('theme_adaptable/bsoptions');
});;
function legacy_activity_onclick_handler_1(e) { e.halt(); window.open('https://lernen.h-da.de/mod/url/view.php?id=395685&redirect=1'); return false; };
function legacy_activity_onclick_handler_2(e) { e.halt(); window.open('https://lernen.h-da.de/mod/url/view.php?id=395687&redirect=1'); return false; };
M.util.js_pending('block_settings/settingsblock');
require(['block_settings/settingsblock'], function(amd) {
    amd.init("5", null);
    M.util.js_complete('block_settings/settingsblock');
});;

require(['core/yui'], function(Y) {
    M.util.init_skiplink(Y);
});
;

require(
[
    'jquery',
    'core_message/message_popover'
],
function(
    $,
    Popover
) {
    var toggle = $('#message-drawer-toggle-5f009b81978c15f009b8193b194');
    Popover.init(toggle);
});
;

require(['jquery', 'message_popup/notification_popover_controller'], function($, controller) {
    var container = $('#nav-notification-popover-container');
    var controller = new controller(container);
    controller.registerEventListeners();
    controller.registerListNavigationEventListeners();
});
;

    require(['core/yui'], function(Y) {
            Y.on('click', legacy_activity_onclick_handler_2, '#action_link5f009b8193b196', null);
    });
;

require(
[
    'jquery',
    'core_message/message_drawer',
    'core_message/message_popover',
    'theme_bootstrapbase/bootstrap'
],
function(
    $,
    MessageDrawer,
    Popover,
    _
) {

    var root = $('#message-drawer-5f009b819e9175f009b8193b198');
    MessageDrawer.init(root);
    root.affix({
        offset: {
            top: 52
        }
    });

    var toggle = $('#message-drawer-close-5f009b819e9175f009b8193b198');
    Popover.init(toggle);
});
;
M.util.js_pending('core/log');
require(['core/log'], function(amd) {
    amd.setConfig({"level":"warn"});
    M.util.js_complete('core/log');
});;
M.util.js_pending('core/page_global');
require(['core/page_global'], function(amd) {
    amd.init();
    M.util.js_complete('core/page_global');
});M.util.js_complete("core/first");
});
//]]>
</script>
<script type="text/javascript" src="https://lernen.h-da.de/theme/javascript.php/adaptable/1593743412/footer"></script>
<script type="text/javascript">
//<![CDATA[
M.str = {"moodle":{"lastmodified":"Zuletzt ge\u00e4ndert","name":"Name","error":"Fehler","info":"Infos","yes":"Ja","no":"Nein","ok":"OK","cancel":"Abbrechen","confirm":"Best\u00e4tigen","areyousure":"Sind Sie sicher?","closebuttontitle":"Schlie\u00dfen","unknownerror":"Unbekannter Fehler"},"repository":{"type":"Typ","size":"Gr\u00f6\u00dfe","invalidjson":"Ung\u00fcltiger JSON-Text","nofilesattached":"Keine Datei","filepicker":"Dateiauswahl","logout":"Abmelden","nofilesavailable":"Keine Dateien vorhanden","norepositoriesavailable":"Sie k\u00f6nnen hier zur Zeit keine Dateien hochladen.","fileexistsdialogheader":"Datei bereits vorhanden","fileexistsdialog_editor":"Eine Datei mit diesem Namen wurde bereits an den Text angeh\u00e4ngt, den Sie gerade bearbeiten","fileexistsdialog_filemanager":"Eine Datei mit diesem Namen wurde bereits an den Text angeh\u00e4ngt","renameto":"Nach '{$a}' umbenennen","referencesexist":"{$a} Aliase\/Verkn\u00fcpfungen zu dieser Datei","select":"W\u00e4hlen Sie"},"admin":{"confirmdeletecomments":"M\u00f6chten Sie die Kommentare wirklich l\u00f6schen?","confirmation":"Best\u00e4tigung"}};
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
(function() {Y.use("moodle-filter_glossary-autolinker",function() {M.filter_glossary.init_filter_autolinking({"courseid":0});
});
Y.use("moodle-filter_mathjaxloader-loader",function() {M.filter_mathjaxloader.configure({"mathjaxconfig":"MathJax.Hub.Config({\r\n    config: [\"Accessible.js\", \"Safe.js\"],\r\n    errorSettings: { message: [\"!\"] },\r\n    skipStartupTypeset: true,\r\n    messageStyle: \"none\"\r\n});\r\n","lang":"de"});
});
M.util.help_popups.setup(Y);
M.util.init_block_hider(Y, {"id":"inst5","title":"Einstellungen","preference":"block5hidden","tooltipVisible":"Block Einstellungen verbergen","tooltipHidden":"Block Einstellungen anzeigen"});
 M.util.js_pending('random5f009b8193b199'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random5f009b8193b199'); });
})();
//]]>
</script>

</div>
<script>
    $(document).ready(function () {
        $(".sectionname").show();
        $(".sectionname").removeClass("accesshide");

        // add icon in menu
        let element = $("div#navwrap a[title*=\"Kursbereiche\"]");
        let html = element.html();
        element.html("<i class=\"fa fa-book\"></i>" + html);
    });
</script>



</body>
</html>
