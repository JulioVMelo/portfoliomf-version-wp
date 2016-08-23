<section class="skills">
    <div class="content">
        <a id="conhecimentos"></a>
        <h2>Conhecimentos</h2>
        <ul>
        <?php 
            $args = array('post_type' => 'skill', 'numberposts'=>-1); 
            $my_posts = get_posts( $args );
            if($my_posts):
                foreach ($my_posts as $post):setup_postdata( $post );
        ?>
                    <li><?php the_post_thumbnail(); ?><?php the_content(); ?></li>
        <?php 
              endforeach;
            else:
         ?>
                <p>ocorreu um erro</p>
        <?php 
            endif;
        ?>
        </ul>
    <div class="clear"></div>
    </div>
</section> 