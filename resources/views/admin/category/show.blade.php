@extends('admin.layouts.main')

@section('content')
    <div class="row col-8 " style="margin: 0 auto;padding: 20px 0px">
        <div class="col-6">
            <div class="card">
                <div class="card-header" style="display: flex;width: 200px;height: 80px;justify-content: space-between;align-items:center ">
                    <h3 class="card-title">Single</h3>
                    <button  style="display:flex;align-items: center;justify-content: center;cursor: pointer;background:none;background-color: #b5b1b154;outline: none;border: 1px solid green;border-radius: 50%;width: 35px;height: 35px;">
                        <a href="{{ route('category.edit', $category->id) }}" style="display: block; cursor: pointer">
                            <img src="{{ asset('assets/images/pencil-svgrepo-com.svg') }}" alt="edit" style="width: 15px; height: 15px">
                        </a>
                    </button>
                    <form action="{{ route('category.delete',$category->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background: none;outline: none;border: none ">
                            <img  src="{{ asset('assets\images\delete-svgrepo-com.svg') }}" alt="edit" style="width: 20px; height: 20px;cursor: pointer">
                        </button>
                    </form>
                </div>

                <!-- ./card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>TITLE</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td>{{$category->id}}</td>
                            <td>{{$category->title}}</td>

                        </tr>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection



