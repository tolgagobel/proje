@extends('admin.layouts')
@section('content')

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

            <form method="post" action="{{ route('admin.product.save', $entry->id) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="user_id" value="{{ auth('admin')->user()->id }}">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label" for="product-title-input">Haber Başlığı</label>
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Ürün Adı" value="{{ old('title', $entry->title) }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="product-title-input">Slug</label>
                                    <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug" value="{{ old('slug',$entry->slug) }}">
                                </div>
                                <div class="mb-3">
                                    <label for="validationTextarea" class="form-label">Spot</label>
                                    <textarea class="form-control" id="spot" name="spot" style="height: 183px;"> {{ old('spot',$entry->spot) }} </textarea>
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
                                                <textarea class="ckeditor-classic" rows="5" name="description" id="task-textarea">{{ old('description', $entry->description) }} </textarea>
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
                                            <div class="position-absolute align-item-center translate-middle">
                                                <input value="" id="product_img" type="file" name="product_img">
                                            </div>
                                            <div class="avatar-lg" style="height: 20rem;width: 35rem;">
                                                <div class="avatar-title bg-light rounded">
                                                    <img src="/backend/images/{{ $entry->product->product_img }}" alt="" id="product_img" class="avatar-md h-auto" style="height: 20rem;width: 35rem;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                        @if(auth('admin')->user()->role == 'Admin' OR auth('admin')->user()->role == 'Moderator')
                            <div class="card">
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div>
                                                    <!-- Bootstrap Custom Checkboxes color -->
                                                    <div>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" name="active" value="1" {{ $entry->product->active ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="formCheck1">
                                                                Aktif mi
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" name="goster_manset" value="1" {{ $entry->product->goster_manset ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="formCheck1">
                                                                Manşette Göster
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" name="goster_ust_manset" value="1" {{ $entry->product->goster_ust_manset ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="formCheck2">
                                                                Üst Manşet
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" name="goster_ust_manset2" value="1" {{ $entry->product->goster_ust_manset2 ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="formCheck3">
                                                                Üst Manşet 2
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" name="goster_sag_manset" value="1" {{ $entry->product->goster_sag_manset ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="formCheck4">
                                                                Sağ Kutu
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" name="goster_manset_alti" value="1" {{ $entry->product->goster_manset_alti ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="formCheck4">
                                                                Manşet Altı
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" name="goster_kutu_haber" value="1" {{ $entry->product->goster_kutu_haber ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="formCheck4">
                                                                Kutu Haber
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" name="goster_son_dakika" value="1" {{ $entry->product->goster_son_dakika ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="formCheck4">
                                                                Son Dakika
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>


                                </div>
                                <!-- end card body -->
                            </div>
                        @endif

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Kategori</h5>
                                </div>
                                <div class="card-body">
                                    <div class="vstack gap-3">
                                        <select name="categories[]" class="form-control" id="categories" multiple="multiple">
                                            @foreach($category as $category)
                                                <option value="{{$category->id}}" {{ collect(old('categories', $product_categories))->contains($category->id) ? 'selected' : '' }}>{{$category->category_name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- end card -->
                        <div class="text-end mb-3">
                            <button type="submit" class="btn btn-primary ">
                                {{ @$entry->id > 0 ? "Güncelle" : "Kaydet"}}
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
            .create( document.querySelector( '#task-textarea' ),{
            })
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
