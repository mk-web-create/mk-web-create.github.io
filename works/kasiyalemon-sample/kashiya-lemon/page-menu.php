<?php
/*
Template Name: メニュー
*/
get_header();
?>
<main>
<!-- Main Visual -->
<section class="relative bg-surface-container-low overflow-hidden py-16 md:py-24">
<div class="absolute inset-0 lemon-pattern opacity-30"></div>
<div class="relative max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop text-center">
<div class="inline-block p-4 rounded-full bg-secondary-container/50 mb-6 animate-bounce">
<span class="material-symbols-outlined text-secondary text-4xl">bakery_dining</span>
</div>
<span class="font-accent-script italic text-primary text-lg">Menu</span>
<h1 class="menu-hero-title font-display-lg text-display-lg text-on-background mt-2 mb-4 md:mb-6">お菓子のメニュー</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">
                    毎日食べたい定番のお菓子から、季節限定のスイーツまで。<br class="hidden md:block"/>
                    心温まるひとときを添える一品をご用意しています。
                </p>
</div>
<!-- Decorative Illustrations -->
<div class="absolute top-10 left-10 opacity-20 hidden md:block animate-pulse">
<span class="material-symbols-outlined text-6xl text-secondary">cake</span>
</div>
<div class="absolute bottom-10 right-10 opacity-20 hidden md:block animate-pulse">
<span class="material-symbols-outlined text-6xl text-primary">cookie</span>
</div>
</section>
<!-- Breadcrumb -->
<nav class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-6">
<ul class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface-variant">
<li><a class="hover:text-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></li>
<li class="flex items-center gap-2">
<span class="material-symbols-outlined text-xs">chevron_right</span>
<span class="text-primary font-bold">メニュー</span>
</li>
</ul>
</nav>
<!-- Category Nav -->
<section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mb-12" aria-label="商品カテゴリー">
<div class="category-links flex flex-wrap gap-3 justify-center">
<a class="inline-flex px-6 py-3 rounded-full bg-primary text-on-primary shadow-sm hover:-translate-y-0.5 transition-transform" href="#recommended">おすすめ</a>
<a class="inline-flex px-6 py-3 rounded-full bg-primary-container text-primary hover:bg-secondary-container hover:text-on-secondary-container transition-all" href="#seasonal">季節限定</a>
<a class="inline-flex px-6 py-3 rounded-full bg-surface-container-high text-on-surface-variant hover:bg-primary-container hover:text-primary transition-all" href="#cakes">ケーキ</a>
<a class="inline-flex px-6 py-3 rounded-full bg-surface-container-high text-on-surface-variant hover:bg-primary-container hover:text-primary transition-all" href="#whole-cakes">ホールケーキ</a>
<a class="inline-flex px-6 py-3 rounded-full bg-surface-container-high text-on-surface-variant hover:bg-primary-container hover:text-primary transition-all" href="#baked-goods">焼き菓子</a>
<a class="inline-flex px-6 py-3 rounded-full bg-secondary-container text-on-secondary-container hover:bg-secondary-fixed-dim transition-all" href="#gifts">ギフト</a>
</div>
</section>
<!-- Recommended Menu -->
<section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop section-gap mb-section-gap" id="recommended">
<div class="flex items-center gap-4 mb-8">
<h2 class="font-headline-lg text-headline-lg text-primary inline-flex items-center gap-3"><span class="material-symbols-outlined text-secondary">favorite</span>おすすめ</h2>
<div class="h-px bg-outline-variant flex-grow"></div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<!-- Strawberry Shortcake -->
<div class="group relative bg-surface border border-outline-variant/30 rounded-lg p-6 soft-shadow hover:-translate-y-1 transition-transform">
<div class="absolute top-4 left-4 z-10 bg-primary text-on-primary font-label-sm text-label-sm px-3 py-1 rounded-full">人気</div>
<div class="aspect-square rounded-lg overflow-hidden mb-6">
<img alt="苺のショートケーキ" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/menu-recommend-shortcake.jpg"/>
</div>
<h4 class="font-title-md text-title-md text-on-surface mb-2">苺のショートケーキ</h4>
<p class="text-on-surface-variant mb-4">口溶けの良いスポンジと、北海道産生クリームが苺の甘酸っぱさを引き立てます。</p>
<p class="font-bold text-primary">¥520</p>
</div>
<!-- Seasonal Fruit Tart -->
<div class="group relative bg-surface border border-outline-variant/30 rounded-lg p-6 soft-shadow hover:-translate-y-1 transition-transform">
<div class="absolute top-4 left-4 z-10 bg-secondary text-on-secondary font-label-sm text-label-sm px-3 py-1 rounded-full">おすすめ</div>
<div class="aspect-square rounded-lg overflow-hidden mb-6">
<img alt="季節のフルーツタルト" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/menu-recommend-tart.jpg"/>
</div>
<h4 class="font-title-md text-title-md text-on-surface mb-2">季節のフルーツタルト</h4>
<p class="text-on-surface-variant mb-4">サクサクのタルト生地に、旬のフルーツを贅沢に盛り合わせました。</p>
<p class="font-bold text-primary">¥580</p>
</div>
<!-- Lemon Madeleines -->
<div class="group relative bg-surface border border-outline-variant/30 rounded-lg p-6 soft-shadow hover:-translate-y-1 transition-transform">
<div class="absolute top-4 left-4 z-10 bg-secondary-container text-on-secondary-container font-label-sm text-label-sm px-3 py-1 rounded-full">看板商品</div>
<div class="aspect-square rounded-lg overflow-hidden mb-6">
<img alt="瀬戸内レモンのマドレーヌ" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/menu-recommend-madeleine.jpg"/>
</div>
<h4 class="font-title-md text-title-md text-on-surface mb-2">瀬戸内レモンのマドレーヌ</h4>
<p class="text-on-surface-variant mb-4">レモン果汁と皮をたっぷり練り込んだ、当店の看板焼き菓子です。</p>
<p class="font-bold text-primary">¥240</p>
</div>
</div>
</section>
<?php get_template_part( 'template-parts/seasonal-menu' ); ?>
<!-- Cake Menu Grid -->
<section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mb-section-gap" id="cakes">
<h2 class="font-headline-lg text-headline-lg text-primary mb-8 text-center inline-flex w-full justify-center items-center gap-3"><span class="material-symbols-outlined text-secondary">cake</span>ケーキ</h2>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 md:gap-gutter">
<!-- Item 1 -->
<article class="product-card flex flex-col">
<div class="aspect-[4/3] rounded-lg overflow-hidden mb-4 bg-surface-container border border-outline-variant/20">
<img alt="ガトーショコラ" class="w-full h-full object-cover" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/menu-gateau-chocolat-detail.jpg"/>
</div>
<div class="px-2">
<h5 class="font-title-md text-title-md text-on-surface">ガトーショコラ</h5>
<p class="text-label-sm text-on-surface-variant mb-2">濃厚でしっとりとした大人の味わい</p>
<p class="font-bold text-primary">¥480</p>
</div>
</article>
<!-- Item 2 -->
<article class="product-card flex flex-col">
<div class="aspect-[4/3] rounded-lg overflow-hidden mb-4 bg-surface-container border border-outline-variant/20">
<img alt="ベイクドチーズケーキ" class="w-full h-full object-cover" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/menu-cheesecake.jpg"/>
</div>
<div class="px-2">
<h5 class="font-title-md text-title-md text-on-surface">ベイクドチーズケーキ</h5>
<p class="text-label-sm text-on-surface-variant mb-2">数種類のチーズをブレンドしました</p>
<p class="font-bold text-primary">¥450</p>
</div>
</article>
<!-- Item 3 -->
<article class="product-card flex flex-col">
<div class="aspect-[4/3] rounded-lg overflow-hidden mb-4 bg-surface-container border border-outline-variant/20">
<img alt="レモンケーキ" class="w-full h-full object-cover" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/menu-lemon-cake.jpg"/>
</div>
<div class="px-2">
<h5 class="font-title-md text-title-md text-on-surface">レモンケーキ</h5>
<p class="text-label-sm text-on-surface-variant mb-2">爽やかな酸味が広がる自信作</p>
<p class="font-bold text-primary">¥420</p>
</div>
</article>
<!-- Item 4 -->
<article class="product-card flex flex-col">
<div class="aspect-[4/3] rounded-lg overflow-hidden mb-4 bg-surface-container border border-outline-variant/20">
<img alt="とろけるプリン" class="w-full h-full object-cover" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/menu-pudding.jpg"/>
</div>
<div class="px-2">
<h5 class="font-title-md text-title-md text-on-surface">とろけるプリン</h5>
<p class="text-label-sm text-on-surface-variant mb-2">卵のコクをしっかりと感じる滑らかさ</p>
<p class="font-bold text-primary">¥300</p>
</div>
</article>
</div>
</section>
<!-- Hall Cakes -->
<section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mb-section-gap" id="whole-cakes">
<div class="bg-primary-container/30 rounded-lg p-8 md:p-12">
<div class="flex flex-col md:flex-row gap-12 items-center">
<div class="w-full md:w-1/2">
<img alt="お祝い用のいちごのホールケーキ" class="rounded-lg soft-shadow w-full aspect-square object-cover" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hall-cake.jpg"/>
</div>
<div class="w-full md:w-1/2">
<h2 class="font-headline-lg text-headline-lg text-primary mb-6 inline-flex items-center gap-3"><span class="material-symbols-outlined text-secondary">favorite</span>ホールケーキ</h2>
<p class="text-on-surface-variant mb-6">大切なお祝いの日に、特別なケーキを。サイズ変更やメッセージプレート、キャンドルのご相談も承ります。</p>
<ul class="space-y-4 mb-8">
<li class="flex justify-between items-center border-b border-outline-variant/30 pb-2">
<span>4号 (12cm / 2-4名様)</span>
<span class="font-bold">¥2,800〜</span>
</li>
<li class="flex justify-between items-center border-b border-outline-variant/30 pb-2">
<span>5号 (15cm / 4-6名様)</span>
<span class="font-bold">¥3,600〜</span>
</li>
<li class="flex justify-between items-center border-b border-outline-variant/30 pb-2">
<span>6号 (18cm / 6-8名様)</span>
<span class="font-bold">¥4,500〜</span>
</li>
</ul>
<div class="flex flex-wrap gap-4 items-center">
<span class="flex items-center gap-1 text-label-sm text-primary">
<span class="material-symbols-outlined text-sm">schedule</span>3日前までの予約推奨
                            </span>
<span class="flex items-center gap-1 text-label-sm text-primary">
<span class="material-symbols-outlined text-sm">edit</span>メッセージプレート対応
                            </span>
</div>
<a class="mt-8 inline-flex items-center gap-2 bg-[#06C755] text-white px-8 py-4 rounded-full font-bold hover:opacity-90 transition-all" href="https://lin.ee/xxxxx" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined">chat</span> LINEで予約相談
                        </a>
</div>
</div>
</div>
</section>
<!-- Baked Goods & Gifts -->
<section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mb-section-gap">
<div class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
<!-- Baked Goods -->
<div id="baked-goods">
<h2 class="font-headline-lg text-headline-lg text-primary mb-8 inline-flex items-center gap-3"><span class="material-symbols-outlined text-secondary">cookie</span>焼き菓子</h2>
<div class="grid grid-cols-2 gap-4">
<div class="p-4 bg-surface rounded-lg border border-outline-variant/30 text-center">
<h6 class="font-bold mb-1">フィナンシェ</h6>
<p class="text-label-sm text-on-surface-variant">¥220</p>
</div>
<div class="p-4 bg-surface rounded-lg border border-outline-variant/30 text-center">
<h6 class="font-bold mb-1">チョコブラウニー</h6>
<p class="text-label-sm text-on-surface-variant">¥280</p>
</div>
<div class="p-4 bg-surface rounded-lg border border-outline-variant/30 text-center">
<h6 class="font-bold mb-1">バタークッキー</h6>
<p class="text-label-sm text-on-surface-variant">¥180</p>
</div>
<div class="p-4 bg-surface rounded-lg border border-outline-variant/30 text-center">
<h6 class="font-bold mb-1">スノーボール</h6>
<p class="text-label-sm text-on-surface-variant">¥350</p>
</div>
</div>
</div>
<!-- Gifts -->
<div id="gifts">
<h2 class="font-headline-lg text-headline-lg text-primary mb-8 inline-flex items-center gap-3"><span class="material-symbols-outlined text-secondary">redeem</span>ギフト</h2>
<div class="bg-secondary-container/20 rounded-lg p-6 border border-secondary-container/50">
<div class="aspect-[16/9] rounded-lg overflow-hidden mb-4">
<img alt="焼き菓子を詰め合わせたギフトボックス" class="w-full h-full object-cover" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gift-box.jpg"/>
</div>
<p class="font-bold text-on-background mb-1">ギフトボックス（S/M/L）</p>
<p class="text-on-surface-variant mb-4">ちょっとした贈り物から、大切な方へのご挨拶まで。</p>
<p class="font-bold text-primary">¥1,200〜</p>
</div>
</div>
</div>
</section>
<!-- Notice Box -->
<section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mb-section-gap">
<div class="bg-secondary-container/30 border border-secondary/20 rounded-lg p-6 md:p-8">
<div class="flex gap-4">
<span class="material-symbols-outlined text-secondary">info</span>
<div>
<h4 class="font-title-md text-title-md text-secondary mb-4">ご注文に際してのお知らせ</h4>
<ul class="space-y-2 text-on-surface-variant text-body-md">
<li>・アレルギー物質（卵、乳、小麦など）についてはスタッフまでお尋ねください。</li>
<li>・当日の取り置きは、お電話または店頭にて承っております。</li>
<li>・ホールケーキのキャンセル・変更は前日の正午までにお願いいたします。</li>
<li>・季節によりフルーツの内容が変更になる場合がございます。</li>
</ul>
</div>
</div>
</div>
</section>
<!-- CTA Section -->
<section class="bg-surface-container-high py-20 text-center">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<h2 class="font-headline-lg text-headline-lg text-primary mb-6">ご予約・お取り置きはLINEから</h2>
<p class="text-on-surface-variant mb-10 max-w-xl mx-auto">
                    公式LINEでは、季節の新作情報やお得なクーポンも配信中。トーク画面からお気軽にお問い合わせください。
                </p>
<div class="flex flex-col md:flex-row gap-4 justify-center items-center">
<a class="w-full md:w-auto flex items-center justify-center gap-2 bg-[#06C755] text-white px-10 py-4 rounded-full font-bold hover:opacity-90 transition-all text-lg" href="https://lin.ee/xxxxx" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined">chat</span> LINEで問い合わせ
                    </a>
<a class="w-full md:w-auto flex items-center justify-center gap-2 bg-surface text-primary border border-primary px-10 py-4 rounded-full font-bold hover:bg-primary/5 transition-all text-lg" href="<?php echo esc_url( home_url( '/' ) ); ?>">
<span class="material-symbols-outlined">arrow_back</span> トップページへ戻る
                    </a>
</div>
</div>
</section>
</main>

<?php
get_footer();
?>
