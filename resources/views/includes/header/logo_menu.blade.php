<header id="top" class="header-wrapper">
    <div class="header header__logo--type-image header__menu--sticky">
  <div class="om-container">
    <div class="om-container__inner">
      <div class="header__inner">
        @include('partials.logo')
        <div class="header__menu clearfix apply-uppercase">
          <div class="primary-menu-container">
            <nav class="menu-primary-menu-container">
              <ul id="menu-primary-menu" class="primary-menu sf-menu clearfix show-dropdown-symbol">
                @foreach ($data['main_menu'] as $item)
                  <li id="menu-item-62" class="menu-item menu-item-type-post_type menu-item-object-page page_item page-item-9 current_page_item menu-item-62">
                    <a href="{{$item['url']}}">
                      {{$item['label']}}</a>
                  </li>                    
                @endforeach
              </ul>
            </nav>
          </div>

          <div class="mobile-menu-control"><span class="mobile-menu-control__l1"></span><span class="mobile-menu-control__l2"></span><span class="mobile-menu-control__l3"></span></div>
          <div class="mobile-menu-container">
            <nav class="menu-primary-menu-container">
              <ul id="menu-primary-menu-1" class="primary-mobile-menu sf-menu clearfix show-dropdown-symbol">
              
                  @foreach ($data['main_menu'] as $item)
                  <li id="menu-item-62" class="menu-item menu-item-type-post_type menu-item-object-page page_item page-item-9 current_page_item menu-item-62">
                      <a href="{{$item['url']}}">
                        {{$item['label']}}</a>
                    </li>                   
                @endforeach
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</header>	