<?php

  class AddCaseModel extends Model {

    private function addCase() {
      if(isset($_POST['submit'])) {
          $case_title = $_POST['case-title'];
          $case_author = $_POST['case-author'];
          $case_body = $_POST['case-body'];
          $victim_name = $_POST['victim-name'];
          $victim_age = $_POST['victim-age'];
          $victim_address = $_POST['victim-address'];
          $infect_date =$_POST['infect-date'];

          $query = "INSERT INTO cases (case_title, victim_name,	victim_age,	victim_address,	infect_date,	case_body,	case_author) VALUES (:title, :name, :age, :address, :infect_date, :description, :author)";

          $stmt = Database::connect()->prepare($query);
          $stmt->execute(array(
            ':title' => $case_title,
            ':name' => $victim_name,
            ':age' => $victim_age,
            ':address' => $victim_address,
            ':infect_date' => $infect_date,
            ':description' => $case_body,
            ':author' => $case_author
                              ));
            header('Location: /covid-19/');
        }
      }

      public function getAddCase() {
        return $this->addCase();
      }
}
?>
