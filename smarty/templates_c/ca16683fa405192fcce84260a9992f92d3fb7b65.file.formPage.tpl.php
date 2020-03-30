<?php /* Smarty version Smarty-3.1.14, created on 2018-10-09 16:03:39
         compiled from "/Library/WebServer/Documents/clarin_cmdi_forms/smarty/templates/formPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2565486505a05c59e10f0f3-92781833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca16683fa405192fcce84260a9992f92d3fb7b65' => 
    array (
      0 => '/Library/WebServer/Documents/clarin_cmdi_forms/smarty/templates/formPage.tpl',
      1 => 1539092971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2565486505a05c59e10f0f3-92781833',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a05c59e13fae8_46886848',
  'variables' => 
  array (
    'title' => 0,
    'home_path' => 0,
    'lang' => 0,
    'json' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a05c59e13fae8_46886848')) {function content_5a05c59e13fae8_46886848($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="css/ccfstyle.css" type="text/css" />
        <link rel="stylesheet" href="css/autocomplete.css" type="text/css" />
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
js/jquery.autocomplete.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
js/ccf_config<?php if (!isset($_smarty_tpl->tpl_vars['lang']->value)){?>_en<?php }else{ ?>_<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
<?php }?>.js"></script>
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
            <div id="ccform"></div>
        </div>
        </div>
    </body>
</html>
<?php }} ?>