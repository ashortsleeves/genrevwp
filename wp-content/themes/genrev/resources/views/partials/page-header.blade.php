@if($basic_settings['hero_section'])
  <section class="hero jumbo-bg responsive-hero @if(is_front_page())hero-fp @endif" @if(!has_post_thumbnail($page_id))style="background-image:url({{$hero['global_background']['url']}})"@endif>
    <div class="container">
     <div class="cta">
       <span class="cta-text">{!!$hero['title']!!}</span>
       @if($hero['button'])
         <a class="btn" href="{!! $hero['button']['url'] !!}">{{$hero['button']['title']}}</a>
       @endif
     </div>
     <img class="logo-bg" src="@asset('images/logo-bg.png')" alt="Gen Rev"/>
    </div>
  </section>
@endif
