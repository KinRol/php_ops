<?php
class UserModel extends Model{
    // 字段映射
    protected $_map = array(
        'name' =>'userName', // 把表单中name映射到数据表的username字段
        'password'  =>'userPwd', // 把表单中的password映射到数据表的userPwd字段
        'active' => 'isLock',
        'group' => 'groupId',
        'dept' => 'deptId',
    );
    // Model 测试是否可用
    public function modelTest(){
        echo "Model 连接成功！";
    }
    // 添加用户模块
    public function doAdd(){
        $user = D('user');
        // 根据表单提交的POST数据创建数据对象
        $user->create($_POST);
        // 执行数据插入操作,成功返回最新插入的主键值
        $re = $user->add();
        //判断是否插入成功
        if($re){
            return true;
        }else {
            return false;
        }
    }
}