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
    <input type="text" name="body_en" value="{!! $content->body_en !!}"><br>
    
    <label for="body">Description - DE</label><br>
    <input type="text" name="body_de" value="{!! $content->body_de !!}"><br>
    
    <label for="body">Description - FR</label><br>
    <input type="text" name="body_fr" value="{!! $content->body_fr !!}"><br>
    
    <label for="body">Description - IT</label><br>
    <input type="text" name="body_it" value="{!! $content->body_it !!}"><br>
    
    <label for="body">Description - ES</label><br>
    <input type="text" name="body_es" value="{!! $content->body_es !!}"><br>

    <input type="submit" value="Change content">

    @include('admin.errors')
</form>
@endsection