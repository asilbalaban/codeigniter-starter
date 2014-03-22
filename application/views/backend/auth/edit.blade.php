@include('backend/_blocks/header')

    <div id="wrapper">

        @include('backend/_blocks/topMenu')
        @include('backend/_blocks/sideMenu')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kullanıcı Düzenle</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="btn btn-info" href="{{base_url('admin/user')}}">Kullanıcıları Listele</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <form action="{{base_url('admin/user/'.$user->id)}}" method="post">
                                <div class="form-group">
                                    <label>Kullanıcı Adı</label>
                                    <input value="{{$user->username}}" name="username" class="form-control" placeholder="Kullanıcı Adı"  type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Parola</label>
                                    <input name="password" class="form-control" placeholder="Parola"  type="password">
                                </div>
                                <div class="form-group">
                                    <label>Kullanıcı Tipi</label>
                                    <select name="level" class="form-control">
                                        <option value="1">Yönetici</option>
                                    </select>
                                </div>
                                <input type="submit" class="btn btn-info pull-right" value="Kaydet">
                            </form>

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

@include('backend/_blocks/footer')