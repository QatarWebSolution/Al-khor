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
            format: 'DD/MM/YYYY'
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
    <form action="{{route('admin.newsSave')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <h4>English</h4>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label semibold" for="TitleInput">Title</label>
                        <input type="text" name="title_en" class="form-control" id="TitleInput" placeholder="News Title">
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label" for="DescriptionInput">News</label>
                        <textarea rows="2" name="description_en" class="form-control" placeholder="News Description" id="DescriptionInput"></textarea>
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label" for="LinkInput">Date</label>
                        <div class="form-group">
                            <div class='input-group date datetimepicker-1'>
                                <input type='text' class="form-control" name="date" />
                                <span class="input-group-addon">
									<i class="font-icon font-icon-calend"></i>
								</span>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label" for="SliderImageInput">News Images</label>
                        <input type="file" name="images[]" class="form-control" id="SliderImageInput" placeholder="News Image" accept="image/*" required multiple>
                    </fieldset>
                </div>
            </div>
            <div class="col-lg-6">
                <h4>Arabic</h4>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label semibold" for="TitleInput">Title</label>
                        <input type="text" name="title_ar" class="form-control" id="TitleInput" placeholder="News Title">
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label" for="DescriptionInput">News</label>
                        <textarea rows="2" name="description_ar" class="form-control" placeholder="News Description" id="DescriptionInput"></textarea>
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
                        <th>Title</th>
                        <th>Description</th>
                        <th>Date</th>
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
                    @foreach($news as $new)
                        <tr>
                            <td>{{$new->title_en}}<br>
                                {{$new->title_ar}}
                            </td>
                            <td>{{$new->description_en}}<br>
                                {{$new->description_ar}}
                            </td>
                            <td>{{$new->date}}</td>
                            <td>{!! $new->status?'<span class="label label-success">Published</span>':'<span class="label label-danger">Unpublished</span>' !!}</td>
                            <td>
                                <a class="btn btn-inline btn-primary-outline delete_confirmation" data-id="{{$new->id}}" href="{{route('admin.newsDelete',$new->id)}}"><i class="fa fa-trash text-primary"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section><!--.box-typical-->
    </div>
@endsection