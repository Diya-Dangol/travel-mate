<?php include('includes/header.php'); ?>

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
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
            <h3>grab your bag packs and enjoy holidays</h3>
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
                    <label>Price range</label>
                    <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                </div>

                <button class="button" id="pushable">
                    <a href="nepal.php" id="front" >seacrh <i class="fa fa-search"></i> </a>
                </button>
                
            </form>
        </div>
    </div>

    <div class="container">
        <div class="heading">
            <h2>popular destinations
                <hr>
                <p>choose your next destinations</p>
            </h2>
        </div>
        
        <div class="row">
            <div class="column">
                <div class="card"> 
                    <img src="assets/kathmandu.jpg" alt=""  width="350px" height="450px">
                    <i class="fa fa-binoculars"></i>
                    <p>
                        nepal 
                       <span>05 palces</span>
                    </p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="assets/japan.jpg" alt=""  width="350px" height="450px">
                    <i class="fa fa-binoculars"></i>
                    <p>
                        japan 
                        <span>05 palces</span>
                    </p>
                </div>
            </div>
            
            <div class="column">
                <div class="card">
                    <img src="assets/beijing.jpg" alt=""  width="350px" height="450px">
                    <i class="fa fa-binoculars"></i>
                    <p>
                        beijing
                        <span>05 palces</span>
                    </p>
                </div>
            </div>
            
            <div class="column">
                <div class="card">
                    <img src="assets/leonard.jpg" alt=""  width="350px" height="450px">
                    <i class="fa fa-binoculars"></i>
                    <p>
                        paris 
                        <span>05 palces</span>
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="assets/bhaktapur.jpg" alt=""  width="350px" height="450px">
                    <i class="fa fa-binoculars"></i>
                    <p>
                        nepal 
                        <span>05 palces</span>
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="assets/bhutan.jpg" alt=""  width="350px" height="450px">
                    <i class="fa fa-binoculars"></i>
                    <p>
                        bhutan 
                        <span>05 palces</span>
                    </p>
                </div>
            </div>          
        </div>

        <button class="button" id="pushable">
            <a href="trip-list.php" id="front" >more places <i class='fa fa-arrow-right'></i> </a>
        </button>
    </div>

    <div class="banner">
        <img src="assets/nepal.jpg" style="width:100%; height: 300px;">
        <div class="heading">
            <h2>your next destination
                <hr>
            </h2>
            <button class="button" id="pushable">
                <a href="trip-list.php" id="front" >all packages<i class='fa fa-arrow-right'></i> </a>
            </button>
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
