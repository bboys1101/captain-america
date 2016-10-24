<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="chrome=1, IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AFL</title>
    <!-- skeleton -->
    <link href="./library/skeleton/css/normalize.css" rel="stylesheet">
    <link href="./library/skeleton/css/skeleton.css" rel="stylesheet">
    <!-- css -->
	<link rel="stylesheet" type="text/css" href="./css/style.css"/>
	<link rel="shortcut icon" href="/img/afl.ico"/>

</head>

<body>
	<article>
		<h1>RATING TABLE</h1>
		
		<div ng-app="aflApp" ng-controller="aflCtrl" id="players-table"> 
			<div class="thead">
				<div class="tr">
					<div class="th">Rating</div>
					<div class="th">Player</div>
					<div class="th">Club</div>
					<div class="th">Position</div>
				</div>
			</div>
			<div class="tbody">
				<div class="tr" ng-repeat="p in players.playerRatings">
					<div class="td mobile_th">
						
						<span>{{p.detailedRatings.ranking}}</span>
						
					</div>
					<div class="td blue">{{p.player.playerName.givenName}} {{p.player.playerName.surname}}</div>
					<div class="td blue">
						<img ng-src="{{p.team.img}}"/>
						{{p.team.teamName}}
					</div>
					<div class="td">{{p.position}}</div>
				</div>
			</div>
		</div>
	</article>

	

	<!-- angularJs -->
	<script src="./library/angularjs/angular-1.5.8.js"></script>
	<!-- app.js -->
	<script type="text/javascript" src="./js/original/app.js"></script>
	<!-- <script type="text/javascript" src="./js/minify/app.min.js"></script> -->

	<script type="text/javascript">
		
		// variable
		var app = angular.module('aflApp', []);

		// controller
		app.controller('aflCtrl', function($scope, $http) {
		    $http.get("./api/ratings.json")
		    .then(function(response) {
		        $scope.players = response.data;
		        console.log(response.data);

		    });
		});

	</script>

</body>


</html>