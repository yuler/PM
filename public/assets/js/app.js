angular.module('siteApp', [
	'ngRoute', 
	'controllers',
    'services',
    'directives',
    'filters'
])

.config(['cfpLoadingBarProvider', function(cfpLoadingBarProvider) {
    cfpLoadingBarProvider.includeSpinner = true;
}])


.config(function($routeProvider) {
  $routeProvider
    .when('/', {
      controller:'IndexCtrl',
      templateUrl:'templates/index.html',
    })
    .when('/login',{
      controller:'AuthCtrl',
      templateUrl:'templates/login.html',
    })
    .when('/topics',{
      controller:'TopicCtrl',
      templateUrl:'templates/topics/index.html',
    })
    .otherwise({
      redirectTo:'/'
    });
})

.run(function($rootScope, $location, AuthService) {
  var routesThatRequireAuth = ['/topics'];

  $rootScope.$on('$routeChangeStart', function(event, next, current) {
    if(_(routesThatRequireAuth).contains($location.path())) {
      AuthService.check().success(function(response){
        if(response == 'false'){
          $location.path('/login');
          Messenger().post({
            message : '请先登录',
            type : 'error'
          });
        }
      })
    }
  });

})