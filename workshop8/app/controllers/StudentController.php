<?php
class StudentController {
    private $model;
    private $blade;

    public function __construct($model, $blade) {
        $this->model = $model;
        $this->blade = $blade; // Dependency injection 
    }

    // Display all students 
    public function index() {
        $students = $this->model->all();
        echo $this->blade->make("students.index", ["students" => $students])->render();
    }

    // Show form for adding a new student 
    public function create() {
        echo $this->blade->make("students.create")->render();
    }

    // Process form submission for adding 
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->create($_POST['name'], $_POST['email'], $_POST['course']);
            header("Location: index.php");
            exit();
        }
    }

    // Show form for editing ]
    public function edit($id) {
        $student = $this->model->find($id);
        echo $this->blade->make("students.edit", ["student" => $student])->render();
    }

    // Process update 8]
    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->update($id, $_POST['name'], $_POST['email'], $_POST['course']);
            header("Location: index.php");
            exit();
        }
    }

    // Remove a record 
    public function delete($id) {
        $this->model->delete($id);
        header("Location: index.php");
        exit();
    }
}