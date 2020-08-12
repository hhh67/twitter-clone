@if (Auth::user()->favorites()->where('micropost_id', $micropost->id)->exists())
    {!! Form::open(['route' => ['favorite.delete', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('unfavorite', ["class" => "btn btn-warning btn-sm"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['favorite.store', $micropost->id]]) !!}
        {!! Form::submit('favorite', ["class" => "btn btn-primary btn-sm"]) !!}
    {!! Form::close() !!}
@endif
