@extends('default')

@section('content')

<div class="row">
	<div class="col-sm-12 col-lg-12">
		<h1 class="h1">
			Contact
		</h1>
		<p>Feel free to contact us</p>
	</div>
</div>


	<div class="row">
		<div class="col-md-8">
			<div class="well well-sm">
				<form method="POST" action="{{route('contact.store')}}">
					@csrf
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="name">
									Name</label>
									<input type="text" class="form-control" name="name" placeholder="Enter name" required="required" />
								</div>
								<div class="form-group">
									<label for="email">
										Email Address</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
										</span>
										<input type="email" class="form-control" name="email" placeholder="Enter email" required="required" /></div>
									</div>
									<div class="form-group">
										<label for="subject">
											Subject</label>
											<select id="subject" name="subject" class="form-control" required="required">
												<option value="na" selected="">Choose One:</option>
												<option value="suggestions">Suggestions</option>
												<option value="product">Product Support</option>
												<option value="other">Other</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="name">
												Message</label>
												<textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
												placeholder="Message"></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<button type="submit" class="btn btn-primary pull-right">
												Send Message</button>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-4">
								<form>
									<legend><span class="glyphicon glyphicon-globe"></span>Our Details</legend>
									<address>
										<strong>Rusev Web Services</strong><br>
										Plovdiv, Bulgaria<br>
										Central Region<br>
										<abbr title="Phone">
											Phone:</abbr>
											+359876559946
										</address>
										<address>
											<strong>Email</strong><br>
											<a href="mailto:#">evg.rusev@gmail.com</a>
										</address>
									</form>
								</div>
							</div>
						@include ('layouts.errors')
						@if(session()->has('message'))
							<br>
						    <div class="alert alert-success">
						        {{ session()->get('message') }}
						    </div>
						@endif
						@endsection
