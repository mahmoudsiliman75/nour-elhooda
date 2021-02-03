<?php 
if(!isset($title)){
  $title='View More';
}
if(!isset($link)){
  $link='#';
}
?>
<a href="<?php echo $link?>" class="hover-effect"> <?php echo $title?> </a>