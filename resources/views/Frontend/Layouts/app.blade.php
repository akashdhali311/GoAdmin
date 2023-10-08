<!DOCTYPE html>
<html class="no-js">
   <head> 

         <meta charset="utf-8">
         <meta name="description" content="">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <title>@yield('title')</title>
         <link rel="stylesheet" href="{{asset('backend')}}/css/bootstrap.min.css">
         <link rel="stylesheet" href="{{asset('backend')}}/css/animations.css">
         <link rel="stylesheet" href="{{asset('backend')}}/css/font-awesome.css">
         <link rel="stylesheet" href="{{asset('backend')}}/css/main.css" class="color-switcher-link">

   </head> 
    <body> 
      
          @include('Frontend.Layouts.header')
          
          @yield('content')
          
          @include('Frontend.Layouts.footer')

         <script data-cfasync="false" src="{{asset('backend')}}/../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/compressed.js"></script>
         <script src="{{asset('backend')}}/js/compressed.js"></script>
         <script src="{{asset('backend')}}/js/main.js"></script>
	   <script src="{{asset('backend')}}/js/switcher.js"></script>
         
    </body> 
</html>