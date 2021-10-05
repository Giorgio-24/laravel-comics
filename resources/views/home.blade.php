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
    <header class="container h-120 align-items-center">
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
{{-- <footer>
    <section>
        <div class="container h-100">
          <div class="">
            <a href="#" class="uppercase">Sign-up now!</a>
          </div>
          <div class="d-flex">
            <ul class="d-flex">
              <li><a href="#" class="uppercase">Follow us</a></li>
              <li>
                <a href="#">
                    <img src="" alt="facebook-logo"/>
                </a>
              </li>
              <li>
                <a href="#">
                    <img src="" alt="twitter-logo"/>
                </a>
              </li>
              <li>
                <a href="#">
                    <img src="" alt="youtube-logo"/>
                </a>
              </li>
              <li>
                <a href="#">
                    <img src="" alt="pinterest-logo"/>
                </a>
              </li>
              <li>
                <a href="#">
                    <img src="" alt="periscope-logo"/>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>
</footer> --}}
    </body>
</html>
