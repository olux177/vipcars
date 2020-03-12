
<div class="footer_logo" style="font-size:34px; min-width: 200px;max-width: 250px;">
  <a href="/">
    {{-- {{dd($data['site_info']['logo'])}} --}}
    @include('partials.image',[
      "image"=>$data['site_info']['footer_logo']
    ])
    <div style="width:80%">
      @include('partials.image',[
        "image"=>$data['site_info']['payment_logo']
      ])
    </div>
  </a>
</div>