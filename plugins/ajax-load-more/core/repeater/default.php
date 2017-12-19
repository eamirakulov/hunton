<div class="col s12 m6 l6 item">
                <div class="thumb" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat top center; background-size: cover;"></div>
                <div class="text">
                  <h3><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <p><?php echo the_excerpt(); ?></p>

                  <div class="meta">
                    <span class="cat">
                      <?php
                        $post_categories = wp_get_post_categories(get_the_ID());
                        $cats = array();
                             
                        foreach($post_categories as $c){
                            $cat = get_category( $c );
                            echo $cat->name. " ";
                        }
                      ?>
                    </span>
                    <span class="date"><?php echo get_the_date(); ?></span>
                  </div>
                </div>
              </div>