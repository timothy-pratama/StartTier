@extends('header.master')

@section('navbar')
@include('navbar.investor')
@stop

@section('content')
<h1>{{$nama_investor}}</h1>

<div id="page-bgtop">
	<div id="page-bgbtm">
		<div class="jumbotron">
			<h3>Profile Perusahaan</h3>
			<form action="{{route('home_investor', array('nama_investor'=>'Microsoft Corporation'))}}">
				<div class="form-group">
					<label for="nama_perusahaan">Nama Perusahaan</label>
					<input type="text" class="form-control" id="nama_perusahaan" value="Microsoft">
				</div>
				<div class="form-group">
					<label for="alamat_perusahaan">Alamat Perusahaan</label>
					<textarea class="form-control" rows="10">Microsoft Redmond Campus, Redmond, Washington, U.S.</textarea>
				</div>
				<div class="form-group">
					<label for="email_perusahaan">Email Perusahaan</label>
					<input type="email" class="form-control" id="email_perusahaan" value="Microsoft_Corporation@hotmail.com">
				</div>
				<div class="form-group">
					<label for="logo_perusahaan">Logo Perusahaan</label>
					<input type="file" id="logo_perusahaan">
				</div>
				<button type="submit" class="btn btn-default">Save</button>
			</form>
		</div>
		<div class="jumbotron">
			<h3>Detail Perusahaan</h3>
			<form action="{{route('home_investor', array('nama_investor'=>'Microsoft Corporation'))}}">
				<div class="form-group">
					<label for="deskripsi_perusahaan">Deskripsi Perusahaan</label>
					<textarea class="form-control" rows="10">Microsoft was founded by Bill Gates and Paul Allen on April 4, 1975, to develop and sell BASIC interpreters for Altair 8800. It rose to dominate the personal computer operating system market with MS-DOS in the mid-1980s, followed by Microsoft Windows. The company's 1986 initial public offering, and subsequent rise in its share price, created three billionaires and an estimated 12,000 millionaires from Microsoft employees. Since the 1990s, it has increasingly diversified from the operating system market and has made a number of corporate acquisitions. In May 2011, Microsoft acquired Skype Technologies for $8.5 billion in its largest acquisition to date.

As of 2013, Microsoft is market dominant in both the IBM PC-compatible operating system and office software suite markets (the latter with Microsoft Office). The company also produces a wide range of other software for desktops and servers, and is active in areas including Internet search (with Bing), the video game industry (with the Xbox, Xbox 360 and Xbox One consoles), the digital services market (through MSN), and mobile phones (via the Windows Phone OS). In June 2012, Microsoft entered the personal computer production market for the first time, with the launch of the Microsoft Surface, a line of tablet computers.

With the acquisition of Nokia's devices and services division to form Microsoft Mobile Oy, the company re-entered the smartphone hardware market, after its previous attempt, Microsoft Kin, which resulted from their acquisition of Danger Inc.

Microsoft is a portmanteau of the words microcomputer and software.</textarea>
				</div>
				<div class="form-group">
					<label for="full_logo_perusahaan">Logo Penuh Perusahaan</label>
					<input type="file" id="full_logo_perusahaan">
				</div>
				<button type="submit" class="btn btn-default">Save</button>
			</form>
		</div>
	</div>
</div>
@stop