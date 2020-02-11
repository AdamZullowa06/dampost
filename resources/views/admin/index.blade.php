@extends('layouts.app')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Hai, {{ Auth::user()->name }}</h1>
</div>
<div class="row">
    <h1>ini admin</h1>
</div>
<div class="row"></div>
@endsection