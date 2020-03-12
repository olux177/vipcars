<a 
  href="{{isset($link['url'])?$link['url']:'/'}}"
  title="{{isset($link['desc'])?$link['desc']:$link['label']}}">
  {{$link['label']}}
</a>