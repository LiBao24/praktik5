@extends('layout.app')

@section('title', 'Halaman Dua')

@section('content')

<h1 class="text-3xl text-bold underline text-blue-900">Halaman ke dua</h1>
<br>
<a href="{{url('/')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Halaman 1</a>
@endsection