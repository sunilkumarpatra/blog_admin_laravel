@extends('admin/layout')

@section('container')
    <div class="wrapper">
        <div class="container">
            <div class="row">
                @include('admin/sidebar')
                <!--/.span3-->
                <div class="span9">
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                                <h3>
                                    Manage Category
                                    <a class="btn btn-small btn-success" href="category/manage_category" style="float: right;">Add New</a>
                                </h3>
                            </div>
                            
                            <div class="module-body table">
                                <table cellpadding="0" cellspacing="0" border="0"
                                    class="datatable-1 table table-bordered table-striped	 display" width="100%">
                                    <thead>
                                        <tr>
                                            <th>
                                                SL#
                                            </th>
                                            <th>
                                                Category Name
                                            </th>
                                            <th>
                                                Date Created
                                            </th>
                                            <th>
                                                Last Updated
                                            </th>
                                            <th>
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $slNo = 1; @endphp
                                        @foreach ($data as $list)
                                        <tr class="odd gradeX">
                                            <td>
                                                {{ $slNo++ }}
                                            </td>
                                            <td>
                                                {{ $list->category_name }}
                                            </td>
                                            <td>
                                                {{ $list->created_at }}
                                            </td>
                                            <td class="center">
                                                {{ $list->updated_at }}
                                            </td>
                                            <td class="center">
                                                <i class="icon-edit"></i>&nbsp;&nbsp;&nbsp;
                                                <i class="icon-trash"></i>&nbsp;&nbsp;&nbsp;
                                                <i class="icon-circle" style="color:red;"></i>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                       
                                        <tr>
                                            <th>
                                                SL#
                                            </th>
                                            <th>
                                                Category Name
                                            </th>
                                            <th>
                                                Date Created
                                            </th>
                                            <th>
                                                Last Updated
                                            </th>
                                            <th>
                                                Action
                                            </th>
                                        </tr>
                                        
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
