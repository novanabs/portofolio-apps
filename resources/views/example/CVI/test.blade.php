<!-- index.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Angular Sort and Filter</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootswatch/3.2.0/sandstone/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <style>
        body { padding-top:50px; }
    </style>

    <!-- JS -->
  
</head>
<body>
<div class="container" ng-app="sortApp" ng-controller="mainController">
  
  <div class="alert alert-info">
    <p>Sort Type: {{ sortType }}</p>
    <p>Sort Reverse: {{ sortReverse }}</p>
    <p>Search Query: {{ searchFish }}</p>
  </div>
  
  <table class="table table-bordered table-striped">
    
    <thead>
      <tr>
        <td>
            Sushi Roll 
        </td>
        <td>
          Fish Type 
        </td>
        <td>
          Taste Level 
        </td>
      </tr>
    </thead>
    
    <tbody>
      <tr ng-repeat="roll in sushi">
        <td>{{ roll.name }}</td>
        <td>{{ roll.fish }}</td>
        <td>{{ roll.tastiness }}</td>
      </tr>
    </tbody>
    
  </table>
  
</div>
</body>
{!!HTML::script('assets/js/angular.min.js')!!}
{!!HTML::script('assets/js/app.js')!!}
</html>