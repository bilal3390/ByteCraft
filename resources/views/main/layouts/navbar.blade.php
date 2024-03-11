<!-- header section strats -->
<div class="" style="background: #232323;">
<header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
        <a class="navbar-brand" href="{{route('home')}}">
          <span>
            ByteCraft
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}"> About </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('do')}}"> What we do </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('portfolio')}}"> Portfolio </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Contact us</a>
              </li>
            </ul>
            <div class="user_option">
              <a href="">
                <img src="images/user.png" alt="">
              </a>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->

</div>
