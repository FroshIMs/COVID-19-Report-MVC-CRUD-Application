<?php
  /**
   *
   */
  class AddCaseControl extends Controller {

      function acceptAddCase() {
        $objAddCase = new AddCaseModel();
        return $objAddCase->getaddCase();
      }
    }


 ?>
