<?php
namespace Fuel\Migrations;
class Init // または Dummy_Migration など、ファイル名に合わせたクラス名
{
    public function up()
    {
        // 何もしない (migration テーブル作成は migrate コマンドに任せる)
    }
    public function down()
    {
        // 何もしない
    }
}