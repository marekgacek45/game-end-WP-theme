<?php
get_header();
?>
<main class="main">
    <div class="wrapper">
<h1 class="category__header">Tag: <?php single_tag_title();
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
</main>
</div>
<?php
get_footer();
?>