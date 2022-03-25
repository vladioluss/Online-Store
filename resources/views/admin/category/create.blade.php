@extends('layouts.admin_layout')

@section('title', 'Добавить категорию')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
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
                        <form data-bitwarden-watching="1" action="{{route('category.store')}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputCatName">Название</label>
                                    <input name="title" type="text" class="form-control" id="exampleInputCatName" placeholder="Название категории">
                                </div>
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
