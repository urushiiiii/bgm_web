<?php

namespace Fuel\Migrations;

class Add_unique_to_playlists_name // クラス名はファイル名に合わせる
{
    public function up()
    {
        // ALTER TABLE 文を使って UNIQUE 制約を追加する
        try {
            // `uq_playlists_name` はインデックス（制約）の名前
            // `name` は対象のカラム名
            \DB::query('ALTER TABLE `playlists` ADD UNIQUE INDEX `uq_playlists_name` (`name`)')->execute();
            \Log::info("Executed: ALTER TABLE playlists ADD UNIQUE INDEX uq_playlists_name (name)");
        } catch (\Database_Exception $e) {
            // もし既に存在する場合などのエラーをログに残す (処理は続行させる)
            \Log::warning('Failed to add UNIQUE index to playlists.name (ALTER TABLE). Maybe it already exists? Error: ' . $e->getMessage());
        }
    }

    public function down()
    {
        // up() で追加した UNIQUE インデックスを削除する ALTER TABLE 文を実行
        try {
            // DROP INDEX の後の名前は up() で指定したインデックス名 (`uq_playlists_name`)
            \DB::query('ALTER TABLE `playlists` DROP INDEX `uq_playlists_name`')->execute();
            \Log::info("Executed: ALTER TABLE playlists DROP INDEX uq_playlists_name");
        } catch (\Database_Exception $e) {
             // インデックスが存在しない場合のエラーは無視しても良い
             \Log::warning('Failed to drop UNIQUE index from playlists.name. Maybe it does not exist? Error: ' . $e->getMessage());
        }
    }
}