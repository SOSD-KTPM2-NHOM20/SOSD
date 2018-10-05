@extends('layouts.master')
@section('content')
	<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại biển báo
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Category Parent</th>
                                <th>Trạng thái</th>
                                <th>Ghi chú</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX" align="center">
                                <td>1</td>
                                <td>Biển cấm</td>
                                <td>Biển báo hiệu</td>
                                <td>Hiện</td>
                                <td><a href="#" title="">Xem thêm</a></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="../admin/cate_edit.html"> Sửa</a></td>
                            </tr>
                            <tr class="even gradeC" align="center">
                                <td>2</td>
                                <td>Biển báo nguy hiểm</td>
                                <td>Biển báo hiệu</td>
                                <td>Hiện</td>
                                <td><a href="#" title="">Xem thêm</a></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="../admin/cate_edit.html">Sửa</a></td>
                            </tr>
                             <tr class="odd gradeX" align="center">
                                <td>3</td>
                                <td>Biển hiệu lệnh</td>
                                <td>Biển báo hiệu</td>
                                <td>Hiện</td>
                                <td><a href="#" title="">Xem thêm</a></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="../admin/cate_edit.html"> Sửa</a></td>
                            </tr>
                             <tr class="odd gradeX" align="center">
                                <td>4</td>
                                <td>Biển chỉ dẫn</td>
                                <td>Biển báo hiệu</td>
                                <td>Hiện</td>
                                <td><a href="#" title="">Xem thêm</a></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="../admin/cate_edit.html"> Sửa</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection
