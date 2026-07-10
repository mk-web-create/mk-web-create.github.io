<!-- Seasonal Menu -->
<section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mb-section-gap scroll-mt-28" id="seasonal">
<div class="relative overflow-hidden rounded-lg bg-secondary-container/45 border border-secondary-fixed-dim/60 px-5 py-10 md:px-10 md:py-12 soft-shadow">
<div class="pointer-events-none absolute left-6 top-6 text-secondary/40 text-3xl" aria-hidden="true">✦</div>
<div class="pointer-events-none absolute right-8 top-8 text-primary/30 text-4xl" aria-hidden="true">✿</div>
<div class="pointer-events-none absolute bottom-6 left-10 text-secondary/40 text-3xl" aria-hidden="true">🍋</div>
<div class="text-center max-w-2xl mx-auto mb-8">
<p class="font-label-sm text-label-sm tracking-[0.18em] text-secondary uppercase mb-2">Seasonal Menu</p>
<h2 class="font-headline-lg text-headline-lg text-primary inline-flex items-center justify-center gap-3">
<span class="material-symbols-outlined text-secondary">auto_awesome</span>
期間限定メニュー
<span class="material-symbols-outlined text-secondary">local_florist</span>
</h2>
<p class="text-on-surface-variant mt-4">季節のおいしさをぎゅっと詰め込んだ、今だけの特別なスイーツです。</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-gutter">
<?php
$seasonal_query = new WP_Query( array(
    'post_type'      => 'seasonal_menu',
    'posts_per_page' => 3,
    'orderby'        => array(
        'menu_order' => 'ASC',
        'date'       => 'DESC',
    ),
) );

if ( $seasonal_query->have_posts() ) :
    while ( $seasonal_query->have_posts() ) :
        $seasonal_query->the_post();
        $price = get_post_meta( get_the_ID(), 'seasonal_price', true );
        $label = get_post_meta( get_the_ID(), 'seasonal_label', true );
        $image = get_the_post_thumbnail_url( get_the_ID(), 'large' );
        if ( ! $image ) {
            $image = get_template_directory_uri() . '/images/menu-fruit-tart.jpg';
        }
        ?>
        <article class="group bg-surface/95 rounded-lg p-5 border border-primary-container/70 soft-shadow hover:-translate-y-1 transition-transform">
            <div class="relative aspect-[4/3] rounded-lg overflow-hidden mb-5 bg-surface-container">
                <img alt="<?php echo esc_attr( get_the_title() ); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="<?php echo esc_url( $image ); ?>"/>
                <?php if ( $label ) : ?>
                    <span class="absolute left-3 top-3 rounded-full bg-primary text-on-primary px-3 py-1 font-label-sm text-label-sm"><?php echo esc_html( $label ); ?></span>
                <?php endif; ?>
            </div>
            <div class="space-y-3">
                <h3 class="font-title-md text-title-md text-on-surface"><?php echo esc_html( get_the_title() ); ?></h3>
                <div class="text-on-surface-variant text-sm leading-6"><?php echo wp_kses_post( get_the_excerpt() ? get_the_excerpt() : wp_trim_words( get_the_content(), 48, '…' ) ); ?></div>
                <?php if ( $price ) : ?>
                    <p class="font-bold text-primary text-lg"><?php echo esc_html( $price ); ?></p>
                <?php endif; ?>
            </div>
        </article>
        <?php
    endwhile;
    wp_reset_postdata();
else :
    $fallback_items = array(
        array(
            'title' => '春いちごのミルフィーユ',
            'description' => '香ばしいパイ生地に、甘酸っぱいいちごとカスタードを重ねました。',
            'price' => '¥620',
            'label' => '春限定',
            'image' => 'menu-recommend-tart.jpg',
        ),
        array(
            'title' => '瀬戸内レモンのレアチーズ',
            'description' => '爽やかなレモンの香りと、なめらかなチーズの口どけを楽しめます。',
            'price' => '¥560',
            'label' => '数量限定',
            'image' => 'menu-lemon-cake.jpg',
        ),
        array(
            'title' => '桃のショートケーキ',
            'description' => 'みずみずしい桃と、ふんわり生クリームを合わせた季節の人気商品です。',
            'price' => '¥600',
            'label' => '夏限定',
            'image' => 'menu-shortcake.jpg',
        ),
    );
    foreach ( $fallback_items as $item ) :
        ?>
        <article class="group bg-surface/95 rounded-lg p-5 border border-primary-container/70 soft-shadow hover:-translate-y-1 transition-transform">
            <div class="relative aspect-[4/3] rounded-lg overflow-hidden mb-5 bg-surface-container">
                <img alt="<?php echo esc_attr( $item['title'] ); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="<?php echo esc_url( get_template_directory_uri() . '/images/' . $item['image'] ); ?>"/>
                <span class="absolute left-3 top-3 rounded-full bg-primary text-on-primary px-3 py-1 font-label-sm text-label-sm"><?php echo esc_html( $item['label'] ); ?></span>
            </div>
            <div class="space-y-3">
                <h3 class="font-title-md text-title-md text-on-surface"><?php echo esc_html( $item['title'] ); ?></h3>
                <p class="text-on-surface-variant text-sm leading-6"><?php echo esc_html( $item['description'] ); ?></p>
                <p class="font-bold text-primary text-lg"><?php echo esc_html( $item['price'] ); ?></p>
            </div>
        </article>
        <?php
    endforeach;
endif;
?>
</div>
<div class="mt-8 flex flex-col md:flex-row items-center justify-center gap-4 text-center">
<p class="text-sm text-on-surface-variant">期間限定メニューは数量に限りがあります。お取り置きはLINEからお気軽にご相談ください。</p>
<a class="inline-flex items-center gap-2 bg-[#06C755] text-white px-6 py-3 rounded-full font-bold hover:opacity-90 transition-all" href="https://lin.ee/xxxxx" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined">chat</span>
LINEで問い合わせ
</a>
</div>
</div>
</section>