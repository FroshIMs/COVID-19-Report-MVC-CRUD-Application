<?php
  /**
   *
   */
  class CaseControl extends Controller {
    // This gets the case from the model to display on the view
    public function displayCasesId() {
      $indexModelInst = new IndexModel();
      return $indexModelInst->getCasesId();
    }
  }

 ?>
