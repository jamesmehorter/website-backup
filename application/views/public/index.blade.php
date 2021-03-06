@layout('public.template') {{-- Bring in the Public template HTML --}}

{{-- Define the 'content' section that will output in the above template --}}
@section('content')

	@if (Session::has('logged_out'))
		<div class="row">
			<div class="small-6 small-centered columns">
				<div class="row">
					<div class="large-12 columns panel">
						You have been logged out
					</div>
				</div>
			</div>
		</div>
	@endif

	<div class="row">
		<div class="small-6 small-centered columns">
			<div class="row">
				<div class="large-6 columns">
					{{ HTML::link_to_action('user@login', 'Login', array(), array('class' => 'tiny button')) }}
				</div>
				<div class="large-6 columns">
					{{ HTML::link_to_action('user@register', 'Register Now!', array(), array('class' => 'tiny button secondary')) }}
				</div>
			</div>
		</div>
	</div>
	
@endsection