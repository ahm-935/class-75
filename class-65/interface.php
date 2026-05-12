<?php
  interface iTest{
      public function viewInfo();
  }

  interface iTest1{
      public function showInfo();
  }

  class ChildClass implements iTest, iTest1{
      public $name = "Rahim";
      public $email = "dfsfs@example.com";

      public function viewInfo(){
          echo "Name: " . $this->name . "<br>" . " Email: " . $this->email . "<br>";
      }
      public function showInfo(){
          echo "showInfo() method called.";
      }
  }

  $child = new ChildClass();
  $child->viewInfo();
  $child->showInfo();
  ?>