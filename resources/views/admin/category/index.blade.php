@extends('layouts.admin_layout')

@section('title', 'Вывод категорий')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                @if (session('success'))
                    <br><div class="alert alert-success" role="alert">
                        <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
                    </div>
                @endif
                <div class="col-xl-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-body p-0">
                            <table class="table table-striped projects">
                                <thead>
                                    <tr>
                                        <th style="width: 1%">
                                            ID
                                        </th>
                                        <th style="width: 20%">
                                            Категория
                                        </th>
                                        <th style="width: 2%">
                                            Кол-во элементов
                                        </th>
                                        <th style="width: 5%" class="text-center">
                                            Статус
                                        </th>
                                        <th style="width: 30%">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{$category->id}}</td>
                                            <td>
                                                <a>{{$category->name}}</a>
                                                <br/>
                                                <small>{{$category->created_at->format('d-m-Y')}}</small>
                                            </td>
                                            <td class="project_progress">
                                                <small>{{$getGoodsInCtg}}</small>
                                            </td>
                                            <td class="project-state">
                                                @if($category->active == 1)
                                                    <span class="badge badge-success">Активно</span>
                                                @else <span class="badge badge-danger">Не активно</span>
                                                @endif
                                            </td>
                                            <td class="project-actions text-right">
                                                {{--<a class="btn btn-primary btn-sm" href="{{route('category.show', $category['id'])}}">
                                                    <i class="fas fa-folder"></i>
                                                    Просмотр
                                                </a>--}}
                                                <a class="btn btn-info btn-sm" href="{{route('category.edit', $category['id'])}}">
                                                    <i class="fas fa-pencil-alt"></i>
                                                    Изменить
                                                </a>
                                                <form action="{{route('category.destroy', $category['id'])}}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Подтвердите удаление')">
                                                        <i class="fas fa-trash"></i> Удалить
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
