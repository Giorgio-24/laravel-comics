<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dc Comics</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header class="container h-120 align-items-center pt-3">
        <div class="row justify-content-between">
          <figure class="clickable col-2 d-flex align-items-center">
            <img src="{{asset('images/dc-logo.png')}}" alt="dc-logo" class="img-fluid" />
          </figure>
          <ul class="col-8 d-flex align-items-center">
          @foreach($nav_links as $nav_link )
          <li>
            <a class="text-uppercase fw-bold" href="{{$nav_link['url']}}">{{$nav_link['text']}}</a>
          </li>
          @endforeach
          </ul>
          <div class="col-2 d-flex align-items-center">
            <input type="search" placeholder="Search" name="" id="">
          </div>
        </div>
      </header>
      <footer>
        <div class="footer-bg">
          <section class="footer-list container">
            <div class="d-flex">
              <div>
                <h3 class="uppercase">Dc comics</h3>
                <ul>
                  <li><a href="#">Characters</a></li>
                  <li><a href="#">Comics</a></li>
                  <li><a href="#">Movies</a></li>
                  <li><a href="#">TV</a></li>
                  <li><a href="#">Games</a></li>
                  <li><a href="#">Videos</a></li>
                  <li><a href="#">News</a></li>
                </ul>
                <h3 class="uppercase">Shop</h3>
                <ul>
                  <li><a href="#">Shop DC</a></li>
                  <li><a href="#">Shop DC Collectibles</a></li>
                </ul>
              </div>
              <div>
                <h3 class="uppercase">Dc</h3>
                <ul>
                  <li><a href="#">Therms Of Use</a></li>
                  <li><a href="#">Privacy Policy (New)</a></li>
                  <li><a href="#">Ad Choiches</a></li>
                  <li><a href="#">Advertising</a></li>
                  <li><a href="#">Jobs</a></li>
                  <li><a href="#">Subscriptions</a></li>
                  <li><a href="#">Talent Workshops</a></li>
                  <li><a href="#">CPSC Certificates</a></li>
                  <li><a href="#">Ratings</a></li>
                  <li><a href="#">Shop Help</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div>
                <h3 class="uppercase">Sites</h3>
                <ul>
                  <li><a href="#">DC</a></li>
                  <li><a href="#">MAD Magazine</a></li>
                  <li><a href="#">DC Kids</a></li>
                  <li><a href="#">DC Universe</a></li>
                  <li><a href="#">DC Power Visa</a></li>
                </ul>
              </div>
            </div>
          </section>
        </div>
        <section class="socials w-100">
          <div class="container h-100 pt-4">
            <div class="row align-items-center justify-content-center">
              <div class="sign-up-box d-flex col-2">
                <a href="#" class="text-uppercase fw-normal">Sign-up now!</a>
              </div>
              <div class="col-10 d-flex justify-content-end">
                <ul class="d-flex align-items-center">
                  <li><a href="#" class="text-uppercase">Follow us</a></li>
                  <li>
                    <a href="#">
                        <img src="{{asset('images/footer-facebook.png')}}" alt="facebook-logo"/>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                        <img src="{{asset('images/footer-twitter.png')}}" alt="twitter-logo"/>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                        <img src="{{asset('images/footer-youtube.png')}}" alt="youtube-logo"/>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="{{asset('images/footer-pinterest.png')}}" alt="periscope-logo"/>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                        <img src="{{asset('images/footer-periscope.png')}}" alt="pinterest-logo"/>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
         </section>
      </footer> 
    </body>
</html>
