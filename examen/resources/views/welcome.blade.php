    @extends('layouts.frontlayout')

    @section('content')
{{--        mp4 playing--}}
        <div id="video-container">
            <div class="video-overlay"></div>
            <div class="video-content">
                <div class="inner">
                    <h1>Welcome to <em>DTV</em></h1>
                    <p>Doetinchemse tennis vereniging</p>
                </div>
            </div>
            <video autoplay="" loop="" muted>
                <source src="FrontEndAssets/tennis.mp4" type="video/mp4"/>
            </video>
        </div>
@endsection
