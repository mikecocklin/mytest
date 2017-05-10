<html>
    <head>
        <title>@yield('title')</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<link href="{!! asset('css/custom.css') !!}" media="all" rel="stylesheet" type="text/css" />
    

    </head>
    <body>
<div class="container">
        @section('navbar')
            @include('includes.navbar')
        @show


            @yield('content')

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
 <script type="text/javascript">
  $(function() {
         $('#datepicker').datepicker({ dateFormat: 'yy-mm-dd' });
  });
  </script>
    </body>
</html>