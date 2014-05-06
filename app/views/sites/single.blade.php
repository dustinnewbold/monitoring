@extends('master')

@section('content')
	<h3>
		Sites
	</h3>
	<ul class="sites">
		@foreach ( $sites as $site )
			<li>
				@if ( $site->status == 0 )
					<span class="status status-progress"></span>
				@elseif ( $site->status == 1 )
					<span class="status status-green"></span>
				@elseif ( $site->status == 2 )
					<span class="status status-yellow"></span>
				@elseif ( $site->status == 3 )
					<span class="status status-red"></span>
				@endif
				<a class="site-name" href="/sites/{{ $site->id }}">
					{{ $site->name }}
				</a>
				<span class="last-scanned">
					Last Scanned: 10/10/2013 (100 days ago)
				</span>
			</li>
		@endforeach
	</ul>
@endsection