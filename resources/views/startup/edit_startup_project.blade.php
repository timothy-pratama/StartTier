@extends('...header.master')

@section('navbar')
@include('navbar.startup')
@stop

@section('content')
<h1>{{$nama_project}}</h1>

<div id="page-bgtop">
    <div id="page-bgbtm">
        <div class="jumbotron">
            <h3>Detail Project</h3>
            <form action="{{route('home_startup', array('nama_startup'=>'Bukalapak'))}}">
                <div class="form-group">
                    <label for="deskripsi_project">Deskripsi Project</label>
                    <textarea class="form-control" rows="10">AmuSphere (アミュスフィア, Amyusufia?) is a second generation FullDive console, co-developed by RECT Progress Inc., that is the successor to the NerveGear. Its successor, temporarily named as AmuSphere 2, is planned to be shown in the 2026 Tokyo Game Show and released to the market in 2027. The AmuSphere is a helmet that consists of two metal overlapping rings. The system has been modified to make it safer than its predecessor by changing the microwave transmitter to a low frequency one and the incorporation of various sensors that continually monitor blood pressure and brain waves. If the person's condition becomes abnormal, a safety logout is provoked. This, by default, includes an option that automatically logs out a person if the avatar begins to fall asleep. Unlike the NerveGear, the AmuSphere is not equipped with an internal battery. In addition to other safety measures, the AmuSphere does not block out signals from the body to the extent of its predecessor, the NerveGear, so some players may rent a specialized room which blocks all external interference, designed to make the experience inside the virtual world all the more realistic.</textarea>
                </div>
                <div class="form-group">
                    <label for="gambar_project">Gambar Project</label>
                    <input type="file" id="gambar_project">
                </div>
                <button type="submit" class="btn btn-default">Save</button>
            </form>
        </div>
    </div>
</div>
@stop