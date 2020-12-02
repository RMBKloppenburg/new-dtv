@extends("Backend.Layout")

@section("content")

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="templatemo-content-container">
        <div class="panel panel-default margin-10">
            <div class="panel-heading"><h2 class="text-uppercase">Create baan</h2></div>
            <div class="panel-body">

                {{--                register form--}}
                <form method="POST" action="createpostbaan" class="templatemo-login-form">
{{--                    afmetingen--}}
                    <div class="form-group">
                        <label >Afmetingen</label>
                        <input type="text" class="form-control" placeholder="255x300">
                    </div>
{{--                    vloer naam--}}
                    <div class="form-group">
                        <label >Vloer naam</label>
                        <input type="text" class="form-control" placeholder="b2">
                    </div>
{{--                    check datum--}}
                    <div class="form-group">
                        <label>Check datum</label>
                        <input type="date" class="form-control" placeholder="dd-mm-yyyy">
                    </div>
{{--                    service datum--}}
                    <div class="form-group">
                        <label>Service datum</label>
                        <input type="date" class="form-control" placeholder="dd-mm-yyyy">
                    </div>


                    <div class="form-group">
                        <button type="submit" class="templatemo-blue-button">Toevoegen</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
