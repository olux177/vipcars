
<div class="cars-slider" id="cars-slider">

  <div id="Car_Slider" class="car_slider owl-carousel">
    @foreach ($data['carsslider'] as $key=>$item)
        
    <div class="cars-slider__item">
            <div class="car-slider__title-wrapper om-container">
              <div class="om-container__inner">
                <h2 id="Vehicle-Cat" class="cars-slider__title">VIP {{$item['cat']}}</h2>							
                <div class="h-subtitle cars-slider__subtitle">Reserve now and get the best offer</div>	
              </div>
            </div>
      <div class="om-container">
        <div class="cars-slider__item-inner om-container__inner">
          

          <div class="cars-slider__item-description">
          
            <h3 class="cars-slider__model">
              <span class="cars-slider__model-inner">{{$item['make']}}
                <span class="cars-slider__model-br"><br>{{$item['model']}}</span></span>
            </h3>
            <div class="cars-slider__item-description-sep"></div>
            <div class="cars-slider__item-price">
              <span class="cars-slider__item-price-value"><span class="omcr-price-currency">$</span>40</span>
              <span class="cars-slider__item-price-period"> day</span>
            </div>
            <div class="cars-slider__item-reserve">
              <span class="cars-slider__item-reserve-button" data-car-id="{{$key}}">Reserve Now</span>
            </div>
          </div>
          <div class="cars-slider__item-image">  
            <img src="{{$item['image']}}" alt="{{$item['name']}}" title="{{$item['name']}}" />								
          </div>
          <div class="cars-slider__item-options">
            <div class="cars-slider__item-options-inner">
              <div class="cars-slider__item-option car-option-doors">
                <span class="cars-slider__item-option-label">Doors: </span>
                <span class="cars-slider__item-option-value">{{$item['specs']['doors']}}</span>
              </div>
              <div class="cars-slider__item-option car-option-passengers">
                <span class="cars-slider__item-option-label">Passengers: </span>
                <span class="cars-slider__item-option-value">{{$item['specs']['seats']}}</span>
              </div>
              <div class="cars-slider__item-option car-option-luggage">
                <span class="cars-slider__item-option-label">Luggage: </span>
                <span class="cars-slider__item-option-value">2 Small Bags</span>
              </div>
              <div class="cars-slider__item-option car-option-transmission">
                <span class="cars-slider__item-option-label">Transmission: </span>
                <span class="cars-slider__item-option-value">{{$item['specs']['gear box']}}</span>
              </div>
              <div class="cars-slider__item-option car-option-conditioning">
                <span class="cars-slider__item-option-label">Air conditioning: </span>
                <span class="cars-slider__item-option-value">Yes</span>
              </div>
              <div class="cars-slider__item-option car-option-age">
                <span class="cars-slider__item-option-label">Minimum age: </span>
                <span class="cars-slider__item-option-value">20</span>
              </div>
            </div>
          </div>
          <div class="cars-slider__item-reserve-mobile">
            <span class="cars-slider__item-reserve-button" data-car-id="{{$key}}">Reserve Now</span>              
          </div>
        </div>
      </div>
    </div>
        
    @endforeach
{{-- 
      <div class="cars-slider__item">
<div class="om-container">
  <div class="cars-slider__item-inner om-container__inner">
    <div class="cars-slider__item-description">
      <div class="cars-slider__item-category">Economy</div>									<h3 class="cars-slider__model"><span class="cars-slider__model-inner">Kia <span class="cars-slider__model-br"><br></span>Ceed</span></h3>
      <div class="cars-slider__item-description-sep"></div>
      <div class="cars-slider__item-price"><span class="cars-slider__item-price-value"><span class="omcr-price-currency">$</span>45</span><span class="cars-slider__item-price-period"> day</span></div>																			<div class="cars-slider__item-reserve">
          <span class="cars-slider__item-reserve-button" data-car-id="13">Reserve Now</span>
        </div>
                      </div>
    <div class="cars-slider__item-image">
      <img src="http://demo.olevmedia.net/wheelsberry/wp-content/uploads/2016/10/car2_.png" alt="Kia Ceed" />								</div>
    <div class="cars-slider__item-options">
      <div class="cars-slider__item-options-inner">
        <div class="cars-slider__item-option car-option-doors"><span class="cars-slider__item-option-label">Doors: </span><span class="cars-slider__item-option-value">4</span></div><div class="cars-slider__item-option car-option-passengers"><span class="cars-slider__item-option-label">Passengers: </span><span class="cars-slider__item-option-value">5</span></div><div class="cars-slider__item-option car-option-luggage"><span class="cars-slider__item-option-label">Luggage: </span><span class="cars-slider__item-option-value">2 Bags</span></div><div class="cars-slider__item-option car-option-transmission"><span class="cars-slider__item-option-label">Transmission: </span><span class="cars-slider__item-option-value">Manual</span></div><div class="cars-slider__item-option car-option-conditioning"><span class="cars-slider__item-option-label">Air conditioning: </span><span class="cars-slider__item-option-value">Yes</span></div><div class="cars-slider__item-option car-option-age"><span class="cars-slider__item-option-label">Minimum age: </span><span class="cars-slider__item-option-value">25</span></div>									</div>
    </div>
                      <div class="cars-slider__item-reserve-mobile">
        <span class="cars-slider__item-reserve-button" data-car-id="13">Reserve Now</span>
      </div>
                  </div>
</div>
</div>
      <div class="cars-slider__item">
<div class="om-container">
  <div class="cars-slider__item-inner om-container__inner">
    <div class="cars-slider__item-description">
      <div class="cars-slider__item-category">Comfort</div>									<h3 class="cars-slider__model"><span class="cars-slider__model-inner">Volvo <span class="cars-slider__model-br"><br></span>V60</span></h3>
      <div class="cars-slider__item-description-sep"></div>
      <div class="cars-slider__item-price"><span class="cars-slider__item-price-value"><span class="omcr-price-currency">$</span>75</span><span class="cars-slider__item-price-period"> day</span></div>																			<div class="cars-slider__item-reserve">
          <span class="cars-slider__item-reserve-button" data-car-id="11">Reserve Now</span>
        </div>
                      </div>
    <div class="cars-slider__item-image">
      <img src="http://demo.olevmedia.net/wheelsberry/wp-content/uploads/2016/10/car5_.png" alt="Volvo V60" />								</div>
    <div class="cars-slider__item-options">
      <div class="cars-slider__item-options-inner">
        <div class="cars-slider__item-option car-option-doors"><span class="cars-slider__item-option-label">Doors: </span><span class="cars-slider__item-option-value">5</span></div><div class="cars-slider__item-option car-option-passengers"><span class="cars-slider__item-option-label">Passengers: </span><span class="cars-slider__item-option-value">5</span></div><div class="cars-slider__item-option car-option-luggage"><span class="cars-slider__item-option-label">Luggage: </span><span class="cars-slider__item-option-value">3 Bags</span></div><div class="cars-slider__item-option car-option-transmission"><span class="cars-slider__item-option-label">Transmission: </span><span class="cars-slider__item-option-value">Automatic</span></div><div class="cars-slider__item-option car-option-conditioning"><span class="cars-slider__item-option-label">Air conditioning: </span><span class="cars-slider__item-option-value">Yes</span></div><div class="cars-slider__item-option car-option-age"><span class="cars-slider__item-option-label">Minimum age: </span><span class="cars-slider__item-option-value">30</span></div>									</div>
    </div>
                      <div class="cars-slider__item-reserve-mobile">
        <span class="cars-slider__item-reserve-button" data-car-id="11">Reserve Now</span>
      </div>
                  </div>
</div>
</div>
      <div class="cars-slider__item">
<div class="om-container">
  <div class="cars-slider__item-inner om-container__inner">
    <div class="cars-slider__item-description">
      <div class="cars-slider__item-category">Premium</div>									<h3 class="cars-slider__model"><span class="cars-slider__model-inner">BMW <span class="cars-slider__model-br"><br></span>3-Series</span></h3>
      <div class="cars-slider__item-description-sep"></div>
      <div class="cars-slider__item-price"><span class="cars-slider__item-price-value"><span class="omcr-price-currency">$</span>115</span><span class="cars-slider__item-price-period"> day</span></div>																			<div class="cars-slider__item-reserve">
          <span class="cars-slider__item-reserve-button" data-car-id="14">Reserve Now</span>
        </div>
                      </div>
    <div class="cars-slider__item-image">
      <img src="http://demo.olevmedia.net/wheelsberry/wp-content/uploads/2016/10/car4_.png" alt="BMW 3-Series" />								</div>
    <div class="cars-slider__item-options">
      <div class="cars-slider__item-options-inner">
        <div class="cars-slider__item-option car-option-doors"><span class="cars-slider__item-option-label">Doors: </span><span class="cars-slider__item-option-value">4</span></div><div class="cars-slider__item-option car-option-passengers"><span class="cars-slider__item-option-label">Passengers: </span><span class="cars-slider__item-option-value">5</span></div><div class="cars-slider__item-option car-option-luggage"><span class="cars-slider__item-option-label">Luggage: </span><span class="cars-slider__item-option-value">2 Bags</span></div><div class="cars-slider__item-option car-option-transmission"><span class="cars-slider__item-option-label">Transmission: </span><span class="cars-slider__item-option-value">Automatic</span></div><div class="cars-slider__item-option car-option-conditioning"><span class="cars-slider__item-option-label">Air conditioning: </span><span class="cars-slider__item-option-value">Dual Zone</span></div><div class="cars-slider__item-option car-option-age"><span class="cars-slider__item-option-label">Minimum age: </span><span class="cars-slider__item-option-value">35</span></div>									</div>
    </div>
                      <div class="cars-slider__item-reserve-mobile">
        <span class="cars-slider__item-reserve-button" data-car-id="14">Reserve Now</span>
      </div>
                  </div>
</div>
</div>
      <div class="cars-slider__item">
<div class="om-container">
  <div class="cars-slider__item-inner om-container__inner">
    <div class="cars-slider__item-description">
      <div class="cars-slider__item-category">Off road</div>									<h3 class="cars-slider__model"><span class="cars-slider__model-inner">Volkswagen <span class="cars-slider__model-br"><br></span>Amarok</span></h3>
      <div class="cars-slider__item-description-sep"></div>
      <div class="cars-slider__item-price"><span class="cars-slider__item-price-value"><span class="omcr-price-currency">$</span>60</span><span class="cars-slider__item-price-period"> day</span></div>																			<div class="cars-slider__item-reserve">
          <span class="cars-slider__item-reserve-button" data-car-id="16">Reserve Now</span>
        </div>
                      </div>
    <div class="cars-slider__item-image">
      <img src="http://demo.olevmedia.net/wheelsberry/wp-content/uploads/2016/10/car3_.png" alt="Volkswagen Amarok" />								</div>
    <div class="cars-slider__item-options">
      <div class="cars-slider__item-options-inner">
        <div class="cars-slider__item-option car-option-doors"><span class="cars-slider__item-option-label">Doors: </span><span class="cars-slider__item-option-value">4</span></div><div class="cars-slider__item-option car-option-passengers"><span class="cars-slider__item-option-label">Passengers: </span><span class="cars-slider__item-option-value">4</span></div><div class="cars-slider__item-option car-option-luggage"><span class="cars-slider__item-option-label">Luggage: </span><span class="cars-slider__item-option-value">2 Bags</span></div><div class="cars-slider__item-option car-option-transmission"><span class="cars-slider__item-option-label">Transmission: </span><span class="cars-slider__item-option-value">Manual</span></div><div class="cars-slider__item-option car-option-conditioning"><span class="cars-slider__item-option-label">Air conditioning: </span><span class="cars-slider__item-option-value">Yes</span></div><div class="cars-slider__item-option car-option-age"><span class="cars-slider__item-option-label">Minimum age: </span><span class="cars-slider__item-option-value">25</span></div>									</div>
    </div>
                      <div class="cars-slider__item-reserve-mobile">
        <span class="cars-slider__item-reserve-button" data-car-id="16">Reserve Now</span>
      </div>
                  </div>
</div>
</div> --}}
    </div>
</div>