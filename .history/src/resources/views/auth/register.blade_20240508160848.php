@extends('layouts.app')

@section('main')
@if (session('result'))
<div class="flash_message">
    {{ session('result') }}
</div>
@endif
<h2 class="main></h2>