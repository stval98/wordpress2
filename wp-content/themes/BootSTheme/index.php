<?php get_header(); ?>
<?php get_footer(); ?>
<div class = "container">
    <?php
    query_posts('posts_per_page=1');
    while(have_posts()) : the_post(); ?>
    <div class = "jumbotron" style="background-color: whitesmoke;">
        <div>
            <h1 style="color: #1e392a; font-family: impact;">Featured Post</h1>
            <h2 style="color: #1e392a;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p style="color: #1e392a;"><?php the_excerpt(); ?></p>
            <p style="color: #1e392a;"> posted by <?php the_author(); ?>
        </div>

        <?php endwhile; wp_reset_query(); ?>

        <div class="panel panel-default panel-body">
            <div>
                <div>
                        <?php $taxonomy = 'category';

            // Get the term IDs assigned to post.
            $post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );

            // Separator between links.
            $separator = ', ';

            if ( ! empty( $post_terms ) && ! is_wp_error( $post_terms ) ) {

                $term_ids = implode( ',' , $post_terms );

                $terms = wp_list_categories( array(
                    'title_li' => '',
                    'style'    => 'none',
                    'echo'     => false,
                    'taxonomy' => $taxonomy,
                    'include'  => $term_ids
                ) );

                $terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );

                // Display post categories.
                echo  $terms;
            } ?>
                </div>
            </div>
        </div>
    </div>

    <div>
        <?php while(have_posts()) : the_post(); ?>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p style="color: #1e392a;"><?php the_content(); ?></p>
        <p style="color: #1e392a;"> posted by <?php the_author(); ?>
        <div>
            <p><?php $taxonomy = 'category';
            // Get the term IDs assigned to post.
            $post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );

            // Separator between links.
            $separator = ', ';

            if ( ! empty( $post_terms ) && ! is_wp_error( $post_terms ) ) {

                $term_ids = implode( ',' , $post_terms );

                $terms = wp_list_categories( array(
                    'title_li' => '',
                    'style'    => 'none',
                    'echo'     => false,
                    'taxonomy' => $taxonomy,
                    'include'  => $term_ids
                ) );

                $terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );

                // Display post categories.
                echo  $terms;
            } ?></p>
        <style>
            a {color: #3cc47c;}
            a:active {color: #3cc47c;}
            a:visited {color: #3cc47c;}
            a:hover {color: #e9c893;}
        </style>
    </div>
            <?php endwhile; wp_reset_query(); ?>
    </div>
</div>