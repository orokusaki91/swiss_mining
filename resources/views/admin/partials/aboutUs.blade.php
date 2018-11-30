@extends('admin.layouts.master')

@section('main')

@include('admin.flash')
<form class="admin-form" action="{{ route('admin.aboutUs.update') }}" method="POST">
    @csrf
    <label for="header">Header - EN</label>
    <input type="text" name="header_en" value="{{ $content->header_en }}" />

    <label for="header">Header - DE</label>
    <input type="text" name="header_de" value="{{ $content->header_de }}" />

    <label for="header">Header - FR</label>
    <input type="text" name="header_fr" value="{{ $content->header_fr }}" />

    <label for="header">Header - IT</label>
    <input type="text" name="header_it" value="{{ $content->header_it }}" />

    <label for="header">Header - ES</label>
    <input type="text" name="header_es" value="{{ $content->header_es }}" />

    <label for="body">Description - EN</label>
    <input type="text" name="body_en" value="{!! $content->body_en !!}" />
    
    <label for="body">Description - DE</label>
    <input type="text" name="body_de" value="{!! $content->body_de !!}" />
    
    <label for="body">Description - FR</label>
    <input type="text" name="body_fr" value="{!! $content->body_fr !!}" />
    
    <label for="body">Description - IT</label>
    <input type="text" name="body_it" value="{!! $content->body_it !!}" />
    
    <label for="body">Description - ES</label>
    <input type="text" name="body_es" value="{!! $content->body_es !!}" />

    <input class="btn-submit" type="submit" value="Change content" />

    @include('admin.errors')
</form>
@endsection