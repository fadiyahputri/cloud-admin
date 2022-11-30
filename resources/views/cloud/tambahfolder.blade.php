@extends('default')
@section('css')
css/cssCloud/cloud.css
@endsection
@section('content')
<center>INFUT folder</center>
<form action="/clod/folder/store" method="POST" enctype="multipart/form-data">
@csrf
<input type="text" name="nama_folder" class="input-folder">
<button type="submit" class="btn-simpan">SIMPAN</button>
</form>
@endsection