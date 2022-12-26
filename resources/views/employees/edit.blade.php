@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Employee Edit</h2><br>
                @if(session()->has('message'))
                    <p class="btn btn-success btn-block btn-sm custom_message text-left">{{ session()->get('message') }}</p>
                @endif
                <form action="{{ route('employees.update',$employees->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <fieldset>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="{{ $employees->name}}">
                            <span style="color:red"> {{ $errors->has('name') ?  $errors->first('name') : '' }} </span>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{ $employees->email}}">
                            <span style="color:red"> {{ $errors->has('email') ?  $errors->first('email') : '' }} </span>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>&nbsp;&nbsp;
                        <a href="/">Back</a>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
