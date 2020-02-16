 <?php 

 $films = get_actors_by_id($_GET['id']);
 $actors = get_actors_all(); 



  foreach ($actors as $actor) :


if(strlen($actor['self'])>250 ){
  $actor['self']=mb_substr($actor['self'],0,250,'UTF-8') . "…";
}
else $actor['self']=$actor['self'];
   ?>
<div class="col-lg-3 col-md-6 mb-4">
<div class="card">
  <div class="view overlay">
    <a href="stats.php?id=<?php echo $actor['id'];?>">
      <img src="<?php echo $actor['img'];?>" class="card-img-top img-fluid" alt="..." width="100%" height="250">
      </a>
          <div class="card-body">
            <h5 class="card-title text-center"><?php echo $actor['name'];?></h5>
            <p class="card-text"><?php echo $actor['self'];?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" id="view" class="btn btn-sm btn-outline-secondary" onclick="location.href='stats.php?id=<?php echo $actor['id'];?>'">View</button>
                </div>
                <small class="text-muted"><img src="../img/glaz.png" width="20"height="20" alt=""><?php echo $actor['view'];?></small>
              </div>
          </div>
  </div>
</div>
</div>

<?php endforeach; ?>

