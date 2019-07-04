@extends('backend.master')
@push('style')
    <link rel="stylesheet" href="/build/css/lib/datatables-net/datatables.min.css">
    <link rel="stylesheet" href="/build/css/separate/vendor/datatables-net.min.css">
    <link rel="stylesheet" href="/build/css/separate/vendor/bootstrap-datetimepicker.min.css">
@endpush
@push('scripts')
    <script src="/build/js/lib/datatables-net/datatables.min.js"></script>
    <script type="text/javascript" src="/build/js/lib/moment/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="/build/js/lib/eonasdan-bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
    <script>
        $('.datetimepicker-1').datetimepicker({
            widgetPositioning: {
                horizontal: 'right'
            },
            debug: false,
            format: 'DD/MM/YYYY HH:mm:ss'
        });

        $(function() {
            $('#example').DataTable();
        });

        $('.delete_confirmation').click(function(e) {
            e.preventDefault(); // Prevent the href from redirecting directly
            var linkURL = $(this).attr("href");
            warnBeforeRedirect(linkURL);
        });

        function warnBeforeRedirect(linkURL) {
            console.log(linkURL+'fgd');
            swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                },
                function(){
                    swal({
                        title: "Deleted!",
                        text: "'Your file has been deleted.",
                        type: "success",
                        confirmButtonClass: "btn-success"
                    });
                    window.location=linkURL;
                });
        }
    </script>
@endpush
@section('body')
    <form action="{{route('admin.football_fixturesSave')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <h4>English</h4>
                <div class="col-lg-6">
                    <fieldset class="form-group">
                        <label class="form-label" for="LinkInput">Date & Time</label>
                        <div class='input-group date datetimepicker-1'>
                                <input type='text' class="form-control" name="date" />
                                <span class="input-group-addon">
									<i class="font-icon font-icon-calend"></i>
								</span>
                            </div>
                    </fieldset>
                </div>
                <div class="col-lg-6">
                    <fieldset class="form-group">
                        <label class="form-label" for="Stadium">Stadium</label>
                        <input type="text" name="stadium_en" class="form-control" id="Stadium" placeholder="Stadium" required>
                    </fieldset>
                </div>
                <div class="col-lg-6">
                    <fieldset class="form-group">
                        <label class="form-label semibold" for="TitleInput">Home Team</label>
                        <input type="text" name="home_team_en" class="form-control" id="TitleInput" placeholder="Home Team">
                    </fieldset>
                </div>
                <div class="col-lg-6">
                    <fieldset class="form-group">
                        <label class="form-label" for="DescriptionInput">Home Team Logo</label>
                        <input type="file" name="home_team_logo" class="form-control" id="SliderImageInput" placeholder="Home Team" accept="image/*" required>
                    </fieldset>
                </div>
                <div class="col-lg-6">
                    <fieldset class="form-group">
                        <label class="form-label semibold" for="TitleInput1">Away Team</label>
                        <input type="text" name="away_team_en" class="form-control" id="TitleInput1" placeholder="Away Team">
                    </fieldset>
                </div>
                <div class="col-lg-6">
                    <fieldset class="form-group">
                        <label class="form-label" for="DescriptionInput1">Away Team Logo</label>
                        <input type="file" name="away_team_logo" class="form-control" id="SliderImageInput1" placeholder="Away Team Logo" accept="image/*" required>
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label" for="Score">Score</label>
                        <input type="text" name="score_en" class="form-control" id="Score" placeholder="Score" required>
                    </fieldset>
                </div>
            </div>
            <div class="col-lg-6">
                <h4>Arabic</h4>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label semibold" for="TitleInput">Home Team</label>
                        <input type="text" name="home_team_ar" class="form-control" id="TitleInput" placeholder="Home Team">
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label semibold" for="TitleInput1">Away Team</label>
                        <input type="text" name="away_team_ar" class="form-control" id="TitleInput1" placeholder="Away Team">
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label" for="Stadium">Stadium</label>
                        <input type="text" name="stadium_ar" class="form-control" id="Stadium" placeholder="Stadium" required>
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label" for="Score">Score</label>
                        <input type="text" name="score_ar" class="form-control" id="Score" placeholder="Score" required>
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <button type="submit" class="btn btn-inline btn-primary pull-right">Save</button>
                </div>
            </div>

        </div><!--.row-->
    </form>

    <div class="row">
        <section class="box-typical">
            <div class="table-responsive">
                <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Home Team</th>
                        <th>Away Team</th>
                        <th>Stadium</th>
                        <th>Score</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($fixtures as $fixture)
                        <tr>
                            <td>{{\Carbon\Carbon::parse($fixture->date)->format('d F Y H:i')}}
                            </td>
                            <td>{{$fixture->home_team_en}}<br>
                                {{$fixture->home_team_ar}}
                            </td>
                            <td>{{$fixture->away_team_en}}<br>
                                {{$fixture->away_team_ar}}
                            </td>
                            <td>{{$fixture->stadium_en}}<br>
                                {{$fixture->stadium_ar}}
                            </td>
                            <td>{{$fixture->score_en}}<br>
                                {{$fixture->score_ar}}
                            </td>
                            <td>{!! $fixture->status?'<span class="label label-success">Published</span>':'<span class="label label-danger">Unpublished</span>' !!}</td>
                            <td>
                                <a class="btn btn-inline btn-primary-outline delete_confirmation" data-id="{{$fixture->id}}" href="{{route('admin.football_fixturesdelete',$fixture->id)}}"><i class="fa fa-trash text-primary"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section><!--.box-typical-->
    </div>
@endsection