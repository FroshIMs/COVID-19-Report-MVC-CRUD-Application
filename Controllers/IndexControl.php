<?php
  /**
   *
   */

  class IndexControl extends Controller {

    public function displayCases() {
      $indexModelInst = new IndexModel();
      return $indexModelInst->getCases();
    }

  }


 ?>
