<div id="services" class="vc_row wpb_row vc_row-fluid om-container vc_row-full-width">
  <div class="om-container">
    <div class="wpb_column vc_column_container vc_col-sm-12">
      <div class="vc_column-inner ">
        <div class="wpb_wrapper">
          <div class="vc_custom_heading" >
            <h2  style="text-align: center" >Our Services</h2>
            <div class="vc_custom_heading__additional" style="text-align:center">Probably the best service in the world</div>
          </div>
          <div class="vc_om-max-width om-mw-align-center" style="max-width:960px">
            <div class="vc_om-services wpb_content_element owl-carousel" data-top-padding="250" data-bottom-padding="100">
              @foreach ($data['components']['services']['titles'] as $item)
                  <div class="item">
                  <div class="om-services__item" style="background-image: url({{$item['image']}}); background-size: contain; padding-top: 250px; padding-bottom: 100px;">
                    <div class="om-services__pane">
                      <h3 class="om-services__title">{{$item['header']}}</h3>
                      <div class="om-services__description">
                          @include('partials.text',[
                            "text"=>$item['text']
                          ])
                      </div>
                      <a href="" class="om-services__link"></a>
                    </div>
                  </div>
                  </div>


              @endforeach
            </div>

</div>
<div class="vc_empty_space"  style="height: 40px" ><span class="vc_empty_space_inner"></span></div>
</div></div></div></div></div>