@extends('layouts.app2')

@section('content')
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"> Create New Question
                <div class="card-body">
                    <form action="/questionnaires/{{ $questionnaire->id }}/questions" method="POST">
                        @csrf 
                        <div class="form-group">
                            <label for="question">Question</label>
                            <input name="question[question]" type="text" class="form-control" 
                            value="{{ old('question.question') }}"
                            id="question" aria-describedby="titleHelp" placeholder="Enter title">
                            <small id="questionHelp" class="form-text text-muted">a simple to the point</small>
                        </div>
<!-- 
                        @error('title') 
                            <small class="text-danger">{{$message}}</small>
                        @enderror -->

                        <div class="form-group">
                        <fieldset>
                            <legend>Choice</legend>
                            <small id="choicesHelp" class="form-text text-muted">give shoices that give you the most insight into your question</small>
                            <div>
                                <div class=" form-group">
                                    <label for="answer1">choice 1</label>
                                    <input name="answers[][answer]" type="text" 
                                    value="{{ old('answer.0.answer') }}"
                                    class="form-control" id="answer1" aria-describedby="answer1Help" placeholder="Enter choice 1">

                                    @error('answers.0.answer')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class=" form-group">
                                    <label for="answer2">choice 2</label>
                                    <input name="answers[][answer]" type="text" 
                                    value="{{ old('answer.1.answer') }}"
                                    class="form-control" id="answer2" aria-describedby="answer1Help" placeholder="Enter choice 1">

                                    @error('answers.1.answer')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class=" form-group">
                                    <label for="answer3">choice 3</label>
                                    <input name="answers[][answer]" type="text" 
                                    value="{{ old('answer.2.answer') }}"
                                    class="form-control" id="answer3" aria-describedby="answer1Help" placeholder="Enter choice 1">

                                    @error('answers.2.answer')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                            </div>
                        </fieldset>
                        </div>

                        <button type="submit" class="btn btn-primary">Add questionx</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
   </div>