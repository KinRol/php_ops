<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title>
		增加用户
	</title>
</head>
<body>
	<!-- 添加用户的表单 -->
	<form action="doAdd" method="post">
		用  户  名：<input type="text" name="name" /><br/><br/>                     <!-- 用户名 -->
		用户密码：<input type="text" name="password" /><br/><br/>	               <!-- 密码 -->
		用户状态：<input type="text" name="active" /><br/><br/>	               <!-- 状态 -->
		所属群组：<input type="text" name="group" /><br/><br/>                  <!-- 所属的用户组 -->
		所属部门：<input type="text" name="dept" /><br/><br/>		           <!-- 所属的部门 -->
		<input type="submit" value="增加用户" />
	</form>
</body>
</html>