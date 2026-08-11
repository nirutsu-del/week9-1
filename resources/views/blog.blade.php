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
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{Str::limit($item->content, 100)}}</td>
                        <td>
                            @if ($item->status == true)
                                <span class="btn btn-success">เผยแพร่</span>
                            @else
                                <span class="btn btn-danger">ไม่เผยแพร่</span>
                            @endif
                        </td>
                        <td><a href="{{ route('delete', $item->id) }}" class="btn btn-danger"
        onclick="return confirm('วิว คุณต้องการลบ {{$item->title}} ออกจากหัวใจ ใช่หรือไม่?')" >ลบ</a>
   
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection