<?php /* Smarty version Smarty-3.1.14, created on 2017-10-27 10:17:02
         compiled from "/Library/Webserver/Documents/clarin_cmdi_forms/smarty/templates/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134682421959de1cf2daad47-24395243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3752270029e475307b3e98c386c8fb440e540ab2' => 
    array (
      0 => '/Library/Webserver/Documents/clarin_cmdi_forms/smarty/templates/profile.tpl',
      1 => 1509092216,
      2 => 'file',
    ),
    'a516f559020709a996e66a4a4d26ba541b978527' => 
    array (
      0 => '/Library/Webserver/Documents/clarin_cmdi_forms/smarty/templates/standardPage.tpl',
      1 => 1507812988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134682421959de1cf2daad47-24395243',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59de1cf2de01a6_64507423',
  'variables' => 
  array (
    'title' => 0,
    'home_path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59de1cf2de01a6_64507423')) {function content_59de1cf2de01a6_64507423($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/Library/Webserver/Documents/clarin_cmdi_forms/smarty/plugins/function.cycle.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
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
            
    <h2>CMDI profile</h2>
    <div class="itemGrid">
        <div class="itemGridRow">
            <div class="itemGridCell labelCell">Profile name</div>
            <div class="itemGridCell"><?php echo $_smarty_tpl->tpl_vars['profile']->value['name'];?>
</div>
        </div>
        <div class="itemGridRow">
            <div class="itemGridCell labelCell">Description</div>
            <div class="itemGridCell"><?php echo $_smarty_tpl->tpl_vars['profile']->value['description'];?>
</div>
        </div>
        <div class="itemGridRow">
            <div class="itemGridCell labelCell">Owner</div>
            <div class="itemGridCell"><?php echo $_smarty_tpl->tpl_vars['profile']->value['owner'];?>
</div>
        </div>
        <div class="itemGridRow">
            <div class="itemGridCell labelCell">Created</div>
            <div class="itemGridCell"><?php echo $_smarty_tpl->tpl_vars['profile']->value['created'];?>
</div>
        </div>
    </div>

    <div id="profileData">
        <ul id="profileDataNavigator">
            <li id="profileXMLTab" class="profileDataActiveTab">XML</li>
            <li id="profileJSONTab">JSON</li>
            <li id="profileTweakTab">Tweak</li>
            <li id="profileRecordsTab">Records</li>
        </ul>
        <div id="profileDetails">
            <div id="profileXML"><textarea class="viewText" readonly="yes"><?php echo $_smarty_tpl->tpl_vars['profile']->value['content'];?>
</textarea></div>
            <div id="profileJSON" class="noView"><textarea class="viewText" readonly="yes"><?php echo nl2br($_smarty_tpl->tpl_vars['profile']->value['json']);?>
</textarea></div>
            <div id="tweakXML" class="noView"><textarea class="viewText" readonly="yes"><?php echo $_smarty_tpl->tpl_vars['profile']->value['tweak'];?>
</textarea></div>
            <div id="metadataRecs" class="noView">
                <table id="resultTable">
                    <tr><th>Title</th><th>Creator</th><th>Creation date</th><th></th></tr>
                            <?php  $_smarty_tpl->tpl_vars['record'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['record']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['records']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['record']->key => $_smarty_tpl->tpl_vars['record']->value){
$_smarty_tpl->tpl_vars['record']->_loop = true;
?>
                        <tr class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
">
                            <td><?php echo $_smarty_tpl->tpl_vars['record']->value['name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['record']->value['creator'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['record']->value['creation_date'];?>
</td>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
index.php?page=metadata&id=<?php echo $_smarty_tpl->tpl_vars['record']->value['id'];?>
" title="Edit metadata"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/edit.png" height="16px" width="16px"></a></td>
                        </tr>
                    <?php } ?>
                </table> 
            </div>
            </div>
        </div>
    </div>

        </div>
        </div>
    </body>
</html>
<?php }} ?>