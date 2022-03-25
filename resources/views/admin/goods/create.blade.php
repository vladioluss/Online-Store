@extends('layouts.admin_layout')

@section('title', 'Товары')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul class="list-unstyled">
                                @foreach ($errors->all() as $error)
                                    <li><i class="fa fa-exclamation-circle" aria-hidden="true"></i> {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <br><div class="alert alert-success" role="alert">
                            <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
                        </div>
                    @endif
                </div>
                <div class="col-xl-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- form start -->
                        <form data-bitwarden-watching="1" action="{{route('goods.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputCatName">Название</label>
                                    <input name="name" type="text" class="form-control" id="exampleInputCatName" placeholder="Название товара">
                                </div>

                                <!-- поле для загрузки файла -->
                                <input type="file" name="userfile">
                            </div>

                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Создать</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
