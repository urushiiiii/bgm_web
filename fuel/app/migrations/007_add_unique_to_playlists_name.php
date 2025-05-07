<?php

namespace Fuel\Migrations;

class Add_unique_to_playlists_name 
{
    public function up()
    {
        // ALTER TABLE 文を使って UNIQUE 制約を追加する
        try {
            \DB::query('ALTER TABLE `playlists` ADD UNIQUE INDEX `uq_playlists_name` (`name`)')->execute();
            \Log::info("Executed: ALTER TABLE playlists ADD UNIQUE INDEX uq_playlists_name (name)");
        } catch (\Database_Exception $e) {
            // もし既に存在する場合などのエラーをログに残す 
            \Log::warning('Failed to add UNIQUE index to playlists.name (ALTER TABLE). Maybe it already exists? Error: ' . $e->getMessage());
        }
    }

    public function down()
    {
        // up() で追加した UNIQUE インデックスを削除する
        try {
            \DB::query('ALTER TABLE `playlists` DROP INDEX `uq_playlists_name`')->execute();
            \Log::info("Executed: ALTER TABLE playlists DROP INDEX uq_playlists_name");
        } catch (\Database_Exception $e) {
             \Log::warning('Failed to drop UNIQUE index from playlists.name. Maybe it does not exist? Error: ' . $e->getMessage());
        }
    }
}