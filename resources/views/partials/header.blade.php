
@if (is_array ($text))
  @foreach ($text as $paragraph)
    @if ($type === "h2")    
      <h2 class="{{isset($class)?$class:''}}">{!!$paragraph!!}</h2>
    @elseif ($type === "h3")
      <h2 class="{{isset($class)?$class:''}}">{!!$paragraph!!}</h2>
    @elseif ($type === "h3")
      <h3 class="{{isset($class)?$class:''}}">{!!$paragraph!!}</h3>
    @elseif ($type === "h5")
      <h5 class="{{isset($class)?$class:''}}">{!!$paragraph!!}</h5>
    @elseif ($type === "h6")
      <h6 class="{{isset($class)?$class:''}}">{!!$paragraph!!}</h6>
    @elseif ($type === "h7")
      <h7 class="{{isset($class)?$class:''}}">{!!$paragraph!!}</h7>
    @else      
      <h4 class="{{isset($class)?$class:''}}">{!!$paragraph!!}</h4>
    @endif
  @endforeach
@else
  @if ($type === "h2")    
    <h2 class="{{isset($class)?$class:''}}">{!!$text!!}</h2>
  @elseif ($type === "h3")
    <h2 class="{{isset($class)?$class:''}}">{!!$text!!}</h2>
  @elseif ($type === "h3")
    <h3 class="{{isset($class)?$class:''}}">{!!$text!!}</h3>
  @elseif ($type === "h5")
    <h5 class="{{isset($class)?$class:''}}">{!!$text!!}</h5>
  @elseif ($type === "h6")
    <h6 class="{{isset($class)?$class:''}}">{!!$text!!}</h6>
  @elseif ($type === "h7")
    <h7 class="{{isset($class)?$class:''}}">{!!$text!!}</h7>
  @else      
  <h4 class="{{isset($class)?$class:''}}">{!!$text!!}</h4>  
  @endif
@endif