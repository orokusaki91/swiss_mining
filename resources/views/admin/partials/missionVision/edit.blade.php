@extends('admin.layouts.master')

@section('main')

@include('admin.flash')
<form action="{{ route('admin.missionVision.update', $vision->id) }}" method="POST">
    @csrf

    <label for="body">Description - EN</label><br>
    <textarea name="body_en">{!! $vision->body_en !!}</textarea>
    
    <label for="body">Description - DE</label><br>
    <textarea name="body_de">{!! $vision->body_de !!}</textarea>
    
    <label for="body">Description - FR</label><br>
    <textarea name="body_fr">{!! $vision->body_fr !!}</textarea>
    
    <label for="body">Description - IT</label><br>
    <textarea name="body_it">{!! $vision->body_it !!}</textarea>
    
    <label for="body">Description - ES</label><br>
    <textarea name="body_es">{!! $vision->body_es !!}</textarea>

    <input type="submit" value="Change content">

    @include('admin.errors')
</form>
@endsection

@section('scripts')
    @include('admin.scripts')
@endsection