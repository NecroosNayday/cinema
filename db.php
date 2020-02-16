<?php
  require 'libs/rb.php';
   R::setup( 'mysql:host=127.0.0.1;port=3307;dbname=kyrsach', 'root', '' );
   session_start();

 
 function film_in_actors($id){
 	$actor=R::getall('SELECT name,actors_id  FROM `films_has_actors` INNER JOIN actors on actors_id=id WHERE films_id=?', array($id));
return $actor;


}
function get_films_by_id($id){
$films= R::find('films', 'id=?',array($id));
	foreach ($films as $film ) {
		return ($film) ;
	}
}
 function get_actors_all(){
$actor=	R::findall('actors','ORDER BY view DESC');
return $actor;
}

function get_actors_by_id($id){
	$actors= R::find('actors', 'id=?',array($id));
	foreach ($actors as $actor ) {
		return ($actor) ;
	}
	

 }

function get_films_all(){
$films=	R::findall('films','ORDER BY view DESC');
return $films;
}
function actors_in_film($id){
  $film=R::getall('SELECT film,films_id  FROM `films_has_actors` INNER JOIN films on films_id=id WHERE actors_id=?', array($id));
return $film;
}
function add_view($id){
	R::exec("UPDATE actors set view=view+1 where id=?",array($id));
}
function add_view2($id){
	R::exec("UPDATE films set view=view+1 where id=?",array($id));
}