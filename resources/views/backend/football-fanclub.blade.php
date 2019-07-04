@extends('backend.master')
@push('style')
    <link rel="stylesheet" href="/build/css/lib/summernote/summernote.css">
@endpush
@push('scripts')
    <script src="/build/js/lib/summernote/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote();
            $('.summernote1').summernote();
        });
    </script>
@endpush
@section('body')
    <form action="{{route('admin.football_fanclubSave')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <h4>English</h4>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label semibold" for="TitleInput">Title</label>
                        <div class="summernote-theme-1">
                            <textarea class="summernote" name="football_fanclub_en">
                                {{$rewards->football_fanclub_en}}
                            </textarea>
                        </div>
                    </fieldset>
                </div>

                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label" for="SliderImageInput">Cover Image</label>
                        <input type="file" name="football_fanclub_cover_image" class="form-control" id="SliderImageInput" placeholder="Cover Image" accept="image/*">
                    </fieldset>
                </div>

            </div>
            <div class="col-lg-6">
                <h4>Arabic</h4>
                <div class="col-lg-12">
                    <fieldset class="form-group">
                        <label class="form-label semibold" for="TitleInput">Title</label>
                        <div class="summernote-theme-1">
                            <textarea class="summernote1" name="football_fanclub_ar">
                                 {{$rewards->football_fanclub_ar}}
                            </textarea>
                        </div>
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <button type="submit" class="btn btn-inline btn-primary pull-right">Save</button>
                </div>
            </div>

        </div><!--.row-->
    </form>
@endsection