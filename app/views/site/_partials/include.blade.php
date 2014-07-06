

<!-- jQuery -->
<script type="text/javascript" src="<% asset('/thirdparty/jquery-1.10.0.min.js') %>"></script>
<!-- -->
<script type="text/javascript" src="<% asset('/thirdparty/underscore-min.js') %>"></script>

<!-- bootstrap -->
<!-- <script type="text/javascript" src="<% asset('/thirdparty/bootstrap-3.0.3-dist/js/bootstrap.min.js')%>"></script>
<link rel="stylesheet" type="text/css" href="<% asset('/thirdparty/bootstrap-3.0.3-dist/css/bootstrap.min.css')%>"> -->

<!-- tipsy -->
<link rel="stylesheet" type="text/css" href="<% asset('/thirdparty/tipsy/src/stylesheets/tipsy.css') %>">
<script type="text/javascript" src="<% asset('/thirdparty/tipsy/src/javascripts/jquery.tipsy.js') %>"></script>

<!-- angularjs -->
<script type="text/javascript" src="<% asset('/thirdparty/angularjs/angular.min.js') %>"></script>
<script type="text/javascript" src="<% asset('/thirdparty/angularjs/angular-resource.min.js') %>"></script>
<script type="text/javascript" src="<% asset('/thirdparty/angularjs/angular-route.min.js') %>"></script>

<script type="text/javascript" src="<% asset('/assets/js/app.js') %>"></script>
<script type="text/javascript" src="<% asset('/assets/js/controllers.js') %>"></script>
<script type="text/javascript" src="<% asset('/assets/js/services.js') %>"></script>
<script type="text/javascript" src="<% asset('/assets/js/filters.js') %>"></script>
<script type="text/javascript" src="<% asset('/assets/js/directives.js') %>"></script>

<!-- angular-loading-bar-master -->
<script type="text/javascript" src="<% asset('/thirdparty/angularjs/angular-animate.min.js') %>"></script>
<script type="text/javascript" src="<% asset('/thirdparty/angular-loading-bar-master/src/loading-bar.js') %>"></script>
<link rel="stylesheet" type="text/css" href="<% asset('/thirdparty/angular-loading-bar-master/src/loading-bar.css') %>">

<!-- HubSpot-messenger -->
<script type="text/javascript" src="<% asset('/thirdparty/HubSpot-messenger/build/js/messenger.min.js') %>"></script>
<script type="text/javascript" src="<% asset('/thirdparty/HubSpot-messenger/build/js/messenger-theme-future.js') %>"></script>
<script type="text/javascript" src="<% asset('/thirdparty/HubSpot-messenger/build/js/messenger-theme-flat.js') %>"></script>
<link rel="stylesheet" href="<% asset('/thirdparty/HubSpot-messenger/build/css/messenger.css') %>">
<link rel="stylesheet" href="<% asset('/thirdparty/HubSpot-messenger/build/css/messenger-theme-future.css') %>">
<link rel="stylesheet" href="<% asset('/thirdparty/HubSpot-messenger/build/css/messenger-theme-flat.css') %>">
<link rel="stylesheet" href="<% asset('/thirdparty/HubSpot-messenger/build/css/messenger-theme-air.css') %>">

<link rel="stylesheet" href="http://192.168.1.220:3000/app.css">
<!-- <link rel="stylesheet" href="<% asset('/assets/css/app.css') %>"> -->
<script type="text/javascript" src="<% asset('/assets/js/global.js') %>"></script>

<!-- CSRF_TOKEN -->
<script>
  angular.module("siteApp").constant("CSRF_TOKEN", '<?php echo csrf_token(); ?>');
</script>