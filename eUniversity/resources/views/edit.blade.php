@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Edit major</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('major.index')}}" class="btn btn-primary float-end">Major</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('major.update',$major->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="group-form">
                                <Strong>Name</Strong>
                                <input type="text" name="HoTen" class="form-control" placeholder="">
                            </div>
                            <div class="group-form">
                                <Strong>Description</Strong>
                                <input type="text" name="NgaySinh" class="form-control">
                            </div>
                            <div class="group-form">
                                <Strong>Duration</Strong>
                                <input type="text" name="NgaySinh" class="form-control">
                            </div>
                            
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection