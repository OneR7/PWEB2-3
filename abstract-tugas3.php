<?php
require_once 'config/config.php';
require_once 'controller/functions.php';
require_once 'model/models.php';
require_once 'controller/student_controller.php';
require_once 'controller/role_controller.php';


abstract class Controller {
    abstract static function index(); 
    abstract static function show($data); 
    abstract static function add();
    abstract static function save();
    abstract static function edit($data);
    abstract static function update($data);
    abstract static function remove($data);
}

abstract class AbstractStudents {
    abstract static function select(); 
    abstract static function insert($id, $name, $email, $role_fk);
    abstract static function delete(); // hapus data student
    abstract static function joinRoles($clauseAddition = "");
    abstract static function fresh();
    abstract static function selectById($id); 
    abstract static function selectWhere($clause); 
    abstract static function updateById($id, $name, $email, $role_fk); 
    abstract static function updateWhere($clause, $name, $email, $role_fk);
    abstract static function deleteById($id);
    abstract static function deleteWhere($clause); 
}


interface CustomFunctions {
    static function purge();
    static function restore();
}