@extends('admin.layouts.master')

@section('main')

<h1>Newsletters</h1>
<hr>

@include('admin.flash')

    @if($newsletters->count())
    <table border="1" class="text-center">
        <thead>
            <td colspan="2">Newsletter list</td>
        </thead>
        <tbody>
            @foreach ($newsletters as $newsletter)
                <tr>
                    <td>{{ $newsletter->email }}</td>
                    <td>
                        <form action="{{ route('admin.newsletter.destroy', $newsletter->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">DELETE this email from list</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
        
    @else
        <p>Newsletter list is empty</p>
    @endif

@endsection