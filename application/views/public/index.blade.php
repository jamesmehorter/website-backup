@layout('public.template') {{-- Bring in the Public template HTML --}}

{{-- Define the 'content' section that will output in the above template --}}
@section('content')

	<div class="row">
		<div class="small-6 small-centered columns">
			<div class="row">
				<div class="large-6 columns">
					{{ HTML::link_to_action('login@index', 'Login') }}
				</div>
				<div class="large-6 columns">
					{{ HTML::link_to_action('login@index', 'Register Now!') }}
				</div>
			</div>
		</div>
	</div>
	
@endsection