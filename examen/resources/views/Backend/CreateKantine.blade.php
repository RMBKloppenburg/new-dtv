@extends("Backend.Layout")

@section("content")

	<form method="POST" action="{{ route('storekantine') }}">
		@csrf
		<label>Product</label> <br>
		<input type="text" id="naam" name="naam"> <br>
		<label>Catogorie</label> <br>
		<input type="text" id="catogorie" name="catogorie"> <br>
		<!--<label>Bedrijf</label> <br>
		<input type="text" id="bedrijf" name="bedrijf"> <br>-->
		<label>Prijs</label> <br>
		<input type="text" id="prijs" name="prijs"> <br>
		<label>Soort</label> <br>
		<select id="soort" name="soort">
            <option value="1">Snack</option>
            <option value="2">Drank</option>
        </select>
        <br>
        <br>
		<label>Hoeveelheid</label> <br>
		<input type="number" id="hoeveelheid" name="hoeveelheid"> <br>
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
