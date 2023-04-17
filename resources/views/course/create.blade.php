@extends('master')

@section('title', 'Create Course')

@section('content')
<div class="alert alert-info">Create Course</div>

<div class="row">
    <div class="col-6">
        <div class="card card-body">

            <form action="{{ route('course.store') }}" method="post">
                    @csrf

                    <h1>Create Post</h1>
 
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Course Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Input Course Name">
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label">Course Description<label>
                        <textarea class="form-control" id="desc" rows="4" cols="50" placeholder="description"></textarea>
                    </div>
                    <!-- <div class="mb-3">
                        <label for="desc" class="form-label">Course Description</label><br>
                        <textarea class="form-control" id="desc" rows="4" cols="50" placeholder="description"></textarea><br>
                    </div> -->
                    <div class="mb-3">
                        <label for="price" class="form-label">Course Price</label>
                        <input type="number" class="form-control" id="price  placeholder="Input Course Price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Course Institution</label>
                        <select name="institution_id" class="form-select">
                            <option value="1">UBG</option>
                            <option value="2">UTM</option>
                            <option value="3">UNRAM</option>
                        </select>
                    </div>
                    
                    <input type="submit" name="save" value="Save Course" class="btn btn-primary">
                    <a href="{{ url('course') }}" class="btn btn-warning">Cancel</a>
            </form>

        </div>
    </div>
</div>

@endsection