@extends("Backend.Layout")

@section("content")
		<div class="templatemo-content-container">
            <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                <tr>
                    <td><a href="" class="white-text templatemo-sort-by">ID <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">naam <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">email <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">wachtwoord <span class="caret"></span></a></td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                </thead>
                <tbody>
            @foreach($users as $leden)
                <tr>
                    <td>{{$leden->id}}</td>
                    <td>{{$leden->name}}</td>
                    <td>{{$leden->email}}</td>
                    <td>{{$leden->password}}</td>
                    <td>
                        <a href="{{route("useredit",[$leden->id])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route("userdelete",[$leden->id])}}">@csrf @method('DELETE')<button class="button is-link" type="submit">Delete</button></form></td>
                    </td>
                </tr>
            @endforeach



		</div>


		@endsection
