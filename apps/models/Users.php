<?php

class Users extends DB\SQL\Mapper{
    function __construct(\DB\SQL $db){
        parent::__construct($db, "users");
       
    }
}