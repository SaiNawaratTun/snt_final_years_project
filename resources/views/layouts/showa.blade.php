<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>SNT Blood Donation</title>
</head>
<body>

        <div class="container">
            <div class="logo">
                <h2><a href="#"><img src="{{ asset('css/img/sntBD.jpg') }}" alt=""></a></h2>
            </div>

            <div class="nav">
                <ul class="menu">
                    <li><a href="/home"><i class="fa fa-home"></i>Home</a></li>
                    <li><a href="/form"><i class="fa fa-book" aria-hidden="true"></i>Form</a></li>
                    <li><a href="/feedback"><i class="fa fa-paper-plane" aria-hidden="true"></i></i>Feedback</a></li>
                    <li><a href="about"><i class="fa fa-info-circle" aria-hidden="true"></i>About</a></li>
                </ul>
            </div>
        </div>
        <div class="color">
            @yield('content')
        </div>
        
        <!-- Foooter  -->
      <div class="footer">
                  <div class="copyright">
                    <i class="fa fa-code" aria-hidden="true"> </i><strong><span> by Sai Nawarat Tun</span></strong>
                  </div>
          </div><!-- End Footer -->
    
</body>
</html>