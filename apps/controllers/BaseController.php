<?php

class BaseController{
    protected $f3;
    protected $db;
    function __construct(){
        $this->f3 = Base::instance();
        //$this->db = new DB\SQL($this->$f3->get('db_dns').$this->$f3->get('db_name'), $this->$f3->get('db_user'), $this->$f3->get('db_pass'));
        
        $this->db=new DB\SQL(
            $this->f3->get('db_dns').$this->f3->get('db_name'),
            $this->f3->get('db_user'),
            $this->f3->get('db_pass')
        );
    
    }
    /*function afterroute(){
        echo Template::instance()->render('layout.php');
    }*/

}