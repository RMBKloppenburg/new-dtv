@extends("Backend.Layout")

@section("content")
		<div class="templatemo-content-container">
            <table class="table table-striped table-bordered templatemo-user-table">
                <a href="{{route('createtoernooi')}}" class="btn btn-success">Create Toernooi</a>
                <thead>
                <tr>
                    <td><a href="" class="white-text templatemo-sort-by">ID <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">beschrijving <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">maxspelers <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">toernooidatum <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">toernooieinddatum <span class="caret"></span></a></td>
                </tr>
                </thead>
                <tbody>
            @foreach($toernoois as $toernooi)
                <tr>
                    <td>{{$toernooi->id}}</td>
                    <td>{{$toernooi->beschrijving}}</td>
                    <td>{{$toernooi->maxspelers}}</td>
                    <td>{{$toernooi->toernooidatum}}</td>
                    <td>{{$toernooi->toernooieinddatum}}</td>
                </tr>
            @endforeach



		</div>


@endsection
