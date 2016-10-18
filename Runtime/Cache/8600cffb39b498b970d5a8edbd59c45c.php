<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>用户列表</title>
</head>
<body>
<center>
	<table border="1px" cellpadding="0" cellspacing="0" width="500px">
		<tr><th align="center">ID</th><th align="center">用户名</th><th align="center">状态</th><th align="center">用户组</th><th align="center">部门</th><th colspan="2"></th></tr>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			<td align="center"><?php echo ($vo["userId"]); ?></td><td align="center"><?php echo ($vo["userName"]); ?></td><td align="center"><?php echo ($vo["isLock"]); ?></td><td align="center"><?php echo ($vo["groupId"]); ?></td><td align="center"><?php echo ($vo["deptId"]); ?></td>
			<td align="center"><a href="__URL__/updateUser?id=<?php echo ($vo["userId"]); ?>">修改</a></td>
			<td align="center"><a href="__URL__/delUser?id=<?php echo ($vo["userId"]); ?>" onclick="return confirm('你确定要删除这个用户吗？')">删除</a></td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
</center>
</body>
</html>