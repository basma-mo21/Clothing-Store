<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <title>Sixteen Clothing HTML Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg" >
        <div class="container">
          <a class="navbar-brand" href="#"><h2>Sixteen <em>Clothing</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

             
            
              <li class="nav-item">
                
                @extends('layouts.app')
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif
        
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else


                                <li class="nav-item">
                                  <a class="nav-link" href="{{url('showcart')}}">
                                    <i class="fas fa-shopping-cart"></i>
                                    Cart[{{$cart}}]</a>
                                </li>
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>
        
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('home.index') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest

              </li>




            </ul>
          </div>
        </div>
      </nav>
     
    </header>

   
    <div style="padding: 100px;" align="center">
      @if (session()->has('message'))
      <div class=" alert alert-danger">
      <button type="button" class="close" data-dismiss="alert">x</button>
      {{session()->get('message')}}
  </div>
        @endif

  @if ($phone->count()>0)


    <table  class="table table-dark table-striped container" style="width: 50%; height: 120px;">
      <tr align="center">

          <th style="padding: 20px">Product-Name</th>
          <th style="padding: 20px">Quantity</th>
          <th style="padding: 20px">PRICE</th>
          <th style="padding: 20px">Action</th>
      </tr>

      <form action="{{url('order')}}" method="POST" >
        @csrf

      @foreach ($phone as $data )
          
    
      <tr align="center">
          <td>
            <input type="text"  name="productname[]" hidden value=" {{$data->product_title}}" >
            {{$data->product_title}}</td>
          <td>
            <input type="text"  name="quantity[]" hidden value=" {{$data->quantity}}" >
            {{$data->quantity}}</td>
          <td>
            <input type="text"  name="price[]" hidden value=" {{$data->price}}" >
            {{$data->price}}</td>
          <td><a href="{{url('deletecart',$data->id)}}" class="btn btn-danger">Delete</a></td>
          
         
      </tr>
      @endforeach
  </table>
<br>
  <button class="btn btn-lg btn-primary">Confirm Order</button>
</form>
  
    
  @else
    <h1 style="align-content: center"> Nothing Added yet</h1>
  
    
  @endif





   


</div>

   

    
 


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
