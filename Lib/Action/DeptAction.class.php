<?php
//部门管理表
class DeptAction extends Action{
    // 显示增加部门界面,显示html页面
    public function add(){
        $this->display('addDept');
    }
}
