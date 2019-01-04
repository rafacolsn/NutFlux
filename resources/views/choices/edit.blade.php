@extends( 'layout' )

@section( 'title' )
    Edit the list
@stop

@section( 'content' )
    {{-- <choices-edit :choice="{{ json_encode( $choice ) }}" csrf="{{ csrf_token() }}"></choices-edit> --}}
    @foreach ($choices as $item)
    {{  $item->media_id }} - {{ $item->user_id }}
    @endforeach
   
   
    
@stop