@layout('public.template') {{-- Bring in the Public template HTML --}}

{{-- Define the 'content' section that will output in the above template --}}
@section('content')

{{ Form::open('login') }}

	<div class="row">
		<div class="small-6 small-centered columns">
			<fieldset>
				<legend>Login</legend>
				<div class="row">
					<div class="large-6 columns">
						{{ Form::email('username', '', array('placeholder' => 'Your Email')) }}
					</div>
					<div class="large-6 columns">
						{{ Form::password('password', array('placeholder' => 'Your Password')) }}
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						{{ Form::submit('Login', array('class' => 'small button')) }}
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						@render('error/login')
					</div>
				</div>
			</fieldset>
		</div>
	</div>

{{ Form::close() }}

<div class="row">
	<div class="small-6 small-centered columns">
		<h6 class="subheader">Don't have an account? {{ HTML::link_to_action('user@register', 'Register Now!') }}</h6>
	</div>
</div>

@endsection  