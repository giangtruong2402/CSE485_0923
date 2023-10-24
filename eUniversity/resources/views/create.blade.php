@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Create major</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('major.index')}}" class="btn btn-primary float-end">Major</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('major.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="group-form">
                                <Strong>Name</Strong>
                                <input type="text" name="HoTen" class="form-control" placeholder="name">
                            </div>
                            <div class="group-form">
                                <Strong>Description</Strong>
                                <input type="text" name="NgaySinh" class="form-control">
                            </div>
                            <div class="group-form">
                                <Strong>Duration</Strong>
                                <input type="text
                                " name="NgaySinh" class="form-control">
                            </div>
                            
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection