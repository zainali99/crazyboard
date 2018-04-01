<?php
/*CRAZYBOARD FILES (C) ZAIN ALI 2018*/
class crazyboardconfig
{
    // property declaration
    public $title= 'CrazyBoard Beta';
    public $version = '0.0.0.1';
    // method declaration
    public function showname() {
        return $this->title;
    }
    public function printVersion(){
    	return $this->version;
    }




}
?>