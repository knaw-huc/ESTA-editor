<?php /* Smarty version Smarty-3.1.14, created on 2017-11-01 15:51:40
         compiled from "/Library/Webserver/Documents/clarin_cmdi_forms/smarty/templates/formPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149022178559f2f72fd3a031-21241563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f11aebe2ba383bd3387bf6ce3e24d9544493a3be' => 
    array (
      0 => '/Library/Webserver/Documents/clarin_cmdi_forms/smarty/templates/formPage.tpl',
      1 => 1509547891,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149022178559f2f72fd3a031-21241563',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59f2f72fd7dba2_08818272',
  'variables' => 
  array (
    'title' => 0,
    'home_path' => 0,
    'json' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f2f72fd7dba2_08818272')) {function content_59f2f72fd7dba2_08818272($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="css/ccfstyle.css" type="text/css" />
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
js/ccfparser.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
js/ccforms.js"></script>
        <script>
            obj = <?php echo $_smarty_tpl->tpl_vars['json']->value;?>
;
            $('document').ready(function(){
            setEvents();
            formBuilder.start(obj);
            });
        </script>
    </head>
    <body>
        <div id="wrapper">
        <div id="header">
            CLARIAH CMDI Forms
        </div>
        <div id="user">Rob Zeeman</div>
        <div id="homeBtn"></div>
        <div id="content">
            <form id="ccform"></form>
        </div>
        </div>
    </body>
</html>
<?php }} ?>