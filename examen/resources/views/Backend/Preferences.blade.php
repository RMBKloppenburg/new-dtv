@extends("Backend.Layout")

@section("content")

		<div class="templatemo-content-container">
			<div class="templatemo-content-widget white-bg">
				<h2 class="margin-bottom-10">Preferences</h2>
				<p>Here goes another form and form controls.</p>
				<form action="index.html" class="templatemo-login-form" method="post" enctype="multipart/form-data">
					<div class="row form-group">
						<div class="col-lg-6 col-md-6 form-group">
							<label for="inputFirstName">First Name</label>
							<input type="text" class="form-control" id="inputFirstName" placeholder="John">
						</div>
						<div class="col-lg-6 col-md-6 form-group">
							<label for="inputLastName">Last Name</label>
							<input type="text" class="form-control" id="inputLastName" placeholder="Smith">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-lg-6 col-md-6 form-group">
							<label for="inputUsername">Username</label>
							<input type="text" class="form-control" id="inputUsername" placeholder="Admin">
						</div>
						<div class="col-lg-6 col-md-6 form-group">
							<label for="inputEmail">Email</label>
							<input type="email" class="form-control" id="inputEmail" placeholder="admin@company.com">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-lg-6 col-md-6 form-group">
							<label for="inputCurrentPassword">Current Password</label>
							<input type="password" class="form-control highlight" id="inputCurrentPassword" placeholder="*********************">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-lg-6 col-md-6 form-group">
							<label for="inputNewPassword">New Password</label>
							<input type="password" class="form-control" id="inputNewPassword">
						</div>
						<div class="col-lg-6 col-md-6 form-group">
							<label for="inputConfirmNewPassword">Confirm New Password</label>
							<input type="password" class="form-control" id="inputConfirmNewPassword">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-lg-12 has-success form-group">
							<label class="control-label" for="inputWithSuccess">Input with success</label>
							<input type="text" class="form-control" id="inputWithSuccess">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-lg-12 has-warning form-group">
							<label class="control-label" for="inputWithWarning">Input with warning</label>
							<input type="text" class="form-control" id="inputWithWarning">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-lg-12 has-error form-group">
							<label class="control-label" for="inputWithError">Input with error</label>
							<input type="text" class="form-control" id="inputWithError">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-lg-12 form-group">
							<label class="control-label" for="inputNote">Note</label>
							<textarea class="form-control" id="inputNote" rows="3"></textarea>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-lg-6 col-md-6 form-group">
							<label class="control-label templatemo-block">Single Selection Control</label>
							<select class="form-control">
								<option value="html">HTML</option>
								<option value="plain">Plain Text</option>
							</select>
						</div>
						<div class="col-lg-6 col-md-6 form-group">
							<div class="templatemo-block margin-bottom-5">
								<input type="checkbox" name="emailOptions" id="c1" value="new" checked>
								<label for="c1" class="font-weight-400"><span></span>Email me when new member sign up.</label>
							</div>
							<div class="templatemo-block margin-bottom-5">
								<input type="checkbox" name="emailOptions" id="c2" value="weekly">
								<label for="c2" class="font-weight-400"><span></span>Weekly summary email</label>
							</div>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-lg-6 col-md-6 form-group">
							<label class="control-label templatemo-block">Multiple Selection Control</label>
							<select multiple class="templatemo-multi-select form-control" style="overflow-y: scroll;">
								<option value="">Charts</option>
								<option value="">Graphs</option>
								<option value="">Icons</option>
								<option value="">Repsonsive</option>
								<option value="">HTML5</option>
								<option value="">CSS3</option>
								<option value="">jQuery</option>
							</select>
						</div>
						<div class="col-lg-6 col-md-6 form-group">
							<div>
								<label class="control-label templatemo-block">Email Option</label>
								<div class="templatemo-block margin-bottom-5">
									<input type="radio" name="emailOptions" id="r1" value="html" checked>
									<label for="r1" class="font-weight-400"><span></span>HTML Format</label>
								</div>
								<div class="templatemo-block margin-bottom-5">
									<input type="radio" name="emailOptions" id="r2" value="plain">
									<label for="r2" class="font-weight-400"><span></span>Plain Text</label>
								</div>
								<div class="templatemo-block margin-bottom-5">
									<input type="radio" name="emailOptions" id="r3" value="rich">
									<label for="r3" class="font-weight-400"><span></span>Rich Text</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-lg-12 form-group">
							<div class="margin-right-15 templatemo-inline-block">
								<input type="checkbox" name="server" id="c3" value="" checked>
								<label for="c3" class="font-weight-400"><span></span>Server Status</label>
							</div>
							<div class="margin-right-15 templatemo-inline-block">
								<input type="checkbox" name="member" id="c4" value="">
								<label for="c4" class="font-weight-400"><span></span>Member Status</label>
							</div>
							<div class="margin-right-15 templatemo-inline-block">
								<input type="checkbox" name="expired" id="c5" value="">
								<label for="c5" class="font-weight-400"><span></span>Expired Members</label>
							</div>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-lg-12 form-group">
							<div class="margin-right-15 templatemo-inline-block">
								<input type="radio" name="radio" id="r4" value="">
								<label for="r4" class="font-weight-400"><span></span>Bootstrap</label>
							</div>
							<div class="margin-right-15 templatemo-inline-block">
								<input type="radio" name="radio" id="r5" value="" checked>
								<label for="r5" class="font-weight-400"><span></span>Foundation</label>
							</div>
							<div class="margin-right-15 templatemo-inline-block">
								<input type="radio" name="radio" id="r6" value="">
								<label for="r6" class="font-weight-400"><span></span>Skeleton</label>
							</div>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-lg-12">
							<label class="control-label templatemo-block">File Input</label>
							<!-- <input type="file" name="fileToUpload" id="fileToUpload" class="margin-bottom-10"> -->
							<input type="file" name="fileToUpload" id="fileToUpload" class="filestyle" data-buttonName="btn-primary" data-buttonBefore="true" data-icon="false">
							<p>Maximum upload size is 5 MB.</p>
						</div>
					</div>
					<div class="form-group text-right">
						<button type="submit" class="templatemo-blue-button">Update</button>
						<button type="reset" class="templatemo-white-button">Reset</button>
					</div>
				</form>
			</div>
			<footer class="text-right">
				<p>Copyright &copy; 2084 Company Name
					| Design: Template Mo</p>
			</footer>
		</div>
	</div>
</div>

<!-- JS -->
<script type="text/javascript" src="BackEndassets/js/jquery-1.11.2.min.js"></script>        <!-- jQuery -->
<script type="text/javascript" src="BackEndassets/js/bootstrap-filestyle.min.js"></script>  <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
<script type="text/javascript" src="BackEndassets/js/templatemo-script.js"></script>        <!-- Templatemo Script -->
</body>
</html>
@endsection
