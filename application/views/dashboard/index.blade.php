@layout('dashboard.template') {{-- Bring in the Private template HTML --}}

{{-- Define the 'content' section that will output in the above template --}}
@section('content')

	Welcome to your Dashboard. 
	{{ HTML::link_to_action('user@logout', 'Logout') }} when you're ready to leave.
	
@endsection