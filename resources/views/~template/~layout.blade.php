<!doctype html>
<html class="no-js" data-ng-app="app">
  <head>
    <meta charset="utf-8">
    <title>Reactor - Bootstrap Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!-- oclazyload stylesheets before this tag -->
    <meta id="load_styles_before">
    <!-- build:css({.tmp,app}) styles/app.min.css -->
    <link rel="stylesheet" href="{!! asset('~reactor/styles/webfont.css') !!}">
    <link rel="stylesheet" href="{!! asset('~reactor/vendor/bootstrap/dist/css/bootstrap.css') !!}">
    <link rel="stylesheet" href="{!! asset('~reactor/vendor/textAngular/dist/textAngular.css') !!}">
    <link rel="stylesheet" href="{!! asset('~reactor/vendor/perfect-scrollbar/css/perfect-scrollbar.css') !!}">
    <link rel="stylesheet" href="{!! asset('~reactor/styles/climacons-font.css') !!}">
    <link rel="stylesheet" href="{!! asset('~reactor/styles/font-awesome.css') !!}">
    <link rel="stylesheet" href="{!! asset('~reactor/styles/card.css') !!}">
    <link rel="stylesheet" href="{!! asset('~reactor/styles/sli.css') !!}">
    <link rel="stylesheet" href="{!! asset('~reactor/styles/animate.css') !!}">
    <link rel="stylesheet" href="{!! asset('~reactor/styles/app.css') !!}">
    <link rel="stylesheet" href="{!! asset('~reactor/styles/app.skins.css') !!}">
    <!-- endbuild -->
  </head>
  <body data-ng-controller="AppCtrl" class="@{{ app.layout.sidebarTheme }} @{{ app.layout.headerTheme }} page-loading">
    <!-- page loading spinner -->
    <div class="pageload">
      <div class="pageload-inner">
        <div class="sk-rotating-plane"></div>
      </div>
    </div>
    <!-- /page loading spinner -->
    <div class="app @{{$state.current.data.appClasses}}" data-ng-class="{'layout-small-menu': app.layout.isSmallSidebar, 'layout-chat-open': app.layout.isChatOpen, 'layout-fixed-header': app.layout.isFixedHeader, 'layout-boxed': app.layout.isBoxed, 'layout-static-sidebar': app.layout.isStaticSidebar, 'layout-right-sidebar': app.layout.isRightSidebar, 'layout-fixed-footer': app.layout.isFixedFooter, 'message-open': app.isMessageOpen, 'contact-open': app.isContactOpen}" data-ui-view>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <!-- build:js({.tmp,app}) scripts/app.min.js -->
    <script src="{!! asset('~reactor/scripts/helpers/modernizr.js') !!}"></script>
    <script src="{!! asset('~reactor/vendor/jquery/dist/jquery.js') !!}"></script>
    <script src="{!! asset('~reactor/vendor/angular/angular.js') !!}"></script>
    <script src="{!! asset('~reactor/vendor/angular-bootstrap/ui-bootstrap-tpls.js') !!}"></script>
    <script src="{!! asset('~reactor/vendor/angular-animate/angular-animate.js') !!}"></script>
    <script src="{!! asset('~reactor/vendor/angular-ui-router/release/angular-ui-router.js') !!}"></script>
    <script src="{!! asset('~reactor/vendor/angular-sanitize/angular-sanitize.js') !!}"></script>
    <script src="{!! asset('~reactor/vendor/angular-touch/angular-touch.js') !!}"></script>
    <script src="{!! asset('~reactor/vendor/ui-jq/jq.js') !!}"></script>
    <script src="{!! asset('~reactor/vendor/ngstorage/ngStorage.js') !!}"></script>
    <script src="{!! asset('~reactor/vendor/angular-cookies/angular-cookies.js') !!}"></script>
    <script src="{!! asset('~reactor/vendor/ocLazyLoad/dist/ocLazyLoad.js') !!}"></script>
    <script src="{!! asset('~reactor/vendor/angular-translate/angular-translate.js') !!}"></script>
    <script src="{!! asset('~reactor/vendor/angular-translate-loader-static-files/angular-translate-loader-static-files.js') !!}"></script>
    <script src="{!! asset('~reactor/vendor/angular-translate-storage-cookie/angular-translate-storage-cookie.js') !!}"></script>
    <script src="{!! asset('~reactor/vendor/angular-translate-storage-local/angular-translate-storage-local.js') !!}"></script>
    <script src="{!! asset('~reactor/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.js') !!}"></script>
    <script src="{!! asset('~reactor/vendor/fastclick/lib/fastclick.js') !!}"></script>
    <script src="{!! asset('~reactor/scripts/helpers/smartresize.js') !!}"></script>
    <script src="{!! asset('~reactor/scripts/helpers/sameheight.js') !!}"></script>
    <script src="{!! asset('~reactor/scripts/app.js') !!}"></script>
    <script src="{!! asset('~reactor/scripts/app.main.js') !!}"></script>
    <script src="{!! asset('~reactor/scripts/config.router.js') !!}"></script>
    <script src="{!! asset('~reactor/scripts/config.language.js') !!}"></script>
    <script src="{!! asset('vendor/textAngular/dist/textAngular-rangy.min.js' )!!}"></script>
    <script src="{!! asset('vendor/textAngular/dist/textAngular-sanitize.min.js' )!!}"></script>
    <script src="{!! asset('~reactor/vendor/textAngular/dist/textAngularSetup.js') !!}"></script>
    <script src="{!! asset('~reactor/vendor/textAngular/dist/textAngular.js') !!}"></script>
    <script src="{!! asset('~reactor/scripts/helpers/colors.js') !!}"></script>
    <script src="{!! asset('~reactor/scripts/directives/anchor-scroll.js') !!}"></script>
    <script src="{!! asset('~reactor/scripts/directives/c3.js') !!}"></script>
    <script src="{!! asset('~reactor/scripts/directives/chosen.js') !!}"></script>
    <script src="{!! asset('~reactor/scripts/directives/navigation.js') !!}"></script>
    <script src="{!! asset('~reactor/scripts/directives/offscreen.js') !!}"></script>
    <script src="{!! asset('~reactor/scripts/directives/card-control-collapse.js') !!}"></script>
    <script src="{!! asset('~reactor/scripts/directives/card-control-refresh.js') !!}"></script>
    <script src="{!! asset('~reactor/scripts/directives/card-control-remove.js') !!}"></script>
    <script src="{!! asset('~reactor/scripts/directives/preloader.js') !!}"></script>
    <script src="{!! asset('~reactor/scripts/directives/quick-launch.js') !!}"></script>
    <script src="{!! asset('~reactor/scripts/directives/rickshaw.js') !!}"></script>
    <script src="{!! asset('~reactor/scripts/directives/scrollup.js') !!}"></script>
    <script src="{!! asset('~reactor/scripts/directives/vector.js') !!}"></script>
    <script src="{!! asset('~reactor/scripts/directives/ripple.js') !!}"></script>
    <script src="{!! asset('~reactor/scripts/directives/disable-ng-animate.js') !!}"></script>
    <script src="{!! asset('~reactor/vendor/d3/d3.min.js') !!}"></script>
    <script src="{!! asset('~reactor/vendor/n3-line-chart/build/line-chart.js') !!}"></script>
    <!-- endbuild -->
  </body>
</html>