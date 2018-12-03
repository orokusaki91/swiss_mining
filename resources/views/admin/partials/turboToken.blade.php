@extends('admin.layouts.master')

@section('main')

<h1>Turbo Token</h1>
<hr>

@include('admin.flash')
<form class="admin-form" action="{{ route('admin.turboToken.update') }}" method="POST">
    @csrf

    <label for="body">Description - EN</label><br>
    <textarea name="body_en">{!! $turboToken->body_en !!}</textarea>

    <label for="body">Description - DE</label><br>
    <textarea name="body_de">{!! $turboToken->body_de !!}</textarea>

    <label for="body">Description - FR</label><br>
    <textarea name="body_fr">{!! $turboToken->body_fr !!}</textarea>

    <label for="body">Description - IT</label><br>
    <textarea name="body_it">{!! $turboToken->body_it !!}</textarea>

    <label for="body">Description - ES</label><br>
    <textarea name="body_es">{!! $turboToken->body_es !!}</textarea>

    <input class="btn-submit" type="submit" value="Change content" />

    @include('admin.errors')
</form>
@endsection

@section('scripts')
    @include('admin.scripts')
@endsection