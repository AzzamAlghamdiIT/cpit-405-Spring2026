<?php
// Student ID: 2237392
// Name: Azzam Saeed Alghamdi
// CPIT 405 - Lab 10 - Q2: MVC Pattern Demo

/* ===================== MODEL ===================== */
// The Model is responsible for the data.
// In a real app, this would talk to the database.
class StudentModel {
    private $students = [
        ["id" => 1, "name" => "Azzam Alghamdi", "gpa" => 4.8],
        ["id" => 2, "name" => "Ahmed Ali",      "gpa" => 4.2],
        ["id" => 3, "name" => "Sara Mohammed",  "gpa" => 4.9],
        ["id" => 4, "name" => "Khalid Omar",    "gpa" => 3.7],
    ];

    public function getAllStudents() {
        return $this->students;
    }
}

/* ===================== CONTROLLER ===================== */
// The Controller receives the request, uses the Model to get data,
// then passes that data to the View.
class StudentController {
    private $model;

    public function __construct() {
        $this->model = new StudentModel();
    }

    public function showStudents() {
        // 1) get data from model
        $students = $this->model->getAllStudents();
        // 2) pass it to the view
        $this->renderView($students);
    }

    private function renderView($students) {
        /* ===================== VIEW ===================== */
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>GPA</th></tr>";
        foreach ($students as $s) {
            echo "<tr>";
            echo "<td>" . $s['id']   . "</td>";
            echo "<td>" . $s['name'] . "</td>";
            echo "<td>" . $s['gpa']  . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MVC Demo</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; line-height: 1.6; }
        h1 { color: #2c3e50; }
        table { border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #ccc; padding: 8px 14px; text-align: left; }
        th { background: #3498db; color: white; }
        .flow { background: #f4f6f8; padding: 15px; border-left: 4px solid #3498db; }
        .back { display: inline-block; margin-bottom: 15px; text-decoration: none; color: #3498db; }
    </style>
</head>
<body>

<a class="back" href="lab10.php">&larr; Back to Lab 10</a>

<h1>MVC Pattern Demo</h1>

<div class="flow">
    <p><strong>Request Flow:</strong></p>
    <p>Browser (request) &nbsp;&rarr;&nbsp; Controller &nbsp;&rarr;&nbsp; Model &nbsp;&rarr;&nbsp; (Database) &nbsp;&rarr;&nbsp; Model &nbsp;&rarr;&nbsp; Controller &nbsp;&rarr;&nbsp; View &nbsp;&rarr;&nbsp; Browser (response)</p>
</div>

<h2>Output from the View (data fetched by the Controller from the Model):</h2>

<?php
    // Simulate a request coming in:
    $controller = new StudentController();
    $controller->showStudents();
?>

</body>
</html>