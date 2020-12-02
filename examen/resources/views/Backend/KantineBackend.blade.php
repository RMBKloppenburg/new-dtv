@extends("Backend.Layout")

@section("content")
		<div class="templatemo-content-container">
			<div class="templatemo-content-widget no-padding">
				<div class="form-group">
					<a href="{{ route('createkantine') }}" class="templatemo-blue-button">Maak een nieuw product aan</a>
				</div>
				<div class="panel panel-default table-responsive">

					<table class="table table-striped table-bordered templatemo-user-table">
						<thead>
						<tr>
							<td><a href="" class="white-text templatemo-sort-by">ID <span class="caret"></span></a></td>
							<td><a href="" class="white-text templatemo-sort-by">Product <span class="caret"></span></a></td>
							<td><a href="" class="white-text templatemo-sort-by">Catogorie <span class="caret"></span></a></td>
							<td><a href="" class="white-text templatemo-sort-by">Bedrijf <span class="caret"></span></a></td>
							<td><a href="" class="white-text templatemo-sort-by">Prijs <span class="caret"></span></a></td>
							<td><a href="" class="white-text templatemo-sort-by">Soort <span class="caret"></span></a></td>
							<td><a href="" class="white-text templatemo-sort-by">Hoeveelheid <span class="caret"></span></a></td>
							<td>Edit</td>
							<td>Delete</td>
						</tr>
						</thead>
						<tbody>
						<!-- Hier komt een foreach voor elk veld in de database -->
						@foreach($kantine as $product)
							<tr>
								<!-- Hier wordt elk product gegeven -->
								<td>{{$product->id}}</td>
								<td>{{$product->naam}}</td>
								<td>{{$product->catogorie}}</td>
								<td>{{$product->bedrijf}}</td>
								<td>{{$product->prijs}}</td>
                                @if($product->soort == 1)
                                    <td>Snack</td>
                                @elseif($product->soort == 2)
                                    <td>Drank</td>
                                @else
                                    <td>Onbekend</td>
                                @endif
								<td>{{$product->hoeveelheid}}</td>
								<td><a href="{{ route('editkantine', [$product->id]) }}" class="templatemo-edit-btn">Edit</a></td>
								<td>
									<form method="POST" action="{{route('deleteKantine', [$product->id])}}">
										@csrf @method('DELETE')
										<button class="templatemo-link">Delete</button>
									</form>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>

	</div>
</div>

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
