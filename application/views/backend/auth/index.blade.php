@section('head')
    <link href="{{base_url('public/assets/sbadmin/css/plugins/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet">
@endsection
@include('backend/_blocks/header')


    <div id="wrapper">

        @include('backend/_blocks/topMenu')
        @include('backend/_blocks/sideMenu')


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kullanıcılar</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="btn btn-info" href="{{base_url('admin/user/create')}}">Yeni Kullanıcı Oluştur</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Kullanıcı Adı</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr class="odd gradeX">
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->username}}</td>
                                            <td class="center">
                                                <a class="btn btn-default btn-xs" href="{{base_url("admin/user/$user->id/edit")}}">Düzenle</a>
                                                <a class="btn btn-danger btn-xs" href="{{base_url("admin/user/$user->id/delete")}}">Sil</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


@section('scripts')

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="{{base_url('public/assets/sbadmin/js/plugins/dataTables/jquery.dataTables.js')}}"></script>
    <script src="{{base_url('public/assets/sbadmin/js/plugins/dataTables/dataTables.bootstrap.js')}}"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {

        $('#dataTables-example').dataTable( {
            "oLanguage": {
                "sUrl": "{{base_url('public/assets/sbadmin/js/plugins/dataTables/turkish.txt')}}"
            }
        });

    });
    </script>


@endsection

@include('backend/_blocks/footer')
