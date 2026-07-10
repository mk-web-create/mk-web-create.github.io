<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function kashiya_lemon_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
}
add_action( 'after_setup_theme', 'kashiya_lemon_setup' );

function kashiya_lemon_enqueue_assets() {
    wp_enqueue_style( 'kashiya-lemon-style', get_stylesheet_uri(), array(), '1.0.0' );
    wp_enqueue_script( 'kashiya-lemon-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'kashiya_lemon_enqueue_assets' );

function kashiya_lemon_register_seasonal_menu_post_type() {
    $labels = array(
        'name'               => '期間限定メニュー',
        'singular_name'      => '期間限定メニュー',
        'menu_name'          => '期間限定メニュー',
        'add_new'            => '新規追加',
        'add_new_item'       => '期間限定メニューを追加',
        'edit_item'          => '期間限定メニューを編集',
        'new_item'           => '新しい期間限定メニュー',
        'view_item'          => '期間限定メニューを表示',
        'search_items'       => '期間限定メニューを検索',
        'not_found'          => '期間限定メニューはありません',
        'not_found_in_trash' => 'ゴミ箱に期間限定メニューはありません',
    );

    register_post_type( 'seasonal_menu', array(
        'labels'        => $labels,
        'public'        => true,
        'show_ui'       => true,
        'show_in_menu'  => true,
        'menu_icon'     => 'dashicons-carrot',
        'supports'      => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' ),
        'has_archive'   => false,
        'rewrite'       => array( 'slug' => 'seasonal-menu' ),
        'show_in_rest'  => true,
    ) );
}
add_action( 'init', 'kashiya_lemon_register_seasonal_menu_post_type' );

function kashiya_lemon_add_seasonal_meta_boxes() {
    add_meta_box(
        'kashiya_lemon_seasonal_details',
        '期間限定メニュー詳細',
        'kashiya_lemon_render_seasonal_meta_box',
        'seasonal_menu',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'kashiya_lemon_add_seasonal_meta_boxes' );

function kashiya_lemon_render_seasonal_meta_box( $post ) {
    wp_nonce_field( 'kashiya_lemon_save_seasonal_meta', 'kashiya_lemon_seasonal_nonce' );
    $price = get_post_meta( $post->ID, 'seasonal_price', true );
    $label = get_post_meta( $post->ID, 'seasonal_label', true );
    ?>
    <p>
        <label for="seasonal_price"><strong>価格</strong></label><br>
        <input type="text" id="seasonal_price" name="seasonal_price" value="<?php echo esc_attr( $price ); ?>" class="widefat" placeholder="例：¥620">
    </p>
    <p>
        <label for="seasonal_label"><strong>ラベル</strong></label><br>
        <input type="text" id="seasonal_label" name="seasonal_label" value="<?php echo esc_attr( $label ); ?>" class="widefat" placeholder="例：春限定、数量限定、夏限定">
    </p>
    <p>商品画像は右側の「アイキャッチ画像」から設定してください。表示順は「ページ属性」の順序、または投稿日順で管理できます。</p>
    <?php
}

function kashiya_lemon_save_seasonal_meta( $post_id ) {
    if ( ! isset( $_POST['kashiya_lemon_seasonal_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['kashiya_lemon_seasonal_nonce'] ) ), 'kashiya_lemon_save_seasonal_meta' ) ) {
        return;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if ( isset( $_POST['seasonal_price'] ) ) {
        update_post_meta( $post_id, 'seasonal_price', sanitize_text_field( wp_unslash( $_POST['seasonal_price'] ) ) );
    }

    if ( isset( $_POST['seasonal_label'] ) ) {
        update_post_meta( $post_id, 'seasonal_label', sanitize_text_field( wp_unslash( $_POST['seasonal_label'] ) ) );
    }
}
add_action( 'save_post_seasonal_menu', 'kashiya_lemon_save_seasonal_meta' );