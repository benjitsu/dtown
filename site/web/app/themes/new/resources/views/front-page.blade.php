@extends('layouts.app-min')

@section('content')
<main role="main">
    <section id="homeHero" class="reveal">
        <div class="jumbotron jumbotron-fluid">
        </div>
    </section>
    <div class="captureFloat">
    @include('partials.capture')
</div>
    <section id="homePrograms" class="reveal">
        <div class="container">
            <div class="row">
                <h2 class="mr-auto ml-auto">Our Programs</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <a href="/metcon">
                    <div class="program metcon"></div>
                    <div class="name">Metcon</div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                <a href="/metcon">
                    <div class="program strength"></div>
                    <div class="name">Strength & Conditioning</div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                <a href="/metcon">
                    <div class="program functional"></div>
                    <div class="name">Functional Grind</div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                <a href="/metcon">
                    <div class="program personal"></div>
                    <div class="name">Personal Training</div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                <a href="/metcon">
                    <div class="program bjj"></div>
                    <div class="name">Brazilian Jiu-Jitsu</div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                <a href="/metcon">
                    <div class="program muaythai"></div>
                    <div class="name">Muay Thai</div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="homeBjj" class="reveal">
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                    <h2>Be Athletic</h2>
That is our Mission at Dogtown Athletic. It does not mean we only want “athletes” at our facility – it means that we believe everyone is an athlete and everyone, everyday, can be athletic. Move, dance, lift weights, sing, meditate. It is all athletic in its own way and we want to create a community of members that will embrace this idea of athleticism and fitness as much as we do.</p>
<p>Fitness isn’t a privilege. It is a lifestyle. And we want to ensure that our facility is open and welcoming to all people, young and old, small and large, weak or strong, who just want to be better, be fitter, be athletic.</p>
<p>But not just athletic… Dogtown Athletic.</p>

                    </div>
                    <div class="col-lg-4 offset-lg-1 mt-md-4 mt-sm-4">
                        <div class="sideImg"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="homeMeetus">
        <div class="container">
            <div class="row">
                <h2 class="mr-auto ml-auto">Come Meet Us</h2>
            </div>
            <div class="row">
                <div class="col-lg-8 order-2 order-lg-1 mt-4 mt-lg-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6303.174824079996!2d-122.28159600000001!3d37.823132!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80857e1a143d9c8f%3A0x386861d87d00c367!2sDogtown+Athletic!5e0!3m2!1sen!2sus!4v1555117549164!5m2!1sen!2sus"
                        width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4 details d-flex justify-content-lg-center align-items-lg-center order-1 order-lg-2 ">
                   <div class="mb-2">
                        Dogtown Athletic<br/>
                        3109 Adeline St<br />
                        Oakland, CA 94608<br /><br /><br/>
    
    
                        (510) 328-3644<br />
                        info [at] dogtownathletic.com
                   </div>
                </div>
            </div>
        </div>
    </section>
    <section id="capture">
    @include('partials.capture')
                    </section>
</main>
@endsection