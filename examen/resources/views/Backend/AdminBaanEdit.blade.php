@extends("Backend.Layout")

@section("content")
    <div class="templatemo-content-container">
        <div class="panel panel-default margin-10">
            <div class="panel-heading"><h2 class="text-uppercase">Edit baan</h2></div>
            <div class="panel-body">

                {{--                register form--}}
                <form method="POST" action="{{route('editpostbaan',[$banen->id])}}" class="templatemo-login-form">
                    @csrf
{{--                    afmetingen--}}
                    <div class="form-group">
                        <label >Afmetingen</label>
                        <input type="text"  value="{{$banen->afmetingen}}" name="afmetingen" class="form-control ">
                    </div>
{{--                    vloer naam--}}
                    <div class="form-group">
                        <label >Vloer naam</label>
                        <input type="text" value="{{$banen->vloer}}" name="vloer" class="form-control ">
                    </div>
{{--                    check datum--}}
                    <div class="form-group">
                        <label>Check datum</label>
                        <input type="date" value="{{$banen->checkdatum}}" name="checkdatum" class="form-control ">
                    </div>
{{--                    service datum--}}
                    <div class="form-group">
                        <label>Service datum</label>
                        <input type="date" value="{{$banen->servicedatum}}" name="servicedatum" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="templatemo-blue-button">Opslaan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
