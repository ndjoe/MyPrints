<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPrints</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    {{ HTML::style('packages/Flat-UI-master/dist/css/flat-ui.min.css') }}
    {{ HTML::style('packages/Flat-UI-master/dist') }}
    {{ HTML::style('css/main.css') }}
    
  </head>
 
  <body>
 <div class="container">
    @if(!Auth::check())
    <nav class="navbar navbar-fixed-top" role='navigation'>
        <div class="container">
            <ul class="nav navbar-nav">  
                <li>{{ HTML::link('/register', 'Register') }}</li>   
                <li>{{ HTML::link('/login', 'Login') }}</li>
                <li>{{ HTML::link('/logout','Logout') }}</li>
            </ul>  
        </div>
    </nav>
    @endif
        @if(Session::has('message'))
            <p class="alert">{{ Session::get('message') }}</p>
        @endif
    {{ $content }}
    </div>
</body>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="packages/Flat-UI-master/dis/js/flat-ui.min.js"></script>
</html>