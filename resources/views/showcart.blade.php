<!DOCTYPE html>
<html lang="en">

  <head>

    <base href="/public">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">



    <title>RoyalFood</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">



    <link rel="stylesheet" href="assets/css/lightbox.css">

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


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>


                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li>

                            </li>

                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>




                            <li class="scroll-to-section" style="background-color:brown;">


                                 @auth

                                <a href="{{ url('/showcart', Auth::user()->id) }}">

                                    Cart {{ $count }}

                                </a>

                                 @endauth

                                 @guest
                                    Cart[0]
                                 @endguest

                            </li>

                            <li>

                                @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                            <li>

                                                <x-app-layout>

                                                </x-app-layout>


                                            </li>
                                        @else
                                            <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                                            @if (Route::has('register'))
                                                <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                            </li>
                        </ul>

                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->








   <div id="top">
    <table align="center" bgcolor="yellow">

        <tr>

            <th style="padding: 30px">Food Name</th>
            <th style="padding: 30px">Price</th>
            <th style="padding: 30px">Quantity</th>
            <th style="padding: 30px">Action</th>


        </tr>

     <form action="{{ url('orderconfirm') }}" method="post">
        @csrf

        @foreach ($data as $data)
        <tr align="center">
            <td>
                <input type="text" name="foodname[]" value="{{ $data->food->title }}" hidden="">
                {{ $data->food->title }}
            </td>
            <td>
                <input type="text" name="price[]" value="{{ $data->food->price }}" hidden="">
                {{ $data->food->price }}

            </td>
            <td>
                <input type="text" name="quantity[]" value="{{ $data->quantity }}" hidden="">
                {{ $data->quantity}}
            </td>

        </tr>

        @endforeach




        @foreach ($data2 as $data2)
       <tr style="position: relative; top:-60px; right:-360px;">
        <td><a href="{{ url('/remove', $data2->id) }}" class="btn btn-warning">Remove</a></td>
       </tr>
        @endforeach

    </table>




    <div>





        <!-- Button trigger modal -->


        <div align="center" style="padding: 10px" data-toggle="modal" data-target="#exampleModalCenter">
            <button class="btn btn-primary" type="button" id="order">Order Now</button>
        </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dial  ntered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('orderconfirm') }}" method="post">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input class="form-control" type="text" name="name" placeholder="Name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input class="form-control" type="number" name="phone" placeholder=" Phone number" >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Adress</label>
                        <input class="form-control" type="text" name="address" placeholder="Address" required>
                    </div>

                    <div class="mb-3">

                        <input class="btn btn-success" type="submit" value="Order confirm">

                    </div>

                </form>
            </div>

        </div>
        </div>
    </div>





       <div id="appear" style=" padding:10px; display:none;" align="center" >

       </div>



         </form>
       </div>
   </div>






    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);

            });
        });

    </script>
  </body>
</html>

