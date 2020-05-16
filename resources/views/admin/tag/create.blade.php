@extends('layouts.backend.app')

@section('title','Create')

@push('css')

@endpush

@section('content')
  <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ADD NEW TAG
                            </h2>
                        </div>
                        <div class="body">
                            <form action="{{route('admin.tag.store')}}" method="post">
                              @csrf
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter Tag Name">
                                        <label for="name">Tag Name</label>
                                    </div>
                                </div>
                                  <a href="{{route('admin.tag.index')}}" class="btn btn-danger m-t-15 waves-effect">BACK</a>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                            </form>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->
@endsection

@push('js')

@endpush
