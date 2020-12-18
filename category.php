<?php get_header() ?>

<section class="section-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <article class="article-preview">
                        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                        <p><span class="article-date"><i class="far fa-calendar-alt"></i>
                        <?php the_time('d.m.Y') ?></span></p>
                        <div class="article-excerpt">
                            <?php if(has_post_thumbnail()): ?>
                                <div class="bluerex-thumb">
                                    <a href="<?php the_permalink() ?>">
                                        <?php the_post_thumbnail('thumbnail', array('class' => 'thumb')) ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php the_content('') ?>
                            <p><a href="<?php the_permalink() ?>" class="more"><?php _e('Read more', 'bluerex') ?></a></p>
                        </div>
                    </article>
                    <!-- /.article-preview -->

                <?php endwhile; ?>

                    <?php the_posts_pagination( array(
                        'end_size' => 1,
                        'mid_size' => 1,
                        'type' => 'list',
                    ) ) ?>

                <?php else: ?>
                    <!-- no posts found -->
                <?php endif; ?>

            </div>
            <!-- /.col-md-8 -->

            <?php get_sidebar() ?>
        </div>
    </div>
</section>
<!-- /.section-content -->

<?php get_footer() ?>

