@extends('default')
@section('css')
css/cssCloud/cloud.css
@endsection
@section('content')
<center>INFUT folder</center>
<form action="/clod/folder/store" method="POST" enctype="multipart/form-data">
@csrf
<input style="border: 1px solid black" type="text" name="nama_folder" class="input-folder">
<input style="display: none" name="name" type="text" value="@foreach ($folder as $itemfolder)
{{$itemfolder->RelationToCloud->id}}
@endforeach">
<button type="submit" class="btn-simpan">SIMPAN</button>

</form>
@endsection