@layout('dashboard.template') {{-- Bring in the Private template HTML --}}

{{-- Define the 'content' section that will output in the above template --}}
@section('content')

	Hi {{ Auth::user()->name }}, Welcome to your Dashboard. 
	<br />
	{{ HTML::link_to_action('user@logout', 'Logout') }} when you're ready to leave.
	
@endsection