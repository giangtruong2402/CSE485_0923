@php
    use Illuminate\Support\Facades\Section;
@endphp

@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Major</h3>
                    </div>
                    <div class="cod-md-6">
                        <a href="{{route('major.create')}}" class="btn btn-primary float-end">Add new</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmDeleteModalLabel">Delete major</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you want delete?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>
                                <button type="button" class="btn btn-danger" onclick="document.getElementById('deleteForm').submit()">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                
            @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($major as $mj)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $mj->name }}</td>
                            <td>{{ $mj->description }}</td>
                            <td>{{ $mj->duration }}</td>
                            <td>
                                <form action="{{ route('major.destroy', $mj->id) }}" method="POST">
                                    <a href="{{ route('major.edit', $mj->id) }}" class="btn btn-info">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" id="confirmDeleteModalLabel" name="confirmDeleteModalLabel" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
@endsection