@if (is_array ($text))
  @foreach ($text as $paragraph)
    <span>{{$paragraph}}</span>
  @endforeach
@else
  <span>{{$text}}</span>  
@endif