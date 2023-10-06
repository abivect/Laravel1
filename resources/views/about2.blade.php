@extends('layouts.main')
@section('content')
<h1>ini halaman about</h1>
<h2><?= $name?></h2>
<h2><?= $email?></h2>
<img src="{{asset('asw.jpg')}}" width=' 200'>
@endsection 