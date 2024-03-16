@extends('admin/layout')

@section('container')
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="span3">
                    @include('admin/sidebar')
                </div><!--/.span3-->


                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Add New Category
                                    <a class="btn btn-small btn-success" href="{{ url('admin/category') }}"
                                        style="float: right;">View All</a>

                                </h3>
                            </div>
                            <div class="module-body">
                                @if (session('message'))
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Well done!</strong> {{ session('message') }}
                                    </div>
                                @endif
                                <form class="form-horizontal row-fluid"
                                    action="{{ route('category.manage_category_process') }}" method="post">
                                    @csrf
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Category Name</label>
                                        <div class="controls">
                                            <input data-title="A tooltip for the input" type="text" name="category_name"
                                                placeholder="Enter Category Name" data-original-title="Enter Category Name"
                                                class="span8 tip">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <button type="submit" class="btn btn-small ">Submit </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>



                    </div><!--/.content-->
                </div><!--/.span9-->
            </div>
        </div><!--/.container-->
    </div><!--/.wrapper-->
@endsection
