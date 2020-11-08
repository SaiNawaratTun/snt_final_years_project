<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/stylea.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SNT Blood Donation</title>
</head>
<body>
            <div class="container">
                <div class="logo">
                    <h2><a href="#"><img src="/css/img/sntBD.jpg" alt=""></a></h2>
                </div>

                <div class="nav">
                    <ul class="menu">
                        <li><a href="/home"><i class="fa fa-home"></i>Home</a></li>
                        <li><a >Donate <i class="fa fa-caret-down"></i></a>
                          <ul>
                              <li><a href="/form">Blood</a></li>
                              <li><a href="/food">Refreshments</a></li>
                          </ul>
                      </li>
                      <li><a >Covid-19 <i class="fa fa-caret-down"></i></a>
                          <ul>
                              <li><a href="/item">Donate</a></li>
                              <li><a href="/volunteer">Volunteer</a></li>
                          </ul>
                      </li>
                        <li><a href="/feedback"><i class="fa fa-paper-plane" aria-hidden="true"></i></i>Feedback</a></li>
                        <li><a class="" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
            
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form></li>
                    </ul>
                </div>
            </div>
            <div id="main">
                @yield('content')
            </div>
            <div class="footer">
                <div class="copyright">
                  <i class="fa fa-code" aria-hidden="true"> </i><strong><span> by Sai Nawarat Tun</span></strong>
                </div>
            </div>
</body>
</html>