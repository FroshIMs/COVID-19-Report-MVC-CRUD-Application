<?php

  //display case
  $id = $_GET['id'];
  $cases = new EditCaseControl();
  $case = $cases->displayCasey($id);

?>

<div class="uk-container uk-margin-top">
  <a href='javascript:self.history.back();' class="uk-button uk-button-secondary uk-align-right">Back</a>
  <h1 class="uk-heading">COVID-19 Case Detail - <?php echo $case['case_title']; ?></h1>
  <ul class="uk-list uk-list-striped">
    <li><b>Victim's Name:</b> <?php echo $case['victim_name']; ?></li>
    <li><b>Victim's Age:</b> <?php echo $case['victim_age']; ?></li>
    <li><b>Victim's Address:</b> <?php echo $case['victim_address']; ?></li>
    <li><b>Infected On:</b> <?php echo $case['infect_date']; ?></li>
    <li>
      <div class="uk-margin">
          <label for=""><b>Case Description:</b> </label>
          <br />
          <?php echo $case['case_body']; ?>
      </div>
    </li>
</ul>
<div class="">
  <hr class="uk-heading" />
  <small>Created on <?php echo $case['case_created_at']; ?> by <b><?php echo $case['case_author']; ?></b> </small>
</div>
<div class="">
  <hr class="uk-heading" />
  <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <a href="edit-case.php?id=<?php echo $case['id']; ?>" class="uk-button uk-button-primary">Edit</a>
    <input type="hidden" name="delete_id" value="<?php echo $case['id']; ?>">
    <input type="submit" name="delete" value="Delete" class="uk-button uk-button-danger uk-align-right">
  </form>
</div>
</div>
