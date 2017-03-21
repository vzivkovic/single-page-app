<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>This is a free one page portfolio website template created by E Pick web Design with Zurbs Foundation
        Framework.</title>

    <!-- Bootstrap -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    <link href="{{ mix('/css/public.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="foundation-icons/foundation-icons.css"/>

</head>

<body>
<div id="top"></div>
<div class="contain-to-grid fixed">
    <nav class="top-bar" data-topbar>
        <ul class="title-area">
            <li class="name">
                <h1>
                    <a href="#">Site name</a>
                </h1>
            </li>
            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar menu-icon">
                <a href="#">
                    <span></span>
                </a>
            </li>
        </ul>
        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul id="nav" class="right">
                <li>
                    <a href="#top">Home</a>
                </li>

                <li>
                    <a href="#about">About</a>
                </li>
                <li>
                    <a href="#portfolio">Portfolio</a>
                </li>
                <li>
                    <a href="#contact">Contact Us</a>
                </li>
                <li class="social"><a href="http://facebook.com/epickwebdesign"><i class="fi-social-facebook"></i></a>
                </li>
                <li class="social"><a href="http://twitter.com/epickwebdesign"><i class="fi-social-twitter"></i></a>
                </li>
                <li class="social"><a href="http://epickwebdesign.com"><i class="fi-social-pinterest"></i></a></li>
            </ul>

        </section>
    </nav>
</div>
{{--    <section class="jumbo">
        <div class="row">
            <div class="large-12 columns">
                <h1>We Love Great Design</h1>
                <p class="text-center">
                    <a href="http://epickwebdesign.com" class="medium button radius">Check Us Out!</a>
                </p>

            </div>
        </div>
    </section>--}}

<section id="about">
    <div class="row">
        <div class="small-12 large-12 columns">
            <div class="text-center">
                @if($welcome)
                    <h2>{{ $welcome->title }}</h2>
                    <p>{{ $welcome->body }}</p>
                @endif
            </div>
            <div>
                <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
                    <li>
                        <img src="img/image1.jpg" alt="image1"/>
                        <h3 class="text-center">Heading 1</h3>
                        <p>Phasellus facilisis, nunc in lacinia auctor, eros lacus aliquet velit, quis lobortis risus
                            nunc nec nisi. Maecenas et turpis vitae velit volutpat porttitor a sit amet est. Uthasellus
                            facilisis, nunc in lacinia auctor, eros lacus aliquet velit, quis lobortis risus nunc
                            nec.</p>
                    </li>
                    <li>
                        <img src="img/image2.jpg" alt="image2"/>
                        <h3 class="text-center">Heading 2</h3>
                        <p>Phasellus facilisis, nunc in lacinia auctor, eros lacus aliquet velit, quis lobortis risus
                            nunc nec nisi. Maecenas et turpis vitae velit volutpat porttitor a sit amet est. Uthasellus
                            facilisis, nunc in lacinia auctor, eros lacus aliquet velit, quis lobortis risus nunc
                            nec.</p>
                    </li>
                    <li>
                        <img src="img/image3.jpg" alt="image3"/>
                        <h3 class="text-center">Heading 3</h3>
                        <p>Phasellus facilisis, nunc in lacinia auctor, eros lacus aliquet velit, quis lobortis risus
                            nunc nec nisi. Maecenas et turpis vitae velit volutpat porttitor a sit amet est. Uthasellus
                            facilisis, nunc in lacinia auctor, eros lacus aliquet velit, quis lobortis risus nunc
                            nec.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="portfolio">
    <div class="row">
        <div class="large-12 columns">
            <h2>Our Recent Work</h2>
            <h4 class="text-center">Some of the best work we have done.</h4>
            <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-4">
                @if($images)
                @foreach($images as $image)
                    @if (Storage::disk('local')->exists( $image->image ))
                        <li>
                            <img class="th" src="{{ route('images.get', $image) }}" alt="image1"/>
                        </li>
                    @endif
                @endforeach
                    @endif
            </ul>
        </div>
    </div>
</section>

<footer>
    <div id="contact">
        <div class="row">
            <div class="large-12 columns">

                <div>
                    <ul class="small-block-grid-1 large-block-grid-4">
                        <li>
                            <h3>Heading 1</h3>
                            <p>Phasellus facilisis, nunc in lacinia auctor, eros lacus aliquet velit, quis lobortis
                                risus nunc nec nisi. Maecenas et turpis vitae velit volutpat porttitor a sit amet est.
                                Uthasellus facilisis, nunc in lacinia auctor, eros lacus aliquet velit, quis lobortis
                                risus nunc nec nisi.</p>
                        </li>
                        <li>
                            <h3>Heading 2</h3>
                            <p>Phasellus facilisis, nunc in lacinia auctor, eros lacus aliquet velit, quis lobortis
                                risus nunc nec nisi. Maecenas et turpis vitae velit volutpat porttitor a sit amet est.
                                Uthasellus facilisis, nunc in lacinia auctor, eros lacus aliquet velit, quis lobortis
                                risus nunc nec nisi.</p>
                        </li>
                        <li>
                            <h3>Heading 3</h3>
                            <p>Phasellus facilisis, nunc in lacinia auctor, eros lacus aliquet velit, quis lobortis
                                risus nunc nec nisi. Maecenas et turpis vitae velit volutpat porttitor a sit amet est.
                                Uthasellus facilisis, nunc in lacinia auctor, eros lacus aliquet velit, quis lobortis
                                risus nunc nec nisi.</p>
                        </li>
                        @if($contact)
                        <li>
                            <h3>Contact Us</h3>
                            <ul>
                                <li>
                                    <i class="fi-telephone"></i> &nbsp; {{ $contact->phone }}
                                </li>
                                <li>
                                    <i class="fi-home"></i> &nbsp; {{ $contact->address }}
                                </li>
                                <li>
                                    <i class="fi-mail"></i> <a
                                            href="mailto:info@yourdomain.com"> &nbsp; {{ $contact->email }}</a>
                                </li>
                                <li>
                                    <i class="fi-clock"></i> &nbsp; {{ $contact->worktime }}
                                </li>
                            </ul>
                            <img src="img/map.png" alt="map"/>
                        </li>
                            @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copy">
        <div class="row">
            <div class="large-12 columns">
                <div class="large-4 pull-1 columns text-center">
                    <p>&copy; Copyright Your Name here.</p>
                </div>
                <div class="large-7 push-2 columns text-center">
                    <!-- Please Leave this link out of respect for the designer -->
                    <p>Designed By:
                        <a href="http://epickwebdesign.com">E Pick Web Design</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/js/app.js"></script>

<script src="/js/public.js"></script>
<script>
    $(document).foundation();
</script>
<script>
    $(function () {
        $('a[href*=#]:not([href=#])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>
</body>

</html>