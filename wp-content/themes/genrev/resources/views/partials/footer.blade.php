<section class="hero footer-hero jumbo-bg @if(is_page('home')) footer-hero-fp @endif" style="background-image: url('@asset('images/footer-bg.jpg')')">

  <div class="container">
    <div class="cta">
      <span class="cta-text">Get Outside <strong>With Us!</strong></span>
      <p>
        Gen Rev encourages relationships with each-other and God by exploring His creation
      </p>
      @if($hero['button'])
        <a class="btn" href="{!! $hero['button']['url'] !!}">{{$hero['button']['title']}}</a>
      @endif
    </div>
  </div>
</section>
<footer class="content-info">
  <div class="container">
   <img class="logo-bg" src="@asset('images/logo-footer.png')" alt="Gen Rev"/>
   @if (has_nav_menu('primary_navigation'))
     {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
   @endif
   <div>
      <a target="_blank" class="fb" href="https://www.facebook.com/groups/genrev.club/"><i class="fab fa-facebook"></i> Facebook</a>
      {{-- <a target="_blank" class="mail" href="mailto:contact@genrev.club"><i class="fas fa-envelope"></i> contact@genrev.club</a> --}}
   </div>
  </div>
</footer>
<div class="copyright">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-copyright">
        Web design & development © Copyright {{ date("Y") }} - <a target="_blank" href="https://crafticonic.com/">Craft Iconic - Web Design & Online Marketing</a>
      </div>
      <div class="col-lg-6 col-copyright">
        Web Content © Copyright {{ date("Y") }} - Gen Rev Outdoor Club
      </div>
    </div>
  </div>
</div>
<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "LocalBusiness",
  "name": "{{ get_bloginfo('name', 'display') }}",
  "telephone": "207-512-8934",
  "address":
  [
    "@type": "PostalAddress",
    "streetAddress": "{!! $footer['site_info']['address'] !!}",
    "addressLocality": "{!! $footer['site_info']['town'] !!}",
    "addressRegion": "{!! $footer['site_info']['state'] !!}",
    "postalCode": "{!! $footer['site_info']['zip'] !!}"
  ]
}
</script>
