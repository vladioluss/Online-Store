@extends('layouts.admin_layout')

@section('title', 'Товары')

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
                                        <th style="width: 1%">ID</th>
                                        <th style="width: 20%">Название</th>
                                        <th style="width: 2%">Категория</th>
                                        <th style="width: 5%" class="text-center">Статус</th>
                                        <th style="width: 30%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($goods as $goodsProduct)
                                    {{--@php
                                    $imgs = '';
                                    if (count($goodsProduct->imgs) > 0) {
                                        $imgs = $goodsProduct->imgs[0]['img'];
                                    } else $imgs = 'no-photo.png';
                                    @endphp--}}
                                    <tr>
                                        <td>{{$goodsProduct->id}}</td>
                                        <td>
                                            <a>{{$goodsProduct->name}}</a>
                                            <br/>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="{{route('goods.show', $goodsProduct['id'])}}">
                                                <i class="fas fa-folder"></i> Просмотр</a>
                                            <a class="btn btn-info btn-sm" href="{{route('category.edit', $goodsProduct['id'])}}">
                                                <i class="fas fa-pencil-alt"></i> Изменить
                                            </a>
                                            <form action="{{route('goods.destroy', $goodsProduct['id'])}}" method="POST" class="d-inline">
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
                    {{ $goods->render("pagination::bootstrap-4") }}
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
