<?php
class HomeController{
    public function index(){
        include "services/StudentService.php";
        $stdService = new StudentService();
        $students = $stdService->getAllStudents();
        //Hiển thị ra view nào
        include "views/index.php";
    }
}