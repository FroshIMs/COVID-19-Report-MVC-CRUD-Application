<?php
  /**
   *
   */
  class IndexModel extends Model {

    private function cases() {
      $sql = "SELECT * FROM cases";
      $stmt = $this->connect()->query($sql);
      $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $row;
    }

    private function casesId() {
      if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = $this->connect()->prepare('SELECT * FROM cases WHERE id = :id');
        if (!$query) {
          return false;
        }
        if (!$query->execute(array(':id' => $id))) {
          return false;
        }
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        if (empty($results)) {
          return false;
        }

      }

    }

    public function getCases() {
      return $this->cases();
    }

    public function getCasesId() {
      return $this->casesId();
    }
  }



  ?>
