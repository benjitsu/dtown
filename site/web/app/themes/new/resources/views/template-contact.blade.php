{{--
  Template Name: Contact
--}}

@extends('layouts.app-min')

@section('content')
    <div class="container minContent">
  @while(have_posts()) @php the_post() @endphp
    <div class="row mt-5 mb-5">
    <h1>{!! App::title() !!}</h1>
    </div>
    <div class="row mt-5 mb-5">
    <div class="col-lg-12">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6303.174824079996!2d-122.28159600000001!3d37.823132!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80857e1a143d9c8f%3A0x386861d87d00c367!2sDogtown+Athletic!5e0!3m2!1sen!2sus!4v1555117549164!5m2!1sen!2sus"
                        width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    </div>
    <div class="row description mb-5">

        <div class="col-lg-8 contactform order-2 order-lg-1">
    @include('partials.content-page')
</div>
  @endwhile
  <div class="col-lg-4 d-flex justify-content-lg-center align-items-center order-1 order-lg-2">
  Dogtown Athletic<br/>
                        3109 Adeline St<br />
                        Oakland, CA 94608<br /><br /><br/>
    
    
                        (510) 328-3644<br />
                        info [at] dogtownathletic.com<br/><br/>
  </div>
</div>

</div>
@endsection
