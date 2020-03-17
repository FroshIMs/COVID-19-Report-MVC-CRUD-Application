<?php

 $case = new IndexControl();
 $cases = $case->displayCases();

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="uk-container">
      <table class="uk-table uk-table-middle uk-table-divider uk-table-striped uk-table-hover">
        <h1 class="uk-heading">COVID-19 Case Reports</h1>
      <thead>
        <tr>
            <th class="uk-width-small">Case</th>
            <th>Case Description</th>
            <th>Read More</th>
        </tr>

      </thead>
      <tbody>
        <?php foreach ($cases as $case): ?>
        <tr>
          <td><?php echo $case['case_title']; ?></td>
          <td><?php echo $case['case_body']; ?></td>
          <td><a class="uk-button uk-button-default" href="case.php?id=<?php echo $case['id']; ?>">Read More</a></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
      </table>
    </div>
  </body>
</html>
