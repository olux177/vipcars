@extends('layouts.master')  
  @section('head')
  @parent

  @stop
@section('content')
<h1 style="display:none;">{{$data['pages']['home']['title']}} web site</h1>
{{-- =============== RENT FORM PAGE ==================== --}}
  @include('pages.rent_car')
{{-- =============== RENT FORM PAGE ==================== --}}
  <div class="content">
    <div class="content-columns om-container">
      <div class="content-columns__content">
        <div class="content-columns__content-inner">
          <article>		
            <div class="post-9 page type-page status-publish hentry" id="post-9">


        
              {{-- =============== ABOUT PAGE ==================== --}}
                @include('pages.about')
              {{-- =============== ABOUT PAGE ==================== --}}


              

              {{-- =============== SERVICES PAGE ==================== --}}
                @include('pages.services')
              {{-- =============== SERVICES PAGE ==================== --}}




              {{-- =============== TESTIMONIALS PAGE ==================== --}}        
                @include('pages.testimonials')
              {{-- =============== TESTIMONIALS PAGE ==================== --}}        


        
              {{-- =============== LOCATION PAGE ==================== --}}
                @include('pages.location')
              {{-- =============== LOCATION PAGE ==================== --}}

        

              {{-- =============== CONTACT FORM PAGE ==================== --}}
                @include('pages.contact_form')
              {{-- =============== CONTACT FORM PAGE ==================== --}}

            </div>
          </article>                  
          <div class="om-container">                                
          </div>
        </div>
      </div>                      
    </div>
  </div>
  @include('includes.footer.foot')        
@stop