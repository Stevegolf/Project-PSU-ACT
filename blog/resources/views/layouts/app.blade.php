<html>
    <head>
        <title>App Name - @yield('title')
        </title>
    <link rel="stylesheet" href="../css/app.css">
    </head>
    <body>
    <nav class="navbar navbar-default">
    <div class="navbar-header">
      <a class="navbar-brand" href="/home"><h1>Register Form</h1></a>
    </div>
  </nav>
    <div class="panel panel-default">
        <div class="container">
            <h2>
                @section('sidebar')
                @show
            </h2>
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <div class="panel panel-footer text-center">
        Designed by Piyaphan
    </div>
    </body>
</html>
