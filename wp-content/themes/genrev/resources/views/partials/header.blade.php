<header class="banner @if(!is_page('home')) fixed-header @endif">
  <div class="container">
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
    <a class="brand @if(!is_page('home')) brand-scrolled @endif" href="{{ home_url('/') }}"><img src="{{$site_logo['url']}}" alt="{{$site_name}}"/></a>
    <button class="hamburger">
      <span>toggle menu</span>
    </button>
  </div>
</header>

<div class="sideNav" id="sideNav">
  <nav class="nav-primary">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
    @endif
  </nav>
</div>
