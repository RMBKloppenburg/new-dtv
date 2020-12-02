@extends("Backend.Layout")

@section("content")
    <div class="templatemo-content-container">
        <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
                <table class="table table-striped table-bordered templatemo-user-table">
                    <h2>.Tennis banen.</h2>
                    <thead>

                    <tr>
                        <td><a href="" class="white-text templatemo-sort-by"># <span class="caret"></span></a></td>
                        <td><a href="" class="white-text templatemo-sort-by">Afmetingen <span class="caret"></span></a>
                        </td>
                        <td><a href="" class="white-text templatemo-sort-by">vloer <span class="caret"></span></a>
                        </td>
                        <td><a href="" class="white-text templatemo-sort-by">Check datum <span class="caret"></span></a>
                        </td>
                        <td><a href="" class="white-text templatemo-sort-by">Email <span class="caret"></span></a></td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>

                    </thead>
                    <tbody>
                    @foreach($baans as $baantype)
                    <tr>
                        <td>{{$baantype->id}} <span class="caret"></span></td>
                        <td>{{$baantype->afmetingen}} <span class="caret"></span></td>
                        <td>{{$baantype->vloer}} <span class="caret"></span></td>
                        <td>{{$baantype->checkdatum}} <span class="caret"></span></td>
                        <td>{{$baantype->servicedatum}}<span class="caret"></span></td>


                        <td><a href="" class="templatemo-edit-btn">Edit</a></td>
                        <td><a href="" class="templatemo-link">Delete</a></td>
                    </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script type="text/javascript" src="BackEndassets/js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="BackEndassets/js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script>
        $(document).ready(function ()
        {
            // Content widget with background image
            var imageUrl = $('img.content-bg-img').attr('src');
            $('.templatemo-content-img-bg').css('background-image', 'url(' + imageUrl + ')');
            $('img.content-bg-img').hide();
        });
    </script>
    </body>
    </html>

@endsection
