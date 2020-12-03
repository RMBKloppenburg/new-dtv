@extends("Backend.Layout")
@section('content')

    <div id="wrapper">
        <h1>edit User</h1>

        <form method="post" action="{{route('userpostedit',[$users->id])}}">
            @csrf
            @method('PUT')
            <div class="field">
                <label class="label" for="title">Name</label>

                <div class="control">
                    <input class="input" type="text" name="name" id="Name" value="{{$users->name}}">
                </div>

                <div class="field">
                    <label class="label" for="excerpt">email</label>

                    <div class="control">
                        <input class="input" name="email" id="email"  value="{{$users->email }}" >
                    </div>

                        <div class="field is-grouped">
                            <div class="control">
                                <button class="button is-link" type="submit">submit</button>
                            </div>
                            <div class="control">
                                <button class="button is-text" >cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </form>


    </div>
@endsection
