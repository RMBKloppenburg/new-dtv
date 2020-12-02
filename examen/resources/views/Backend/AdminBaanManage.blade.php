@extends("Backend.Layout")

@section("content")
    <div class="templatemo-content-container">
        <h2>Tennis banen.</h2>
        <br>
        <a href="{{route('createbaan')}}" class="btn btn-success">Create baan</a>
        <div class="templatemo-content-widget no-padding">

            <div class="panel panel-default table-responsive">
                <table class="table table-striped table-bordered templatemo-user-table">
                    <thead>
                    <tr>
                        <td>id</td>
                        <td>Afmetingen
                        <td>vloer
                        <td>Check datum</td>
                        <td>service datum</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($baans as $baantype)
                        <tr>
                            <td>{{$baantype->id}} </td>
                            <td>{{$baantype->afmetingen}} </td>
                            <td>{{$baantype->vloer}} </td>
                            <td>{{$baantype->checkdatum}} </td>
                            <td>{{$baantype->servicedatum}}</td>
                            <td><a href="" class="templatemo-edit-btn">Edit</a></td>
                            <td><a href="" class="templatemo-link">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
