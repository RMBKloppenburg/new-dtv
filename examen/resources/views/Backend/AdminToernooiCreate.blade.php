@extends("Backend.Layout")

@section("content")

    <div class="templatemo-content-container">
        <div class="panel panel-default margin-10">
            <div class="panel-heading"><h2 class="text-uppercase">Create toernooi</h2></div>
            <div class="panel-body">

                {{--                register form--}}
                <form method="POST" action="{{route('createposttoernooi')}}" class="templatemo-login-form">
                    @csrf

                    <div class="form-group">
                        <label >Beschrijving</label>
                        <input type="text"  name="beschrijving" class="form-control" placeholder="lente-Toernooi">
                    </div>

                    <div class="form-group">
                        <label >Max spelers</label>
                        <input type="text" name="maxspelers" class="form-control" placeholder="32">
                    </div>

                    <div class="form-group">
                        <label>Toernooi datum</label>
                        <input type="date" name="toernooidatum" class="form-control" placeholder="dd-mm-yyyy">
                    </div>

                    <div class="form-group">
                        <label>Toernooi einddatum</label>
                        <input type="date" name="toernooieinddatum" class="form-control" placeholder="dd-mm-yyyy">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="templatemo-blue-button">Toevoegen</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
