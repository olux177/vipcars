<div id="faq" class="vc_row wpb_row vc_row-fluid om-container vc_custom_1470247299737 vc_row-has-fill vc_row-full-width">
   <div class="om-container">
      <div class="wpb_column vc_column_container vc_col-sm-12">
         <div class="vc_column-inner ">
            <div class="wpb_wrapper">
               <div class="vc_empty_space"  style="height: 40px" >
                  <span class="vc_empty_space_inner"></span>
               </div>
               <h2  style="text-align: center" class="vc_custom_heading">Frequently Asked Questions</h2>
               
               <div class="vc_om-testimonials wpb_content_element owl-carousel">
                  @foreach ($data['components']['faq']['list'] as $item)
                     <div class="om-testimonials__item">
                        <div class="om-testimonials__content">
                           {{-- <p>{{$item['q']}}</p> --}}
                           @include('partials.text',[
                              "text"=>$item['q']
                           ])
                        </div>
                        <div class="om-testimonials__author">
                              @include('partials.text',[
                                 "text"=>$item['a']
                              ])
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