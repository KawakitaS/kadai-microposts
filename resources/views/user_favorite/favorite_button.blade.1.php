@if (Auth::user()->id != $user->id) 
    @if (Auth::user()->is_favoriting($user->id))
        {!! Form::open(['route' => ['user.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-success"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.favorite', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-default"]) !!}
        {!! Form::close() !!}
    @endif
@endif