@extends('layouts.app2')

@section('content')
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"> Create New Questionnaire
                <div class="card-body">
                    <form action="/questionnaires" method="POST">
                        @csrf 
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter title">
                            <small id="titleHelp" class="form-text text-muted">Give your question.</small>
                        </div>
<!-- 
                        @error('title') 
                            <small class="text-danger">{{$message}}</small>
                        @enderror -->

                        <div class="form-group">
                            <label for="purpose">Purpose</label>
                            <input name="purpose" type="text" class="form-control" id="purpose" aria-describedby="purposeHelp" placeholder="Enter purpose">
                            <small id="purposeeHelp" class="form-text text-muted">Give your Purpose.</small>
                        </div>
<!-- 
                        @error('purpose')
                            <small class="text-danger">{{$message}}</small>
                        @enderror -->
                        <button type="submit" class="btn btn-primary">Create Questionnare</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
   </div>