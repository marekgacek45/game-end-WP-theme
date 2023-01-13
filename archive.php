<?php
get_header();
?>
<main class="main">
    <div class="wrapper">

<article class='content'>
<?php

if( have_posts()){
	while(have_posts()){
		the_post();
		get_template_part('template-parts/content', 'category');
	}
}

?>
</article>


</div>
</main>
<?php
get_footer();
	?>