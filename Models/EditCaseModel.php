<?php

  class EditCaseModel extends Model {

    private function editCase() {

      if(isset($_POST['update'])){

        $id = $_POST['id'];
        $case_title = $_POST['case-title'];
        $case_author = $_POST['case-author'];
        $case_body = $_POST['case-body'];
        $victim_name = $_POST['victim-name'];
        $victim_age = $_POST['victim-age'];
        $victim_address = $_POST['victim-address'];
        $infect_date = $_POST['infect-date'];

      $sql = "UPDATE cases SET
                case_title = :title,
                victim_name = :name,
                victim_age = :age,
                victim_address = :address,
                infect_date = :infect_date,
                case_body =:description,
                case_author =:author
              WHERE id = :id";

      $stmt= Database::connect()->prepare($sql);
      $stmt->execute(array(
        ':title' => $case_title,
        ':name' => $victim_name,
        ':age' => $victim_age,
        ':address' => $victim_address,
        ':infect_date' => $infect_date,
        ':description' => $case_body,
        ':author' => $case_author,
        ':id' => $id
                          ));
        header('Location: /covid-19/case.php?id='.$id);
    }

  }

    public function getEditCase() {
      return $this->editCase();
    }

    private function deleteCase() {

      if (isset($_POST['delete'])) {
          $id = $_POST['delete_id'];
          $sql = "DELETE FROM cases WHERE id = ?";
          $q = Database::connect()->prepare($sql);
          if ($q->execute(array($id))) {
            header('Location: /covid-19/');
          }
        }
      }

    public function getDeleteCase() {
      return $this->deleteCase();
    }

  }


?>
