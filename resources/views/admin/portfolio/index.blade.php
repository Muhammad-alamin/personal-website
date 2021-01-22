@extends('admin.layouts.master')
@section('content')
    <div class="content-header" xmlns="http://www.w3.org/1999/html">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{$title}}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">{{$title}}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content-header" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{session()->get('success')}}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Portfolio List</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>ThumbnailImage</th>
                                    <th>sliderImages</th>
                                    <th>Project_url</th>
                                    <th>Client</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($getData as  $key=>$eachData )
                                    <tr>
                                        <td>{{$getData->firstItem() + $key}}</td>
                                        <td>{{$eachData->name}}</td>
                                        <td>{{$eachData->category}}</td>
                                        <td>{{$eachData->description}}</td>
                                        <td>
                                            <img src="{{asset($eachData->thumbnailImage)}}"class="img-fluid" alt="">
                                        </td>

                                        <td>
                                            @php($slider = json_decode($eachData->sliderImage))
                                            @foreach($slider as $eachSlider)

                                                <img src="{{asset('images/sliders/'.$eachSlider)}}" class="img-fluid" alt="" style="height: 20px; width: 20px;">

                                            @endforeach
                                        </td>
                                        <td>{{$eachData->Project_url}}</td>
                                        <td>{{$eachData->client}}</td>
                                        <td> <a class="btn btn-primary btn-xs" href="{{route('portfolio.edit',$eachData->id)}}">Edit</a> </td>
                                        <td>
                                            <form action="{{route('portfolio.destroy', $eachData->id)}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-xs" onclick="return confirm('Are You Confirm To Delete')" >Delete</button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            {{$getData->render()}}
                        </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



@endsection
