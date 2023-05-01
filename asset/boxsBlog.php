<?php
/*Index*/ 
function boxsblog($conexion){
 ?>

<section class="blog section-padding" id="blog">
    <div class="container">
        <div class="main-heading mx-auto">
            <h2 class="main-head-animation">Blog</h2>
            <span>Nuevos</span>
        </div>
        <div class="blog-field pt-4 row">
         <?php 
         try {
            $file = $conexion->query("SELECT * FROM blog ORDER BY id  desc LIMIT 3 ");
            $json = array();
            while ($result = $file->fetch()) {
                $json [] = array(
                    'id' => $result['id'],
                    'cat' => $result['cat'],
                    'title' => $result['title'],
                    'img' => $result['img'],
                    'ext' => $result['extracto'],
                    'link' => $result['link']
                );
            }
            foreach ($json as $article) {
                ?>
                <div class="wow fadeInDown blog-box mb-4 col-12 col-md-6 col-lg-4">
                    <div class="blog-content">
                        <a href="blog/<?php echo $article['link']; ?>" class="image d-block position-relative overflow-hidden">
                            <img class="img-fluid w-100 d-block" src="images/blog/<?php echo $article['img']; ?>" alt="blog image">
                            <span class="blog-title"><?php echo $article['cat']; ?></span>
                        </a>
                        <h3 class="blog-head my-2 px-2"><?php echo $article['title']; ?></h3>
                        <p class="blog-text mb-3 px-2"><?php echo $article['ext']; ?></p>
                        <hr class="my-0">
                        <div class="blog-links d-flex justify-content-center align-items-center p-2">

                            <div class="more">
                                <a href="blog/<?php echo $article['link']; ?>">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
            }
        } catch (PDOException $e) {
            echo 'Error : '. $e->getMessage();
        }
        ?>
    </div>
    <div class="more-blogs text-center mt-4 pt-2">
        <a href="blog" class="main-btn">Más Blogs</a>
    </div>
</div>
</section>

<?php } ?>

<?php
/*Blog*/ 
function boxs($conexion){
 ?>

 <section class="blog section-padding" id="blog">
    <div class="container">
        <div class="main-heading mx-auto">
            <h2 class="main-head-animation">Blog</h2>
            <span>Leer Nuevos</span>
        </div>
        <div class="blog-field pt-4 row">
         <?php 
         try {
            $file = $conexion->query("SELECT * FROM blog ORDER BY id DESC");
            $json = array();
            while ($result = $file->fetch()) {
                $json [] = array(
                    'id' => $result['id'],
                    'cat' => $result['cat'],
                    'title' => $result['title'],
                    'img' => $result['img'],
                    'ext' => $result['extracto'],
                    'link' => $result['link']
                );
            }
            foreach ($json as $article) {
                ?>
                <div class="wow fadeInDown blog-box mb-4 col-12 col-md-6 col-lg-4">
                    <div class="blog-content">
                        <a href="<?php echo $article['link']; ?>" class="image d-block position-relative overflow-hidden">
                            <img class="img-fluid w-100 d-block" src="../images/blog/<?php echo $article['img']; ?>" alt="blog image">
                            <span class="blog-title"><?php echo $article['cat']; ?></span>
                        </a>
                        <h3 class="blog-head my-2 px-2"><?php echo $article['title']; ?></h3>
                        <p class="blog-text mb-3 px-2"><?php echo $article['ext']; ?></p>
                        <hr class="my-0">
                        <div class="blog-links d-flex justify-content-center align-items-center p-2">

                            <div class="more">
                                 <a href="<?php echo $article['link']; ?>">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
            }
        } catch (PDOException $e) {
            echo 'Error : '. $e->getMessage();
        }
        ?>
    </div>
    <div class="more-blogs text-center mt-4 pt-2">
        <a href="/" class="main-btn">Home</a>
    </div>
</div>
</section>

<?php } ?>

