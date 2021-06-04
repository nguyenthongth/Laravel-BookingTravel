@extends('Layout.default')

@section('page_content')
    <!-- -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="card-head">
                    <header>Salary Status</header>
                </div>
                <div class="card-body ">
                    <div class="mdl-tabs mdl-js-tabs">
                        <div class="mdl-tabs__tab-bar tab-left-side">
                            <a href="#tab4-panel" class="mdl-tabs__tab tabs_three is-active">Managers</a>
                            <a href="#tab5-panel" class="mdl-tabs__tab tabs_three">Housekeeper</a>
                            <a href="#tab6-panel" class="mdl-tabs__tab tabs_three">Other</a>
                        </div>
                        <div class="mdl-tabs__panel is-active p-t-20" id="tab4-panel">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>departoure</th>
                                            <th>code</th>
                                            <th>nr_day</th>
                                            <th>starting_gate</th>
                                            <th>active</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tours as $tour)
                                            <tr>
                                                <td>
                                                    <form class="commentForm" data-id="{{ $tour->id }}"
                                                        class="btn btn-primary" data-toggle="modal"
                                                        data-target="#exampleModalCenter">
                                                        <input type="submit" id="postFetchAPI" class="submitBtn"
                                                            value="detail" />
                                                    </form>
                                                </td>
                                                <td>{{ $tour['departure'] }}</td>
                                                <td>{{ $tour['code'] }}</td>
                                                <td>{{ $tour['nr_day'] }}</td>
                                                <td>{{ $tour['starting_gate'] }}</td>
                                                <td>{{ $tour['is_active'] }}</td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="text-center">
                                <div class="full-width text-center p-t-10">
                                    <a href='#' class="btn purple btn-outline btn-circle margin-0 ">Load
                                        More</a>
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
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div style="min-width: 300%; right:100%" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('Pages.program')
                    @include('Pages.detailtour')
                    @include('Pages.note')
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- script note tour -->
    <script>
        document.querySelector('#postFetchAPI').addEventListener('click', onClick);
        let url = 'http://127.0.0.1:8000/admincp/note/1/';

        function onClick() {
            fetch(url, {
                    method: 'GET',
                })
                .then(response => {
                    response.json().then(res => {
                        let tourPrice = res.price;
                        $('.tour-price').append(tourPrice);
                    });
                })
        }
    </script>
    <!-- script end note tour -->

    <!-- script detail tour -->
    <script>
        $(document).on("submit", function(e) {
            e.preventDefault();
            var tour_id = $(this).data('id');
            $.ajax({
                type: 'GET',
                url: "/admincp/detail-tour/{{ $tour->id }}",
                success: function(uy) {
                    var code = uy.code;
                    var generate_address = uy.generate_address;
                    var generate_time = uy.generate_time;
                    var hotel_info = uy.hotel_info;
                    var note = uy.note;
                    var tour_guide_info = uy.tour_guide_info;
                    var transfer_info = uy.transfer_info;
                    $('.transaction-info').append(transfer_info);
                    $('.hotel-info').append(hotel_info);
                    $('.note').append(note);
                    $('.generate_address').append(generate_address);
                    $('.generate_time').append(generate_time);
                    $('.tour_guide_info').append(tour_guide_info);

                }
            })
            $.ajax({
                type: 'GET',
                url: "/admincp/programtour-list/{{ $tour->id }}",
                success: function(result) {
                    var results = result.length;
                    for (var i = 0; i < results; i++) {
                        var code = result[i].code;
                        var content = result[i].content;
                        var name = result[i].name;
                        var nr_day = result[i].nr_day;
                        var time = result[i].time;
                        $('.table .uy').append('<tr><td>' + name + '</td><td>' + time +
                            '</td><td>' + content + '</td></tr>')
                    }
                }
            })
            $.ajax({
                type: 'GET',
                url: "/admincp/programtour-list/{{ $tour->id }}",
                success: function(result) {
                    var results = result.length;
                    for (var i = 0; i < results; i++) {
                        var code = result[i].code;
                        var content = result[i].content;
                        var name = result[i].name;
                        var nr_day = result[i].nr_day;
                        var time = result[i].time;

                        $('.table .uy').append('<tr><td>' + name + '</td><td>' + time +
                            '</td><td>' + content + '</td></tr>')
                    }
                }
            })
        });

    </script>

    <div class="modal-footer">
    </div>
    </div>
    </div>
    </div>
    <!-- end page content -->
@endsection
