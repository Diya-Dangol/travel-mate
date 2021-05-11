<?php include('includes/header.php'); ?>

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- header banner with slide show images -->
    <div id="header-banner">
        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="assets/sanjay-hona.jpg" style="width:100%; height: 900px;" >
            </div>

            <div class="mySlides fade">
                <img src="assets/beijing.jpg" style="width:100%; height: 900px">
            </div>

            <div class="mySlides fade">
                <img src="assets/leonard.jpg" style="width:100%; height: 900px">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        
        <div class="dotted-slider">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
        </div>

        <div id="banner-title">
            <h1>never stop exploring</h1>
            <hr>
            <h3 class="banner-h3">grab your bag packs and enjoy holidays</h3>
        </div>

        <div id="travel-search">
            <div class="input-title">
                <h3>want to travel with us?</h3>
            </div>
            <form action="/nepal.php">
                <div class="form-group">
                    <select name="location" class="form-control">
                        <option value>where to go</option>
                        <option value="nepal">Nepal</option>
                        <option value="america">America</option>
                        <option value="south-africa">South Africa</option>
                        <option value="india">India</option>
                        <option value="oceana">Nepal</option>
                        <option value="nepal">Nepal</option>
                        <option value="nepal">Nepal</option>
                        <option value="nepal">Nepal</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" id="date" name="date" placeholder="date" value="date">
                </div>

                <div class="form-group">
                    <select name="travel-type" class="form-control">
                        <option value>Travel Type</option>
                        <option value="city-tour">city tour</option>
                        <option value="adventour-tour">adventour tour</option>
                        <option value="couple-tour">couple tour</option>
                        <option value="group-tour">group tour</option>                        
                    </select>
                </div>

                <div class="form-group" >
                    <p style="margin: 0">Price Range</p>
                    <section class="range-slider">
                        <span class="rangeValues"></span>
                        <input value="500" min="500" max="50000" step="500" type="range">
                        <input value="50000" min="500" max="50000" step="500" type="range">
                    </section>
                </div>


                <button id="button" class="pushable" >
                    <span class="front">
                        <a href="nepal.php"> search <i class="fa fa-search"></i></a>
                    </span>
                </button>
                
            </form>
        </div>
    </div>

    <!-- popular destination container -->
    <div id="container">
        <div class="heading">
            <h2>popular destinations
                <hr>
                <p>choose your next destinations</p>
            </h2>
        </div>
        
        <section class="row">
            <article class="column">
                <article class="card"> 
                    <img src="assets/kathmandu.jpg" alt=""  width="350px" height="450px">
                    <i class="fa fa-binoculars"></i>
                    <p>
                        nepal 
                       <span>05 palces</span>
                    </p>
                </article>
            </article>

            <article class="column">
                <article class="card">
                    <img src="assets/japan.jpg" alt=""  width="350px" height="450px">
                    <i class="fa fa-binoculars"></i>
                    <p>
                        japan 
                        <span>05 palces</span>
                    </p>
                </article>
            </article>
            
            <article class="column">
                <article class="card">
                    <img src="assets/beijing.jpg" alt=""  width="350px" height="450px">
                    <i class="fa fa-binoculars"></i>
                    <p>
                        beijing
                        <span>05 palces</span>
                    </p>
                </article>
            </article>
            
            <article class="column">
                <article class="card">
                    <img src="assets/leonard.jpg" alt=""  width="350px" height="450px">
                    <i class="fa fa-binoculars"></i>
                    <p>
                        paris 
                        <span>05 palces</span>
                    </p>
                </article>
            </article>
            <article class="column">
                <article class="card">
                    <img src="assets/bhaktapur.jpg" alt=""  width="350px" height="450px">
                    <i class="fa fa-binoculars"></i>
                    <p>
                        nepal 
                        <span>05 palces</span>
                    </p>
                </article>
            </article>
            <article class="column">
                <article class="card">
                    <img src="assets/bhutan.jpg" alt=""  width="350px" height="450px">
                    <i class="fa fa-binoculars"></i>
                    <p>
                        bhutan 
                        <span>05 palces</span>
                    </p>
                </article>
            </article>  
            
        </section>        
        <button id="button" class="pushable" >
            <span class="front">
                <a href="trip-list.php" id="front" >more places <i class='fa fa-arrow-right'></i> </a>
            </span>
        </button>
    </div>

    <!-- banner image with button view all packages -->
    <div class="banner">
        <img src="assets/nepal.jpg" style="width:100%; height: 300px;">
        <div class="heading">
            <h2 class="title">your next destination
                <hr>
            </h2>

            <button id="button" class="pushable" >
                <span class="front">
                     <a href="trip-list.php" id="front" >all packages<i class='fa fa-arrow-right'></i> </a>
                </span>
            </button>

        </div>
    </div>

    <!-- popular packages container -->
    <div id="container-grey">
        <div class="heading">
            <h2>popular packages
                <hr>
                <p>choose your next package</p>
            </h2>
        </div>
        <section class="row">

            <article class="column">
                <article class="card"> 
                    <img src="assets/kathmandu.jpg" alt=""  width="350px" height="180px">
                    <i class="fa fa-binoculars"></i>
                    <p>
                        2 reviews
                        <span class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </span>
                    </p>
                </article>
                <article class="content">
                    <h3>kathmandu</h3>
                    <text>nepal</text>
                    <p>
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci...
                    </p>
                    <article class="icon">
                        <div id="icon-text">
                            <i class="fa fa-clock-o"></i>
                            <br/>
                            <text>3 days</text>
                        </div>
                        <div id="icon-text">
                            <i class="fa fa-calendar"></i>
                            <br/>
                            <text>12 Jan - 16 Jan</text>
                        </div>
                        <div id="icon-text">
                            <i class="fa fa-plane"></i>
                            <br/>
                            <text>Nepal</text>
                        </div>                    
                        <div id="icon-text">
                            <i class="fa fa-compass"></i>
                            <br/>
                            <text>Adventurous</text>
                        </div>
                    </article>
                    <article class="button-wrap">
                        <p id="price">Rs.8000 <span class="per-person">/per person</span> </p>
                        <button id="button" class="pushable" >
                            <span class="front">
                                <a href="nepal.php">Book now</a>
                            </span>
                        </button>
                    </article>
                </article> 
            </article>

            <article class="column">
                <article class="card">
                    <img src="assets/bhutan.jpg" alt=""  width="350px" height="180px">
                    <i class="fa fa-binoculars"></i>
                    <p>
                        2 reviews
                        <span class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </span>
                    </p>
                </article>
                <article class="content">
                    <h3>tiger nest monastary</h3>
                    <text>bhutan</text>
                    <p>
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci...
                    </p>
                    <article class="icon">
                        <div id="icon-text">
                            <i class="fa fa-clock-o"></i>
                            <br/>
                            <text>3 days</text>
                        </div>
                        <div id="icon-text">
                            <i class="fa fa-calendar"></i>
                            <br/>
                            <text>12 Jan - 16 Jan</text>
                        </div>
                        <div id="icon-text">
                            <i class="fa fa-plane"></i>
                            <br/>
                            <text>Nepal</text>
                        </div>                    
                        <div id="icon-text">
                            <i class="fa fa-compass"></i>
                            <br/>
                            <text>Adventurous</text>
                        </div>
                    </article>
                    <article class="button-wrap">
                        <p id="price">Rs.8000 <span class="per-person">/per person</span> </p>
                        <button id="button" class="pushable" >
                            <span class="front">
                                <a href="nepal.php">Book now</a>
                            </span>
                        </button>
                    </article>
                </article> 
            </article>
            
            <article class="column">
                <article class="card">
                    <img src="assets/beijing.jpg" alt=""  width="350px" height="180px">
                    <i class="fa fa-binoculars"></i>
                    <p>
                        2 reviews
                        <span class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </span>
                    </p>
                </article>
                <article class="content">
                    <h3>palace of heaven</h3>
                    <text>China</text>
                    <p>
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci...
                    </p>
                    <article class="icon">
                        <div id="icon-text">
                            <i class="fa fa-clock-o"></i>
                            <br/>
                            <text>3 days</text>
                        </div>
                        <div id="icon-text">
                            <i class="fa fa-calendar"></i>
                            <br/>
                            <text>12 Jan - 16 Jan</text>
                        </div>
                        <div id="icon-text">
                            <i class="fa fa-plane"></i>
                            <br/>
                            <text>Nepal</text>
                        </div>                    
                        <div id="icon-text">
                            <i class="fa fa-compass"></i>
                            <br/>
                            <text>Adventurous</text>
                        </div>
                    </article>
                    <article class="button-wrap">
                        <p id="price">Rs.8000 <span class="per-person">/per person</span> </p>
                        <button id="button" class="pushable" >
                            <span class="front">
                                <a href="nepal.php">Book now</a>
                            </span>
                        </button>
                    </article>
                </article> 
            </article>  

            <article class="column">
                <article class="card">
                    <img src="assets/japan.jpg" alt=""  width="350px" height="180px">
                    <i class="fa fa-binoculars"></i>
                    <p>
                        2 reviews
                        <span class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </span>
                    </p>
                </article>
                <article class="content">
                    <h3>title goes here</h3>
                    <text>japan</text>
                    <p>
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci...
                    </p>
                    <article class="icon">
                        <div id="icon-text">
                            <i class="fa fa-clock-o"></i>
                            <br/>
                            <text>3 days</text>
                        </div>
                        <div id="icon-text">
                            <i class="fa fa-calendar"></i>
                            <br/>
                            <text>12 Jan - 16 Jan</text>
                        </div>
                        <div id="icon-text">
                            <i class="fa fa-plane"></i>
                            <br/>
                            <text>Nepal</text>
                        </div>                    
                        <div id="icon-text">
                            <i class="fa fa-compass"></i>
                            <br/>
                            <text>Adventurous</text>
                        </div>
                    </article>
                    <article class="button-wrap">
                        <p id="price">Rs.8000 <span class="per-person">/per person</span> </p>
                        <button id="button" class="pushable" >
                            <span class="front">
                                <a href="nepal.php">Book now</a>
                            </span>
                        </button>
                    </article>
                </article> 
            </article>   

            <article class="column">
                <article class="card">
                    <img src="assets/snow.jpg" alt=""  width="350px" height="180px">
                    <i class="fa fa-binoculars"></i>
                    <p>
                        2 reviews
                        <span class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </span>
                    </p>
                </article>
                <article class="content">
                    <h3>snow house</h3>
                    <text>europe</text>
                    <p>
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci...
                    </p>

                    <article class="icon">
                        <div id="icon-text">
                            <i class="fa fa-clock-o"></i>
                            <br/>
                            <text>3 days</text>
                        </div>
                        <div id="icon-text">
                            <i class="fa fa-calendar"></i>
                            <br/>
                            <text>12 Jan - 16 Jan</text>
                        </div>
                        <div id="icon-text">
                            <i class="fa fa-plane"></i>
                            <br/>
                            <text>Nepal</text>
                        </div>                    
                        <div id="icon-text">
                            <i class="fa fa-compass"></i>
                            <br/>
                            <text>Adventurous</text>
                        </div>
                    </article>
                    <article class="button-wrap">
                        <p id="price">Rs.8000 <span class="per-person">/per person</span> </p>
                        <button id="button" class="pushable" >
                            <span class="front">
                                <a href="nepal.php">Book now</a>
                            </span>
                        </button>
                    </article>
                </article> 
            </article>     

            <article class="column">
                <article class="card">
                    <img src="assets/polynesia.jpg" alt=""  width="350px" height="180px">
                    <i class="fa fa-binoculars"></i>
                    <p>
                        2 reviews
                        <span class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </span>
                    </p>
                </article>
                <article class="content">
                    <h3>polynesia</h3>
                    <text>france</text>
                    <p>
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci...
                    </p>

                    <article class="icon">
                        <div id="icon-text">
                            <i class="fa fa-clock-o"></i>
                            <br/>
                            <text>3 days</text>
                        </div>
                        <div id="icon-text">
                            <i class="fa fa-calendar"></i>
                            <br/>
                            <text>12 Jan - 16 Jan</text>
                        </div>
                        <div id="icon-text">
                            <i class="fa fa-plane"></i>
                            <br/>
                            <text>Nepal</text>
                        </div>                    
                        <div id="icon-text">
                            <i class="fa fa-compass"></i>
                            <br/>
                            <text>Adventurous</text>
                        </div>
                    </article>
                    <article class="button-wrap">
                        <p id="price">Rs.8000 <span class="per-person">/per person</span> </p>
                        <button id="button" class="pushable" >
                            <span class="front">
                                <a href="nepal.php">Book now</a>
                            </span>
                        </button>
                    </article>
                </article> 
            </article>            
        </section> 

        <button id="button" class="pushable" >
            <span class="front">
                <a href="trip-list.php" id="front" >more places <i class='fa fa-arrow-right'></i> </a>
            </span>
        </button>
    </div>

    <!-- card banner -->
    <div class="banner-card">
        <img src="assets/vacations.jpg" width="100%" height="350px">
        <div class="heading">
            <h2 class="title">
                we accept
                <hr>
            </h2>
        </div>
        <article class="icon">
            <i class="fa fa-cc-visa"></i>
            <i class="fa fa-cc-mastercard"></i>
            <i class="fa fa-cc-paypal"></i>
            <i class="fa fa-credit-card"></i>
            <i class="fa fa-cc-discover"></i>
        </article>
    </div>

    <!-- about us -->
    <div id="container-grey">
        <div class="heading">
            <h2>about us
                <hr>
                <p>lets introduce ourselves</p>
            </h2>
        </div>
        <!--  our story  -->
        <div class="container-about">       
            <div class="sub-heading">
                <h3>our story
                    <hr>
                </h3>
            </div>
            <article class="story">
                <img src="assets/kathmandu.jpg" alt=""  width="500px" height="370px">
                <article class="content">
                    <article class="paragraph">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <p>
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum 
                        </p>
                    </article>
                    <article class="button-wrap">
                        <button id="button" class="pushable" >
                            <span class="front">
                                <a href="about.php">read more <i class="fa fa-arrow-right"></i></a>
                            </span>
                        </button>
                    </article>
                </article> 
            </article>
        </div>
        <!--  our services  -->
        <div class="container-about">       
            <div class="sub-heading">
                <h3>our services
                    <hr>
                </h3>
            </div>
            <article class= "row">
                <article class="column">
                    <article class='icon'>
                        <i class="fa fa-hotel"></i>
                    </article>
                    <article class="content">
                        <div class="sub-heading">
                            <h3>hotel accomodation</h3>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>                        
                    </article> 
                </article>
                <article class="column">
                    <article class='icon'>
                        <i class="fa fa-hotel"></i>
                    </article>
                    <article class="content">
                        <div class="sub-heading">
                            <h3>delicious food</h3>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>                        
                    </article> 
                </article>
                <article class="column">
                    <article class='icon'>
                        <i class="fa fa-hotel"></i>
                    </article>
                    <article class="content">
                        <div class="sub-heading">
                            <h3>luxury travel</h3>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>                        
                    </article> 
                </article>
              
            </article>
        </div>
        <!-- our partner -->
        <div class="container-about">       
            <div class="sub-heading">
                <h3>our partner
                    <hr>
                </h3>
            </div>
            <article class= "partner-row">
                <article class="column">
                    <article class="content">
                        <img src="assets/drop.png" height="60px" width="60px" >
                        <p>hotel accomodation</p>
                    </article> 
                </article>
                <article class="column">
                    <article class="content">
                        <img src="assets/drop.png" height="60px" width="60px" >
                        <p>hotel accomodation</p>
                    </article> 
                </article>
                <article class="column">
                    <article class="content">
                        <img src="assets/drop.png" height="60px" width="60px" >
                        <p>hotel accomodation</p>
                    </article> 
                </article>
                <article class="column">
                    <article class="content">
                        <img src="assets/drop.png" height="60px" width="60px" >
                        <p>hotel accomodation</p>
                    </article> 
                </article>
              
               
              
            </article>
        </div>
    </div>

    <!-- subscribe banner -->
    <div class="banner-subscribe">
        <img src="assets/sunset.jpg" style="width:100%; height: 350px;">
        <div class="subscribe-content">
            <h2 class="title">
                subscribe our newsletter
                <hr>
                <p id="subtitle">Lorem ipsum text about why you should subscribe to our newsletter blabla. Lorem ipsum text about why you should subscribe to our newsletter blabla</p>
            </h2>
            <form action="contact.php">
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="email">
                </div>

                <button id="button" class="pushable" >
                    <span class="front">
                        <a href="trip-list.php" id="front" >subscribe <i class='fa fa-subscribe'></i> </a>
                    </span>
                </button>
            </form>
        </div>
    </div>
   
    <!-- testimonials-->
    <div id="container-grey">
        <div class="heading">
            <h2>about us
                <hr>
                <p>lets introduce ourselves</p>
            </h2>
        </div>
    </div>
    
    <!-- blog-->
    <div id="container">
        <div class="heading">
            <h2>about us
                <hr>
                <p>lets introduce ourselves</p>
            </h2>
        </div>
    </div>

    
    
   <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
        }
    </script>

  
        
        
<?php include('includes/footer.php'); ?>
