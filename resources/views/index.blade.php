@extends('header.master')

@section('navbar')
@if(isset($cookie))
    <?php
        $pengguna = \App\Pengguna::where('username',$cookie)->first();
        Session::put('current_user',$pengguna);
    ?>

    @if(strcmp(session('current_user')->tipe,'startup') == 0)
        @include('navbar.startup')
    @else
        @include('navbar.investor')
    @endif
@else
    @include('navbar.guest')
@endif
@endsection

@section('content')
<div class="jumbotron">
  <h1>StartTier</h1>
  <img src="{{asset('/img/logo_starttier.jpg')}}" style="display: block; margin-left: auto; margin-right: auto"/>
  <p>StartTier adalah sebuah situs yang menyediakan layanan untuk menghubungkan startup dan calon investor. Tujuannya adalah untuk membantu startup-startup yang baru berkembang dalam mengembangkan bisnisnya dengan bantuan dari investor. Dengan adanya startup-startup ini diharapkan pertumbuhan ekonomi di Indonesia dapat meningkat dan banyak lapangan pekerjaan baru yang terbuka bagi masyarakat Indonesia.</p>
</div>

@include('modal.basic_modal')
@if(session('successful_logout_message'))
    <script>
        $('#basic_modal_title').text('Logout Sukses');
        $('#basic_modal_body').find('p').text('{{session('successful_logout_message')}}');
        $('#basic_modal').modal('show');
    </script>
@endif

<script>
    $('#menu_beranda').removeClass().addClass('active');
    $('#menu_startup').removeClass();
    $('#menu_investor').removeClass();
</script>
@stop