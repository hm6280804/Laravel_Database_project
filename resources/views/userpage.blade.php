@foreach ($user as $id => $u )
    <h3>{{ $id }} - {{ $u['name'] }} - {{ $u['phone'] }} - {{ $u['city'] }} - <a href="{{ route('view.user', $id) }}">Show</a></h3>
    
@endforeach


<h1>{{ $ids }}</h1>