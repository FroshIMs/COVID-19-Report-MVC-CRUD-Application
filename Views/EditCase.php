<?php
  //Display the values
  $id = $_GET['id'];
  $cases = new EditCaseControl();
  $case = $cases->displayCasey($id);

 ?>

<div class="uk-container uk-margin-top">
  <a href='javascript:self.history.back();' class="uk-button uk-button-secondary uk-align-right">Never mind</a>
  <h1 class="uk-heading">COVID-19 Case Edit</h1>
  <form class="uk-form-horizontal uk-margin-large" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="hidden" name="id" value="<?php echo $case['id']; ?>">
    <fieldset class="">
        <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Case Title</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" name="case-title" type="text" value="<?php echo $case['case_title']; ?>">
            </div>
        </div>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Victim's Name</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" name="victim-name" type="text" value="<?php echo $case['victim_name']; ?>">
            </div>
        </div>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Victim's Age</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" name="victim-age" type="text" value="<?php echo $case['victim_age']; ?>">
            </div>
        </div>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Victim's Address</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" name="victim-address" type="text" value="<?php echo $case['victim_address']; ?>">
            </div>
        </div>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Infected On</label>
            <div class="uk-form-controls">
              <script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js"></script>
              <input type="text" name="infect-date" id="date1" alt="date" class="IP_calendar" title="Y/m/d" value="<?php echo $case['infect_date']; ?>">
            </div>
        </div>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Case Description</label>
            <div class="uk-form-controls">
                <textarea class="uk-textarea" id="form-horizontal-text" rows="5" name="case-body" placeholder=""><?php echo $case['case_body']; ?></textarea>
            </div>
        </div>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Posted By: </label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" name="case-author" name="victim-name" type="text" value="<?php echo $case['case_author']; ?>">
            </div>
        </div>

        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid uk-align-right">
            <label><input class="uk-checkbox" type="checkbox" required> I agree to Terms?</label>
        </div>
      </fieldset>
    <input type="submit" name="update" value="Update" class="uk-button uk-button-primary uk-align-right">
  </form>
</div>
