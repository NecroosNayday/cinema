 <?php 
 $actors =film_in_actors($_GET['id']);
add_view2($_GET['id']);
$movie=get_films_by_id($_GET['id']);


  
   ?>


          <div class="blog-post pt-4">

            <h2 class="blog-post-title"><?php echo $movie["film"]?></h2>
            <p class="blog-post-meta "> <?php echo $movie["data_birthday"]?></p>
            <h3 class="blog-post-title">Сюжет</h3>
            <p><?php echo $movie["about"]?></p>
            <hr>

            
            
          </div><!-- /.blog-post -->

 



        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <img src="../<?php echo $movie["img"]?>" class="rounded" alt="">
          </div>

        
          <div class="p-3">
            <h4 class="font-italic">Актеры</h4>
            <ol class="list-unstyled mb-0">
                
           <?php  foreach ($actors as $actor){?>
                <li><a href="stats.php?id=<?php echo $actor['actors_id'];?>"><?php echo $actor['name'];}?></a></li>
           
              
          
            </ol>
          </div>
