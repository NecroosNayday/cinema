 <?php 
 $actors = get_actors_by_id($_GET['id']); 
 $films = get_films_all(); 

  foreach ($films as $film) :

if(strlen($film['about'])>250 ){
  $film['about']=mb_substr($film['about'],0,250,'UTF-8') . "…";
}
else $film['about']=$film['about'];
   ?>
<div class="col-lg-3 col-md-6 mb-4">
<div class="card">
<div class="view overlay">
  
    <a href="about_films.php?id=<?php echo $film['id'];?>">
      <img src="<?php echo $film['img'];?>" class="card-img-top img-fluid" alt="..." width="100%" height="250">
      </a>
          <div class="card-body">
            <h5 class="card-title text-center"><?php echo $film['film'];?></h5>
            <p class="card-text"><?php echo $film['about'];?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" id="view" class="btn btn-sm btn-outline-secondary" onclick="location.href='about_films.php?id=<?php echo $film['id'];?>'">View</button>
                </div>
                <small class="text-muted"><img src="../img/glaz.png" width="20"height="20" alt=""><?php echo $film['view'];?></small>
              </div>
          </div>
  
</div>
</div>
</div>


<?php endforeach; ?>

