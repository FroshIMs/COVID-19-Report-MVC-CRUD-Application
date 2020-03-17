<div class="uk-container uk-margin-top">
  <h1 class="uk-heading">COVID-19 Case Edit</h1>
  <form class="uk-form-horizontal uk-margin-large" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <fieldset class="">
        <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Case Title</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" name="case-title" type="text" placeholder="Case Title">
            </div>
        </div>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Victim's Name</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" name="victim-name" type="text" placeholder="Victim's Name">
            </div>
        </div>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Victim's Age</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" name="victim-age" type="text" placeholder="Victim's Age">
            </div>
        </div>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Victim's Address</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" name="victim-address" type="text" placeholder="Victim's Address">
            </div>
        </div>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Infected On</label>
            <div class="uk-form-controls">
                <script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js"></script>
                <input type="text" name="infect-date" id="date1" alt="date" class="IP_calendar" title="Y/m/d" placeholder="Infected On">
            </div>
        </div>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Case Description</label>
            <div class="uk-form-controls">
                <textarea class="uk-textarea" id="form-horizontal-text" rows="5" name="case-body" placeholder="Case Description"></textarea>
            </div>
        </div>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Posted By </label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" name="case-author" name="victim-name" type="text" placeholder="Author's Name">
            </div>
        </div>

        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid uk-align-right">
            <label><input class="uk-checkbox" type="checkbox" required> I agree to Terms?</label>
        </div>
    </fieldset>
    <input class="uk-button uk-button-primary uk-align-right" type="submit" name="submit" value="Submit">
  </form>
</div>
