<?php get_header(); ?>

<?php get_template_part("templates/page-header");?>

<!-- page section -->
<div class="page-section spad">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-7 blog-posts">

        <?php 
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$args = [
					'posts_per_page' => '4',
					'post_type' => 'post',
					'paged' => $paged
				];
				$posts_query = new WP_Query($args);
				while ($posts_query->have_posts()): $posts_query->the_post(); ?>
        <!-- Post item -->
        <div class="post-item">
          <div class="post-thumbnail">
            <img src="<?= get_the_post_thumbnail_url(); ?>" alt="" style="height:24rem;">
            <div class="post-date">
              <h2><?= get_the_date("j");?></h2>
              <h3><?= get_the_date('F Y'); ?></h3>
            </div>
          </div>
          <div class="post-content">
            <h2 class="post-title"><?= get_the_title();?></h2>
            <div class="post-meta">
              <?php the_author_posts_link(); ?>
              <a href="">Design, Inspiration</a>
              <a href="">2 Comments</a>
            </div>
            <p><?= the_excerpt();?></p>
            <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
          </div>
        </div>
        <?php endwhile; ?>



        <!-- Pagination -->
        <div class="page-pagination">
          <?= 
        	paginate_links( array(
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'total'        => $posts_query->max_num_pages,
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'end_size'     => 0,
            'mid_size'     => 0,
            'prev_text'    => 'Newer Posts' ,
						'next_text'    => 'Older Posts' ,
						'after_page_number'  => '.'
        	) );
    			?>
        </div>

      </div>
      <!-- Sidebar area -->
      <div class="col-md-4 col-sm-5 sidebar">
        <!-- Single widget -->
        <div class="widget-item">
          <?php get_search_form(); ?>
        </div>
        <!-- Single widget -->
        <div class="widget-item">
          <h2 class="widget-title">Categories</h2>
          <ul>
            <li><a href="#">Vestibulum maximus</a></li>
            <li><a href="#">Nisi eu lobortis pharetra</a></li>
            <li><a href="#">Orci quam accumsan </a></li>
            <li><a href="#">Auguen pharetra massa</a></li>
            <li><a href="#">Tellus ut nulla</a></li>
            <li><a href="#">Etiam egestas viverra </a></li>
          </ul>
        </div>
        <!-- Single widget -->
        <div class="widget-item">
          <h2 class="widget-title">Tags</h2>
          <ul class="tag">
            <li><a href="">branding</a></li>
            <li><a href="">identity</a></li>
            <li><a href="">video</a></li>
            <li><a href="">design</a></li>
            <li><a href="">inspiration</a></li>
            <li><a href="">web design</a></li>
            <li><a href="">photography</a></li>
          </ul>
        </div>

        <div class="widget-item">
          <h2 class="widget-title">Add</h2>
          <div class="add">
            <a><img src="<?= get_template_directory_uri()?>/img/add.jpg" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- page section end-->

<?php 
get_template_part("templates/newsletter");
get_footer(); 
?>