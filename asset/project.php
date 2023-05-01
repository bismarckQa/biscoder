<?php 
	function project(){
 ?>
 <section class="portfolio section-padding" id="portfolio">
    <div class="container">
        <div class="main-heading mx-auto">
            <h2 class="main-head-animation">Portfolio</h2>
            <span>Our Projects</span>
        </div>
        <div class="prog-filter wow fadeIn">
            <ul class="ps-0">
                <li class="cursor-pointer-hover active" data-filter="all">All</li>
                <li class="cursor-pointer-hover" data-filter=".design">Design</li>
                <li class="cursor-pointer-hover" data-filter=".development">Development</li>
                
            </ul>
        </div>
        <div class="port-field row" id="portfolio-shuffle">
            <div class="mix design prog-box col-12 col-md-6 col-lg-4 mb-4" data-order="1">
                <a data-fancybox="gallery" class="d-block position-relative" href="images/portfolio/radio1.jpeg">
                    <img class="img-fluid w-100 d-block" src="images/portfolio/radio1.jpeg" alt="portfolio">
                    <div class="port-disc">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <i class="fas fa-search-plus"></i>
                        <h4>Radio Cultura</h4>
                        <p class="type mb-0">Design web</p>
                    </div>
                </a>
            </div>
            <div class="mix development prog-box col-12 col-md-6 col-lg-4 mb-4" data-order="2">
                <a data-fancybox="gallery" class="d-block position-relative" href="images/portfolio/hotel1.jpeg">
                    <img class="img-fluid w-100 d-block" src="images/portfolio/hotel1.jpeg" alt="portfolio">
                    <div class="port-disc">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <i class="fas fa-search-plus"></i>
                        <h4>Hotel Limbania </h4>
                        <p class="type mb-0">Development web</p>
                    </div>
                </a>
            </div>
            <div class="mix design prog-box col-12 col-md-6 col-lg-4 mb-4" data-order="3">
                <a data-fancybox="gallery" class="d-block position-relative" href="images/portfolio/kiss.jpeg">
                    <img class="img-fluid w-100 d-block" src="images/portfolio/kiss.jpeg" alt="portfolio">
                    <div class="port-disc">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <i class="fas fa-search-plus"></i>
                        <h4>Kissmyrelax</h4>
                        <p class="type mb-0">Design</p>
                    </div>
                </a>
            </div>
            
            <div class="mix development prog-box col-12 col-md-6 col-lg-4 mb-4" data-order="3">
                <a data-fancybox="gallery" class="d-block position-relative" href="images/portfolio/kiss.jpeg">
                    <img class="img-fluid w-100 d-block" src="images/portfolio/hsm.jpeg" alt="portfolio">
                    <div class="port-disc">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <i class="fas fa-search-plus"></i>
                        <h4>Hiselamelgareventos</h4>
                        <p class="type mb-0">Design</p>
                    </div>
                </a>
            </div>
            
           
            
        </div>
        <!--
        <div class="more-projects text-center mt-4 pt-2">
            <a href="#" class="main-btn">More Projects</a>
        </div>
        -->
    </div>

</section>
<?php  }?>