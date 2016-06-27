<?php
/* Smarty version 3.1.28, created on 2016-06-16 04:42:26
  from "/vagrant/www/vagrant/templates/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5761afa2288e23_31997548',
  'file_dependency' => 
  array (
    'd75a22695bbaa0c45e538b5897c953d27aefc69f' => 
    array (
      0 => '/vagrant/www/vagrant/templates/login.tpl',
      1 => 1465044872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5761afa2288e23_31997548 ($_smarty_tpl) {
?>
<html>
<head>
    <title>ユーザーログイン</title>
</head>
<body>

<!--ログインフォームの作成-->
<br><br>ログイン<br><br>
<form method="POST" action="smarty_login.php">
    <table>
    <td>ユーザーID：</td><td><input type="text" name="user_id" size="15" /></td>
    <tr><td>パスワード：</td><td><input type="password" name="password" size="15" /></td></tr>
    </table>
    <input type="submit" value="ログイン"　/>
</form>

<form action="smarty_board.php">
    <br><input type="submit" value="戻る"　/><br>
</form>

</body>
</html><?php }
}
