@extends('adminlte::page')
@php $pagename = 'เพิ่มข่าวสาร' @endphp
@section('title', setting('title') . ' | '.$pagename)
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
@endpush

@section('content')
    <div class="row pt-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}" class="text-info"><i class="fa fa-home fa-fw"
                            aria-hidden="true"></i> หน้าแรก</a></li>
                <li class="breadcrumb-item"><a class="text-info" href="{{route('news.index')}}">จัดการข่าวสาร</a></li>
                <li class="breadcrumb-item active">{{ $pagename }}</li>
            </ol>
        </nav>
    </div>
    <div class="card card-outline card-info">
        <div class="card-body">
            <h3>{{ $pagename }}</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <form method="post" action="{{ route('news.store') }}" enctype="multipart/form-data">
                            @csrf
                            <label for="title">หัวข้อ</label>
                            <input name="title" type="text" class="form-control" required>
                            <label for="shortdetail">รายละเอียดย่อย</label><br>
                            <textarea class="form-control" name="shortdetail" id="shortdetail" cols="30" rows="3"></textarea>
                            <label for="title">รายละเอียด</label>
                            <textarea name="detail" id="detail" class="form-control"></textarea>
                            <label for="img">รูปภาพ</label><br>
                            <img src="{{ asset('images/no-image.jpg') }}" style="height: 200px; width: auto;" id="showimg"><br>
                            <span class="text-danger">**รูปภาพขนาด 350x300 pixel**</span>
                            <div class="input-group mt-1">
                                <input name="imgs" type="file" class="custom-file-input" id="imgInp">
                                <label class="custom-file-label" for="imgInp">เพิ่มรูปภาพ</label>
                            </div>
                            <label for="metatag">meta tag</label>
                            <input type="text" name="metatag" id="metatag" class="form-control">
                            <label for="metades">meta description</label>
                            <input type="text" name="metades" id="metades" class="form-control">
                            <div class="float-right mt-2">
                                <a class="btn btn-secondary" onclick="history.back();"><i
                                    class="fas fa-arrow-left mr-2"></i>ย้อนกลับ</a>
                                <button class="btn btn-info"><i class="fas fa-save mr-2"></i>เพิ่มข้อมูล</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script>
            imgInp.onchange = evt => {
                const [file] = imgInp.files
                if (file) {
                    showimg.src = URL.createObjectURL(file)
                }
            }
            tinymce.init({
                selector: '#detail',
                plugins: 'responsivefilemanager print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap emoticons',
                menubar: 'file edit view insert format tools table help',
                toolbar: 'image | responsivefilemanager | undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
                height: 400,
                relative_urls: false,
                remove_script_host: false,
                convert_urls: true,
                external_filemanager_path: "{{ asset('vendor/responsive_filemanager/filemanager') }}/",
                filemanager_title: "File manger",
                external_plugins: {
                    "responsivefilemanager": "{{ asset('vendor/responsive_filemanager/tinymce/plugins/responsivefilemanager/plugin.min.js') }}",
                    "filemanager": "{{ asset('vendor/responsive_filemanager/filemanager/plugin.min.js') }}"
                },
            })
        </script>
    @endpush
@endsection
