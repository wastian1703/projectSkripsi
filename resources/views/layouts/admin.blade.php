<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>MMS Admin</title>

  @include('includes.admin.style')
</head>

<body id="page-top">
  <div id="wrapper">
    @include('includes.admin.sidebar')
    <div id="content-wrapper">
      <div id="content">
        @include('includes.admin.navbar')
        @yield('content')
      </div>

      @include('includes.admin.footer')
    </div>
  </div>
</body>

</html>