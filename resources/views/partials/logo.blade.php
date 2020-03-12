
<div class="header__logo" style="font-size:34px;">
  <a href="/">
    {{-- {{dd($data['site_info']['logo'])}} --}}
    @include('partials.image',[
      "image"=>$data['site_info']['logo']
    ])
    {{-- <img class="non-retina" src="{{$data['site_info']['logo']}}" alt="{{$data['site_info']['name']}} Logo" title="{{$data['site_info']['name']}} Logo" width="182" height="53" style="max-height:53px">
    <img class="only-retina" src="/images/logo.png" alt="Wheelsberry — Car Rental WordPress Theme" width="182" height="53" style="max-height:53px"> --}}
  </a>
</div>