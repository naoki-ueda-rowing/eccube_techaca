<?php
/* Smarty version 3.1.28, created on 2016-06-16 04:42:48
  from "/vagrant/www/vagrant/templates/edit_input.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5761afb8b538c3_90021743',
  'file_dependency' => 
  array (
    'bd3946fc5911ea97cb66a37932f58778308e1a0d' => 
    array (
      0 => '/vagrant/www/vagrant/templates/edit_input.tpl',
      1 => 1465810637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5761afb8b538c3_90021743 ($_smarty_tpl) {
?>
<html>
<head>
    <title>投稿の編集</title>
</head>
<body>
編集<br>

 <form action=smarty_edit.php method=post>
     <textarea name = contents cols = 60 rows = 5 ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contents']->value, ENT_QUOTES, 'UTF-8');?>
</textarea><br />
     <input type=hidden name=id value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
>
     <input type = hidden name = user_id value = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_id']->value, ENT_QUOTES, 'UTF-8');?>
>
     <input type=submit value=更新>
 </form>

<form action="smarty_board.php">
    <br><input type="submit" value="戻る"　/><br>
</form>


</body>
</html><?php }
}
