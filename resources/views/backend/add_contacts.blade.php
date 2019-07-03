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
    <form action="{{route('admin.contactsSave')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <h4>English</h4>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label semibold" for="TitleInput">Title</label>
                        <input type="text" name="title_en" class="form-control" id="TitleInput" placeholder="Contact Title">
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label" for="PhoneInput">Phone</label>
                        <input type="text" name="phone_en" class="form-control" id="PhoneInput" placeholder="Phone Number">
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label" for="EmailInput">Email</label>
                        <input type="text" name="email_en" class="form-control" id="EmailInput" placeholder="Email">
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label" for="AddressInput">Address</label>
                        <input type="text" name="address_en" class="form-control" id="AddressInput" placeholder="Address">
                    </fieldset>
                </div>
            </div>
            <div class="col-lg-6">
                <h4>Arabic</h4>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label semibold" for="TitleInput">Title</label>
                        <input type="text" name="title_ar" class="form-control" id="TitleInput" placeholder="Contact Title">
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label" for="PhoneInput">Phone</label>
                        <input type="text" name="phone_ar" class="form-control" id="PhoneInput" placeholder="Phone Number">
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label" for="EmailInput">Email</label>
                        <input type="text" name="email_ar" class="form-control" id="EmailInput" placeholder="Email">
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label" for="AddressInput">Address</label>
                        <input type="text" name="address_ar" class="form-control" id="AddressInput" placeholder="Address">
                    </fieldset>
                </div>
            </div>
            <div class="col-lg-12">
                <button type="submit" class="btn btn-inline btn-primary pull-right">Save</button>
            </div>
        </div><!--.row-->
    </form>

    <div class="row">
        <section class="box-typical">
            <div class="table-responsive">
                <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Contact (EN)</th>
                        <th>Contact (AR)</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Contact (EN)</th>
                        <th>Contact (AR)</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td>
                                <ul class="profile-links-list">
                                    <li class="nowrap text-warning" style="font-size: 18px;">{{$contact->title_en}}</li>
                                    <li class="nowrap"><i class="fa fa-phone"></i> {{$contact->phone_en}}</li>
                                    <li class="nowrap"><i class="fa fa-envelope"></i> {{$contact->email_en}}</li>
                                    <li class="nowrap"><i class="fa fa-map-marker"></i> {{$contact->address_en}}</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="profile-links-list">
                                    <li class="nowrap text-warning" style="font-size: 18px;">{{$contact->title_ar}}</li>
                                    <li class="nowrap"><i class="fa fa-phone"></i> {{$contact->phone_ar}}</li>
                                    <li class="nowrap"><i class="fa fa-envelope"></i> {{$contact->email_ar}}</li>
                                    <li class="nowrap"><i class="fa fa-map-marker"></i> {{$contact->address_ar}}</li>
                                </ul>
                            </td>

                            <td>{!! $contact->status?'<span class="label label-success">Published</span>':'<span class="label label-danger">Unpublished</span>' !!}</td>
                            <td>
                                <a class="btn btn-inline btn-primary-outline delete_confirmation" data-id="{{$contact->id}}" href="{{route('admin.contactsDelete',$contact->id)}}"><i class="fa fa-trash text-primary"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section><!--.box-typical-->
    </div>
@endsection