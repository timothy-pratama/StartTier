<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengguna', function(Blueprint $table) {
            $table->increments('id_user');
            $table->string('username',20);
            $table->string('password');
            $table->string('nama_perusahaan',50);
            $table->string('alamat_perusahaan',50);
            $table->text('deskripsi_perusahaan');
            $table->string('email',50);
            $table->float('rating');
            $table->integer('jumlah_pemberi_rating');
            $table->string('video',255);
            $table->string('tipe'); //type == startup || investor
            $table->date('created_at');
            $table->date('updated_at');
        });

        Schema::create('komentar', function(Blueprint $table) {
            $table->increments('id_komentar');
            $table->string('email_komentator',50);
            $table->string('nama_komentator', 50);
            $table->text('komentar');
            $table->integer('id_user');
            $table->date('created_at');
            $table->date('updated_at');
        });

        Schema::create('pesan', function(Blueprint $table) {
            $table->increments('id_pesan');
            $table->integer('pengirim');
            $table->integer('penerima');
            $table->text('isi_pesan');
            $table->string('box',20);
            $table->date('created_at');
            $table->date('updated_at');
        });

        Schema::create('project', function(Blueprint $table) {
            $table->increments('id_project');
            $table->string('project_title');
            $table->string('project_creator');
            $table->date('project_post_date');
            $table->text('project_description');
            $table->string('project_image_url');
            $table->date('created_at');
            $table->date('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pengguna');
        Schema::drop('komentar');
        Schema::drop('pesan');
        Schema::drop('project');
    }
}
