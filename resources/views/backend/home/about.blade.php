@extends('backend.master')
@push('style')
   <style>
       .card-green-fill
       {
           border-color: #46c35f;
       }
       .card-green-fill .card-header {
           border-bottom-color: #46c35f;
           background-color: #46c35f;
           color: #fff;
       }
   </style>
@endpush
@push('scripts')
@endpush
@section('body')
    <form action="{{route('admin.aboutSave')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-3">
                <fieldset class="form-group">
                    <label class="form-label" for="AboutSection1Input">About Section 1</label>
                    <textarea rows="3" required name="about1_en" class="form-control" placeholder="About Section 1" id="AboutSection1Input">{{old('about1_en')?old('about1_en'):(isset($abouts[0]->about1_en)?$abouts[0]->about1_en:'')}}</textarea>
                </fieldset>
            </div>
            <div class="col-lg-3">
                <fieldset class="form-group">
                    <label class="form-label" for="AboutSection2Input">About Section 2</label>
                    <textarea rows="3" required name="about1_ar" class="form-control" placeholder="About Section 2" id="AboutSection2Input">{{old('about1_ar')?old('about1_ar'):(isset($abouts[0]->about1_ar)?$abouts[0]->about1_ar:'')}}</textarea>
                </fieldset>
            </div>
            <div class="col-lg-3">
                <fieldset class="form-group">
                    <label class="form-label" for="AboutSection1Input">About Section 1</label>
                    <textarea rows="3" required name="about2_en" class="form-control" placeholder="About Section 1" id="AboutSection1Input">{{old('about2_en')?old('about2_en'):(isset($abouts[0]->about2_en)?$abouts[0]->about2_en:'')}}</textarea>
                </fieldset>
            </div>
            <div class="col-lg-3">
                <fieldset class="form-group">
                    <label class="form-label" for="AboutSection2Input">About Section 2</label>
                    <textarea rows="3" required name="about2_ar" class="form-control" placeholder="About Section 2" id="AboutSection2Input">{{old('about2_ar')?old('about2_ar'):(isset($abouts[0]->about2_ar)?$abouts[0]->about2_ar:'')}}</textarea>
                </fieldset>
            </div>
            <div class="col-lg-12">
                <button type="submit" class="btn btn-inline btn-primary pull-right">Save</button>
            </div>
        </div><!--.row-->
    </form>

    <div class="row">
        <div class="col-lg-6">
            <section class="card card-blue-fill">
                <header class="card-header">
                    About 1 (EN)
                </header>
                <div class="card-block">
                    <p class="card-text">{{(isset($abouts[0]->about1_en)?$abouts[0]->about1_en:'')}}</p>
                </div>
            </section>
        </div>
        <div class="col-lg-6">
            <section class="card card-green-fill">
                <header class="card-header">
                    About 1 (AR)
                </header>
                <div class="card-block">
                    <p class="card-text">{{(isset($abouts[0]->about1_ar)?$abouts[0]->about1_ar:'')}}</p>
                </div>
            </section>
        </div>
        <div class="col-lg-6">
            <section class="card card-blue-fill">
                <header class="card-header">
                    About 2 (EN)
                </header>
                <div class="card-block">
                    <p class="card-text">{{(isset($abouts[0]->about2_en)?$abouts[0]->about2_en:'')}}</p>
                </div>
            </section>
        </div>
        <div class="col-lg-6">
            <section class="card card-green-fill">
                <header class="card-header">
                    About 2 (AR)
                </header>
                <div class="card-block">
                    <p class="card-text">{{(isset($abouts[0]->about2_ar)?$abouts[0]->about2_ar:'')}}</p>
                </div>
            </section>
        </div>
    </div>
@endsection