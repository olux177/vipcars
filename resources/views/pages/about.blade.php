<div id="about" class="vc_row wpb_row vc_row-fluid om-container vc_custom_1470245913143 vc_row-has-fill vc_row-full-width">
   <div class="om-container">
      <div class="wpb_column vc_column_container vc_col-sm-12">
         <div class="vc_column-inner ">
            <div class="wpb_wrapper">
               <div class="vc_empty_space"  style="height: 40px" >
                  <span class="vc_empty_space_inner"></span>
               </div>
               <div class="vc_custom_heading" >
                  <h2  style="text-align: center" >
                     {{$data['components']['about']['page_header']}}
                  </h2>
                  <div class="vc_custom_heading__additional" style="text-align:center">
                     {{$data['components']['about']['title']}}
                  </div>
               </div>
               <div class="vc_om-about wpb_content_element owl-carousel">
                  @foreach ($data['about'] as $item)
                     <div class="om-about__item">
                        <div class="om-about__item-inner">
                           <div class="om-about__img" alt="{{$item['title']}}" title="{{$item['title']}}"
                              style="background-image:url({{$item['image']}})">
                           </div>
                                                              
                           <div class="om-about__pane">
                              <div class="om-about__pane-inner">
                                 <h3 class="om-about__title">
                                    {{$item['title']}}
                                 </h3>
                                 @if ($item['icon_content']['type']==="html")
                                    <div class="om-about__media om-about__media--counter">
                                        {!!$item['icon_content']['content'] !!}
                                    </div>
                                 @else
                                    <div class="om-about__media om-about__media--image">
                                    <img src="{{$item['icon_content']['content']}}" alt="{{$item['title']}}" title="{{$item['title']}}" />
                                    </div>
                                 @endif
                                 <div class="om-about__description">
                                    @include('partials.text',[
                                       "text"=>$item['text']
                                    ])
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  @endforeach
               </div>

               <div class="vc_empty_space"  style="height: 40px" >
                  <span class="vc_empty_space_inner"></span>
               </div>

            </div>
         </div>
      </div>
   </div>
</div>