@extends('header.master')
@section('navbar')
@include('navbar.startup')
@stop
@section('content')
<h1>Pesan</h1>
<div class="container-fluid email_section">

    <div class="col-md-1 leftside_menubar">
            <ul class="message_menu">
                <li id="compose-message"><a href="#">Compose</a></li>
                <li id="inbox-message" class="selected"><a href="#">Inbox</a></li>
                <li id="sent-message"><a href="#">Sent</a></li>
                <li id="trash-message"><a href="#">Trash</a></li>
                <li id="archive-message"><a href="#">Archive</a></li>
            </ul>
    </div>

    <div class="col-md-1"></div>

    <div class="col-md-10">

        <button class="btn btn-default">
            <span class="glyphicon glyphicon-trash" aria-hidden="true"> Hapus</span>
        </button>

        <button class="btn btn-default">
            <span class="glyphicon glyphicon-folder-open" aria-hidden="true"> Arsipkan</span>
        </button>

        <br>
        <br>

        <div class="email_content">

            <div class="row message unread">

                <div class="col-md-1">
                    <input type="checkbox" />
                </div>
                <div class="col-md-3">
                    <p>Jan Wira Gotama Putra</p>
                </div>
                <div class="col-md-6">
                    <p>Tawaran Investasi</p>
                </div>
                <div class="col-md-2">
                    <p>26 Juni</p>
                </div>

            </div>
            <div class="row message">

                <div class="col-md-1">
                    <input type="checkbox" />
                </div>
                <div class="col-md-3">
                    <p>Timothy Pratama</p>
                </div>
                <div class="col-md-6">
                    <p>Tawaran Kerja Sama</p>
                </div>
                <div class="col-md-2">
                    <p>26 Juni</p>
                </div>

            </div>
            <div class="row message">

                <div class="col-md-1">
                    <input type="checkbox" />
                </div>
                <div class="col-md-3">
                    <p>Christ Angga Saputra</p>
                </div>
                <div class="col-md-6">
                    <p>Investasi dari Tokopedia</p>
                </div>
                <div class="col-md-2">
                    <p>26 Juni</p>
                </div>

            </div>

        </div>

    </div>

</div>
@stop