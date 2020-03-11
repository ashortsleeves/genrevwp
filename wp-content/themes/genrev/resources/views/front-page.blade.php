@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <section class="fp-section about jumbo-bg" style="background-image: url(@asset('images/about-bg.jpg'))">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-9 col-md-10">
            <h1>What is <strong>GEN REV?</strong></h1>
            <p>
              Gen Rev is a Bangor-based group, open to anyone, which organizes and leads trips, hikes, and events in the Maine Outdoors. <strong>It's free to participate!</strong>
            </p>
            <div class="about-content">
              <div>
                <p>
                  "Gen Rev" stands for <a href="https://en.wikipedia.org/wiki/General_revelation" target="_blank"> General Revelation <i class="fas fa-external-link-alt"></i></a>, which is a theological term. It refers to the way God reveals Himself to us through nature and all of the things the human mind might discover just by living life on earth.
                </p>
                <a class="btn" href="/?page_id=44">Learn More</a>
              </div>
              <div class="image-box jumbo-bg" style="background-image: url(@asset('images/borestone.jpg'))">

              </div>

            </div>

          </div>
        </div>
      </div>
    </section>
    <section class="fp-section adventures">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-6 col-lg-7 col-md-8 col-title">
            <h1>Outdoor <strong>Adventures</strong></h1>
            <p>
              We host a variety of outdoor activities for all ages and abilities. From family friendly-bbqs and applepicking, to challenging hikes and ski trips, there is something for everyone.
            </p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-10 col-lg-11 col-12 adventure-flex">
            <div class="row">
              <div class="col-lg-4 col-sm-6 col-adventure">
                <div class="adventure-single">
                  <i class="fas fa-hiking"></i>
                  <h2>Hikes</h2>
                  <p>
                    Some of our favorite hikes are Gulf Hagas, Chick Hill, and Bald Mountain. We have also taken hiking trips to Acadia and Katahdin.
                  </p>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6 col-adventure">
                <div class="adventure-single">
                  <i class="fas fa-skiing"></i>
                  <h2>Winter Sports</h2>
                  <p>
                    Enjoy winter with us XC skiing, snowshowing, sledding, and downhill skiing at Hermon Mtn and Sugarloaf.
                  </p>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6 col-adventure">
                <div class="adventure-single">
                  <i class="fas fa-campground"></i>
                  <h2>Camping</h2>
                  <p>
                    Join us in July for a weekend at Peaks-Kenny State Park camping, fishing, swimming, hiking, boating, eating, bonfire and Sunday worship music.
                  </p>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6 col-adventure">
                <div class="adventure-single">
                  <i class="fas fa-trees"></i>
                  <h2>Nature Exploration</h2>
                  <p>
                    We host a variety of family-friendly events in God’s Creation, such as nature walks at the Bangor Town Forest and Family Fun day at Treworgy Orchard.
                  </p>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6 col-adventure">
                <div class="adventure-single">
                  <i class="fas fa-campfire"></i>
                  <h2>Group Events</h2>
                  <p>
                    Every summer Gen Rev gathers for a huge BBQ potluck with lots of food and volleyball, whiffle ball, croquet, frisbee, relay races, and a pie eating contest.
                  </p>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6 col-adventure">
                <div class="adventure-single">
                  <div class="raft">
                    <img src="@asset('images/raft.png')" alt="swimming" />
                  </div>

                  <h2>Water</h2>
                  <p>
                    We make the most of Maine’s short summers with swimming, boating, and an annual whitewater-rafting trip.
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>
    <section class="fp-section get-involved jumbo-bg">
      <img src="@asset('images/get-involved-bg.png')" class="forest-bg" alt='forest' />
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-9 col-md-10">
            <h1>Get <strong>Involved</strong></h1>
            <div class="cardstyle">
                <img src="@asset('images/get-involved.jpg')" />
                <p>
                  The Gen Rev Outdoor Club organizes hikes and other outdoor events to encourage getting outside, enjoying nature and each other, and being attentive to God speaking to us in little ways when we keep an eye out for Him. Gen Rev has ties to <a href="#" >New Hope Christian Reformed</a> and <a href="#" >Imago Dei Anglican</a> Churches in Bangor, ME.
                </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="event-section-wrap">
      @if($gen_rev_events->have_posts() )
      <section class="fp-section upcoming-events">
        <div class="container">
          <div class="title-wrap">
            <h1>Upcoming <strong>Events</strong></h1>
            <p class="center">
              We have had several hundred different participants, and we welcome more with every trip and event!
            </p>
          </div>
          <div class="event-slider">
            @php
              while ($gen_rev_events->have_posts() ) : $gen_rev_events->the_post();

              $event_date = get_post_meta( get_the_ID(), 'event_start_date', true );
              $start_date_str = get_post_meta( get_the_ID(), 'start_ts', true );
              $end_date_str = get_post_meta( get_the_ID(), 'end_ts', true );
              if( $event_date != '' ){
              	$event_date = strtotime( $event_date );
              }
              $venue_address = get_post_meta( get_the_ID(), 'venue_address', true );
              $image_url =  array();
              if ( '' !== get_the_post_thumbnail() ){
              	$image_url =  wp_get_attachment_image_src( get_post_thumbnail_id(  get_the_ID() ), 'full' );
              }else{
              	$image_date = date_i18n('F+d', $event_date );
              	$image_url[] =  "http://placehold.it/420x150?text=".$image_date;
              }

              $dayOfWeek = date("l", strtotime(date_i18n('Y-m-d', $event_date)));
            @endphp
              <div class="event-wrap">
                <div class="event-single">
                  <div class="event-content">
                    <div class='date'>
                      <span class="month">{{date_i18n('M', $event_date)}}</span>
                      <span class="day">{{date_i18n('d', $event_date)}}</span>
                    </div>
                      <h3>{{substr(get_the_title(),0,24)}}</h3>

                    <div class="deet-block">
                      <i class="far fa-clock"></i>
                      <p>{{$dayOfWeek}}, {{date_i18n('M d Y', $event_date)}} at {{$start_time = date_i18n( 'h:i a', $start_date_str )}} -
                      {{$end_time = date_i18n( 'h:i a', $end_date_str )}}</p>
                    </div>
                    @if($venue_address)
                      <div class="deet-block">
                        <i class="fas fa-map-marker-alt"></i>

                        <p>{!!$venue_address!!}</p>

                      </div>
                    @endif
                    <a href="{!! esc_url(get_permalink())!!}" class="btn">Join Us <i class="fab fa-facebook"></i></a>
                  </div>
                  <div class="event-img jumbo-bg" style=" background-image: url('{!!$image_url[0]!!}')">
                  </div>
                </div>
              </div>
            @endwhile
          </div>
          <div class="button-wrap">
            <a href="/?page_id=49" class="btn">View Calendar</a>
            <a href="{{$pdf['url']}}" class="btn btn-red">{{$pdf['title']}} <i class="fas fa-file-pdf"></i></a>
          </div>
        </div>
      </section>
      @php wp_reset_query(); @endphp
    @endif
    <section class="fp-section favorite-events @if($gen_rev_events->have_posts())favorite-events-lg @endif">
      <div class="container">
        <div class="title-wrap">
          <h1><strong>Our Favorite</strong> Events</h1>
          <p>Below are some of our favorite outdoor activities that we like to do every year.</p>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-10 col-lg-11">
            <div class="row">
              @foreach($fav_events as $event)
                <div class="col-sm-4 col-6 jumbo-bg fav-event" style="background-image: url('{!!$event['image']['url']!!}')">
                  <a href="/?page_id=46#{{str_replace('<br>','', str_replace(' ', '_',$event['title']))}}">
                    <h3>{!!$event['title']!!}</h3>
                  </a>
                </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="button-wrap">
          <a href="/?page_id=49" class="btn">View Calendar</a>
          <a href="{{$pdf['url']}}" class="btn btn-red">{{$pdf['title']}} <i class="fas fa-file-pdf"></i></a>
        </div>
      </div>
    </section>
  </div>
  <section class="suggest-adventure">
    <div class="container">
      <h2>Have an idea for an event?</h2>
      <a class="btn" href="/?page_id=46#suggest-adventure">Suggest an Adventure!</a>
    </div>
  </section>
  @endwhile
@endsection
