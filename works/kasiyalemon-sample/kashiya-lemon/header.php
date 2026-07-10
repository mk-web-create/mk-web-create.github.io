<!DOCTYPE html>

<html class="scroll-smooth" lang="ja"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<?php /* WordPress prints the title tag via theme support. */ ?>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;600;700;900&family=Plus+Jakarta+Sans:wght@400;600&family=Epilogue:ital,wght@0,300;1,300&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "outline": "#827474",
                        "surface-container-highest": "#ffdbd0",
                        "surface-dim": "#fbd1c4",
                        "primary-fixed": "#ffdada",
                        "on-primary-container": "#775858",
                        "surface-variant": "#ffdbd0",
                        "on-error-container": "#93000a",
                        "outline-variant": "#d3c3c2",
                        "on-surface-variant": "#504444",
                        "on-secondary": "#ffffff",
                        "inverse-on-surface": "#ffede8",
                        "on-primary-fixed-variant": "#5c3f40",
                        "tertiary-fixed-dim": "#9dd761",
                        "on-background": "#2c160e",
                        "primary-fixed-dim": "#e5bdbd",
                        "primary": "#765657",
                        "on-secondary-fixed-variant": "#4e4800",
                        "on-error": "#ffffff",
                        "error": "#ba1a1a",
                        "on-surface": "#2c160e",
                        "surface-container-lowest": "#ffffff",
                        "surface-tint": "#765657",
                        "on-secondary-fixed": "#1f1c00",
                        "secondary-fixed": "#f0e585",
                        "surface-container-low": "#fff1ed",
                        "tertiary-fixed": "#b8f47a",
                        "on-secondary-container": "#6c6410",
                        "on-primary": "#ffffff",
                        "background": "#fff8f6",
                        "on-tertiary-container": "#3d6b00",
                        "surface-container": "#ffe9e3",
                        "surface-bright": "#fff8f6",
                        "on-tertiary": "#ffffff",
                        "on-tertiary-fixed": "#0e2000",
                        "error-container": "#ffdad6",
                        "inverse-surface": "#442a22",
                        "on-primary-fixed": "#2c1516",
                        "on-tertiary-fixed-variant": "#2c5000",
                        "secondary-container": "#ede282",
                        "tertiary-container": "#b1ec73",
                        "inverse-primary": "#e5bdbd",
                        "surface": "#fff8f6",
                        "tertiary": "#3c6a00",
                        "primary-container": "#fbd1d1",
                        "secondary": "#67600a",
                        "surface-container-high": "#ffe2da",
                        "secondary-fixed-dim": "#d3c96c"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "stack-sm": "8px",
                        "gutter": "24px",
                        "stack-md": "16px",
                        "container-max": "1200px",
                        "stack-lg": "32px",
                        "section-gap": "80px"
                    },
                    "fontFamily": {
                        "headline-md": ["Noto Serif JP"],
                        "headline-sm": ["Noto Serif JP"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "body-md": ["Plus Jakarta Sans"],
                        "display-lg": ["Noto Serif JP"],
                        "accent-script": ["Epilogue"],
                        "label-sm": ["Plus Jakarta Sans"]
                    },
                    "fontSize": {
                        "headline-md": ["32px", {"lineHeight": "1.5", "fontWeight": "700"}],
                        "headline-sm": ["24px", {"lineHeight": "1.5", "fontWeight": "600"}],
                        "body-lg": ["18px", {"lineHeight": "1.8", "fontWeight": "400"}],
                        "body-md": ["16px", {"lineHeight": "1.8", "fontWeight": "400"}],
                        "display-lg": ["48px", {"lineHeight": "1.4", "letterSpacing": "0.05em", "fontWeight": "700"}],
                        "accent-script": ["20px", {"lineHeight": "1.2", "fontWeight": "300"}],
                        "label-sm": ["14px", {"lineHeight": "1.4", "fontWeight": "600"}]
                    }
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .text-strawberry { color: #E84545; }
        .bg-strawberry { background-color: #E84545; }
        .bg-lemon { background-color: #FFF492; }
        .border-strawberry { border-color: #E84545; }
        .shadow-soft {
            box-shadow: 0px 10px 30px rgba(93, 64, 55, 0.08);
        }
        
        .lemon-divider {
            width: 40px;
            height: 40px;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23FFF492'%3E%3Cpath d='M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z'/%3E%3C/svg%3E");
            background-size: contain;
            background-repeat: no-repeat;
        }

        .line-button {
            background-color: #06C755;
        }
        .insta-gradient {
            background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);
        }

        @media (max-width: 639px) {
            .hero-section {
                min-height: calc(100svh - 68px);
                align-items: flex-end;
                padding: 56px 0 32px;
            }
            .hero-image {
                object-position: 62% center;
            }
            .hero-overlay {
                background: linear-gradient(to bottom, rgba(44, 22, 14, 0.08), rgba(44, 22, 14, 0.42));
            }
            .hero-copy {
                padding: 24px 20px;
                background: rgba(255, 248, 246, 0.9);
                border-color: rgba(255, 255, 255, 0.7);
            }
            .hero-copy h1 {
                font-size: 34px;
                line-height: 1.35;
            }
            .hero-copy p {
                font-size: 15px;
                line-height: 1.75;
            }
            .hero-actions,
            .hero-actions a {
                width: 100%;
            }
            .hero-actions a {
                justify-content: center;
            }
        }
    </style>
<?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-background text-on-surface font-body-md overflow-x-hidden' ); ?>>
<?php wp_body_open(); ?>
<!-- Header Section -->
<header class="bg-surface/90 backdrop-blur-md sticky top-0 z-50 shadow-[0px_10px_30px_rgba(93,64,55,0.08)]">
<div class="max-w-container-max mx-auto px-gutter py-3 lg:py-4 flex justify-between items-center relative">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-secondary-fixed-dim text-3xl">bakery_dining</span>
<div class="font-headline-sm text-xl sm:text-headline-sm font-bold text-on-background">菓子屋レモン</div>
</div>
<nav class="hidden lg:flex items-center gap-8">
<a class="font-label-sm text-label-sm text-primary font-bold border-b-2 border-primary pb-1" href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors" href="<?php echo esc_url( home_url( '/#about' ) ); ?>">お店について</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors" href="<?php echo esc_url( home_url( '/menu/' ) ); ?>">メニュー</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors" href="<?php echo esc_url( home_url( '/#anniversary' ) ); ?>">記念日ケーキ</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors" href="<?php echo esc_url( home_url( '/#news' ) ); ?>">お知らせ</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors" href="<?php echo esc_url( home_url( '/#access' ) ); ?>">アクセス</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors" href="<?php echo esc_url( home_url( '/#faq' ) ); ?>">よくある質問</a>
</nav>
<a class="hidden lg:inline-flex bg-primary-container text-on-primary-container px-6 py-2 rounded-full font-label-sm text-label-sm hover:opacity-80 transition-opacity active:scale-95 duration-150" href="<?php echo esc_url( home_url( '/#anniversary' ) ); ?>">
                予約はこちら
            </a>
<button aria-controls="mobile-menu" aria-expanded="false" aria-label="メニューを開く" class="lg:hidden w-11 h-11 rounded-full bg-primary-container text-primary inline-flex items-center justify-center" id="menu-toggle" type="button">
<span aria-hidden="true" class="material-symbols-outlined">menu</span>
</button>
<nav aria-label="モバイルナビゲーション" class="hidden absolute top-full left-gutter right-gutter mt-2 bg-surface rounded-3xl p-5 shadow-soft border border-primary-container/40 lg:hidden" id="mobile-menu">
<div class="grid gap-1 text-sm font-bold text-on-surface-variant">
<a class="px-4 py-3 rounded-xl hover:bg-surface-container" href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a>
<a class="px-4 py-3 rounded-xl hover:bg-surface-container" href="<?php echo esc_url( home_url( '/#about' ) ); ?>">お店について</a>
<a class="px-4 py-3 rounded-xl hover:bg-surface-container" href="<?php echo esc_url( home_url( '/menu/' ) ); ?>">メニュー</a>
<a class="px-4 py-3 rounded-xl hover:bg-surface-container" href="<?php echo esc_url( home_url( '/#anniversary' ) ); ?>">記念日ケーキ</a>
<a class="px-4 py-3 rounded-xl hover:bg-surface-container" href="<?php echo esc_url( home_url( '/#news' ) ); ?>">お知らせ</a>
<a class="px-4 py-3 rounded-xl hover:bg-surface-container" href="<?php echo esc_url( home_url( '/#access' ) ); ?>">アクセス</a>
<a class="px-4 py-3 rounded-xl hover:bg-surface-container" href="<?php echo esc_url( home_url( '/#faq' ) ); ?>">よくある質問</a>
<a class="mt-2 px-4 py-3 rounded-full bg-primary-container text-on-primary-container text-center" href="<?php echo esc_url( home_url( '/#anniversary' ) ); ?>">予約はこちら</a>
</div>
</nav>
</div>
</header>
