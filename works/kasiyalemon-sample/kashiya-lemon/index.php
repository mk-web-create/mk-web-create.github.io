<?php
get_header();
?>
<main class="py-section-gap">
    <div class="max-w-container-max mx-auto px-gutter">
        <?php if ( have_posts() ) : ?>
            <div class="space-y-8">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article <?php post_class( 'bg-surface rounded-lg p-8 shadow-soft' ); ?>>
                        <h1 class="font-headline-lg text-headline-lg text-primary mb-4"><?php echo esc_html( get_the_title() ); ?></h1>
                        <div class="text-on-surface-variant leading-8">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p class="text-on-surface-variant">表示できる内容がありません。</p>
        <?php endif; ?>
    </div>
</main>
<?php
get_footer();