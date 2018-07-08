@extends('admin.layouts.main')

@section('content')
    <div class="col-md-12">
        <form action="{{ route('events.store') }}" method="POST">
            @csrf
            <div class="form-row mb-2">
                <div class="col-md-6">
                    <label for="name">Title</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Event Title">                    
                </div>
                <div class="col-md-6">
                    <label for="base_price">Start Date</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basePricePrepend">£</span>
                        </div>
                        <input type="text" class="form-control" id="base_price" name="base_price" placeholder="E.g. 10" aria-describedby="basePricePrepend" required>
                    </div>                  
                </div>
            </div>
            <div class="form-row mb-2">
                <div class="col-md-12">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    <small id="descriptionHelp" class="form-text text-muted">Markdown is supported. Markdown cheat sheet <a href="https://www.markdownguide.org/cheat-sheet#basic-syntax" target="_blank" class="text-primary">here</a></small>
                </div>
            </div>
            <button type="submit" class="btn btn-success float-right">Create</button>
        </form>
    </div>
@endsection