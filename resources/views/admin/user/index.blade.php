@extends('admin.layouts')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Kullanııclar</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <div id="customerList">
                                <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                        <div>
                                            <a href="{{ route('admin.user.new') }}" class="btn btn-success add-btn"><i
                                                    class="ri-add-line align-bottom me-1"></i>Ekle</a>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="d-flex justify-content-sm-end">
                                            <div class="search-box ms-2">
                                                <input type="text" class="form-control search" placeholder="Search...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive table-card mt-3 mb-1">
                                    <table class="table align-middle table-nowrap" id="customerTable">
                                        <thead class="table-light">
                                        <tr>
                                            <th scope="col" style="width: 50px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="checkAll"
                                                           value="option">
                                                </div>
                                            </th>
                                            <th  data-sort="customer_name">#</th>
                                            <th class="sort" data-sort="email">Ad Soyad</th>
                                            <th class="sort" data-sort="phone">Email</th>
                                            <th class="sort" data-sort="phone">Telefon</th>
                                            <th class="sort" data-sort="action">Durum</th>
                                            <th class="sort" data-sort="action">Son Görülme</th>
                                            <th class="sort" data-sort="date">Aktif</th>
                                            <th class="sort" data-sort="action">Rolü</th>
                                            <th class="sort" data-sort="action">Kayıt Tarihi</th>
                                            <th class="sort" data-sort="action">İşlem</th>
                                        </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                        @foreach($list as $entry)
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="chk_child"
                                                               value="option1">
                                                    </div>
                                                </th>
                                                <td class="id" style="display:none;"><a href="javascript:void(0);"
                                                                                        class="fw-medium link-primary">#VZ2101</a>
                                                </td>
                                                <td class="customer_name">{{ $entry->id }}</td>
                                                <td class="customer_name">{{ $entry->namesurname }}</td>
                                                <td class="email">{{ $entry->email }}</td>
                                                <td class="phone">{{ $entry->phone }}</td>
                                                <td>
                                                    @if(Cache::has('user-is-online-' . ($entry->id)))
                                                        <span class="text-success">Online</span>
                                                    @else
                                                        <span class="text-secondary">Offline</span>
                                                    @endif
                                                </td>
                                                <td>{{ \Carbon\Carbon::parse($entry->last_seen)->diffForHumans() }}</td>
                                                <td class="status">
                                                    @if($entry->active)
                                                        <span class="badge badge-soft-success text-uppercase">Aktif</span>
                                                    @else
                                                        <span class="badge badge-soft-danger text-uppercase">Pasif</span>
                                                    @endif
                                                </td>
                                                <td class="status">
                                                    @if($entry->role == 'Admin')
                                                        <span class="badge badge-soft-success text-uppercase">Yönetici</span>
                                                    @elseif($entry->role == 'Moderator')
                                                        <span class="badge badge-soft-primary text-uppercase">Moderator</span>
                                                    @elseif($entry->role == 'Editor')
                                                        <span class="badge badge-soft-warning text-uppercase">Editör</span>
                                                    @else
                                                        <span class="badge badge-soft-danger text-uppercase">Standart Kullanıcı</span>
                                                    @endif
                                                </td>
                                                <td class="date">{{ $entry->created_at }}</td>

                                                @if(auth('admin')->user()->role == 'Admin')

                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div class="edit">
                                                                <a href="{{ route('admin.user.update', $entry->id) }}" class="btn btn-sm btn-success edit-item-btns" data-toggle="tooltip" data-placement="top" title="Düzenle">
                                                                    <span class="fa fa-pencil">Düzenle</span>
                                                                </a>
                                                            </div>
                                                            <div class="remove">
                                                                <a href="{{ route('admin.user.delete', $entry->id) }}"  class="btn btn-sm btn-danger remove-item-btn" data-toggle="tooltip" data-placement="top" title="Sil" onclick="return confirm('Emin misin?')">
                                                                    <span class="fa fa-trash">Sil</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                @endif
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="noresult" style="display: none">
                                        <div class="text-center">
                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                       colors="primary:#121331,secondary:#08a88a"
                                                       style="width:75px;height:75px"></lord-icon>
                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                            <p class="text-muted mb-0">We've searched more than 150+ Orders We did not
                                                find any orders for you search.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <div class="pagination-wrap hstack gap-2">
                                        <a class="page-item pagination-prev disabled" href="#">
                                            Previous
                                        </a>
                                        <ul class="pagination listjs-pagination mb-0"></ul>
                                        <a class="page-item pagination-next" href="#">
                                            Next
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->


            <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-light p-3">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    id="close-modal"></button>
                        </div>
                        <form class="tablelist-form" autocomplete="off">
                            <div class="modal-body">
                                <div class="mb-3" id="modal-id" style="display: none;">
                                    <label for="id-field" class="form-label">ID</label>
                                    <input type="text" id="id-field" class="form-control" placeholder="ID" readonly="">
                                </div>

                                <div class="mb-3">
                                    <label for="customername-field" class="form-label">Customer Name</label>
                                    <input type="text" id="customername-field" class="form-control"
                                           placeholder="Enter Name" required="">
                                    <div class="invalid-feedback">Please enter a customer name.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="email-field" class="form-label">Email</label>
                                    <input type="email" id="email-field" class="form-control" placeholder="Enter Email"
                                           required="">
                                    <div class="invalid-feedback">Please enter an email.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="phone-field" class="form-label">Phone</label>
                                    <input type="text" id="phone-field" class="form-control"
                                           placeholder="Enter Phone no." required="">
                                    <div class="invalid-feedback">Please enter a phone.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="date-field" class="form-label">Joining Date</label>
                                    <input type="text" id="date-field" class="form-control" placeholder="Select Date"
                                           required="">
                                    <div class="invalid-feedback">Please select a date.</div>
                                </div>

                                <div>
                                    <label for="status-field" class="form-label">Status</label>
                                    <select class="form-control" data-trigger="" name="status-field" id="status-field"
                                            required="">
                                        <option value="">Status</option>
                                        <option value="Active">Active</option>
                                        <option value="Block">Block</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success" id="add-btn">Add Customer</button>
                                    <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    id="btn-close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-2 text-center">
                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                           colors="primary:#f7b84b,secondary:#f06548"
                                           style="width:100px;height:100px"></lord-icon>
                                <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                    <h4>Are you Sure ?</h4>
                                    <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Record ?</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn w-sm btn-danger " id="delete-record">Yes, Delete It!
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end modal -->

        </div>
        <!-- container-fluid -->
    </div>
@endsection
