 <?php 
  add_view($_GET['id']);
 $actors = get_actors_by_id($_GET['id']); 
 $films = actors_in_film($_GET['id']);

   ?>


          <div class="blog-post pt-4">
            <h2 class="blog-post-title"><?php echo $actors["name"]?></h2>
            
            <h3 class="blog-post-title">Биография</h3>
            <p><?php echo $actors["self"]?></p>
            <hr>

            <p><?php echo $actors["self2"]?></p>
            <blockquote>
              <h3 class="blog-post-title">Личная жизнь</h3>
              <p><?php echo $actors["self3"]?></p>
            </blockquote>
            
          </div><!-- /.blog-post -->

 



        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <img src="../<?php echo $actors["img"]?>" class="rounded" alt="">
            <p class="blog-post-meta "> <?php echo $actors["data_birthday"]?></p>
          </div>

        
          <div class="p-3">
            <h4 class="font-italic">Фильмы</h4>
            <ol class="list-unstyled mb-0">
                
           <?php  foreach ($films as $film){?>
                <li><a href="about_films.php?id=<?php echo $film['films_id'];?>"><?php echo $film['film'];}?></a></li>
           
              
          
            </ol>
          </div>
