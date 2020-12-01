
<div>
    @if (Route::has('login'))
        <div>
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
<div/>
    @extends('layouts.frontlayout')

    @section('content')
        <div id="video-container">
            <div class="video-overlay"></div>
            <div class="video-content">
                <div class="inner">
                    <h1>Welcome to <em>DTV</em></h1>
                    <p>Doetinchemse tennis vereniging</p>
                    <div class="scroll-icon">
                        <a class="scrollTo" data-scrollTo="portfolio" href="#"><img
                                src="FrontEndassets/img/scroll-icon.png"
                                alt=""></a>
                    </div>
                </div>
            </div>
            <video autoplay="" loop="" muted>
                <source src="FrontEndAssets/tennis.mp4" type="video/mp4"/>
            </video>
        </div>


        <div class="full-screen-portfolio" id="portfolio">
            <div class="container-fluid">
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <a href="FrontEndassets/img/big_portfolio_item_4.png" data-lightbox="image-1">
                            <div class="thumb">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <h1>Biodiesel <em>squid</em></h1>
                                        <p>Awesome Subtittle Goes Here</p>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="FrontEndassets/img/portfolio_item_4.png">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <a href="FrontEndassets/img/big_portfolio_item_2.png" data-lightbox="image-1">
                            <div class="thumb">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <h1>raclette <em>taxidermy</em></h1>
                                        <p>Awesome Subtittle Goes Here</p>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="FrontEndassets/img/portfolio_item_2.png">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <a href="FrontEndassets/img/big_portfolio_item_3.png" data-lightbox="image-1">
                            <div class="thumb">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <h1>humblebrag <em>brunch</em></h1>
                                        <p>Awesome Subtittle Goes Here</p>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="FrontEndassets/img/portfolio_item_3.png">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <a href="FrontEndassets/img/big_portfolio_item_1.png" data-lightbox="image-1">
                            <div class="thumb">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <h1>Succulents <em>chambray</em></h1>
                                        <p>Awesome Subtittle Goes Here</p>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="FrontEndassets/img/portfolio_item_1.png">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <a href="FrontEndassets/img/big_portfolio_item_5.png" data-lightbox="image-1">
                            <div class="thumb">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <h1>freegan <em>aesthetic</em></h1>
                                        <p>Awesome Subtittle Goes Here</p>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="FrontEndassets/img/portfolio_item_5.png">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <a href="FrontEndassets/img/big_portfolio_item_6.png" data-lightbox="image-1">
                            <div class="thumb">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <h1>taiyaki <em>vegan</em></h1>
                                        <p>Awesome Subtittle Goes Here</p>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="FrontEndassets/img/portfolio_item_6.png">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <a href="FrontEndassets/img/big_portfolio_item_7.png" data-lightbox="image-1">
                            <div class="thumb">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <h1>Thundercats <em>santo</em></h1>
                                        <p>Awesome Subtittle Goes Here</p>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="FrontEndassets/img/portfolio_item_7.png">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <a href="FrontEndassets/img/big_portfolio_item_8.png" data-lightbox="image-1">
                            <div class="thumb">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <h1>wayfarers <em>yuccie</em></h1>
                                        <p>Awesome Subtittle Goes Here</p>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="FrontEndassets/img/portfolio_item_8.png">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <a href="FrontEndassets/img/big_portfolio_item_9.png" data-lightbox="image-1">
                            <div class="thumb">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <h1>disrupt <em>street</em></h1>
                                        <p>Awesome Subtittle Goes Here</p>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="FrontEndassets/img/portfolio_item_9.png">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
@endsection
