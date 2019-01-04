@foreach ($choicesObj as $item)
<li>{{ $item->title }} <br />
<img src="{{$item->poster}}" alt="">
</li>
@endforeach
