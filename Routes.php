<?php

  Route::set('index.php', function() {
    IndexControl::CreateView('Index');
  });

  Route::set('add-case', function() {
    AddCaseControl::CreateView('AddCase');
  });

  Route::set('edit-case.php', function() {
    EditCaseControl::CreateView('EditCase');
  });

  Route::set('case.php', function() {
    CaseControl::CreateView('Case');
  });
 ?>
