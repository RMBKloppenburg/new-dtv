@extends("Backend.Layout")

@section("content")

	<form method="post" action="{{ route('updatekantine', [$kantine->id]) }}">
		@csrf
		@method("put")
		<label>Product</label> <br>
		<input type="text" id="naam" name="naam" value="{{$kantine->naam}}"> <br>
		<label>Catogorie</label> <br>
		<input type="text" id="catogorie" name="catogorie" value="{{$kantine->catogorie}}"> <br>
        <!--<label>Bedrijf</label> <br>
        <input type="text" id="bedrijf" name="bedrijf" value="{$kantine->bedrijf}"> <br>-->

		<label>Prijs</label> <br>
		<input type="text" id="prijs" name="prijs" value="{{$kantine->prijs}}"> <br>
		<label>Soort</label> <br>
        <select id="soort" name="soort">
            @if($kantine->soort == 1)
                <option value="1" selected>Snack</option>
                <option value="2">Drank</option>
            @elseif($kantine->soort == 2)
                <option value="1">Snack</option>
                <option value="2" selected>Drank</option>
            @else
                <option value="1" selected>Snack</option>
                <option value="2">Drank</option>
            @endif

        </select>
        <br>
        <br>
		<label>Hoeveelheid</label> <br>
		<input type="number" id="hoeveelheid" name="hoeveelheid" value="{{$kantine->hoeveelheid}}"> <br>
		<br>
		<input type="submit" value="Submit">

	</form>

	<!-- JS -->
	<script type="text/javascript" src="BackEndassets/js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
	<script type="text/javascript" src="BackEndassets/js/templatemo-script.js"></script>      <!-- Templatemo Script -->
	<script>
		$(document).ready(function(){
			// Content widget with background image
			var imageUrl = $('img.content-bg-img').attr('src');
			$('.templatemo-content-img-bg').css('background-image', 'url(' + imageUrl + ')');
			$('img.content-bg-img').hide();
		});
	</script>
	</body>
	</html>

@endsection
