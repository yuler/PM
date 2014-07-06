angular.module('controllers',[
	'angular-loading-bar',
	'ngAnimate',
])

.controller('NavCtrl', function($scope,$location,$http,$route,AuthService) {
	$scope.home = function(){
		$location.path('/');
	}
	$scope.login = function(){
		$location.path('/login');
	}
	$scope.logout = function(){
		AuthService.logout().success(function(){
			$location.path('/').replace();
			Messenger().post({
				message : '登出成功',
				type : 'success',
			});
		});
	}

})

.controller('IndexCtrl',function($scope, $http, $timeout, cfpLoadingBar){
	$scope.start = function() {
	  cfpLoadingBar.start();
	};
	$scope.complete = function () {
	  cfpLoadingBar.complete();
	}
	$scope.start();
	$scope.fake = true;
	$timeout(function() {
	  $scope.complete();
	  $scope.fake = false;
	}, 500);

})

.controller('AuthCtrl',function($scope,$http,$location,$timeout,cfpLoadingBar,AuthService){
	$scope.login = function(){
		AuthService.login($scope.user)
			.success(function(data){
				$location.path('/topics');
				Messenger().post({
					message : data.message,
					type : data.type,
				});
			})
			.error(function(data){
				console.log(data);
				Messenger().post({
					message : data.message,
					type : data.type,
				});
			});
	};
	$scope.start = function() {
	  cfpLoadingBar.start();
	};
	$scope.complete = function () {
	  cfpLoadingBar.complete();
	}
	// fake the initial load so first time users can see it right away:
	$scope.start();
	$scope.fake = true;
	$timeout(function() {
	  $scope.complete();
	  $scope.fake = false;
	}, 500);
})

.controller('TopicCtrl',function($scope,$timeout,cfpLoadingBar){
	
	





	$scope.start = function() {
	  cfpLoadingBar.start();
	};
	$scope.complete = function () {
	  cfpLoadingBar.complete();
	}
	$scope.start();
	$scope.fake = true;
	$timeout(function() {
	  $scope.complete();
	  $scope.fake = false;
	}, 500);
})