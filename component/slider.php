<div  id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
          <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="4" aria-label="Slide 5"></button>

              </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                      <img src="/connect2local/asset/image/home/slider/image6.jpeg" class="d-block w-100" alt="This is slider Image1" style="width:80%; height:70vh;">  
                </div>

                <div class="carousel-item">
                    <img src="/connect2local/asset/image/home/slider/image7.jpeg" class="d-block w-100" alt="This is slider Image2" style="width:80%; height:70vh;">
                </div>

                <div class="carousel-item">
                    <img src="/connect2local/asset/image/home/slider/image8.jpeg" class="d-block w-100" alt="This is slider Image3" style="width:80%; height:70vh;">
                    
                </div>

                <div class="carousel-item">
                    <img src="/connect2local/asset/image/home/slider/image9.jpeg" class="d-block w-100" alt="This is slider Image4"  style="width:80%; height:70vh;">
                    
                </div>

                <div class="carousel-item">
                    <img src="/connect2local/asset/image/home/slider/image10.jpeg" class="d-block w-100" alt="This is slider Image5"  style="width:80%; height:70vh;">
                </div>
            </div>

          
            <button class="carousel-control-prev" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
            </button>
    
            <button class="carousel-control-next" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <script>
                // Function to continuously slide the carousel
                function autoSlideCarousel() {
                    var carousel = new bootstrap.Carousel(document.getElementById('carouselExample'));
                    carousel.next();
                }
                
                // Start the carousel and set an interval to automatically slide it
                var carousel = new bootstrap.Carousel(document.getElementById('carouselExample'));
                var slideInterval = setInterval(autoSlideCarousel, 2000); // Change the interval duration as needed (in milliseconds)
            </script>
</div>


        
  

        