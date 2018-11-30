@extends('admin.layouts.master')

@section('main')

@include('admin.flash')
<form action="{{ route('admin.aboutUs.update') }}" method="POST">
    @csrf
    <label for="header">Header - EN</label><br>
    <input type="text" name="header_en" value="{{ $content->header_en }}"><br>

    <label for="header">Header - DE</label><br>
    <input type="text" name="header_de" value="{{ $content->header_de }}"><br>

    <label for="header">Header - FR</label><br>
    <input type="text" name="header_fr" value="{{ $content->header_fr }}"><br>

    <label for="header">Header - IT</label><br>
    <input type="text" name="header_it" value="{{ $content->header_it }}"><br>

    <label for="header">Header - ES</label><br>
    <input type="text" name="header_es" value="{{ $content->header_es }}"><br>



    <label for="body">Description - EN</label><br>
    <textarea id="mytextarea" name="body_en">{!! $content->body_en !!}</textarea>
    
    <label for="body">Description - DE</label><br>
    <textarea id="mytextarea" name="body_de">{!! $content->body_de !!}</textarea>
    
    <label for="body">Description - FR</label><br>
    <textarea id="mytextarea" name="body_fr">{!! $content->body_fr !!}</textarea>
    
    <label for="body">Description - IT</label><br>
    <textarea id="mytextarea" name="body_it">{!! $content->body_it !!}</textarea>
    
    <label for="body">Description - ES</label><br>
    <textarea id="mytextarea" name="body_es">{!! $content->body_es !!}</textarea>

    <input type="submit" value="Change content">

    @include('admin.errors')
</form>
@endsection