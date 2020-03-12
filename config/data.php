<?php
//  helpers ==============================

$site_name = 'VIP Car Hire Dubai';
$site_email = "info@vipcarhiredubai.com";
$site_logo = "logo.png";
$site_logo2 = "logo2.png";
$payment_logo = "card-logo-pavel.png";
$site_phone = "0330 001 0967";
$site_url = "vipcarhiredubai.com";
$site_author = "olux";
$location = capitalise("Dubai");

// site logo =============================================
$logo=[
  "label"=> $site_name,
  "name"=> $site_name,
  "image"=>$site_logo,
  "title"=>capitalise("Wide range of luxury, sport and hybrid vehicles."),
  "text"=>"wide range of luxury, sport and hybrid vehicles.",
];
// site logo =============================================



// site pages =============================================
$pages = [
  "home"=>[
    "title"=>capitalise("$site_name."),
    "desc"=>"$site_name is a fast growing company that offers wide range of luxury, sport and hybrid vehicles. We provide more  than 200 vehicles worldwide and +80 premium cars.",
    "keywords"=>"$location car hire,car hire, luxury car hire, sport car hire, hybrid car hire,luxury vehicle, luxury car, sport car, hybrid vehicls,luxury vehicle, sport vehicle, hybrid car, luxury cars, sport cars, hybrid vehicles,luxury vehicles, sport vehicle, hybrid cars,",
    "author"=>"$site_author",
    "label"=>"home",
    "url"=>"#top",
  ],
  "aboutus"=>[
    "title"=>capitalise("Information About $site_name."),
    "desc"=>"$site_name have built up a fantastic reputation, becoming renowned throughout $location for our commitment to comfort, safety and value for money. Whatever your transportation requirements, we can cater to them, helping you find a first-class service that’s totally tailored to your needs.",
    "keywords"=>"professional coach hire,first-class service,commitment to comfort, safety and value for money, coach hire, dependable drivers ",
    "author"=>"$site_author",
    "label"=>"about us",
    "url"=>"#about",
  ],
  "services"=>[
    "title"=>capitalise("servces offered by $site_name"),
    "desc"=>"$site_name as been providing professional coach hire to private and corporate customers for many years. We’ve built up a fantastic reputation, becoming renowned throughout $location for our commitment to comfort, safety and value for money.",
    "keywords"=>"renowned throughout $location,commitment to comfort, safety and value for money,, coach hire, dependable drivers ",
    "author"=>"$site_author",
    "label"=>"services",
    "url"=>"#services",
  ],
  "terms"=>[
    "title"=>capitalise("the term and conditions at $site_name"),
    "desc"=>"$site_name have a few conditions as it relates to our service and it's listed in this page.",
    "keywords"=>"terms,condition, safety, coach hire, dependable drivers",
    "author"=>"$site_author",
    "label"=>"terms",
    "url"=>"#terms",
  ],
  "fleets"=>[
    "title"=>capitalise("Our Fleet at $site_name"),
    "desc"=>"$site_name has been providing professional coach hire to private and corporate customers for many years. We understande there are question you might need answers to this page contain a few of those question.",
    "keywords"=>"faq,Frequently Asked Questions, coach hire, dependable drivers",
    "author"=>"$site_author",
    "label"=>"our fleet",
    "url"=>"#our_fleet",
  ],
  "location"=>[
    "title"=>capitalise("Our Fleet at $site_name"),
    "desc"=>"$site_name has been providing professional coach hire to private and corporate customers for many years. We understande there are question you might need answers to this page contain a few of those question.",
    "keywords"=>"faq,Frequently Asked Questions, coach hire, dependable drivers",
    "author"=>"$site_author",
    "label"=>"location",
    "url"=>"#locations",
  ],
  "faq"=>[
    "title"=>capitalise("Frequently Asked Questions at $site_name"),
    "desc"=>"$site_name has been providing professional coach hire to private and corporate customers for many years. We understande there are question you might need answers to this page contain a few of those question.",
    "keywords"=>"faq,Frequently Asked Questions, coach hire, dependable drivers",
    "author"=>"$site_author",
    "label"=>"faq",
    "url"=>"#faq",
  ],
  "contactus"=>[
    "title"=>capitalise("Get in touch with $site_name"),
    "desc"=>" There are serveral ways you get touch with $site_name. Please choose the method you find comfortable.",
    "keywords"=>"location, address, coach hire, dependable drivers",
    "author"=>"$site_author",
    "label"=>"contact us",
    "url"=>"#contacts",
  ],
];
// site pages =============================================



// component variables =======================================
  $slideshow = [
    [
      "image"=>["url"=>"images/page-1_slide01.jpg","desc"=>"our cars"],
      "header"=>"Rent exclusive car&nbsp;",
      "caption"=>"for your special occasion!"
    ],
    [
      "image"=>["url"=>"images/page-1_slide02.jpg","desc"=>"our cars"],
      "header"=>"Stop dreaming...",
      "caption"=>"drive in style!"
    ],
  ];


  // home component =========================
  $home_compo = [
    "intro"=>[
      "header"=>"Welcome",
      "text"=>["If you are looking for high end sports cars and exotic vehicles, you have come to the right place.
      At Luxury Car Hire Abu Dhabi, we offer a wide range of luxury vehicle hire services throughout
      the Abu Dhabi area. It doesn’t matter where in Abu Dhabi you are based or the type of car that
      you are dreaming of, you can rely on us to find a vehicle that ticks every box. You can arrive in
      Abu Dhabi, knowing that you will be travelling from A to B in style."],
    ],
    "titles"=>[
      [
        "image"=>"images/services/img3.jpg",
        "header"=>"Rent Luxury Vehicles in Dubai",
        "text"=>["If you are looking to fully make the most of your time in Dubai and enjoy every moment, you may want to consider renting a vehicle that impresses for all the right reasons."]
      ],
      [
        "image"=>"images/services/img2.jpg",
        "header"=>"Professional and Reliable Car Rentals in Dubai",
        "text"=>["Though there are other companies offering similar high end vehicle rental services, we are confident that our services go above and beyond what anyone else can offer. We offer a wide range of exotic cars and luxurious vehicles."]
      ],
      [
        "image"=>"images/services/img3.jpg",
        "header"=>"Why Choose VIP Car Hire Dubai?",
        "text"=>["There is no reason as to why renting a luxury vehicle needs to be expensive, not when we are offering affordable quotes and some of the best prices in Dubai. You can rent a fantastic vehicle without breaking the bank."]
      ],
    ]
  ];
  // home component =========================




  // =============== services components ======================
  // =============== services components ======================




  // about component ====================================
  $about_component =[
    "page_header"=>"About us",
    "title"=>"Wide range of luxury, sports, and hybrid vehicles",
    "section1"=>[
      "list"=>[
        [
          "image"=>"/images/about/photo-2.jpg",
          "icon_content"=>[
            "type"=>"html",
            "content"=>"<div class='om-about__counter-value'>3500</div>
            <div class='om-about__counter-title'>Happy clients</div>"
          ],
          "title"=>"Car rental",
          "text"=>["Stands for exciting mobility and tailored solutions. We lead with innovation in the car hire sector. High-quality customer service and seamless rental experience."]
        ],
        [
          "image"=>"/images/about/photo-1.jpg",
          "icon_content"=>[
            "type"=>"image",
            "content"=>"/images/about/map.png"
          ],
          "title"=>"About cars",
          "text"=>["One of the world&#8217;s largest car rental companies. More than 200 vehicles worldwide and 80+ premium cars"]
        ],
        [
          "image"=>"/images/about/photo-3.jpg",
          "icon_content"=>[
            "type"=>"image",
            "content"=>"/images/about/icon-ok.png"
          ],
          "title"=>"Best car rental rates",
          "text"=>["One of the world&#8217;s largest car rental companies. More than 200 vehicles worldwide and 80+ premium cars."]
        ],
      ]
    ],
    "section2"=>[
      "header"=>"Rent a Luxury Car in Dubai Today",
      "text"=>["If you are looking to rent a luxury vehicle or sports car in Dubai, you have come to the right place. We are here to guide you through the process and we’ll have your rental booked in no time at all. To find out more about renting a vehicle in Dubai, get in touch and speak to a member of the VIP Car Hire Dubai team."]
    ]
  ];
  // about component ====================================


    $car_desc = ["We propose only the latest car models for hiring and work with the most prestigious car brands (Aston Martin, Audi, Bentley, BMW, Ferrari, Lamborghini, Maserati, McLaren, Mercedes-Benz, Mini, Porsche, Land Rover, Jaguar and Rolls Royce).","We also propose a selection of unique supercars.
    $site_name offers a bespoke and high-end car rental service in many cities across $location."];
  // fleet component ==========================================
    $fleet_component = [
      "list"=>[
        [
          "image"=>"images/cars/bugatti.png",
          "make"=>"Bugatti",
          "model"=>"Veyron",
          "name"=>"bugatti veyron",
          "cat"=>"super car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"There is no denying that BMW is one of the most well known car manufacturers in the world and it’s easy to see why. By producing high end, luxurious and comfortable cars BMW has solidified itself as a key player in the world of deluxe cars. It doesn&#39;t matter whether you are driving the kids around or heading off on a romantic weekend away, you can’t go wrong with a luxurious BMW. At Luxury Car Hire Abu Dhabi, we have a wide range of BMW vehicles for you to choose from. Get in touch to find out more.",
          "specs"=>[
            "engine capacity"=>"3 liter",
            "doors"=>"2",
            "seats"=>"4",
            "body type"=>"coupe",
            "top speed"=>"155 mph",
            "engine power"=>"316  bhp",
            "gear box"=>"Automatic",
          ]
        ],        
        [
          "image"=>"images/cars/aston-martin4.png",
          "make"=>"Aston Martin",
          "model"=>"DB s",
          "name"=>"aston martin dbs",
          "cat"=>"super car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"With a Porsche, you can explore Abu Dhabi in style. You can see everything that Abu Dhabi has to offer from the comfort of an incredible vehicle, at the same time as looking stylish and chic. It doesn’t matter whether you are in Abu Dhabi for business or leisure, travelling from A to B in a Porsche is sure to make everything that bit more enjoyable. Contact Luxury Car Hire Abu Dhabi to find out more about Porsche car hire.",
          "specs"=>[
            "engine capacity"=>"4.0 litre",
            "doors"=>"2",
            "seats"=>"2",
            "top speed"=>"200 mph",
            "engine power"=>"607 bhp",
            "body type"=>"Coupe",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/mclaren2.png",
          "make"=>"McLaren",
          "model"=>"570s Spider",
          "name"=>"mclaren 570s spider",
          "cat"=>"super car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"There is no denying that BMW is one of the most well known car manufacturers in the world and it’s easy to see why. By producing high end, luxurious and comfortable cars BMW has solidified itself as a key player in the world of deluxe cars. It doesn&#39;t matter whether you are driving the kids around or heading off on a romantic weekend away, you can’t go wrong with a luxurious BMW. At Luxury Car Hire Abu Dhabi, we have a wide range of BMW vehicles for you to choose from. Get in touch to find out more.",
          "specs"=>[
            "engine capacity"=>"3 liter",
            "doors"=>"2",
            "seats"=>"4",
            "body type"=>"coupe",
            "top speed"=>"155 mph",
            "engine power"=>"316  bhp",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/mclaren5.png",
          "make"=>"McLaren",
          "model"=>"540c",
          "name"=>"mclaren 540c",
          "cat"=>"super car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"There is no denying that BMW is one of the most well known car manufacturers in the world and it’s easy to see why. By producing high end, luxurious and comfortable cars BMW has solidified itself as a key player in the world of deluxe cars. It doesn&#39;t matter whether you are driving the kids around or heading off on a romantic weekend away, you can’t go wrong with a luxurious BMW. At Luxury Car Hire Abu Dhabi, we have a wide range of BMW vehicles for you to choose from. Get in touch to find out more.",
          "specs"=>[
            "engine capacity"=>"3 liter",
            "doors"=>"2",
            "seats"=>"4",
            "body type"=>"coupe",
            "top speed"=>"155 mph",
            "engine power"=>"316  bhp",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/mclaren4.png",
          "make"=>"McLaren",
          "model"=>"540c",
          "name"=>"mclaren 540c",
          "cat"=>"super car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"There is no denying that BMW is one of the most well known car manufacturers in the world and it’s easy to see why. By producing high end, luxurious and comfortable cars BMW has solidified itself as a key player in the world of deluxe cars. It doesn&#39;t matter whether you are driving the kids around or heading off on a romantic weekend away, you can’t go wrong with a luxurious BMW. At Luxury Car Hire Abu Dhabi, we have a wide range of BMW vehicles for you to choose from. Get in touch to find out more.",
          "specs"=>[
            "engine capacity"=>"3 liter",
            "doors"=>"2",
            "seats"=>"4",
            "body type"=>"coupe",
            "top speed"=>"155 mph",
            "engine power"=>"316  bhp",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/mercedes4.png",
          "make"=>"Mercedes Benz",
          "model"=>"G Class",
          "name"=>"mercedes benz g class",
          "cat"=>"suv car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"There is no denying that BMW is one of the most well known car manufacturers in the world and it’s easy to see why. By producing high end, luxurious and comfortable cars BMW has solidified itself as a key player in the world of deluxe cars. It doesn&#39;t matter whether you are driving the kids around or heading off on a romantic weekend away, you can’t go wrong with a luxurious BMW. At Luxury Car Hire Abu Dhabi, we have a wide range of BMW vehicles for you to choose from. Get in touch to find out more.",
          "specs"=>[
            "engine capacity"=>"3 liter",
            "doors"=>"2",
            "seats"=>"4",
            "body type"=>"coupe",
            "top speed"=>"155 mph",
            "engine power"=>"316  bhp",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/mercedes5.png",
          "make"=>"Mercedes Benz",
          "model"=>"G Class",
          "name"=>"mercedes benz g class",
          "cat"=>"suv car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"There is no denying that BMW is one of the most well known car manufacturers in the world and it’s easy to see why. By producing high end, luxurious and comfortable cars BMW has solidified itself as a key player in the world of deluxe cars. It doesn&#39;t matter whether you are driving the kids around or heading off on a romantic weekend away, you can’t go wrong with a luxurious BMW. At Luxury Car Hire Abu Dhabi, we have a wide range of BMW vehicles for you to choose from. Get in touch to find out more.",
          "specs"=>[
            "engine capacity"=>"3 liter",
            "doors"=>"2",
            "seats"=>"4",
            "body type"=>"coupe",
            "top speed"=>"155 mph",
            "engine power"=>"316  bhp",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/mercedes6.png",
          "make"=>"Mercedes Benz",
          "model"=>"G Class",
          "name"=>"mercedes benz g class",
          "cat"=>"suv car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"There is no denying that BMW is one of the most well known car manufacturers in the world and it’s easy to see why. By producing high end, luxurious and comfortable cars BMW has solidified itself as a key player in the world of deluxe cars. It doesn&#39;t matter whether you are driving the kids around or heading off on a romantic weekend away, you can’t go wrong with a luxurious BMW. At Luxury Car Hire Abu Dhabi, we have a wide range of BMW vehicles for you to choose from. Get in touch to find out more.",
          "specs"=>[
            "engine capacity"=>"3 liter",
            "doors"=>"2",
            "seats"=>"4",
            "body type"=>"coupe",
            "top speed"=>"155 mph",
            "engine power"=>"316  bhp",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/buggati2.png",
          "make"=>"Bugatti",
          "model"=>"Veyron",
          "name"=>"bugatti veyron",
          "cat"=>"super car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"There is no denying that BMW is one of the most well known car manufacturers in the world and it’s easy to see why. By producing high end, luxurious and comfortable cars BMW has solidified itself as a key player in the world of deluxe cars. It doesn&#39;t matter whether you are driving the kids around or heading off on a romantic weekend away, you can’t go wrong with a luxurious BMW. At Luxury Car Hire Abu Dhabi, we have a wide range of BMW vehicles for you to choose from. Get in touch to find out more.",
          "specs"=>[
            "engine capacity"=>"3 liter",
            "doors"=>"2",
            "seats"=>"4",
            "body type"=>"coupe",
            "top speed"=>"155 mph",
            "engine power"=>"316  bhp",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/buggati3.png",
          "make"=>"Bugatti",
          "model"=>"Veyron",
          "name"=>"bugati veyron",
          "cat"=>"super car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"There is no denying that BMW is one of the most well known car manufacturers in the world and it’s easy to see why. By producing high end, luxurious and comfortable cars BMW has solidified itself as a key player in the world of deluxe cars. It doesn&#39;t matter whether you are driving the kids around or heading off on a romantic weekend away, you can’t go wrong with a luxurious BMW. At Luxury Car Hire Abu Dhabi, we have a wide range of BMW vehicles for you to choose from. Get in touch to find out more.",
          "specs"=>[
            "engine capacity"=>"3 liter",
            "doors"=>"2",
            "seats"=>"4",
            "body type"=>"coupe",
            "top speed"=>"155 mph",
            "engine power"=>"316  bhp",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/bmw.png",
          "make"=>"BMW",
          "model"=>"8 Series",
          "name"=>"bmw 8 series",
          "cat"=>"luxury car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"There is no denying that BMW is one of the most well known car manufacturers in the world and it’s easy to see why. By producing high end, luxurious and comfortable cars BMW has solidified itself as a key player in the world of deluxe cars. It doesn&#39;t matter whether you are driving the kids around or heading off on a romantic weekend away, you can’t go wrong with a luxurious BMW. At Luxury Car Hire Abu Dhabi, we have a wide range of BMW vehicles for you to choose from. Get in touch to find out more.",
          "specs"=>[
            "engine capacity"=>"3 liter",
            "doors"=>"2",
            "seats"=>"4",
            "body type"=>"coupe",
            "top speed"=>"155 mph",
            "engine power"=>"316  bhp",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/bmw3.png",
          "make"=>"BMW",
          "model"=>"I8",
          "name"=>"bmw i8",
          "cat"=>"super car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"There is no denying that BMW is one of the most well known car manufacturers in the world and it’s easy to see why. By producing high end, luxurious and comfortable cars BMW has solidified itself as a key player in the world of deluxe cars. It doesn&#39;t matter whether you are driving the kids around or heading off on a romantic weekend away, you can’t go wrong with a luxurious BMW. At Luxury Car Hire Abu Dhabi, we have a wide range of BMW vehicles for you to choose from. Get in touch to find out more.",
          "specs"=>[
            "engine capacity"=>"3 liter",
            "doors"=>"2",
            "seats"=>"4",
            "body type"=>"coupe",
            "top speed"=>"155 mph",
            "engine power"=>"316  bhp",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/bmw5.png",
          "make"=>"BMW",
          "model"=>"X2 ",
          "name"=>"bmw x2",
          "cat"=>"super car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"There is no denying that BMW is one of the most well known car manufacturers in the world and it’s easy to see why. By producing high end, luxurious and comfortable cars BMW has solidified itself as a key player in the world of deluxe cars. It doesn&#39;t matter whether you are driving the kids around or heading off on a romantic weekend away, you can’t go wrong with a luxurious BMW. At Luxury Car Hire Abu Dhabi, we have a wide range of BMW vehicles for you to choose from. Get in touch to find out more.",
          "specs"=>[
            "engine capacity"=>"3 liter",
            "doors"=>"2",
            "seats"=>"4",
            "body type"=>"coupe",
            "top speed"=>"155 mph",
            "engine power"=>"316  bhp",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/r8.png",
          "make"=>"Audi",
          "model"=>"R8",
          "name"=>"audi r8",
          "cat"=>"super car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"When a lot of people think about luxury cars, they think of Audi. Audi is one of the most popular car manufacturers out there and with good reason, as Audi produces vehicles that are equal parts stylish and comfortable. One of the great things about Audi vehicles is that they are ideal for any occasion. It doesn’t matter whether you are trying to impress a business investor or you are exploring Abu Dhabi for the first time, you can do so safely with an Audi. You can choose any Audi vehicle, knowing that you will be driving from A to B in luxury. To find out more about renting an Audi, contact Luxury Car Hire Abu Dhabi.",
          "specs"=>[
            "engine capacity"=>"5.2 litre",
            "doors"=>"2",
            "top speed"=>"205 mph",
            "engine power"=>"612 bhp",
            "seats"=>"2",
            "body type"=>"coupe",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/audi.png",
          "make"=>"Audi",
          "model"=>"A3 Hatchback",
          "name"=>"audi a4 hatch",
          "cat"=>"suv car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"When a lot of people think about luxury cars, they think of Audi. Audi is one of the most popular car manufacturers out there and with good reason, as Audi produces vehicles that are equal parts stylish and comfortable. One of the great things about Audi vehicles is that they are ideal for any occasion. It doesn’t matter whether you are trying to impress a business investor or you are exploring Abu Dhabi for the first time, you can do so safely with an Audi. You can choose any Audi vehicle, knowing that you will be driving from A to B in luxury. To find out more about renting an Audi, contact Luxury Car Hire Abu Dhabi.",
          "specs"=>[
            "engine capacity"=>"5.2 litre",
            "doors"=>"2",
            "top speed"=>"205 mph",
            "engine power"=>"612 bhp",
            "seats"=>"2",
            "body type"=>"coupe",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/bentley4.png",
          "make"=>"Bentley",
          "model"=>"Continental GT Mantra",
          "name"=>"bentley continental gt mantra",
          "cat"=>"luxury car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"If there’s a car company that understands about impressing others it’s Bentley. One of the top car manufacturers in Great Britain, Bentley has long been regarded as the ‘go to’ choice for anyone who is looking for a truly luxurious driving experience. They produce some of the top high end cars seen today, all of which are guaranteed to turn heads. If you are someone who wants to stand out by enjoying the finer things in life, a Bentley is well worth considering. Find out more about renting a Bentley by contacting Luxury Car Hire Abu Dhabi.",
          "specs"=>[
            "engine capacity"=>"6.0 litre",
            "doors"=>"2",
            "seats"=>"4",
            "top speed"=>"207 mph",
            "engine power"=>"626 bhp",
            "body type"=>"coupe",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/bentley5.png",
          "make"=>"Bentley",
          "model"=>"Continental GT Mantra",
          "name"=>"bentley continental gt mantra",
          "cat"=>"luxury car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"If there’s a car company that understands about impressing others it’s Bentley. One of the top car manufacturers in Great Britain, Bentley has long been regarded as the ‘go to’ choice for anyone who is looking for a truly luxurious driving experience. They produce some of the top high end cars seen today, all of which are guaranteed to turn heads. If you are someone who wants to stand out by enjoying the finer things in life, a Bentley is well worth considering. Find out more about renting a Bentley by contacting Luxury Car Hire Abu Dhabi.",
          "specs"=>[
            "engine capacity"=>"6.0 litre",
            "doors"=>"2",
            "seats"=>"4",
            "top speed"=>"207 mph",
            "engine power"=>"626 bhp",
            "body type"=>"coupe",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/cadillac1.png",
          "make"=>"Cadillac",
          "model"=>"Escalade Base 4x2",
          "name"=>"cadillac escalade base 4x2",
          "cat"=>"suv car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"Rather than settling for a subpar vehicle, choose a Cadillac. From the moment you sit behind the wheel, you will see what all the fuss is about. A Cadillac is all about a luxurious journey in a chic and stylish car, which is why a Cadillac is the dream car for many people. At Luxury Car Hire Abu Dhabi, you can hire a Cadillac without having to spend a fortune. We are able to offer them at reasonable rates, which means that you don’t have to miss out. Contact us today to find out more.",
          "specs"=>[
            "engine capacity"=>"6.2 litre",
            "doors"=>"5",
            "seats"=>"7",
            "top speed"=>"207 mph",
            "engine power"=>"420  bhp",
            "body type"=>"4 x 4, SUV",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/cadillac2.png",
          "make"=>"Cadillac",
          "model"=>"CTS 3.6",
          "name"=>"cadillac cts 3.6",
          "cat"=>"sedan car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"Rather than settling for a subpar vehicle, choose a Cadillac. From the moment you sit behind the wheel, you will see what all the fuss is about. A Cadillac is all about a luxurious journey in a chic and stylish car, which is why a Cadillac is the dream car for many people. At Luxury Car Hire Abu Dhabi, you can hire a Cadillac without having to spend a fortune. We are able to offer them at reasonable rates, which means that you don’t have to miss out. Contact us today to find out more.",
          "specs"=>[
            "engine capacity"=>"6.2 litre",
            "doors"=>"4",
            "seats"=>"5",
            "top speed"=>"207 mph",
            "engine power"=>"420  bhp",
            "body type"=>"sedan",
            "gear box"=>"Automatic",
          ]
        ],
        // [
        //   "image"=>"images/cars/cadillac3.png",
        //   "make"=>"Cadillac",
        //   "model"=>"CTS 3.6",
        //   "name"=>"cadillac cts 3.6",
        //   "cat"=>"sedan car",
        //   "daily_rate"=>1775,
        //   "special_rate"=>1775,
        //   "desc"=>"Rather than settling for a subpar vehicle, choose a Cadillac. From the moment you sit behind the wheel, you will see what all the fuss is about. A Cadillac is all about a luxurious journey in a chic and stylish car, which is why a Cadillac is the dream car for many people. At Luxury Car Hire Abu Dhabi, you can hire a Cadillac without having to spend a fortune. We are able to offer them at reasonable rates, which means that you don’t have to miss out. Contact us today to find out more.",
        //   "specs"=>[
        //     "engine capacity"=>"6.2 litre",
        //     "doors"=>"4",
        //     "seats"=>"5",
        //     "top speed"=>"207 mph",
        //     "engine power"=>"420  bhp",
        //     "body type"=>"sedan",
        //     "gear box"=>"Automatic",
        //   ]
        // ],
        [
          "image"=>"images/cars/chevrolet.png",
          "make"=>"Chevrolet",
          "model"=>"Camaro SS 1SS",
          "name"=>"chevrolet camaro ss 1ss",
          "cat"=>"muscle car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"When it comes to sleek and stylish cars, you can’t do much better than a Chevrolet. All of the Chevrolet chicles we have at Luxury Car Hire Abu Dhabi are top of the range and fitted with state of the art technology, which means that they really do everything you need them to. Travelling from A to B in a CHevrolet is comfortable for the driver, comfortable for the passengers and impressive to anyone you pass. Contact Luxury Car Hire Abu Dhabi to find out more.",
          "specs"=>[
            "engine capacity"=>"6.2 litre",
            "doors"=>"2",
            "seats"=>"4",
            "top speed"=>"198  mph",
            "engine power"=>"455 bhp",
            "body type"=>"Coupe",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/ferrari.png",
          "make"=>"Ferrari",
          "model"=>"F8 Tributo",
          "name"=>"ferrari f8 tributo",
          "cat"=>"super car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"When it comes to fast cars and impressing your friends, you can’t go wrong with a Ferrari. At Luxury Car Hire Abu Dhabi, we know just how popular Ferraris are and that&#39;s why we offer the very best. They are sporty and fast, which means that you will stand out for all the right reasons. They are comfortable and classic, which means that you can arrive in style and ready to enjoy your time in Abu Dhabi. Though a Ferrari isn’t for the nervous drivers out there, they are perfect for anyone with the need for speed. To find out more about renting a Ferrir in Abu Dhabi, get in touch.",
          "specs"=>[
            "engine capacity"=>"3.9 litre",
            "doors"=>"2",
            "seats"=>"2",
            "top speed"=>"205.1 mph",
            "engine power"=>"530 bhp",
            "body type"=>"Coupe",
            "gear box"=>"Automatic",
          ]
        ],
        // [
        //   "image"=>"images/cars/ford-mustang2.png",
        //   "make"=>"Ford",
        //   "model"=>"Mustang 5.0 GT Fastback",
        //   "name"=>"ford mustang 5.0 gt fastback",
        //   "cat"=>"muscle car",
        //   "daily_rate"=>1775,
        //   "special_rate"=>1775,
        //   "desc"=>"A lot of people make the mistake of assuming that Ford vehicles are generic and standard, but that isn’t the case. It doesn’t matter which Ford model you choose, you will truly enjoy your journey in Abu Dhabi. Ford cars are reliable and affordable, which makes renting one a worthwhile investment. You won’t need to worry about being disappointed or needing more, as Ford cars really do offer everything. Contact Luxury Car Hire Abu Dhabi to find out more about Ford car hire.",
        //   "specs"=>[
        //     "engine capacity"=>"5.0 litre",
        //     "doors"=>"2",
        //     "seats"=>"2",
        //     "top speed"=>"154.7 mph",
        //     "engine power"=>"460 bhp",
        //     "body type"=>"Coupe",
        //     "gear box"=>"Automatic",
        //   ]
        // ],
        [
          "image"=>"images/cars/lamborghini3.png",
          "make"=>"Lamborghini",
          "model"=>"Aventador",
          "cat"=>"super car",
          "name"=>"lamborghini aventador",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"When it comes to renting a Lamborghini in Abu Dhabi, we are here to take care of everything. At Luxury Car Hire Abu Dhabi, we are passionate about luxury cars and we know that Lamborghini vehicles are a huge part of this. Lamborghini is known for producing some of the most impressive, high end cars on the market. They are perfect for anyone who wants to see Abu Dhabi in a unique, fast and impressive way. Find out more about Lamborghini car hire by getting in touch.",
          "specs"=>[
            "engine capacity"=>"6.5 litre",
            "doors"=>"2",
            "seats"=>"2",
            "top speed"=>"218.1 mph",
            "engine power"=>"729 bhp",
            "body type"=>"Coupe",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/lamborghini6.png",
          "make"=>"Lamborghini",
          "model"=>"Aventador",
          "cat"=>"super car",
          "name"=>"lamborghini aventador",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"When it comes to renting a Lamborghini in Abu Dhabi, we are here to take care of everything. At Luxury Car Hire Abu Dhabi, we are passionate about luxury cars and we know that Lamborghini vehicles are a huge part of this. Lamborghini is known for producing some of the most impressive, high end cars on the market. They are perfect for anyone who wants to see Abu Dhabi in a unique, fast and impressive way. Find out more about Lamborghini car hire by getting in touch.",
          "specs"=>[
            "engine capacity"=>"6.5 litre",
            "doors"=>"2",
            "seats"=>"2",
            "top speed"=>"218.1 mph",
            "engine power"=>"729 bhp",
            "body type"=>"Coupe",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/lamborghini4.png",
          "make"=>"Lamborghini",
          "model"=>"Aventador",
          "cat"=>"super car",
          "name"=>"lamborghini aventador",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"When it comes to renting a Lamborghini in Abu Dhabi, we are here to take care of everything. At Luxury Car Hire Abu Dhabi, we are passionate about luxury cars and we know that Lamborghini vehicles are a huge part of this. Lamborghini is known for producing some of the most impressive, high end cars on the market. They are perfect for anyone who wants to see Abu Dhabi in a unique, fast and impressive way. Find out more about Lamborghini car hire by getting in touch.",
          "specs"=>[
            "engine capacity"=>"6.5 litre",
            "doors"=>"2",
            "seats"=>"2",
            "top speed"=>"218.1 mph",
            "engine power"=>"729 bhp",
            "body type"=>"Coupe",
            "gear box"=>"Automatic",
          ]
        ],
        // [
        //   "image"=>"images/cars/lamborghini.jpg",
        //   "make"=>"Lamborghini",
        //   "model"=>"Aventador",
        //   "cat"=>"super car",
        //   "name"=>"lamborghini aventador",
        //   "daily_rate"=>1775,
        //   "special_rate"=>1775,
        //   "desc"=>"When it comes to renting a Lamborghini in Abu Dhabi, we are here to take care of everything. At Luxury Car Hire Abu Dhabi, we are passionate about luxury cars and we know that Lamborghini vehicles are a huge part of this. Lamborghini is known for producing some of the most impressive, high end cars on the market. They are perfect for anyone who wants to see Abu Dhabi in a unique, fast and impressive way. Find out more about Lamborghini car hire by getting in touch.",
        //   "specs"=>[
        //     "engine capacity"=>"6.5 litre",
        //     "doors"=>"2",
        //     "seats"=>"2",
        //     "top speed"=>"218.1 mph",
        //     "engine power"=>"729 bhp",
        //     "body type"=>"Coupe",
        //     "gear box"=>"Automatic",
        //   ]
        // ],
        // [
        //   "image"=>"images/cars/mercedes.jpg",
        //   "make"=>"Mercedes",
        //   "model"=>"E Class Coupe",
        //   "cat"=>"luxury car",
        //   "name"=>"mercedes e class coupe",
        //   "daily_rate"=>1775,
        //   "special_rate"=>1775,
        //   "desc"=>"As one of the world’s most well known car manufacturers, Mercedes Benz really does know what it’s doing. There isn’t a Mercedes Benz out there that won’t impress your passengers, whether they be friends or work colleagues. We offer a wide range of different Mercedes Benz vehicles, so you can choose the one that’s perfect for you. If you need a convertible, you can have one. If you need an SUV, you can have one. Just contact Luxury Car Hire Abu Dhabi and make a booking.",
        //   "specs"=>[
        //     "engine capacity"=>"4.0 litre",
        //     "doors"=>"2",
        //     "seats"=>"2",
        //     "top speed"=>"211.9  mph",
        //     "engine power"=>"530 bhp",
        //     "body type"=>"Coupe",
        //     "gear box"=>"Automatic",
        //   ]
        // ],
        [
          "image"=>"images/cars/mclaren1.png",
          "make"=>"McLaren",
          "model"=>"720S",
          "cat"=>"super car",
          "name"=>"mclaren 720s",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"Not only do McLaren vehicles look great, but they drive well too. You can get in, knowing that you will enjoy your journey at all times. It doesn’t matter whether you are zipping here and there or going on a much longer journey, you won’t be disappointed by a McLaren. There’s no need to choose a standard car, not when there are fantastic McLaren models available. Contact Luxury Car Hire Abu Dhabi to find out more and to make a booking.",
          "specs"=>[
            "engine capacity"=>"4.0 litre",
            "doors"=>"2",
            "seats"=>"2",
            "top speed"=>"211.9  mph",
            "engine power"=>"530 bhp",
            "body type"=>"Coupe",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/porsche5.png",
          "make"=>"Porsche",
          "model"=>"911 Turbo S",
          "name"=>"porsche 911 turbo s",
          "cat"=>"super car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"With a Porsche, you can explore Abu Dhabi in style. You can see everything that Abu Dhabi has to offer from the comfort of an incredible vehicle, at the same time as looking stylish and chic. It doesn’t matter whether you are in Abu Dhabi for business or leisure, travelling from A to B in a Porsche is sure to make everything that bit more enjoyable. Contact Luxury Car Hire Abu Dhabi to find out more about Porsche car hire.",
          "specs"=>[
            "engine capacity"=>"4.0 litre",
            "doors"=>"2",
            "seats"=>"2",
            "top speed"=>"200 mph",
            "engine power"=>"607 bhp",
            "body type"=>"Coupe",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/range-rover1.png",
          "make"=>"Range Rover",
          "model"=>"Evoque Cabrio",
          "cat"=>"suv car",
          "name"=>"range rover evoque cabrio",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"If anyone produces some of the most famous cars in the world, it’s Range Rover. There’s nothing that a Range Rover cannot do, which is why they are the ‘go to’ vehicles for many people in Abu Dhabi. You can rely on a Range Rover for everything, whether that be getting you to and from the airport comfortable or ferrying you around the city in style. Whichever Range Rover you choose, you will impress everyone you pass. We have a wide range of Range Rovers for you to choose from, just get in touch with Luxury Car Hire Abu Dhabi and let us know what you need.",
          "specs"=>[
            "engine capacity"=>"2.0 litre",
            "doors"=>"5",
            "seats"=>"5",
            "top speed"=>"155 mph",
            "engine power"=>"246 bhp",
            "body type"=>"SUV ",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/rolls_royce2.png",
          "make"=>"Rolls Royce",
          "cat"=>"luxury car",
          "model"=>"Wraith Coupe",
          "name"=>"rolls royce wraith coupe",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"It’s not every day that you get to drive a Rolls Royce, so why not make your trip to Abu Dhabi a time to treat yourself. Rolls Royce vehicles are deluxe and extravagant, which means that they always impress. They are ideal for business purposes, as you can collect potential investors in a way that showcases just how serious you take them. They are great for leisure and vacations, as you can explore Abu Dhabi in a way like no other. When you choose Luxury Car Hire Abu Dhabi, you can hire a Rolls Royce for an affordable cost.",
          "specs"=>[
            "engine capacity"=>"6.6 litre",
            "doors"=>"5",
            "seats"=>"5",
            "top speed"=>"155 mph",
            "engine power"=>"779 bhp",
            "body type"=>"saloon ",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/rolls_royce3.png",
          "make"=>"Rolls Royce",
          "cat"=>"luxury car",
          "model"=>"Dawn Aero",
          "name"=>"Rolls Royce Dawn Aero",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"It’s not every day that you get to drive a Rolls Royce, so why not make your trip to Abu Dhabi a time to treat yourself. Rolls Royce vehicles are deluxe and extravagant, which means that they always impress. They are ideal for business purposes, as you can collect potential investors in a way that showcases just how serious you take them. They are great for leisure and vacations, as you can explore Abu Dhabi in a way like no other. When you choose Luxury Car Hire Abu Dhabi, you can hire a Rolls Royce for an affordable cost.",
          "specs"=>[
            "engine capacity"=>"6.6 litre",
            "doors"=>"5",
            "seats"=>"5",
            "top speed"=>"155 mph",
            "engine power"=>"779 bhp",
            "body type"=>"saloon ",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/rolls_royce1.jpg",
          "make"=>"Rolls Royce",
          "cat"=>"luxury car",
          "model"=>"dawn",
          "name"=>"rolls royce dawn",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"It’s not every day that you get to drive a Rolls Royce, so why not make your trip to Abu Dhabi a time to treat yourself. Rolls Royce vehicles are deluxe and extravagant, which means that they always impress. They are ideal for business purposes, as you can collect potential investors in a way that showcases just how serious you take them. They are great for leisure and vacations, as you can explore Abu Dhabi in a way like no other. When you choose Luxury Car Hire Abu Dhabi, you can hire a Rolls Royce for an affordable cost.",
          "specs"=>[
            "engine capacity"=>"6.6 litre",
            "doors"=>"5",
            "seats"=>"5",
            "top speed"=>"155 mph",
            "engine power"=>"779 bhp",
            "body type"=>"saloon ",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/tesla.png",
          "make"=>"Tesla",
          "model"=>"model s",
          "name"=>"tesla model s",
          "cat"=>"luxury car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"There’s no denying that Tesla has made an impact with its high tech vehicles and incredible cars, which is why they are so popular. When you are driving a Tesla, you can do so with the knowledge that you are driving one of the most modern and high tech cars in the world. Not everyone has had the opportunity to drive a Tesla, so hiring one is sure to impress everyone. You&#39;ll experience Abu Dhabi in a unique way when you are traveling in a Tesla. You can find out more by getting in touch with the Luxury Car Hire Abu Dhabi team.",
          "specs"=>[
            "engine capacity"=>"2.0 litre",
            "doors"=>"5",
            "seats"=>"5",
            "top speed"=>"155 mph",
            "engine power"=>"246 bhp",
            "body type"=>"SUV ",
            "gear box"=>"Automatic",
          ]
        ],        
        [
          "image"=>"images/cars/lamborghini5.png",
          "make"=>"lamborghini",
          "model"=>"huracan",
          "cat"=>"super car",
          "name"=>"lamborghini huracan",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"When it comes to renting a Lamborghini in Abu Dhabi, we are here to take care of everything. At Luxury Car Hire Abu Dhabi, we are passionate about luxury cars and we know that Lamborghini vehicles are a huge part of this. Lamborghini is known for producing some of the most impressive, high end cars on the market. They are perfect for anyone who wants to see Abu Dhabi in a unique, fast and impressive way. Find out more about Lamborghini car hire by getting in touch.",
          "specs"=>[
            "engine capacity"=>"6.5 litre",
            "doors"=>"2",
            "seats"=>"2",
            "top speed"=>"218.1 mph",
            "engine power"=>"729 bhp",
            "body type"=>"Coupe",
            "gear box"=>"Automatic",
          ]
        ],
        
        [
          "image"=>"images/cars/porsche3.png",
          "make"=>"Porsche",
          "model"=>"Macan GTs",
          "name"=>"porsche macan gts",
          "cat"=>"super car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"With a Porsche, you can explore Abu Dhabi in style. You can see everything that Abu Dhabi has to offer from the comfort of an incredible vehicle, at the same time as looking stylish and chic. It doesn’t matter whether you are in Abu Dhabi for business or leisure, travelling from A to B in a Porsche is sure to make everything that bit more enjoyable. Contact Luxury Car Hire Abu Dhabi to find out more about Porsche car hire.",
          "specs"=>[
            "engine capacity"=>"4.0 litre",
            "doors"=>"2",
            "seats"=>"2",
            "top speed"=>"200 mph",
            "engine power"=>"607 bhp",
            "body type"=>"Coupe",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/porsche1.png",
          "make"=>"Porsche",
          "model"=>"Cayenne 2011",
          "name"=>"porsche cayenne 2011",
          "cat"=>"suv car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"With a Porsche, you can explore Abu Dhabi in style. You can see everything that Abu Dhabi has to offer from the comfort of an incredible vehicle, at the same time as looking stylish and chic. It doesn’t matter whether you are in Abu Dhabi for business or leisure, travelling from A to B in a Porsche is sure to make everything that bit more enjoyable. Contact Luxury Car Hire Abu Dhabi to find out more about Porsche car hire.",
          "specs"=>[
            "engine capacity"=>"4.0 litre",
            "doors"=>"2",
            "seats"=>"2",
            "top speed"=>"200 mph",
            "engine power"=>"607 bhp",
            "body type"=>"Coupe",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/land-rover-land.png",
          "make"=>"Land Rover",
          "model"=>"Discovery",
          "name"=>"land rover discovery",
          "cat"=>"Suv car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"With a Porsche, you can explore Abu Dhabi in style. You can see everything that Abu Dhabi has to offer from the comfort of an incredible vehicle, at the same time as looking stylish and chic. It doesn’t matter whether you are in Abu Dhabi for business or leisure, travelling from A to B in a Porsche is sure to make everything that bit more enjoyable. Contact Luxury Car Hire Abu Dhabi to find out more about Porsche car hire.",
          "specs"=>[
            "engine capacity"=>"4.0 litre",
            "doors"=>"2",
            "seats"=>"2",
            "top speed"=>"200 mph",
            "engine power"=>"607 bhp",
            "body type"=>"Coupe",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/ferrari1.png",
          "make"=>"Ferrari",
          "model"=>"F12",
          "name"=>"ferrari f12",
          "cat"=>"super car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"With a Porsche, you can explore Abu Dhabi in style. You can see everything that Abu Dhabi has to offer from the comfort of an incredible vehicle, at the same time as looking stylish and chic. It doesn’t matter whether you are in Abu Dhabi for business or leisure, travelling from A to B in a Porsche is sure to make everything that bit more enjoyable. Contact Luxury Car Hire Abu Dhabi to find out more about Porsche car hire.",
          "specs"=>[
            "engine capacity"=>"4.0 litre",
            "doors"=>"2",
            "seats"=>"2",
            "top speed"=>"200 mph",
            "engine power"=>"607 bhp",
            "body type"=>"Coupe",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/aston-martin.png",
          "make"=>"Aston Martin",
          "model"=>"DBs V12",
          "name"=>"aston martin dbs v12",
          "cat"=>"super car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"With a Porsche, you can explore Abu Dhabi in style. You can see everything that Abu Dhabi has to offer from the comfort of an incredible vehicle, at the same time as looking stylish and chic. It doesn’t matter whether you are in Abu Dhabi for business or leisure, travelling from A to B in a Porsche is sure to make everything that bit more enjoyable. Contact Luxury Car Hire Abu Dhabi to find out more about Porsche car hire.",
          "specs"=>[
            "engine capacity"=>"4.0 litre",
            "doors"=>"2",
            "seats"=>"2",
            "top speed"=>"200 mph",
            "engine power"=>"607 bhp",
            "body type"=>"Coupe",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/ferrari2.png",
          "make"=>"Ferrari",
          "model"=>"458 Italia",
          "name"=>"ferrari",
          "cat"=>"super car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"With a Porsche, you can explore Abu Dhabi in style. You can see everything that Abu Dhabi has to offer from the comfort of an incredible vehicle, at the same time as looking stylish and chic. It doesn’t matter whether you are in Abu Dhabi for business or leisure, travelling from A to B in a Porsche is sure to make everything that bit more enjoyable. Contact Luxury Car Hire Abu Dhabi to find out more about Porsche car hire.",
          "specs"=>[
            "engine capacity"=>"4.0 litre",
            "doors"=>"2",
            "seats"=>"2",
            "top speed"=>"200 mph",
            "engine power"=>"607 bhp",
            "body type"=>"Coupe",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/ferrari4.png",
          "make"=>"Ferrari",
          "model"=>"Califorina",
          "name"=>"ferrari califorina",
          "cat"=>"Super car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"With a Porsche, you can explore Abu Dhabi in style. You can see everything that Abu Dhabi has to offer from the comfort of an incredible vehicle, at the same time as looking stylish and chic. It doesn’t matter whether you are in Abu Dhabi for business or leisure, travelling from A to B in a Porsche is sure to make everything that bit more enjoyable. Contact Luxury Car Hire Abu Dhabi to find out more about Porsche car hire.",
          "specs"=>[
            "engine capacity"=>"4.0 litre",
            "doors"=>"2",
            "seats"=>"2",
            "top speed"=>"200 mph",
            "engine power"=>"607 bhp",
            "body type"=>"Coupe",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/ferrari6.png",
          "make"=>"Ferrari",
          "model"=>"599 ",
          "name"=>"ferrari 599 ",
          "cat"=>"Super car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"With a Porsche, you can explore Abu Dhabi in style. You can see everything that Abu Dhabi has to offer from the comfort of an incredible vehicle, at the same time as looking stylish and chic. It doesn’t matter whether you are in Abu Dhabi for business or leisure, travelling from A to B in a Porsche is sure to make everything that bit more enjoyable. Contact Luxury Car Hire Abu Dhabi to find out more about Porsche car hire.",
          "specs"=>[
            "engine capacity"=>"4.0 litre",
            "doors"=>"2",
            "seats"=>"2",
            "top speed"=>"200 mph",
            "engine power"=>"607 bhp",
            "body type"=>"Coupe",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/mercedes3.png",
          "make"=>"Mercedes Benz",
          "model"=>"C Class ",
          "name"=>"mercedes c class ",
          "cat"=>"Luxury car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"With a Porsche, you can explore Abu Dhabi in style. You can see everything that Abu Dhabi has to offer from the comfort of an incredible vehicle, at the same time as looking stylish and chic. It doesn’t matter whether you are in Abu Dhabi for business or leisure, travelling from A to B in a Porsche is sure to make everything that bit more enjoyable. Contact Luxury Car Hire Abu Dhabi to find out more about Porsche car hire.",
          "specs"=>[
            "engine capacity"=>"4.0 litre",
            "doors"=>"2",
            "seats"=>"2",
            "top speed"=>"200 mph",
            "engine power"=>"607 bhp",
            "body type"=>"Coupe",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/mercedes2.png",
          "make"=>"Mercedes Benz",
          "model"=>"X6 ",
          "name"=>"mercedes x6 ",
          "cat"=>"luxury car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"With a Porsche, you can explore Abu Dhabi in style. You can see everything that Abu Dhabi has to offer from the comfort of an incredible vehicle, at the same time as looking stylish and chic. It doesn’t matter whether you are in Abu Dhabi for business or leisure, travelling from A to B in a Porsche is sure to make everything that bit more enjoyable. Contact Luxury Car Hire Abu Dhabi to find out more about Porsche car hire.",
          "specs"=>[
            "engine capacity"=>"4.0 litre",
            "doors"=>"2",
            "seats"=>"2",
            "top speed"=>"200 mph",
            "engine power"=>"607 bhp",
            "body type"=>"Coupe",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/aston-martin1.png",
          "make"=>"Aston Martin",
          "model"=>"DB11",
          "name"=>"aston martin db11",
          "cat"=>"luxury car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"With a Porsche, you can explore Abu Dhabi in style. You can see everything that Abu Dhabi has to offer from the comfort of an incredible vehicle, at the same time as looking stylish and chic. It doesn’t matter whether you are in Abu Dhabi for business or leisure, travelling from A to B in a Porsche is sure to make everything that bit more enjoyable. Contact Luxury Car Hire Abu Dhabi to find out more about Porsche car hire.",
          "specs"=>[
            "engine capacity"=>"4.0 litre",
            "doors"=>"2",
            "seats"=>"2",
            "top speed"=>"200 mph",
            "engine power"=>"607 bhp",
            "body type"=>"Coupe",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/aston-martin2.png",
          "make"=>"Aston Martin",
          "model"=>"DB9",
          "name"=>"aston martin db9 ",
          "cat"=>"luxury car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"With a Porsche, you can explore Abu Dhabi in style. You can see everything that Abu Dhabi has to offer from the comfort of an incredible vehicle, at the same time as looking stylish and chic. It doesn’t matter whether you are in Abu Dhabi for business or leisure, travelling from A to B in a Porsche is sure to make everything that bit more enjoyable. Contact Luxury Car Hire Abu Dhabi to find out more about Porsche car hire.",
          "specs"=>[
            "engine capacity"=>"4.0 litre",
            "doors"=>"2",
            "seats"=>"2",
            "top speed"=>"200 mph",
            "engine power"=>"607 bhp",
            "body type"=>"Coupe",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/tesla1.png",
          "make"=>"Tesla",
          "model"=>"Model S",
          "name"=>"tesla model s ",
          "cat"=>"luxury car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"With a Porsche, you can explore Abu Dhabi in style. You can see everything that Abu Dhabi has to offer from the comfort of an incredible vehicle, at the same time as looking stylish and chic. It doesn’t matter whether you are in Abu Dhabi for business or leisure, travelling from A to B in a Porsche is sure to make everything that bit more enjoyable. Contact Luxury Car Hire Abu Dhabi to find out more about Porsche car hire.",
          "specs"=>[
            "engine capacity"=>"4.0 litre",
            "doors"=>"2",
            "seats"=>"2",
            "top speed"=>"200 mph",
            "engine power"=>"607 bhp",
            "body type"=>"Coupe",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/tesla3.png",
          "make"=>"Tesla",
          "model"=>"Model S",
          "name"=>"tesla model s ",
          "cat"=>"luxury car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"With a Porsche, you can explore Abu Dhabi in style. You can see everything that Abu Dhabi has to offer from the comfort of an incredible vehicle, at the same time as looking stylish and chic. It doesn’t matter whether you are in Abu Dhabi for business or leisure, travelling from A to B in a Porsche is sure to make everything that bit more enjoyable. Contact Luxury Car Hire Abu Dhabi to find out more about Porsche car hire.",
          "specs"=>[
            "engine capacity"=>"4.0 litre",
            "doors"=>"2",
            "seats"=>"2",
            "top speed"=>"200 mph",
            "engine power"=>"607 bhp",
            "body type"=>"Coupe",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/aston-martin3.png",
          "make"=>"Aston Martin",
          "model"=>"Vanquish Preço",
          "name"=>"aston martin",
          "cat"=>"super car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"With a Porsche, you can explore Abu Dhabi in style. You can see everything that Abu Dhabi has to offer from the comfort of an incredible vehicle, at the same time as looking stylish and chic. It doesn’t matter whether you are in Abu Dhabi for business or leisure, travelling from A to B in a Porsche is sure to make everything that bit more enjoyable. Contact Luxury Car Hire Abu Dhabi to find out more about Porsche car hire.",
          "specs"=>[
            "engine capacity"=>"4.0 litre",
            "doors"=>"2",
            "seats"=>"2",
            "top speed"=>"200 mph",
            "engine power"=>"607 bhp",
            "body type"=>"Coupe",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/lexus.png",
          "make"=>"Lexus",
          "model"=>"LC 500",
          "name"=>"lexus lc 500",
          "cat"=>"super car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"With a Porsche, you can explore Abu Dhabi in style. You can see everything that Abu Dhabi has to offer from the comfort of an incredible vehicle, at the same time as looking stylish and chic. It doesn’t matter whether you are in Abu Dhabi for business or leisure, travelling from A to B in a Porsche is sure to make everything that bit more enjoyable. Contact Luxury Car Hire Abu Dhabi to find out more about Porsche car hire.",
          "specs"=>[
            "engine capacity"=>"4.0 litre",
            "doors"=>"2",
            "seats"=>"2",
            "top speed"=>"200 mph",
            "engine power"=>"607 bhp",
            "body type"=>"Coupe",
            "gear box"=>"Automatic",
          ]
        ],
        [
          "image"=>"images/cars/lexus1.png",
          "make"=>"Lexus",
          "model"=>"LC 500",
          "name"=>"lexus lc 500",
          "cat"=>"super car",
          "daily_rate"=>1775,
          "special_rate"=>1775,
          "desc"=>"With a Porsche, you can explore Abu Dhabi in style. You can see everything that Abu Dhabi has to offer from the comfort of an incredible vehicle, at the same time as looking stylish and chic. It doesn’t matter whether you are in Abu Dhabi for business or leisure, travelling from A to B in a Porsche is sure to make everything that bit more enjoyable. Contact Luxury Car Hire Abu Dhabi to find out more about Porsche car hire.",
          "specs"=>[
            "engine capacity"=>"4.0 litre",
            "doors"=>"2",
            "seats"=>"2",
            "top speed"=>"200 mph",
            "engine power"=>"607 bhp",
            "body type"=>"Coupe",
            "gear box"=>"Automatic",
          ]
        ],
      ],
    ];
  // fleet component ==========================================


  // ==================== Car Logo ================================
  $car_logos = [
    [
      "name"=>capitalise("rolls royce"),
      "image"=>"/images/car_logos/rolls.png",
    ],
    [
      "name"=>capitalise("audi"),
      "image"=>"/images/car_logos/audi.jpg",
    ],
    [
      "name"=>capitalise("bentley"),
      "image"=>"/images/car_logos/bentley.jpg",
    ],
    [
      "name"=>capitalise("BMW"),
      "image"=>"/images/car_logos/bmw.jpg",
    ],
    [
      "name"=>capitalise("cadillac"),
      "image"=>"/images/car_logos/cadillac.jpg",
    ],

    [
      "name"=>capitalise("ferrari"),
      "image"=>"/images/car_logos/ferrari.jpg",
    ],
    
    [
      "name"=>capitalise("lamborghini"),
      "image"=>"/images/car_logos/lamborghini.png",
    ],
    [
      "name"=>capitalise("land rover"),
      "image"=>"/images/car_logos/land_rover.jpg",
    ],

    [
      "name"=>capitalise("mercedes"),
      "image"=>"/images/car_logos/mercedes.jpg",
    ],
    
    [
      "name"=>capitalise("tesla"),
      "image"=>"/images/car_logos/tesla.png",
    ],

    [
      "name"=>capitalise("aston martin"),
      "image"=>"/images/car_logos/aston-martin.jpg",
    ],
    
    [
      "name"=>capitalise("mcLaren"),
      "image"=>"/images/car_logos/mclaren.png",
    ],

    [
      "name"=>capitalise("bugatti"),
      "image"=>"/images/car_logos/bugatti.png",
    ],
    
    [
      "name"=>capitalise("porsche"),
      "image"=>"/images/car_logos/porsche1.jpg",
    ],
  ];
  // ==================== Car Logo ================================


  // faq component =====================================
    $faq_component = [
      "list"=>[
        [
          "q"=>"Who Can Rent a Luxury Vehicle from VIP Car Hire Dubai?",
          "a"=>["At VIP Car Hire Dubai, we offer our services to everyone. This includes people from Dubai and from elsewhere."] 
        ],
        [
          "q"=>"Why Should You Choose VIP Car Hire Dubai?",
          "a"=>["We offer a professional, reliable and affordable service. You can trust us to take care of your luxury car rental, whether you are renting for one day or longer."]
        ],
        [
          "q"=>"What Rental Cars Do You Offer?",
          "a"=>["Rather than offering one or two impressive vehicles, we offer a wide range. This includes BMW, Range Rover, Rolls Royce and more."]
        ],
        [
          "q"=>"Is Renting a Luxury Car Expensive?",
          "a"=>["A lot of people incorrectly assume that luxury car rental is expensive, but this isn’t true. We offer affordable and budget friendly prices."]
        ],
        [
          "q"=>"Why Are Your Car Rental Quotes So Affordable?",
          "a"=>["Though we could charge our customers more, there is really no need to. We are able to source affordable rental cars, regardless of what you are looking for."]
        ],
        [
          "q"=>"Where Do I Collect My Rental Vehicle?",
          "a"=>["You can collect your rental vehicle from wherever suits you, such as at the airport or the hotel that you are staying in."] 
        ],
        [
          "q"=>"Are Your Vehicles Checked and Safe?",
          "a"=>["Yes, all of our vehicles are regularly checked and safe for passengers. They are high quality, professionally checked and secure."]
        ],
        [
          "q"=>"Are Your Vehicles Fully Insured?",
          "a"=>["When you rent a luxury vehicle with VIP Car Hire Dubai you will be fully insured. Insurance is not something that you will need to arrange. "]
        ],
        [
          "q"=>"Can I Rent a Car for Corporate Purposes?",
          "a"=>["Yes, you can rent a car for any purpose. A lot of businesses hire luxury cars to impress clients, investors and corporate guests."]
        ],
        [
          "q"=>"How Long Can I Rent a Luxury Vehicle For?",
          "a"=>["We offer short term and long term rental options, which means that you can rent a luxury vehicle for as long as you need."]
        ],
        [
          "q"=>"How Far in Advance Do I Need to Book?",
          "a"=>["We recommend booking in advance to ensure that you are able to secure your ideal vehicle. However, we do accept last minute bookings."]
        ],
        [
          "q"=>"How Do I Make a Rental Booking?",
          "a"=>["Making a rental booking with VIP Car Hire Dubai is quick and easy, as everything is done online."]
        ],
        [
          "q"=>"Do You Offer Long Term Car Rental?",
          "a"=>["Yes, we offer long term car rental options. This is ideal if you are in between permanent vehicles or you are planning to stay in Dubai for a number of weeks."]
        ],
        [
          "q"=>"Can I Book an Airport Transfer Service?",
          "a"=>["If you want to jump into a luxury vehicle when you first arrive in Dubai, you can book an airport transfer service. The car will be ready for you the moment you land."]
        ],
        [
          "q"=>"Can I Choose Any of Your Fleet Vehicles?",
          "a"=>["You can pick any of our fleet vehicles, the choice really is yours. There are a lot of vehicles to choose from, so be sure to browse and consider your options."]
        ],
        [
          "q"=>"Do You Offer Chauffeur and Driver Services?",
          "a"=>["If you want someone else to take care of the driving, you can book a chauffeur or driver service. Our drivers are experienced, safe and professional."]
        ],
        [
          "q"=>"Are Luxury Vehicles Suitable for Vacations?",
          "a"=>["Renting a luxury vehicle can transform your vacation. You can spend your entire time in Dubai travelling in comfort and style."] 
        ],
        [
          "q"=>"Do You Offer Larger Vehicles for Many Passengers?",
          "a"=>["We offer a wide range of vehicles, including those that can accommodate a large number of passengers."]
        ],
        [
          "q"=>"What Do I Do If There’s a Problem With My Vehicle?",
          "a"=>["If there is a problem with your vehicle, you can contact VIP Car Hire Dubai."]
        ],
        [
          "q"=>"How Can I Find Out More About VIP Car Hire Dubai?",
          "a"=>["Contact VIP Car Hire Dubai to find out more about renting a deluxe car in Dubai.  We are always there to offer help and advice."]
        ]
      ]
    ];
  // faq component =====================================



  // footer component =========================
  $footer_content = [
    "label"=>$site_name,
    "copyright"=>"ioioi",
    "alink"=>alink("/terms",capitalise("privacy policy | Terms and Condition"))
  ];
  // footer component =========================
// component variables =======================================

return [
  "site_info"=>[
    "name"=>$site_name,
    "logo"=>img($site_logo,"$site_name Site Logo"),
    "footer_logo"=>img($site_logo2,"$site_name Site Logo"),
    "payment_logo"=>img($payment_logo,"We accept payment from this bank card Logo $site_name"),
    "logo_info"=>$logo,
    "url"=>$site_url,
    "author"=>$site_author,
    "address"=>["26 Bloomsbury St London","WC1B 3QJ", "United Kingdom"],
    "footer_text"=>"$site_name and $site_url is a trading style of DBX Worldwide LTD",
    "contact_info"=>[
      "phone"=>$site_phone,
      "fax"=>$site_phone,
      "email"=>$site_email,
      "int"=>"+44 ".ltrim($site_phone, "0"),
      "gmap"=>"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.7332222822274!2d-0.1298659842296367!3d51.51811017963687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b3268412ae9%3A0x5121cefa6235e65c!2s26+Bloomsbury+St%2C+Bloomsbury%2C+London+WC1B+3QJ!5e0!3m2!1sen!2suk!4v1565178313073!5m2!1sen!2suk",
    ],
  ],
  "pages"=>$pages,
  "main_menu" => [
    $pages["home"],
    $pages["aboutus"],
    $pages["services"],
    $pages["location"],
    $pages["faq"],
    $pages["contactus"],
  ],

  "components"=>[
    "slideshow"=>$slideshow,
    "home"=>$home_compo,
    "services"=>$home_compo,
    "fleets"=>$fleet_component,
    "about"=>$about_component,
    "faq"=>$faq_component,
    "terms"=>$home_compo,
    "privacy"=>$home_compo,
    "car_logos"=>$car_logos,
    "footer_content"=>$footer_content
  ]
];