<div class="space-y-0 divide-y divide-dotted divide-outline-variant">
<?php
$news_query = new WP_Query( array(
    'post_type'           => 'post',
    'posts_per_page'      => 3,
    'ignore_sticky_posts' => true,
) );

if ( $news_query->have_posts() ) :
    while ( $news_query->have_posts() ) :
        $news_query->the_post();
        $categories = get_the_category();
        $category_name = ! empty( $categories ) ? $categories[0]->name : 'お知らせ';
        $category_class = ( 'お知らせ' === $category_name ) ? 'bg-secondary-container text-on-secondary-container' : 'bg-primary-container text-on-primary-container';
        ?>
        <article class="group py-4 flex items-center justify-between px-2 rounded-lg">
            <div class="flex flex-col sm:flex-row sm:items-center gap-3">
                <span class="text-on-surface-variant text-sm font-label-sm"><?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?></span>
                <span class="<?php echo esc_attr( $category_class ); ?> text-[10px] px-2 py-0.5 rounded-full whitespace-nowrap"><?php echo esc_html( $category_name ); ?></span>
                <a class="text-on-surface hover:text-primary transition-colors" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a>
            </div>
            <span class="material-symbols-outlined text-on-surface-variant">campaign</span>
        </article>
        <?php
    endwhile;
    wp_reset_postdata();
else :
    ?>
    <article class="group py-4 flex items-center justify-between px-2 rounded-lg">
        <div class="flex flex-col sm:flex-row sm:items-center gap-3">
            <span class="text-on-surface-variant text-sm font-label-sm"><?php echo esc_html( date_i18n( 'Y.m.d' ) ); ?></span>
            <span class="bg-secondary-container text-on-secondary-container text-[10px] px-2 py-0.5 rounded-full whitespace-nowrap">お知らせ</span>
            <span class="text-on-surface">現在お知らせはありません</span>
        </div>
        <span class="material-symbols-outlined text-on-surface-variant">campaign</span>
    </article>
<?php endif; ?>
</div>