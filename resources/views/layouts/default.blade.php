<!doctype html>
<html>
<head>
   @include('includes.head')
   <style>
html, body {
  height: 100%;
}
body {
  display: flex;
  flex-direction: column;
  background-color:#c1e1ec !important
}
.content {
  flex: 1 0 auto;
  background-color:#f8fafc
}
.footer {
  flex-shrink: 0;
  background-color: #fdd835;
   width: 100%;
    height: 30px;
    line-height: 30px;
}

      </style>
</head>
<body >


<main role="main" >
    @yield('css')
  @include('includes.header')
  <div class="container content">
   <div class=" justify-content-center" >

           @yield('content1')
 </div>
  </div>
</main>  
       @include('includes.footer')
 
@yield('js')

</body>
</html>