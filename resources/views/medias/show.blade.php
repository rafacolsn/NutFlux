@extends( 'layout' )

@section( 'title' )
    {{ $mediasObj -> title }}
@stop

@section( 'content' )
    {{-- <medias-show :media="{{ json_encode( $media ) }}"></medias-show> --}}
    {{$mediasObj->title}}
@stop
