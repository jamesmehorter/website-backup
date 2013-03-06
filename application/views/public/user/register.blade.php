@layout('public.template') {{-- Bring in the Public template HTML --}}

{{-- Define the 'content' section that will output in the above template --}}
@section('content')

{{ Form::open('register') }}

	<div class="row">
		<div class="small-6 small-centered columns">
			<fieldset>
				<legend>Register</legend>
				<div class="row">
					<div class="large-12 columns">
						{{ Form::text('name', '', array('placeholder' => 'Your Name')) }}
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						{{ Form::email('email', '', array('placeholder' => 'Your Email')) }}
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						{{ Form::password('password', array('placeholder' => 'Desired Password')) }}
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						{{ Form::password('password-repeat', array('placeholder' => 'Repeat Desired Password')) }}
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						{{ Form::submit('Register', array('class' => 'small button')) }}
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						@render('error/register')
					</div>
				</div>
			</fieldset>
		</div>
	</div>

{{ Form::close() }}

<div class="row">
	<div class="small-6 small-centered columns">
		<h6 class="subheader">Already registered? {{ HTML::link_to_action('user@login', 'Login now.') }}</h6>
	</div>
</div>

@endsection  