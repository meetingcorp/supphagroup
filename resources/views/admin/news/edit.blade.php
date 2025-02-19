@extends('adminlte::page')
@php $pagename = 'แก้ไขข่าวสาร' @endphp
@section('title' ,setting('title').' | '.$pagename)
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
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <form method="post" action="{{route('news.update',['news' => $news->id])}}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <label for="title">หัวเรื่อง</label>
                            <input name="title" type="text" class="form-control" id="title" onkeyup="updatetitle()" required value="{{$news->title}}">
                            <label for="shortdetail">รายละเอียดย่อย</label><br>
                            <textarea class="form-control" name="shortdetail" id="shortdetail" cols="30" rows="3">{{$news->short_detail}}</textarea>
                            <label for="title">รายละเอียด</label>
                            <textarea name="detail" id="detail" class="form-control">{{$news->detail}}</textarea>
                            <label for="img">รูปภาพ</label><br>
                            <img src="@if($news->getFirstMediaUrl('news')) {{$news->getFirstMediaUrl('news')}} @else {{asset('image/no-image.jpg')}} @endif"
                                style="max-width: 200px;" id="showimg"><br>
							<span class="text-danger">**รูปภาพขนาด 350x300 pixel**</span>
                            <div class="input-group mt-1">
                                <input name="imgs" type="file" class="custom-file-input" id="imgInp">
                                <label class="custom-file-label" for="imgInp">เพิ่มรูปภาพ</label>
                            </div>
                            <label for="metatag">meta tag</label>
                            <input type="text" name="metatag" id="metatag" class="form-control" value="{{$news->metatag}}">
                            <label for="metades">meta description</label>
                            <input type="text" name="metades" id="metades" class="form-control" value="{{$news->metadescription}}">
                            <div class="mt-2">
                                <a class="btn btn-secondary" onclick="history.back();"><i
                                    class="fas fa-arrow-left mr-2"></i>ย้อนกลับ</a>
                                <button class="btn btn-info"><i class="fas fa-save mr-2"></i>บันทึกข้อมูลข้อมูล</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <h4>Preview</h4>
                        <div class="container border">
                            <div class="text-center">
                                <img src="@if($news->getFirstMediaUrl('news')) {{$news->getFirstMediaUrl('news')}} @else {{asset('image/no-image.jpg')}} @endif"
                                id="desktopshow" style="width: 100%;">
                            </div>
                            <div>
                                <h5 id="subtitle">{{$news->title}}</h5>
                                <p id="subdetail">
                                    {!! $news->short_detail !!}
                                </p>
                            </div>
                        </div>
                        {{-- <a href="{{route('news', ['news' => $news->slug])}}" target="_blank" data-toggle="tooltip" title="ดูหน้าเว็บ"><i class="fa fa-eye"></i> open in web</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script>
            imgInp.onchange = evt => {
                const [file] = imgInp.files;
                if (file) {
                    showimg.src = URL.createObjectURL(file);
                    desktopshow.src = URL.createObjectURL(file);
                }
            }
            function updatetitle(){
                var data = document.getElementById('title').value;
                document.getElementById('subtitle').innerHTML = data;
            }

            function updatedetail(){
                var data = document.getElementById('detail').value;
                if(data.length > 5){
                    data = data.substring(0,5)+'...';
                }
                // console.log(data);
                document.getElementById('subdetail').innerHTML = data;
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
