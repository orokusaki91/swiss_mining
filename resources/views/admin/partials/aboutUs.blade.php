@extends('admin.layouts.master')

@section('main')
<form action="">
    <label for="header">Header</label><br>
    <input type="text" name="header" value="{{ $content->header }}"><br>

    <label for="body">Description</label><br>
    <input type="text" name="body" value="{{ $content->body }}"><br>

    <input type="submit" value="Change content">
</form>
@endsection