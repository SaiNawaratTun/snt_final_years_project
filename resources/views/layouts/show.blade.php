<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  --}}
    <title>SNT Blood Donation</title>
</head>
<body>
    {{--  <script>
        (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/messenger.Extensions.js";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'Messenger'));
      const APP_ID = 934370207078752;    
      var senderID = "";
      
      window.extAsyncInit = function() {
          MessengerExtensions.getContext(APP_ID, 
            function success(thread_context){
             senderID = thread_context.psid;
            },
            function error(err){
              console.log(err);
            }
          );        
      };
    </script>  --}}
        <div class="container">
            
            {{--  FOR Mobile Menu  --}}
            <div class="menu1">
                <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;MENU</span>
            </div>

            <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="/"><i class="fa fa-home"></i>Home</a>
                        <button class="dropdown-btn">
                                <a >Donate <i class="fa fa-caret-down"></i></a>
                        </button>
                                <div class="dropdown-container">
                                    <a href="/form/create">Blood</a>
                                    <a href="/food/create">Refreshments</a>
                                </div>
                        <button class="dropdown-btn">
                                <a >Covid-19 <i class="fa fa-caret-down"></i></a>
                        </button>
                                <div class="dropdown-container">
                                    <a href="/item/create">Donate</a>
                                    <a href="/volunteer/create">Volunteer</a>
                                </div>
                    <a href="/feedback/create"><i class="fa fa-paper-plane" aria-hidden="true"></i></i>Feedback</a>
                    <a href="/about"><i class="fa fa-info-circle" aria-hidden="true"></i>About</a>
            </div>
              {{--  END Mobile Menu  --}}
            <div class="logo">
                <h2><a href="#"><img src="/css/img/sntBD.jpg" alt=""></a></h2>
            </div>

            <div class="nav">
                <ul class="menu">
                    <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
                    <li><a href="/login"><i class="fa fa-user-circle" aria-hidden="true"></i>Staff</a></li>
                    <li><a >Donate <i class="fa fa-caret-down"></i></a>
                        <ul>
                            <li><a href="/form/create">Blood</a></li>
                            <li><a href="/food/create">Refreshments</a></li>
                        </ul>
                    </li>
                    <li><a >Covid-19 <i class="fa fa-caret-down"></i></a>
                        <ul>
                            <li><a href="/item/create">Donate</a></li>
                            <li><a href="/volunteer/create">Volunteer</a></li>
                        </ul>
                    </li>
                    <li><a href="/feedback/create"><i class="fa fa-paper-plane" aria-hidden="true"></i></i>Feedback</a></li>
                    <li><a href="/about"><i class="fa fa-info-circle" aria-hidden="true"></i>About</a></li>
                </ul>
            </div>
        </div>
        <div class="color">
            @yield('content')
        </div>
        
        {{--   Foooter  --}}
        <div class="footer">
            <div class="inner-footer">

              <div class="footer-items">
                    <h3>Contact us</h3>
                        <div class="border1"></div>
                            <ul>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i>No(199),36th Street, Kyauktada Township, Yangon</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>01-375321, 09450594145</li>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i>matdadario@gmail.com</li>
                                <li><a href="/feedback/create"><i class="fa fa-paper-plane" aria-hidden="true"></i>Send Message via Website</a></li>
                                <li><a href="https://www.facebook.com/SNT-Blood-Donation-107353477696565"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook Page</a></li>
                            </ul>
              </div>

                        <div class="footer-items">
                            <iframe width="600" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=Q5G6%2BRF%20Yangon&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            
                        </div>
            </div>
              <!--   Footer Bottom start  -->
                <div class="footer-bottom">
                    <i class="fa fa-code" aria-hidden="true"> </i>
                    <strong><span> by Sai Nawarat Tun</span></strong>
                </div>
        </div>
          {{--   End Footer   --}}

          <script>
           /* const windowShut = () => {
   
                MessengerExtensions.requestCloseBrowser(function success() {
                console.log("success");          
              }, function error(err) {
                console.log(err);
              });
              }
            
            document.getElementById("form").addEventListener("submit", windowShut);*/  

            function openNav() {
              document.getElementById("mySidenav").style.width = "250px";
              document.getElementById("main").style.marginLeft = "250px";
            }
            
            function closeNav() {
              document.getElementById("mySidenav").style.width = "0";
              document.getElementById("main").style.marginLeft= "0";
            }

            var dropdown = document.getElementsByClassName("dropdown-btn");
            var i;

            for (i = 0; i < dropdown.length; i++) {
                    dropdown[i].addEventListener("click", function() {
                        this.classList.toggle("active");
                        var dropdownContent = this.nextElementSibling;
                            if (dropdownContent.style.display === "block") {
                                dropdownContent.style.display = "none";
                                } 
                                else {
                                dropdownContent.style.display = "block";
                            }
                    });
            }
            </script>
    
</body>
</html>