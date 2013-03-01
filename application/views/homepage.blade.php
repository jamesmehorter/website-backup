@layout('public_template')

@section('content')

<div class="row">
	<div class="small-6 small-centered columns">
		<form>
			<fieldset>
				<legend>Login</legend>
				<div class="row">
					<div class="small-6 columns">
						<input type="email" placeholder="Your Email">
					</div>
					<div class="small-6 columns">
						<input type="password" placeholder="Your Password">
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>

@endsection  