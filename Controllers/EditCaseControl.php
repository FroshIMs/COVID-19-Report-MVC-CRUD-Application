<?php
  /**
   *
   */
  class EditCaseControl extends Controller {

    // This displays the an individual case
    public function displayCasey($id) {
      $objCasey = new EditCaseModel(); // This should actually come from the Model class
      return $objCasey->getCasey($id);
    }

    // This deals with the update
    public function acceptEditCase() {
      $objEditCase = new EditCaseModel();
      return $objEditCase->getEditCase();
    }

    //This deals with the delete
    public function acceptDeleteCase() {
      $objDeleteCase = new EditCaseModel();
      return $objDeleteCase->getDeleteCase();
    }

  }

 ?>
