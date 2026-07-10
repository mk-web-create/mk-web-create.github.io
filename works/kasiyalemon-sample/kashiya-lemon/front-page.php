<?php
get_header();
?>
<main id="top">
<section class="hero-section relative min-h-[819px] flex items-center overflow-hidden">
<div class="absolute inset-0 z-0">
<img alt="いちごを飾った菓子屋レモンのショートケーキ" class="hero-image w-full h-full object-cover" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hero-cake.jpg"/>
<div class="hero-overlay absolute inset-0"></div>
</div>
<div class="max-w-container-max mx-auto px-gutter relative z-10 w-full">
<div class="hero-copy max-w-xl bg-white/40 backdrop-blur-md p-stack-lg rounded-3xl border border-white/20">
<h1 class="font-display-lg text-display-lg text-on-background mb-stack-md leading-tight">
                    毎日に、<br/>
                    とっておきの甘さを。
                </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-stack-lg">
                    素材のおいしさを大切に、ひとつひとつ心を込めて。<br/>
                    笑顔になれるお菓子を、あなたのそばに。
                </p>
<div class="hero-actions flex flex-wrap gap-4">
<a class="bg-primary-container text-on-primary-container px-8 py-4 rounded-full font-label-sm text-label-sm shadow-sm hover:translate-y-[-2px] transition-transform flex items-center gap-2" href="<?php echo esc_url( home_url( '/#anniversary' ) ); ?>">
<span class="material-symbols-outlined">calendar_today</span>
                        予約はこちら
                    </a>
<a class="bg-[#06C755] text-white px-8 py-4 rounded-full font-label-sm text-label-sm shadow-sm hover:translate-y-[-2px] transition-transform flex items-center gap-2" href="https://lin.ee/xxxxx" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">chat</span>
                        LINEで問い合わせ
                    </a>
</div>
</div>
</div>
</section>
<!-- About Section -->
<section class="py-section-gap" id="about">
<div class="max-w-container-max mx-auto px-gutter">
<div class="grid grid-cols-1 md:grid-cols-2 gap-stack-lg items-center">
<div class="space-y-stack-md order-2 md:order-1">
<span class="font-accent-script text-accent-script text-primary italic">About</span>
<h2 class="font-headline-md text-headline-md flex items-center gap-2">
                        お店について
                        <span class="material-symbols-outlined text-secondary-fixed">favorite</span>
</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed">
                        菓子屋レモンは、地域の皆さまに愛される街の小さな洋菓子店です。<br/>
                        新鮮な素材を選び、手作りにこだわったお菓子を毎日ひとつひとつ丁寧にお作りしています。<br/>
                        ほっとするやさしい甘さを、ぜひお楽しみください。
                    </p>
<a class="border-2 border-primary-container text-primary px-8 py-2 rounded-full font-label-sm text-label-sm hover:bg-primary-container transition-colors inline-flex items-center gap-2" href="<?php echo esc_url( home_url( '/#anniversary' ) ); ?>">
                        記念日ケーキを見る
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
</a>
</div>
<div class="relative order-1 md:order-2">
<div class="grid grid-cols-2 gap-4">
<img alt="生地を丁寧に混ぜる菓子職人" class="w-full aspect-square object-cover rounded-3xl shadow-soft" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/about-baking.jpg"/>
<div class="grid grid-rows-2 gap-4">
<img alt="お菓子に使う新鮮なレモン" class="w-full h-full object-cover rounded-3xl shadow-soft" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/about-lemons.jpg"/>
<img alt="お菓子作りに使う卵と小麦粉" class="w-full h-full object-cover rounded-3xl shadow-soft" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/about-eggs.jpg"/>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Anniversary Section -->
<section class="py-section-gap bg-surface-container-low" id="anniversary">
<div class="max-w-container-max mx-auto px-gutter">
<div class="grid grid-cols-1 md:grid-cols-2 gap-stack-lg items-center">
<div class="relative rounded-3xl overflow-hidden shadow-soft aspect-[4/3]">
<img alt="誕生日を彩るいちごのホールケーキ" class="w-full h-full object-cover" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/anniversary-cake.jpg"/>
</div>
<div class="space-y-stack-md p-stack-md">
<span class="font-accent-script text-accent-script text-primary italic">Anniversary</span>
<h2 class="font-headline-md text-headline-md">特別な日を、もっと特別に。</h2>
<p class="font-body-md text-on-surface-variant">
                        お誕生日や記念日にぴったりのホールケーキをご用意しています。<br/>
                        ご希望に合わせたデザインやメッセージで、大切な1日を彩ります。
                    </p>
<a class="bg-primary-container text-on-primary-container px-10 py-4 rounded-full font-label-sm text-label-sm shadow-sm hover:translate-y-[-2px] transition-transform w-full md:w-auto flex justify-center items-center gap-2" href="https://lin.ee/xxxxx" rel="noopener noreferrer" target="_blank">
                        LINEで予約を相談する
                        <span class="material-symbols-outlined">arrow_forward</span>
</a>
<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-stack-md">
<div class="flex items-center gap-2 text-on-surface-variant text-sm">
<span class="material-symbols-outlined text-primary">calendar_month</span>
                            3日前までの予約でOK
                        </div>
<div class="flex items-center gap-2 text-on-surface-variant text-sm">
<span class="material-symbols-outlined text-primary">edit_note</span>
                            メッセージプレート無料
                        </div>
<div class="flex items-center gap-2 text-on-surface-variant text-sm">
<span class="material-symbols-outlined text-primary">favorite</span>
                            アレルギー対応も相談可
                        </div>
</div>
</div>
</div>
</div>
</section>
<!-- Seasonal Preview Section -->
<section class="py-section-gap bg-secondary-container/35">
<div class="max-w-container-max mx-auto px-gutter">
<div class="relative overflow-hidden rounded-[32px] bg-surface shadow-soft border border-secondary-fixed-dim/60 p-6 md:p-8">
<div class="pointer-events-none absolute right-8 top-6 text-secondary/40 text-3xl" aria-hidden="true">✦</div>
<div class="pointer-events-none absolute left-8 bottom-6 text-primary/30 text-3xl" aria-hidden="true">✿</div>
<div class="grid grid-cols-1 md:grid-cols-[240px_1fr] gap-6 md:gap-8 items-center">
<div class="aspect-[4/3] md:aspect-square overflow-hidden rounded-[24px] bg-surface-container">
<img alt="今だけの季節メニュー" class="w-full h-full object-cover" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/menu-fruit-tart.jpg"/>
</div>
<div class="space-y-4">
<div class="inline-flex items-center gap-2 rounded-full bg-primary-container text-primary px-4 py-2 font-label-sm text-label-sm">
<span class="material-symbols-outlined text-sm">auto_awesome</span>
Seasonal Menu
</div>
<div class="space-y-2">
<h2 class="font-headline-md text-headline-md text-on-surface">今だけの季節メニュー</h2>
<p class="text-on-surface-variant leading-7">旬の果物やレモンを使った、期間限定の特別なスイーツをご用意しています。</p>
</div>
<a class="inline-flex items-center gap-2 bg-primary text-on-primary px-8 py-3 rounded-full font-label-sm text-label-sm shadow-sm hover:translate-y-[-2px] transition-transform" href="<?php echo esc_url( home_url( '/menu/#seasonal' ) ); ?>">
期間限定メニューを見る
<span class="material-symbols-outlined text-sm">arrow_forward</span>
</a>
</div>
</div>
</div>
</div>
</section>
<!-- Menu Section -->
<section class="py-section-gap" id="menu">
<div class="max-w-container-max mx-auto px-gutter">
<div class="text-center mb-section-gap">
<h2 class="font-headline-md text-headline-md inline-flex items-center gap-3">
                    普段のメニュー
                    <span class="material-symbols-outlined text-secondary-fixed">cake</span>
</h2>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-stack-lg">
<!-- Card 1 -->
<div class="bg-surface rounded-[32px] overflow-hidden shadow-soft group hover:translate-y-[-8px] transition-transform duration-300">
<div class="aspect-square overflow-hidden">
<img alt="いちごのショートケーキ" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/menu-shortcake.jpg"/>
</div>
<div class="p-6 space-y-2">
<h3 class="font-headline-sm text-lg">いちごのショートケーキ</h3>
<p class="text-on-surface-variant text-sm">ふわふわのスポンジと生クリーム、いちごの定番ケーキ。</p>
<p class="text-primary font-bold text-lg">¥520 <span class="text-xs font-normal">(税込)</span></p>
</div>
</div>
<!-- Card 2 -->
<div class="bg-surface rounded-[32px] overflow-hidden shadow-soft group hover:translate-y-[-8px] transition-transform duration-300">
<div class="aspect-square overflow-hidden">
<img alt="季節のフルーツタルト" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/menu-fruit-tart.jpg"/>
</div>
<div class="p-6 space-y-2">
<h3 class="font-headline-sm text-lg">季節のフルーツタルト</h3>
<p class="text-on-surface-variant text-sm">旬のフルーツをたっぷりのせた彩り豊かなタルト。</p>
<p class="text-primary font-bold text-lg">¥580 <span class="text-xs font-normal">(税込)</span></p>
</div>
</div>
<!-- Card 3 -->
<div class="bg-surface rounded-[32px] overflow-hidden shadow-soft group hover:translate-y-[-8px] transition-transform duration-300">
<div class="aspect-square overflow-hidden">
<img alt="レモンマドレーヌ" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/menu-madeleine.jpg"/>
</div>
<div class="p-6 space-y-2">
<h3 class="font-headline-sm text-lg">レモンマドレーヌ</h3>
<p class="text-on-surface-variant text-sm">瀬戸内レモン香る、しっとりやさしい味わいの焼き菓子。</p>
<p class="text-primary font-bold text-lg">¥220 <span class="text-xs font-normal">(税込)</span></p>
</div>
</div>
<!-- Card 4 -->
<div class="bg-surface rounded-[32px] overflow-hidden shadow-soft group hover:translate-y-[-8px] transition-transform duration-300">
<div class="aspect-square overflow-hidden">
<img alt="ガトーショコラ" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/menu-gateau-chocolat.jpg"/>
</div>
<div class="p-6 space-y-2">
<h3 class="font-headline-sm text-lg">ガトーショコラ</h3>
<p class="text-on-surface-variant text-sm">濃厚なチョコレートの味わいを楽しめる人気のケーキ。</p>
<p class="text-primary font-bold text-lg">¥480 <span class="text-xs font-normal">(税込)</span></p>
</div>
</div>
</div>
<div class="mt-stack-lg text-center">
<a class="border-2 border-primary-container text-primary px-12 py-3 rounded-full font-label-sm text-label-sm hover:bg-primary-container transition-colors inline-flex items-center gap-2" href="<?php echo esc_url( home_url( '/menu/' ) ); ?>">
                    すべてのメニューを見る
                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
</a>
</div>
</div>
</section>
<!-- News & SNS Section -->
<section class="py-section-gap bg-surface-container-low/50">
<div class="max-w-container-max mx-auto px-gutter grid grid-cols-1 lg:grid-cols-2 gap-stack-lg">
<!-- News Column -->
<div class="space-y-stack-md" id="news">
<div class="flex items-center gap-2 mb-stack-md">
<span class="font-accent-script text-accent-script text-primary italic">News</span>
<h2 class="font-headline-md text-headline-md flex items-center gap-2">
                        お知らせ
                        <span class="material-symbols-outlined text-secondary-fixed">bakery_dining</span>
</h2>
</div>
<?php get_template_part( 'template-parts/latest-news' ); ?>
</div>
<!-- SNS Column -->
<div class="flex flex-col md:flex-row items-center gap-stack-md bg-white rounded-[40px] p-8 shadow-soft relative overflow-hidden">
<div class="flex-1 space-y-stack-md z-10">
<h2 class="font-headline-md text-headline-md flex items-baseline gap-1">
                        SNS<span class="text-sm font-body-md text-on-surface-variant">でつながる</span>
</h2>
<p class="text-sm text-on-surface-variant">最新情報や限定メニューをお届けします♪</p>
<div class="space-y-3">
<a class="line-button text-white rounded-2xl p-4 flex items-center gap-4 hover:opacity-90 transition-opacity" href="https://lin.ee/xxxxx" rel="noopener noreferrer" target="_blank">
<div class="bg-white/20 p-2 rounded-xl">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">chat</span>
</div>
<div class="text-left">
<div class="font-bold">LINEを友だち追加</div>
<div class="text-[10px] opacity-80">ご予約・お問い合わせも簡単！</div>
</div>
</a>
<a class="insta-gradient text-white rounded-2xl p-4 flex items-center gap-4 hover:opacity-90 transition-opacity" href="https://www.instagram.com/xxxxx/" rel="noopener noreferrer" target="_blank">
<div class="bg-white/20 p-2 rounded-xl">
<span class="material-symbols-outlined">photo_camera</span>
</div>
<div class="text-left">
<div class="font-bold">Instagramをフォロー</div>
<div class="text-[10px] opacity-80">スイーツの写真を更新中！</div>
</div>
</a>
</div>
</div>
<div class="w-full md:w-1/2 flex justify-center z-10">
<img alt="菓子屋レモンのSNSを表示したスマートフォン" class="max-h-[300px] object-contain drop-shadow-2xl" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sns-phone.jpg"/>
</div>
<!-- Decorative background elements -->
<div class="absolute -bottom-10 -right-10 opacity-10">
<span class="material-symbols-outlined text-[200px] text-secondary">cake</span>
</div>
</div>
</div>
</section>
<!-- Access Section -->
<section class="py-section-gap" id="access">
<div class="max-w-container-max mx-auto px-gutter">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-stack-lg bg-surface rounded-[40px] overflow-hidden shadow-soft">
<div class="p-10 space-y-stack-md">
<div class="flex items-center gap-2 mb-stack-md">
<span class="font-accent-script text-accent-script text-primary italic">Access</span>
<h2 class="font-headline-md text-headline-md flex items-center gap-2">
                            アクセス
                            <span class="material-symbols-outlined text-secondary-fixed">bakery_dining</span>
</h2>
</div>
<div class="space-y-6">
<div class="flex items-start gap-4">
<span class="material-symbols-outlined text-primary bg-primary-container/30 p-2 rounded-full">location_on</span>
<div>
<p class="font-bold text-on-surface"><span class="text-xs text-primary">【仮】</span> 〒790-0000</p>
<p class="text-on-surface-variant">愛媛県松山市〇〇町〇-〇</p>
</div>
</div>
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-primary bg-primary-container/30 p-2 rounded-full">call</span>
<p class="font-bold text-on-surface text-xl"><span class="text-xs text-primary">【仮】</span> 089-000-0000</p>
</div>
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-primary bg-primary-container/30 p-2 rounded-full">schedule</span>
<div>
<p class="text-on-surface"><span class="text-xs font-bold text-primary">【仮】</span> 10:00 〜 19:00</p>
<p class="text-xs text-on-surface-variant">定休日（仮）：水曜日・第2火曜日</p>
</div>
</div>
</div>
<p class="text-xs text-on-surface-variant bg-surface-container-low rounded-xl p-3">※住所・電話番号・営業時間は公開前の仮情報です。</p>
<div class="pt-2">
<a class="border-2 border-primary-container text-primary px-8 py-2 rounded-full font-label-sm text-label-sm hover:bg-primary-container transition-colors inline-flex items-center gap-2" href="https://www.google.com/maps/search/?api=1&amp;query=%E6%84%9B%E5%AA%9B%E7%9C%8C%E6%9D%BE%E5%B1%B1%E5%B8%82" rel="noopener noreferrer" target="_blank">
                            Googleマップで見る
                            <span class="material-symbols-outlined text-sm">open_in_new</span>
</a>
</div>
</div>
<div class="h-[400px] lg:h-auto">
<!-- MAP EMBED START: 下のプレースホルダーをGoogleマップのiframeに置き換えてください -->
<div class="w-full h-full bg-surface-container flex items-center justify-center relative" id="map-embed">
<div class="absolute inset-0 opacity-60 bg-[radial-gradient(circle_at_center,_#fff8f6_0,_#ffe9e3_55%,_#fbd1d1_100%)]"></div>
<div class="z-10 bg-white p-5 rounded-2xl shadow-lg border border-primary-container flex flex-col items-center gap-2 text-center">
<span class="material-symbols-outlined text-strawberry text-4xl" style="font-variation-settings: 'FILL' 1;">location_on</span>
<span class="font-bold text-sm">菓子屋レモン</span>
<span class="text-xs text-on-surface-variant">Googleマップ埋め込み予定</span>
</div>
</div>
<!-- MAP EMBED END -->
</div>
</div>
</div>
</section>
<!-- FAQ Section -->
<section class="py-section-gap bg-background" id="faq">
<div class="max-w-container-max mx-auto px-gutter">
<div class="text-center mb-stack-lg">
<h2 class="font-headline-md text-headline-md inline-flex items-center gap-3">
                    よくある質問
                    <span class="material-symbols-outlined text-secondary-fixed">favorite</span>
</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div class="space-y-4">
<details class="group bg-white rounded-2xl p-4 shadow-sm border border-primary-container/20">
<summary class="flex justify-between items-center cursor-pointer list-none font-bold text-on-surface">
                            予約はいつまでにすればいいですか？
                            <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
</summary>
<p class="mt-4 text-on-surface-variant text-sm border-t border-dotted pt-4">
                            ホールケーキは3日前までにご予約をお願いいたします。カットケーキは当日お取り置きも可能ですので、お気軽にお電話ください。
                        </p>
</details>
<details class="group bg-white rounded-2xl p-4 shadow-sm border border-primary-container/20">
<summary class="flex justify-between items-center cursor-pointer list-none font-bold text-on-surface">
                            アレルギー対応は可能ですか？
                            <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
</summary>
<p class="mt-4 text-on-surface-variant text-sm border-t border-dotted pt-4">
                            はい、卵や乳製品不使用のケーキも承っております。製造ラインの洗浄など配慮いたしますが、微量でも反応が出る方は事前にお申し付けください。
                        </p>
</details>
</div>
<div class="space-y-4">
<details class="group bg-white rounded-2xl p-4 shadow-sm border border-primary-container/20">
<summary class="flex justify-between items-center cursor-pointer list-none font-bold text-on-surface">
                            ホールケーキのサイズはどのくらいですか？
                            <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
</summary>
<p class="mt-4 text-on-surface-variant text-sm border-t border-dotted pt-4">
                            4号（12cm/2-4人分）、5号（15cm/4-6人分）、6号（18cm/6-8人分）をご用意しております。それ以上のサイズもお気軽にご相談ください。
                        </p>
</details>
<details class="group bg-white rounded-2xl p-4 shadow-sm border border-primary-container/20">
<summary class="flex justify-between items-center cursor-pointer list-none font-bold text-on-surface">
                            駐車場はありますか？
                            <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
</summary>
<p class="mt-4 text-on-surface-variant text-sm border-t border-dotted pt-4">
                            店前に2台分の専用駐車場がございます。満車の場合は近隣のコインパーキングをご利用ください。
                        </p>
</details>
</div>
</div>
</div>
</section>
</main>

<?php
get_footer();
?>
