<?php
include "models/Student.php";

class StudentService {
    private $listOfStudents;

    public function __construct() {
        // Khởi tạo danh sách sinh viên
        $this->listOfStudents = [];
        $this->addStudent("205106111", 'Nguyen Van A', 'nguyenvana@example.com', '23/5/2002', 1);
        $this->addStudent("205106112", 'Nguyen Van B', 'nguyenvanb@example.com', '24/5/2002', 2);
        $this->addStudent("205106113", 'Nguyen Van C', 'nguyenvanc@example.com', '25/5/2002', 1);
    }

    // Thêm sinh viên vào danh sách
    public function addStudent($id, $tenSinhVien, $email, $ngaySinh, $idLop) {
        $student = new Student($id, $tenSinhVien, $email, $ngaySinh, $idLop);
        $this->listOfStudents[] = $student;
    }


    public function getAllStudents() {
        return $this->listOfStudents;
    }


    public function getStudentById($id) {
        foreach ($this->listOfStudents as $student) {
            if ($student->getId() === $id) {
                return $student;
            }
        }
        return null;
    }


    public function updateStudent($id, $tenSinhVien, $email, $ngaySinh, $idLop) {
        foreach ($this->listOfStudents as $student) {
            if ($student->getId() === $id) {
                $student->setTenSinhVien($tenSinhVien);
                $student->setEmail($email);
                $student->setNgaySinh($ngaySinh);
                $student->setIdLop($idLop);
                return true;
            }
        }
        return false;
    }


    public function deleteStudent($id) {
        foreach ($this->listOfStudents as $key => $student) {
            if ($student->getId() === $id) {
                unset($this->listOfStudents[$key]);
                return true;
            }
        }
        return false;
    }
}
