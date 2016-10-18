<?php
    class MsgAction extends Action{
        public function sayHello() {
            $this->display('hello');
        }
    }