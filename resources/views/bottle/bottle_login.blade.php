@if(Auth::check())
<p>User: {{ $user->name.' ('. $user->email.')' }}</p>