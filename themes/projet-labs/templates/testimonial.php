
  <!-- Testimonial section -->
  <div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-4">
          <div class="section-title left">
            <h2>What our clients say</h2>
          </div>
          <div class="owl-carousel" id="testimonial-slide">

            <?php 
            $args = [
              'orderby'        => 'rand',
              'posts_per_page' => '4',
              'post_type'      => 'testimonial'
            ];
            $query1 = new WP_Query( $args );

            while($query1->have_posts()) : $query1->the_post(); 
            ?>

            <!-- single testimonial -->
            <div class="testimonial">
              <span>‘​‌‘​‌</span>
              <p> <?php the_content(); ?> </p>
              <div class="client-info">
                <div class="avatar">
                  <img src="<?= get_the_post_thumbnail_url();?>" alt="" style="height:100%; width:100%;">
                </div>
                <div class="client-name">
                  <?php 
                  $data = get_post_meta(get_the_ID()); 
                  $labs_testimonial_name = array_key_exists('labs_testimonial_name', $data) ? esc_attr($data['labs_testimonial_name'][0]) : '';
                  $labs_testimonial_occupation = array_key_exists('labs_testimonial_occupation', $data) ? esc_attr($data['labs_testimonial_occupation'][0]) : '';
              
                  ?>
                  <h2><?= $labs_testimonial_name ?></h2>
                  <p><?= $labs_testimonial_occupation ?></p>
                </div>
              </div>
            </div>
            
            <?php endwhile; ?>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Testimonial section end-->