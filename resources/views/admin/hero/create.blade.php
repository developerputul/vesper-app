@extends('admin.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form class="form-horizontal" action="{{route('hero.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title">Create Hero</h4><hr>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 text-end control-label col-form-label">title1 <span class="text-danger"> *</span></label>
                            <div class="col-sm-9">
                                <input type="text" name="title1" class="form-control" placeholder="Title 1 Here" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 text-end control-label col-form-label">title2<span class="text-danger"> *</span></label>
                            <div class="col-sm-9">
                                <input type="text" name="title2" class="form-control" placeholder="Title 2 Here" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 text-end control-label col-form-label">url</label>
                            <div class="col-sm-9">
                                <input type="text" name="url" class="form-control" placeholder="Enter url here">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 text-end control-label col-form-label"> image  <span class="text-danger"> *</span></label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control" required >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 text-end control-label col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="description"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
