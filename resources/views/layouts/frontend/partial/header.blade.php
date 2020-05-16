<header>
  <div class="container-fluid position-relative no-side-padding">

    <a href="#" class="logo">Blog</a>

    <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

    <ul class="main-menu visible-on-click" id="main-menu">
      <li><a href="{{route('home')}}">Home</a></li>
      <li><a href="{{route('post.index')}}">Posts</a></li>
      <li><a href="{{route('login')}}">login</a></li>

    </ul><!-- main-menu -->

    <div class="src-area">
      <form method="GET" action="{{route('search')}}">
        <button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
        <input class="src-input" value="{{isset($query) ? $query:''}}" name="query" type="text" placeholder="Type of search">
      </form>
    </div>

  </div><!-- conatiner -->
</header>
