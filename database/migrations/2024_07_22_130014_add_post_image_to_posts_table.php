<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPostImageToPostsTable extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
Schema::table('posts', function (Blueprint $table) {
$table->string('post_image')->nullable(); // 'post_image' sütununu ekler
});
}

/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
Schema::table('posts', function (Blueprint $table) {
$table->dropColumn('post_image'); // 'post_image' sütununu kaldırır
});
}
}
