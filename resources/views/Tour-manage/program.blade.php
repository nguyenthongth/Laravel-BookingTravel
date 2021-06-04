@extends('Layout.default')

@section('page_content')
    <!-- -->
    <div class="row">
        <div class="col-sm-12">
             <div class="card card-topline-yellow">
             <div class="card-head">
                 <header>Chi Tiết Tour</header>
                 <div class="tools">
                     <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                     <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                     <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                 </div>
             </div>
            <div class="card-box">
                <div class="card-head">
                    <header>Chương trình</header>
                </div>
                <div class="card-body ">
                    <div class="mdl-tabs mdl-js-tabs">
                        <div class="mdl-tabs__panel is-active p-t-20" id="tab4-panel">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Content</th>
                                            <th>edit</th>
                                        </tr>
                                        @foreach ($programtours as $programtour)
                                            <tr>
                                                <td>{{ $programtour['name'] }}</td>
                                                <td>{{ $programtour['time'] }}</td>
                                                <td>
                                                    {!! $programtour['content'] !!}
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-tbl-edit btn-xs">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-tbl-delete btn-xs">
                                                        <i class="fa fa-trash-o "></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-center">
                                <div class="full-width text-center p-t-10">
                                    <a href="#" class="btn purple btn-outline btn-circle margin-0">Load More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- end page content -->
@endsection
