<?php

  class Model extends Database {

    private function casey($id) {
      $sql = "SELECT * FROM cases WHERE id = {$id}";
      foreach ($this->connect()->query($sql) as $row) {
        return $row;
      }
    }

    public function getCasey($id) {
      return $this->casey($id);
    }


  }


 ?>
