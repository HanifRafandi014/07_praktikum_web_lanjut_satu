<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  @include('layouts.css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
  </div>
  <!-- ./wrapper -->
  @include('layouts.js')
</body>

</html>
