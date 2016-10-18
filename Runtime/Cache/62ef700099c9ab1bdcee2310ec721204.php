<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<META http-equiv="content-type" content="text/html;charset=utf-8">
	<title>
		用户列表
	</title>
</head>
<body>
	<!-- 修改用户的表单 -->
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><form action="__URL__/doUpdate?id=<?php echo ($vo["userId"]); ?>" method="post">
			用  户  名：<input type="text" name="userName" value="<?php echo ($vo["userName"]); ?>" /><br/><br/>            <!-- 用户名 -->
			用户密码：<input type="text" name="userPwd" value="<?php echo ($vo["userPwd"]); ?>" /><br/><br/>	              <!-- 密码 -->
			用户状态：<input type="text" name="isLock" value="<?php echo ($vo["isLock"]); ?>" /><br/><br/>	              <!-- 状态 -->
			所属群组：<input type="text" name="groupId" value="<?php echo ($vo["groupId"]); ?>" /><br/><br/>               <!-- 所属的用户组 -->
			所属部门：<input type="text" name="deptId" value="<?php echo ($vo["deptId"]); ?>" /><br/><br/>		          <!-- 所属的部门 -->
			<input type="submit" value="修改用户" />
		</form><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>