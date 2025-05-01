<?php
// ファイルパス: fuel/app/config/pagination.php

return array(
    // デフォルト設定
    'default' => array(
        // 1ページあたりに表示するアイテム数 (Controllerで上書き可能)
        'per_page'        => 10, // 例として10件に設定 (後で変更可)
        // 現在のページ番号の前後に表示するページリンクの数
        'num_links'       => 3,
        // ページ番号がURLのどのセグメントにあるか (例: /home/index/page/2 の場合は 4)
        // Controller側で指定することが多いので、ここではデフォルトで良いかも
        'uri_segment'     => 3, // または 'page' のようなクエリ文字列キー
        // ページネーションのHTMLテンプレート設定
        'template' => array(
            'wrapper'                 => '<div class="pagination"><ul>{pagination}</ul></div>', // {pagination} の部分に li が入る
            'first'                   => '<li><a href="{uri}">{page}</a></li>',
            'first-marker'            => '&laquo;&laquo;',
            'previous'                => '<li><a href="{uri}" rel="prev">{page}</a></li>',
            'previous-marker'         => '&laquo;',
            'previous-inactive'       => '<li class="disabled"><a>{page}</a></li>', // 非活性時の表示
            'previous-inactive-marker'=> '&laquo;',
            'regular'                 => '<li><a href="{uri}">{page}</a></li>',     // 通常のページリンク
            'active'                  => '<li class="active"><a>{page}</a></li>', // 現在のページ
            'next'                    => '<li><a href="{uri}" rel="next">{page}</a></li>',
            'next-marker'             => '&raquo;',
            'next-inactive'           => '<li class="disabled"><a>{page}</a></li>', // 非活性時の表示
            'next-inactive-marker'    => '&raquo;',
            'last'                    => '<li><a href="{uri}">{page}</a></li>',
            'last-marker'             => '&raquo;&raquo;',
        ),
         // クエリ文字列を使う場合 (例: /home/index?page=2)
         // 'uri_segment' => 'page', // キー名を指定
         // 'pagination_url' => \Uri::current(), // 現在のURLを使う設定
    ),
);