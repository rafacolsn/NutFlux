@extends( 'layout' )

@if(session('success'))
    {{session('success')}}
@endif

@section( 'title' )
    Medias index
@stop

@section( 'content' )
    <medias-index :medias="{{ json_encode($mediasAll) }}"
        :user="{{ json_encode($user) }}"
        :choices="{{ json_encode($choices) }}"
        :movies="{{ json_encode($movies) }}"
        :tv_shows="{{ json_encode($tv_shows) }}"
        csrf="{{ csrf_token() }}"></medias-index>
@stop
