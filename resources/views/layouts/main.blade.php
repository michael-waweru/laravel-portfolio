<!doctype html>
<html lang="en">
  <head>
    <title>{{ config('app.name', 'Michael-Waweru') }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="shortcut icon" href="{{ asset('required/images/favicon.ico') }}" />      
        
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,700,800' rel='stylesheet' type='text/css'>
    <link href="{{ asset('required/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('required/ionicons/css/ionicons.min.css') }}" rel="stylesheet">	
    
    <!-- CSS-->
    <link rel="stylesheet" type="text/css"  href='{{ asset('required/style.css') }}' />
    <link rel="stylesheet" href="{{ asset('required/form.css') }}" >
    
  </head>
  <body>
      
    @yield('main-content')    


    <!-- Optional JavaScript -->
    <script data-cfasync="false" src="{{ asset('required/../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
    <script src="{{ asset('required/form.js') }}"></script>
    <script src="{{ asset('required/js/jquery.js') }}"></script>			                                                               
    <script src='{{ asset('required/js/imagesloaded.pkgd.js') }}'></script>                
    <script src='{{ asset('required/js/jquery.prettyPhoto.js') }}'></script>                
    <script src='{{ asset('required/js/isotope.pkgd.js') }}'></script>                
    <script src='{{ asset('required/js/jquery.smartmenus.min.js') }}'></script>                           
    <script src='{{ asset('required/js/owl.carousel.min.js') }}'></script>                                                            
    <script src='{{ asset('required/js/circle-progress.min.js') }}'></script>                                                            
    <script src='{{ asset('required/js/main.js') }}'></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>