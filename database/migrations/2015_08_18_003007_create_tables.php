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
            $table->string('username');
            $table->string('password');
            $table->string('nama_perusahaan');
            $table->string('alamat_perusahaan');
            $table->text('deskripsi_perusahaan');
            $table->string('email',50);
            $table->float('rating');
            $table->integer('jumlah_pemberi_rating');
            $table->string('video',255);
            $table->string('tipe'); //type == startup || investor
            $table->integer('token');
            $table->date('created_at');
            $table->date('updated_at');
            $table->string('logo_perusahaan');
            $table->string('full_logo_perusahaan');
            $table->date('pushed_at');
        });

        Schema::create('komentar', function(Blueprint $table) {
            $table->increments('id_komentar');
            $table->integer('id_user');
            $table->string('email_komentator');
            $table->string('nama_komentator');
            $table->text('komentar');
            $table->integer('rating_score');
            $table->date('created_at');
            $table->date('updated_at');
        });

        Schema::create('pesan', function(Blueprint $table) {
            $table->increments('id_pesan');
            $table->integer('id_sender');
            $table->integer('id_receiver');
            $table->text('isi_pesan');
            $table->string('box');
            $table->date('created_at');
            $table->date('updated_at');
        });

        Schema::create('project', function(Blueprint $table) {
            $table->increments('id_project');
            $table->integer('id_project_owner');
            $table->string('project_title');
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
