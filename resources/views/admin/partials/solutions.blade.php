@extends('admin.layouts.master')

@section('main')

<h1>Solutions</h1>
<hr>

@include('admin.flash')
<form class="admin-form" action="{{ route('admin.solutions.update') }}" method="POST">
    @csrf
    <label for="header">Header - EN</label>
    <input type="text" name="header_en" value="{{ $solution->header_en }}" />

    <label for="header">Header - DE</label>
    <input type="text" name="header_de" value="{{ $solution->header_de }}" />

    <label for="header">Header - FR</label>
    <input type="text" name="header_fr" value="{{ $solution->header_fr }}" />

    <label for="header">Header - IT</label>
    <input type="text" name="header_it" value="{{ $solution->header_it }}" />

    <label for="header">Header - ES</label>
    <input type="text" name="header_es" value="{{ $solution->header_es }}" />

    <label for="body">Description - EN</label><br>
    <textarea name="body_en">{!! $solution->body_en !!}</textarea>

    <label for="body">Description - DE</label><br>
    <textarea name="body_de">{!! $solution->body_de !!}</textarea>

    <label for="body">Description - FR</label><br>
    <textarea name="body_fr">{!! $solution->body_fr !!}</textarea>

    <label for="body">Description - IT</label><br>
    <textarea name="body_it">{!! $solution->body_it !!}</textarea>

    <label for="body">Description - ES</label><br>
    <textarea name="body_es">{!! $solution->body_es !!}</textarea>

    <input class="btn-submit" type="submit" value="Change content" />

    @include('admin.errors')
</form>
@endsection

@section('scripts')
    @include('admin.scripts')
@endsection