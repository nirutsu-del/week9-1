@extends('layout')

@section('title', 'บทความทั้งหมด')


@section('content')
    <h2 class="text text-center py-2">
        บทความทั้งหมด</h2>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Ststus</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blog2 as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->conten }}</td>
                    <td>
                        @if ($item->status == true)
                            <span class="btn btn-success">เผยแพร่</span>
                        @else
                            <span class="btn btn-danger">ไม่เผยแพร่</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection