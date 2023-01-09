@extends('default')
@section('css')
css/cssCloud/cloud.css
@endsection
@section('content')
<center>INFUT VILE</center>
<form action="/folder/file/store" method="POST" enctype="multipart/form-data">
@csrf
<input type="file" name="file">
<input type="text" value="{{$id}}" name="id" id="" style="display: none">
<button type="submit" name="submit">SIMPAN</button>
</form>
@endsection