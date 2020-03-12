@if (is_array ($text))
  @foreach ($text as $paragraph)
    <p>{!!$paragraph!!}</p>
  @endforeach
@else
  <p>{!!$text!!}</p>  
@endif