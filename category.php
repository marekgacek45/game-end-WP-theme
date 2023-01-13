<?php
get_header();
?>
<main class="main">
    <div class="wrapper">
<h1 class="category__header">Posty z kategorii: <?php single_cat_title();
?></h1>
<?php
if( have_posts()){
while(have_posts()){
the_post();
get_template_part('template-parts/content', 'category');
}
}

?>

<?php
the_posts_pagination();
?>
</div>
</main>
<?php
get_footer();
?>