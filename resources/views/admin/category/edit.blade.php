@extends('layouts.admin_layout')

@section('title', 'Редактировать категорию')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="col-xl-12">
                Категория: {{$category->name}}
            </div>
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
                        <form data-bitwarden-watching="1" action="{{route('category.update', $category['id'])}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputCatName">Название</label>
                                    <input name="name" value="{{$category['name']}}" type="text" class="form-control" id="exampleInputCatName" placeholder="Название категории">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Обновить</button>
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
