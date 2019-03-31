<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Search page</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    
    $( "#teacher" ).autocomplete({
      source: 'http://127.0.0.1:8000/search'
    });
  } );
  </script>
</head>
<body>
 
<div class="ui-widget">
  
  <input id="teacher" placeholder="Enter Teacher Name">
</div>
 
 
</body>
</html>