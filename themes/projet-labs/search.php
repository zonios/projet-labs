<?php
get_header();
?>

<!-- Page header -->
<div class="page-top-section">
  <div class="overlay"></div>
  <div class="container text-right">
    <div class="page-info">
      <h2>Search results for: "<?php echo get_search_query(); ?>"</h2>
    </div>
  </div>
</div>
<!-- Page header end -->
<div class="page-section spad">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-7 blog-posts" style="margin-left: 16.666666%;">

        <?php while (have_posts()): the_post(); ?>
        <!-- Post item -->
        <div class="post-item">
          <div class="post-thumbnail">
            <img src="<?= get_the_post_thumbnail_url(); ?>" alt="">
            <div class="post-date">
              <h2>03</h2>
              <h3>Nov 2017</h3>
            </div>
          </div>
          <div class="post-content">
            <h2 class="post-title"> <?php the_title(); ?> </h2>
            <div class="post-meta">
              <a href="">Loredana Papp</a>
              <a href="">Design, Inspiration</a>
              <a href="">2 Comments</a>
            </div>
            <p><?= the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
          </div>
        </div>

        <?php endwhile; ?>

      </div>
      
    </div>
  </div>
</div>
<?php
get_footer();
?>
