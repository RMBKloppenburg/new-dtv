@extends('layouts.app')
@section('content')


<div class="page-heading">
    <div class="container">
        <div class="heading-content">
            <h1>Over <em>ons</em></h1>
        </div>
    </div>
</div>


<div class="more-about-us">
    <div class="container">
        <div class="col-md-5 col-md-offset-7">
            <div class="content">
                <h2>Kantine</h2>
				<table class="table table-striped table-bordered templatemo-user-table">
					<thead>
					<tr>
						<td><a href="" class="white-text templatemo-sort-by">Product <span class="caret"></span></a></td>
						<td><a href="" class="white-text templatemo-sort-by">Prijs <span class="caret"></span></a></td>
						<td><a href="" class="white-text templatemo-sort-by">Soort <span class="caret"></span></a></td>
					</tr>
					</thead>
					<tbody>
					<!-- Hier komt een foreach voor elk veld in de database -->
					@foreach($kantine as $product)
						<tr>
							<!-- Hier wordt elk product gegeven -->
							<td>{{$product->naam}}</td>
							<td>{{$product->prijs}}</td>
                            @if($product->soort == 1)
                                <td>Snack</td>
                            @elseif($product->soort == 2)
                                <td>Drank</td>
                            @else
                                <td>Onbekend</td>
                            @endif
						</tr>
					@endforeach
					</tbody>
				</table>
                <div class="simple-btn">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal button -->
<div class="popup-icon">
    <button id="modBtn" class="modal-btn"><img src="FrontEndassets/img/contact-icon.png" alt=""></button>
</div>

<!-- Modal -->
<div id="modal" class="modal">
    <!-- Modal Content -->
    <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h3 class="header-title">Heb je een vraag <em>Mail ons</em></h3>
            <div class="close-btn"><img src="FrontEndassets/img/close_contact.png" alt=""></div>
        </div>
        <!-- Modal Body -->
        <div class="modal-body">
            <div class="col-md-6 col-md-offset-3">
                <form id="contact" action="" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <fieldset>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                            </fieldset>
                        </div>
                        <div class="col-md-12">
                            <fieldset>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                            </fieldset>
                        </div>
                        <div class="col-md-12">
                            <fieldset>
                                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                            </fieldset>
                        </div>
                        <div class="col-md-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="btn">Send Message Now</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
