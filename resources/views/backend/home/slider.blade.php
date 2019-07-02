@extends('backend.master')
@push('style')
    <link rel="stylesheet" href="/build/css/lib/datatables-net/datatables.min.css">
    <link rel="stylesheet" href="/build/css/separate/vendor/datatables-net.min.css">
    {{--<link rel="stylesheet" href="/build/css/lib/bootstrap-table/bootstrap-table.min.css">--}}
@endpush
@push('scripts')
    <script src="/build/js/lib/datatables-net/datatables.min.js"></script>
    <script>
        $(function() {
            $('#example').DataTable();
        });
    </script>
    {{--<script src="/build/js/lib/bootstrap-table/bootstrap-table.js"></script>--}}
    {{--<script src="/build/js/lib/bootstrap-table/bootstrap-table-export.min.js"></script>--}}
    {{--<script src="/build/js/lib/bootstrap-table/tableExport.min.js"></script>--}}
    {{--<script src="/build/js/lib/bootstrap-table/bootstrap-table-init.js"></script>--}}
@endpush
@section('body')
    <form action="{{route('admin.sliderSave')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-3">
                <fieldset class="form-group">
                    <label class="form-label semibold" for="TitleInput">Title</label>
                    <input type="text" name="title" class="form-control" id="TitleInput" placeholder="Slider Title">
                </fieldset>
            </div>
            <div class="col-lg-3">
                <fieldset class="form-group">
                    <label class="form-label" for="DescriptionInput">Description</label>
                    <textarea rows="2" name="description" class="form-control" placeholder="Slider Description" id="DescriptionInput"></textarea>
                </fieldset>
            </div>
            <div class="col-lg-3">
                <fieldset class="form-group">
                    <label class="form-label" for="LinkInput">Link</label>
                    <textarea rows="2" name="link" class="form-control" placeholder="Slider Description" id="LinkInput"></textarea>
                </fieldset>
            </div>
            <div class="col-lg-3">
                <fieldset class="form-group">
                    <label class="form-label" for="SliderImageInput">Slider Image</label>
                    <input type="file" name="slider" class="form-control" id="SliderImageInput" placeholder="Slider Image" accept="image/*" required>
                </fieldset>
            </div>
            <div class="col-lg-3">
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
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Link</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Link</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($sliders as $slider)
                            <tr>
                                <td>
                                    <div class="post-announce-pic">
                                        <a href="#" tabindex="0">
                                            <img src="{{$slider->slider_image?'/uploads/'.$slider->slider_image:''}}" alt="" width="200px" height="100px">
                                        </a>
                                    </div>
                                </td>
                                <td>{{$slider->title}}</td>
                                <td>{{$slider->description}}</td>
                                <td>{{$slider->link}}</td>
                                <td>{{$slider->status}}</td>
                                <td>Action</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section><!--.box-typical-->
    </div>
@endsection