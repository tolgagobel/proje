@extends('admin.layouts')
@section('content')
    @section('head')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @endsection

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Haber Ekle</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <form method="post" action="" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="user_id" value="{{ auth('admin')->user()->id }}">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label" for="product-title-input">Haber Başlığı</label>
                                    <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Ürün Adı" value="">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="product-title-input">Slug</label>
                                    <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug" value="">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title mb-0">Açıklama</h4>
                                        </div><!-- end card header -->

                                        <div class="card-body">
                                            <div id="editor">
                                                <textarea class="ckeditor-classic" rows="5" name="description" id="task-textarea"></textarea>
                                            </div> <!-- end Snow-editor-->
                                        </div><!-- end card-body -->
                                    </div><!-- end card -->

                                </div>
                                <!-- end col -->
                            </div>
                        </div>
                        <!-- end card -->

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Haber Resmi</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="text-center">
                                        <div class="position-relative d-inline-block">
                                            <div class="position-absolute top-100 start-100 translate-middle">
                                                <label for="product-image-input" class="mb-0" data-bs-toggle="tooltip"
                                                       data-bs-placement="right" title="Resim Seç">
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                            <i class="ri-image-fill"></i>
                                                        </div>
                                                    </div>
                                                </label>
                                                <input value="" id="product_img"
                                                       type="file" name="product_img">
                                            </div>
                                            <div class="avatar-lg">
                                                <div class="avatar-title bg-light rounded">
                                                    <img src="" alt="" id="product_img" class="avatar-md h-auto">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Kategori</h5>
                                </div>
                                <div class="card-body">
                                    <div class="vstack gap-3">
                                        <select name="categories[]" class="form-control" id="categories" multiple="multiple">
                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- end card -->
                        <div class="text-end mb-3">
                            <button type="submit" class="btn btn-primary ">
                            </button>
                        </div>
                    </div>
                    <!-- end col -->

                    <!-- end col -->
                </div>
                <!-- end row -->

            </form>

        </div>
        <!-- container-fluid -->
    </div>
@endsection
@section('scripts')
    <script>
        ClassicEditor
            .create( document.querySelector( '#task-textarea' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection

@section('select-script')

    <script>
        $(function (){
            $('#categories').select2({
                placeholder: "Lütfen kategori seçiniz"
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection
