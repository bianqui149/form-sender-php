<?php
//require_once __DIR__ . '/vendor/autoload.php';

//$mpdf = new \Mpdf\Mpdf();
//$mpdf->WriteHTML('<h1>Hello world!</h1>');
//$mpdf->Output();
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Template form</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
	<div class="container">
		<form method="POST" action="proccess-form.php" id="contactform">
			<div id="accordion">
				<div class="row">
					<div class="col-lg-12">
						<div class="text-center">
							<h3>Registration Form</h3>
						</div>
					</div>
				</div>
				<div class="card card-default">
					<div class="card-header">
						<h4 class="card-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
								<i class="glyphicon glyphicon-search text-gold"></i>
								<b>SECTION I: TO BE COMPLETED BY APPLICANT</b>
							</a>
						</h4>
					</div>
					<div id="collapse1" class="collapse show">
						<div class="card-body">
							<div class="row">
								<div class="col-md-3 col-lg-4">
									<div class="form-group">
										<label class="control-label">Last Name</label>
										<input type="text" class="form-control" />
									</div>
								</div>
								<div class="col-md-1 col-lg-4">
									<div class="form-group">
										<label class="control-label">First Name</label>
										<input type="text" class="form-control" />
									</div>
								</div>
								<div class="col-md-1 col-lg-1">
									<div class="form-group">
										<label class="control-label">Middle.I</label>
										<input class="form-control" type="text" />
									</div>
								</div>

								<div class="col-md-2 col-lg-3">
									<div class="form-group">
										<label class="control-label">Date Of Birth</label>
										<div class="input-group date">
											<input class="form-control" type="text" />
											<span class="input-group-append">
												<button class="btn btn-outline-secondary" type="button">
													<i class="fa fa-calendar"></i>
												</button></span>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-4 col-lg-4">
									<div class="form-group">
										<label class="control-label">Mailing Address</label>
										<input type="text" class="form-control" />
									</div>
								</div>
								<div class="col-md-2 col-lg-3">
									<div class="form-group">
										<label class="control-label">City</label>
										<input type="text" class="form-control" />
									</div>
								</div>

								<div class="col-md-3 col-lg-3">
									<div class="form-group">
										<label class="control-label">State</label>
										<input type="text" class="form-control" />
									</div>
								</div>

								<div class="col-md-3 col-lg-2">
									<div class="form-group">
										<label class="control-label">Zip Code</label>
										<input type="text" class="form-control" />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-3 col-lg-12">
									<div class="form-group">
										<label class="control-label">High School College/Name</label>
										<input type="text" class="form-control" />
									</div>
								</div>
							</div>
						</div>`
					</div>
				</div>
				<div class="card card-default">
					<div class="card-header">
						<h4 class="card-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
								<i class="glyphicon glyphicon-lock text-gold"></i>
								<b>SECTION II: TO BE COMPLETED BY TEACHER OR INSTRUCTOR</b>
							</a>
						</h4>
					</div>
					<div id="collapse2" class="collapse show">
						<div class="card-body">
							<div class="row">
								<div class="col-lg-12">
									<p>As a part of the admissions process at the University of University Name School of the Arts, all applicants are asked to submit this recommendation form. We appreciate any comments and evaluations that you would like to offer about this candidate. Feel free to attach comments or descriptions. A prompt reply is requested.</p>
								</div>
							</div>

							<div class="row">
								<div class="col-md-3 col-lg-4">
									<div class="form-group">
										<label class="control-label">Last Name</label>
										<input type="text" class="form-control" />
									</div>
								</div>

								<div class="col-md-4 col-lg-4">
									<div class="form-group">
										<label class="control-label">first</label>
										<input type="text" class="form-control" />
									</div>
								</div>

								<div class="col-md-3 col-lg-4">
									<div class="form-group">
										<label class="control-label">Middle</label>
										<input type="text" class="form-control" />
									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-md-2 col-lg-3">
									<div class="form-group">
										<label class="control-label">Position</label>
										<input type="text" class="form-control" />
									</div>
								</div>

								<div class="col-md-3 col-lg-3">
									<div class="form-group">
										<label class="control-label">Department</label>
										<input type="text" class="form-control" />
									</div>
								</div>

								<div class="col-md-4 col-lg-6">
									<div class="form-group">
										<label class="control-label">School/Organization</label>
										<input type="text" class="form-control" />
									</div>
								</div>


							</div>

							<div class="row">
								<div class="col-md-3 col-lg-4">
									<div class="form-group">
										<label class="control-label">School/Organization Address</label>
										<input type="text" class="form-control" />
									</div>
								</div>
								<div class="col-md-5 col-lg-3">
									<div class="form-group">
										<label class="control-label">City</label>
										<input type="text" class="form-control" />
									</div>
								</div>
								<div class="col-md-4 col-lg-3">
									<div class="form-group">
										<label class="control-label">State</label>
										<input type="text" class="form-control" />
									</div>
								</div>
								<div class="col-md-4 col-lg-2">
									<div class="form-group">
										<label class="control-label">Zip Code</label>
										<input type="text" class="form-control" />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-4 col-lg-5">
									<div class="form-group">
										<label class="control-label">Contact Information:(Phone Number)</label>
										<input type="text" class="phone form-control" />
									</div>
								</div>

								<div class="col-md-4 col-lg-3">
									<div class="form-group">
										<label class="control-label">Fax Number</label>
										<input type="text" class="form-control" />
									</div>
								</div>

								<div class="col-md-4 col-lg-4">
									<label class="control-label">Email</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
										<input type="text" class="form-control" />
									</div>
								</div>
							</div>


							<div class="row">
								<div class="col-lg-12">
									<label class="control-label">Please mark the appropriate box that best describes this candidate:</label>

									<table class="table table-primary">
										<thead>
											<tr>
												<th>

												</th>
												<th>
													EXCELLENT
												</th>
												<th>
													GOOD
												</th>

												<th>
													AVERAGE
												</th>

												<th>
													BELOW AVERAGE
												</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													Academic Background
												</td>
												<td>
													<label class="control-label">
														<input type="checkbox">
													</label>
												</td>
												<td>
													<label class="control-label">
														<input type="checkbox">
													</label>
												</td>
												<td>
													<label class="control-label">
														<input type="checkbox">
													</label>
												</td>
												<td>
													<label class="control-label">
														<input type="checkbox">
													</label>
												</td>
											</tr>
											<tr>
												<td>
													Artistic Skill
												</td>
												<td>
													<input type="checkbox">
												</td>
												<td>
													<label class="control-label">
														<input type="checkbox">
													</label>
												</td>
												<td>
													<label class="control-label">
														<input type="checkbox">
													</label>
												</td>
												<td>
													<label class="control-label">
														<input type="checkbox">
													</label>
												</td>
											</tr>
											<tr>
												<td>
													Character
												</td>
												<td>
													<label class="control-label">
														<input type="checkbox">
													</label>
												</td>
												<td>
													<label class="control-label">
														<input type="checkbox">
													</label>
												</td>
												<td>
													<label class="control-label">
														<input type="checkbox">
													</label>
												</td>
												<td>
													<label class="control-label">
														<input type="checkbox">
													</label>
												</td>
											</tr>
											<tr>
												<td>
													Ambition
												</td>
												<td>
													<label class="control-label">
														<input type="checkbox">
													</label>
												</td>
												<td>
													<label class="control-label">
														<input type="checkbox">
													</label>
												</td>
												<td>
													<label class="control-label">
														<input type="checkbox">
													</label>
												</td>
												<td>
													<label class="control-label">
														<input type="checkbox">
													</label>
												</td>
											</tr>
											<tr>
												<td>
													Emotional Stability
												</td>
												<td>
													<label class="control-label">
														<input type="checkbox">
													</label>
												</td>
												<td>
													<label class="control-label">
														<input type="checkbox">
													</label>
												</td>
												<td>
													<label class="control-label">
														<input type="checkbox">
													</label>
												</td>
												<td>
													<label class="control-label">
														<input type="checkbox">
													</label>
												</td>
											</tr>
											<tr>
												<td>
													Ability To work with Others
												</td>
												<td>
													<label class="control-label">
														<input type="checkbox">
													</label>
												</td>
												<td>
													<label class="control-label">
														<input type="checkbox">
													</label>
												</td>
												<td>
													<label class="control-label">
														<input type="checkbox">
													</label>
												</td>
												<td>
													<label class="control-label">
														<input type="checkbox">
													</label>
												</td>
											</tr>
											<tr>
												<td>
													Communication Skills
												</td>
												<td>
													<label class="control-label">
														<input type="checkbox">
													</label>
												</td>
												<td>
													<label class="control-label">
														<input type="checkbox">
													</label>
												</td>
												<td>
													<label class="control-label">
														<input type="checkbox">
													</label>
												</td>
												<td>
													<label class="control-label">
														<input type="checkbox">
													</label>
												</td>
											</tr>
										</tbody>

									</table>
									<label class="control-label">Comments (please feel free toattach a letter or other documentation):</label>
									<textarea rows="6" class="form-control"></textarea>
								</div>
							</div>
							<br />
							<div class="row">
								<div class="col-lg-12">
									<label class="control-label">I recommend this candidate:</label>

									<label class="control-label">
										<input type="checkbox">
										With Reservation
									</label>
									<label class="control-label">
										<input type="checkbox">
										Failry Strongly
									</label>

									<label class="control-label">
										<input type="checkbox">
										Strongly
									</label>
									<label class="control-label">
										<input type="checkbox">
										Enthusiastically
									</label>

								</div>

								<hr />
							</div>
						</div>
					</div>
				</div>
				<br />
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="pull-right">
						<button type="submit" href="#" class="btn btn-success btn-lg" id="btnSubmit"><i class="fa fa-save"></i> Save</button>
						<button type="reset" class="btn btn-warning btn-lg" href="#" id="btnToTop"><i class="fa fa-arrow-up"></i> Top</button>
					</div>
				</div>
			</div>
		</form>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="/assets/js/ajax-request.js" type="text/javascript"></script>
</body>

</html>