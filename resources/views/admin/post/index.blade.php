@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Post</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>

                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row w-25 mb-3">
                    <a class="btn btn-block btn-success" href="{{ route('post.create') }}">Create</a>
                </div>
                <!-- Main row -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title text-center" style="float: none; background-color: #28a745; color: white; padding: 5px 0;">
                                Categories Table
                            </h2>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Show Single Page</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>

                                                {{ $post->id }}

                                        </td>
                                        <td>

                                                {{ $post->title }}

                                        </td>
                                        <td>
                                            <a href="{{ route('post.show', $post->id) }}" style="display: block; cursor: pointer">
                                                <img src="{{ asset('assets/images/eye-solid.svg') }}" alt="show" style="width: 20px; height: 20px">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('post.edit', $post->id) }}" style="display: block; cursor: pointer">
                                                <img src="{{ asset('assets/images/pencil-svgrepo-com.svg') }}" alt="edit" style="width: 20px; height: 20px">
                                            </a>
                                        </td>

                                        <td>
                                            <form action="{{ route('post.delete',$post->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" style="background: none;outline: none;border: none ">
                                                    <img  src="{{ asset('assets\images\delete-svgrepo-com.svg') }}" alt="edit" style="width: 20px; height: 20px;cursor: pointer">
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
        </section>
        <!-- /.content -->
    </div>
@endsection
