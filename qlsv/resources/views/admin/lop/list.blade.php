@extends('admin.main')
@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Mã lớp</th>
                <th>Tên lớp</th>
                <th>Mô tả</th>
                <th>Số lượng sv</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lops as $lop)
                <tr>
                    <td>{{$lop->id}}</td>
                    <td>{{$lop->malop}}</td>
                    <td>{{$lop->tenlop}}</td>
                    <td>{{$lop->mota}}</td>
                    <td>{{$lop->soluongsv}}</td>
                    <td>
                        <a href="/admin/lop/edit/{{$lop->id}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $lops->links() }}
@endsection
