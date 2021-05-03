<?php include('includes/header.php'); ?>

    <link rel="stylesheet" href="css/index.css">
    <div id="header-banner">
        <!-- <img src="assets/sanjay-hona.jpg" id="banner-image"> -->

        <div class="slideshow-container">

        <div class="mySlides fade">
            <img src="assets/home/sanjay-hona.jpg" style="width:100%; height: 900px;" >
        </div>

        <div class="mySlides fade">
            <img src="assets/home/japan.jpg" style="width:100%; height: 900px">
        </div>

        <div class="mySlides fade">
            <img src="assets/home/pot.jpg" style="width:100%; height: 900px">
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
                    <span id="front">
                        search
                    </span>
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
