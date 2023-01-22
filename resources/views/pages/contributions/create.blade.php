@extends('layouts.default')

@section('content')
    <!--================Contribution Breadcrumb Area =================-->

    <div class="breadcrumb_area_three">
        <img class="p_absolute one" src="img/typography/leaf_left.png" alt="">
        <img class="p_absolute four" src="img/typography/leaf_right.png" alt="">
        <div class="container">
            <div class="breadcrumb_text">
                <h2>Hello! <span>Hello!</span></h2>
                <p>
                    Vos differents partages et contributions permettent à d'autre étudiants et éléves d'avoir accès
                    à des resouces lointains et tout celà grtuitement.
                </p>
            </div>
        </div>
    </div>
    <!--================Contribution Forum Breadcrumb Area =================-->

    <section class="contact_area sec_pad">
        <div class="container">
            <form class="row contact_fill" method="post" enctype="multipart/form-data"
                action="{{ route('contributions.post') }}">
                {{ csrf_field() }}
                <div class="col-lg-12 form-group">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                </div>
                <div class="col-lg-12 form-group">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="card-title">
                                <h4 class="mb-0">Choisir des images ou fichiers PDF</h4>
                            </div>
                            <hr />
                            <input id="file-upload" type="file" name="files[]"
                                accept=".pdf, .jpg, .png, image/jpeg, image/png" multiple>
                        </div>
                    </div>
                    @error('files')
                        {{ $message }}
                    @enderror
                </div>
                <div class="col-lg-4 form-group">
                    <h6>Titre</h6>
                    <input type="text" class="form-control" name="title" id="title"
                        placeholder="Donner un titre ici...">
                    @error('title')
                        {{ $message }}
                    @enderror
                </div>
                <div class="col-lg-4 form-group">
                    <h6>Categorie</h6>
                    <select class="form-control" name="category" id="category">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        {{ $message }}
                    @enderror
                </div>
                <div class="col-lg-12 form-group">
                    <h6>description</h6>
                    <textarea class="form-control message" name="content" id="content" placeholder="Une brève description de la ressource fournie ..."></textarea>
                    @error('content')
                        {{ $message }}
                    @enderror
                </div>
                <div class="col-lg-12 form-group">
                    <button type="submit" class="btn action_btn thm_btn">Envoyer</button>
                </div>
            </form>
        </div>
    </section>
    @once
        @push('scripts')
            <script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
            <script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
            <script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
            <script src="{{ asset('assets/plugins/fancy-file-uploader/jquery.ui.widget.js') }}"></script>
            <script src="{{ asset('assets/plugins/fancy-file-uploader/jquery.fileupload.js') }}"></script>
            <script src="{{ asset('assets/plugins/fancy-file-uploader/jquery.iframe-transport.js') }}"></script>
            <script src="{{ asset('assets/plugins/fancy-file-uploader/jquery.fancy-fileupload.js') }}"></script>
            <script src="{{ asset('assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js') }}"></script>
            <script src="{{ asset('assets/js/app.js') }}"></script>
            <script>
                $('#file-upload').FancyFileUpload({
                    params: {
                        action: 'fileuploader'
                    },
                    maxfilesize: 1000000
                });
            </script>
            {{-- <script>
            $(document).ready(function() {
                $('#image-uploadify').imageuploadify();
            });
        </script> --}}
        @endpush
    @endonce
@endsection
