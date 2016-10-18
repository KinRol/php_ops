<?php
header("content-type:text/html;charset=utf-8");
class UserAction extends Action{
    // 测试
    public function test(){
        $m = D('User');
        $m -> modelTest();
    }
    // 显示添加用户界面HelloWorld!
    public function add() {
        $this->display('add');
    }
    // 添加用户模块
    public function doAdd(){
        $user = D('User');
        // 执行数据插入操作,成功返回 true 失败返回false
        $re = $user->doAdd();
        //判断是否插入成功
        if($re){
            $this->redirect('User/userList',null,3,'添加成功，跳转中......');
        }else {
            $this->redirect('User/add',null,3,'添加失败，跳转中......');
        }
    }
    // 显示用户列表
    public function userList() {
        $user = M('user');  //实例化模型
        $arr = $user->select();  //获取表中的数据，得到二维数组
        $this->list=$arr;        //将变量传递到模板中
        $this->display('userList');  //显示用户模板
    }
    // 实现显示单个用户信息的功能
    public function updateUser() {
        $id = $_GET['id'];   //获取userList.html传递过来的url参数
        $user = M('user');   // 实例化模型
        $arr = $user->where("userId={$id}")->select();  //根据id查出相应的记录
        $this->list = $arr;                             //将变量传递到模板中
        $this->display('update');                   //显示修改用户模板
    }

    // 实现修改用户信息的功能
    public function doUpdate(){
        $id = $_GET['id']; //获取update.html传递过来的url参数
        $user = M('user');   // 实例化模型
        $re = $user->where("userId={$id}")->data($_POST)->save(); //执行修改操作
        if ($re){
            $this->redirect('User/userList',null,3,'修改成功，跳转中......');
        }else {
            $this->redirect('User/updateUser',null,3,'修改失败，跳转中......');
        }
    }
    // 实现删除用户功能
    public function delUser(){
        $id = $_GET['id'];   //获取userList.html传递过来的url参数
        $user = M('user');   // 实例化模型
        $re = $user->where("userId={$id}")->delete();   //执行删除操作
        if ($re){
            $this->redirect('User/userList',null,3,'删除成功，跳转中......');
        }else {
            $this->redirect('User/userList',null,3,'删除失败，跳转中......');
        }
    }
}