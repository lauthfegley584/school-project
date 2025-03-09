<?php
class SchoolProject {
   private $name;
   private $description;
   private $tasks = array();

   public function __construct($name, $description) {
       $this->name = $name;
       $this->description = $description;
   }

   public function addTask(SchoolProjectTask $task) {
       array_push($this->tasks, $task);
   }

   public function getName() {
       return $this->name;
   }

   public function getDescription() {
       return $this->description;
   }

   public function getTasks() {
       return $this->tasks;
   }
}

class SchoolProjectTask {
   private $name;
   private $description;

   public function __construct($name, $description) {
       $this->name = $name;
       $this->description = $description;
   }

   public function getName() {
       return $this->name;
   }

   public function getDescription() {
       return $this->description;
   }
}

$project = new SchoolProject("My Project", "A comprehensive plan for a successful school project");
$task1 = new SchoolProjectTask("Task 1", "Write the code for the project");
$task2 = new SchoolProjectTask("Task 2", "Test and debug the code");
$task3 = new SchoolProjectTask("Task 3", "Implement the solution");
$project->addTask($task1);
$project->addTask($task2);
$project->addTask($task3);
?>