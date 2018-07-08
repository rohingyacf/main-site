@extends('admin.layouts.main')

@section('content')
    <div class="col-md-12">
        <a href="{{ route('events.create') }}" class="mb-2 btn btn-success float-right">Create Event</a>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">Published</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Test Title</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis elit felis.</td>
                    <td>12/12/18</td>
                    <td>No</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="First group">
                            <a href="#" class="btn btn-secondary text-white">view</a>
                            <a href="#" class="btn btn-primary text-white">edit</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>        
    </div>   
@endsection