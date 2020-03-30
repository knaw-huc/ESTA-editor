<?php /* Smarty version Smarty-3.1.14, created on 2018-09-24 17:30:22
         compiled from "/Library/WebServer/Documents/clarin_cmdi_forms/smarty/templates/newrecord.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14192051425ba8fab04cc1e3-31804752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49cfbfcae834e6d90747dc4c71566a19eb44d875' => 
    array (
      0 => '/Library/WebServer/Documents/clarin_cmdi_forms/smarty/templates/newrecord.tpl',
      1 => 1537803009,
      2 => 'file',
    ),
    '6d525311abec23a44edbcf9b141dd08b25cec884' => 
    array (
      0 => '/Library/WebServer/Documents/clarin_cmdi_forms/smarty/templates/standardPage.tpl',
      1 => 1507812988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14192051425ba8fab04cc1e3-31804752',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba8fab05228b9_66531267',
  'variables' => 
  array (
    'title' => 0,
    'home_path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba8fab05228b9_66531267')) {function content_5ba8fab05228b9_66531267($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
js/ccforms.js"></script>
        <script>
            $('document').ready(function(){
            setEvents();});
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
            
    <h2>Create new CMDI record (<?php echo $_smarty_tpl->tpl_vars['profileName']->value;?>
)</h2>
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
index.php?page=add_record">
        <div id="newRecTab">
            <div class="newRecRow">
                <div class="newRecLab">Title:</div>
                <div class="newRecField"><input type="text" size="80" name="title"></div>
            </div>
            <div class="newRecRow">
                <div class="newRecLab">Creator:</div>
                <div class="newRecField">Rob Zeeman</div>
            </div>
            <div class="newRecRow">
                <div class="newRecLab">Date:</div>
                <div class="newRecField"><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</div>
            </div>
        </div>
        <input type="hidden" name="profile_id" value="<?php echo $_smarty_tpl->tpl_vars['profile_id']->value;?>
">
        <input type="submit" value="OK">
    </form>

        </div>
        </div>
    </body>
</html>
<?php }} ?>