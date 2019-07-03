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

        $('.j_removeImage').on('click',function () {
            $(this).closest('.Imagediv').hide(500);
        });
    </script>
@endpush
@section('body')
    <form action="{{route('admin.teamSave')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <h4>English</h4>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label semibold" for="TitleInput">Established  Date</label>
                        <input type="text" name="established_en" class="form-control" id="TitleInput" placeholder="Established  Date">
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label semibold" for="TitleInput">Nickname</label>
                        <input type="text" name="nickname_en" class="form-control" id="TitleInput" placeholder="Nickname">
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label" for="PhoneInput">Club President</label>
                        <input type="text" name="club_president_en" class="form-control" id="PhoneInput" placeholder="Club President">
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label" for="EmailInput">Title</label>
                        <input type="text" name="title_en" class="form-control" id="EmailInput" placeholder="Title">
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label" for="AddressInput">Description</label>
                        <textarea rows="2" name="description_en" class="form-control" placeholder="Description" id="DescriptionInput"></textarea>
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label" for="SliderImageInput">Home Kit Image</label>
                        <input type="file" name="home_kit" class="form-control" id="SliderImageInput" placeholder="Home Kit Image" accept="image/*">
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label" for="SliderImageInput1">Away Kit Image</label>
                        <input type="file" name="away_kit" class="form-control" id="SliderImageInput1" placeholder="Away Kit Image" accept="image/*" >
                    </fieldset>
                </div>
            </div>
            <div class="col-lg-6">
                <h4>Arabic</h4>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label semibold" for="TitleInput">Established  Date</label>
                        <input type="text" name="established_ar" class="form-control" id="TitleInput" placeholder="Established  Date">
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label semibold" for="TitleInput">Nickname</label>
                        <input type="text" name="nickname_ar" class="form-control" id="TitleInput" placeholder="Nickname">
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label" for="PhoneInput">Club President</label>
                        <input type="text" name="club_president_ar" class="form-control" id="PhoneInput" placeholder="Club President">
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label" for="EmailInput">Title</label>
                        <input type="text" name="title_ar" class="form-control" id="EmailInput" placeholder="Title">
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label" for="AddressInput">Description</label>
                        <textarea rows="2" name="description_ar" class="form-control" placeholder="Description" id="DescriptionInput"></textarea>
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <div class="col-lg-6 Imagediv">
                        <label class="form-label semibold">Home Kit
                            {{--<a href="javascript:void(0);" class="j_removeImage btn btn-sm btn-inline btn-danger-outline"> <i class="fa fa-close text-danger"></i> </a> --}}
                        </label>
                        <img class="col-lg-12" src="/site/images//jblue.jpg" >
                    </div>
                    <div class="col-lg-6 Imagediv">
                        <label class="form-label semibold">Away Kit
                            {{--<a href="javascript:void(0);" class="j_removeImage btn btn-sm btn-inline btn-danger-outline"> <i class="fa fa-close text-danger"></i> </a>--}}
                        </label>
                        <img class="col-lg-12" src="/site/images//jwhite.jpg" >
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <button type="submit" class="btn btn-inline btn-primary pull-right">Save</button>
            </div>
        </div><!--.row-->
    </form>

    <div class="row">
        <section class="box-typical">
        </section><!--.box-typical-->
    </div>
@endsection