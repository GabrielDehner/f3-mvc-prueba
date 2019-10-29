<?php

class HomeController extends BaseController{

    function index(){
        $users = new Users($this->db);
        $this->f3->set('users', $users->find());

        $this->f3->set('var1', 'Juan Pablo Carrizo');
        $this->f3->set('view', 'pages/index.php');
        //echo Template::instance()->render('pages/index.html');
    }
    function menu(){
        $this->f3->set('view', 'pages/menu.php');
        //echo Template::instance()->render('pages/index.html');
    }
    function mostrarForm(){
        $this->f3->set('view', 'pages/form.php');

    }
    function agregarUsuario(){
        $this->f3->set('view', 'pages/agregarUsuario.php');

    }
    function add(){
        $nombre = $this->f3->get('POST.nombre');
        $telep = $this->f3->get('POST.telep');
        $email = $this->f3->get('POST.email');

        $users = new Users($this->db);
        $users->nombre=$nombre;
        $users->telefono=$telep;
        $users->email=$email;
        $users->save();

        $this->f3->reroute('/');
    }
    function remove(){
        $id = $this->f3->get('PARAMS.id');
        $user = new Users($this->db);
        $user->load(array('id=?', $id));
        $user->erase();

        $this->f3->reroute('/');
    }
    
    function ajax_edit(){
        $id = $this->f3->get('PARAMS.id');
        $user = new Users($this->db);

        //$user->load(array('id=?', $id));
        $base= $this->db;
        $data = $base->exec("select * from users where id='".$id."'");
        //$user->exec("select * from users where id='".$id."'");
        //$this->db->exec("select * from users where id='".$id."'");
        //echo json_encode('verdura');
        //echo json_encode($data, JSON_FORCE_OBJECT);
        //echo 'asd';
        //return json_encode($data);
        //$this->f3->set('data',json_encode($data));
        
        echo json_encode($data);
       // $this->f3->retu
        //$this->f3->reroute('/');
	}

    function get(){
        echo json_encode(array('Just some text'));
        
    }

    function paramHandler(){
        $age = $this->f3->get('PARAMS.edad');
        $this->f3->set('edad', $age);
        $this->f3->set('x', $this->f3->get('PARAMS.x'));
        $this->f3->set('y', $this->f3->get('PARAMS.y'));
        $this->f3->set('z', $this->f3->get('PARAMS.z'));
        $this->f3->set('view', 'pages/param.html');
    }
    function formHandler(){
        $nombre = $this->f3->get('POST.nombre');
        $this->f3->set('nombre', $nombre);
        
        $this->f3->set('view', 'pages/home.php');
    }
}