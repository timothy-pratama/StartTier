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
            $table->text('deskripsi_perusahaan')->default('');
            $table->string('email',50);
            $table->float('rating')->default(0);
            $table->integer('jumlah_pemberi_rating')->default(0);
            $table->string('video')->default('');
            $table->string('tipe'); //type == startup || investor
            $table->integer('token')->default(0);
            $table->date('created_at');
            $table->date('updated_at');
            $table->string('logo_perusahaan')->default('');
            $table->string('full_logo_perusahaan')->default('');
            $table->date('pushed_at')->default(\Carbon\Carbon::now());
            $table->integer('saldo')->default(0);
            $table->integer('jumlah_project')->default(0);
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
            $table->text('isi_pesan')->default('');
            $table->string('box')->default('inbox');
            $table->boolean('read')->default(false);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });

        Schema::create('project', function(Blueprint $table) {
            $table->increments('id_project');
            $table->integer('id_project_owner');
            $table->string('project_title');
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
