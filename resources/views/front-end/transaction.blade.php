@extends('layouts.master-layouts')
@section('title')
    @lang('translation.profile')
@endsection
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/swiper/swiper.min.css') }}">
    <link href="{{ URL::asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body form-steps">
                    <form action="#">
                        <div id="custom-progress-bar" class="progress-nav mb-4">
                            <div class="progress" style="height: 1px;">
                                <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <ul class="nav nav-pills progress-bar-tab custom-nav" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link rounded-pill active" data-progressbar="custom-progress-bar"
                                        id="pills-gen-info-tab" data-bs-toggle="pill" data-bs-target="#pills-gen-info"
                                        type="button" role="tab" aria-controls="pills-gen-info"
                                        aria-selected="true">1</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link rounded-pill" data-progressbar="custom-progress-bar"
                                        id="pills-info-desc-tab" data-bs-toggle="pill" data-bs-target="#pills-info-desc"
                                        type="button" role="tab" aria-controls="pills-info-desc"
                                        aria-selected="false">2</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link rounded-pill" data-progressbar="custom-progress-bar"
                                        id="pills-success-tab" data-bs-toggle="pill" data-bs-target="#pills-success3"
                                        type="button" role="tab" aria-controls="pills-success"
                                        aria-selected="false">3</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link rounded-pill" data-progressbar="custom-progress-bar"
                                        id="pills-success-tab" data-bs-toggle="pill" data-bs-target="#pills-success"
                                        type="button" role="tab" aria-controls="pills-success"
                                        aria-selected="false">4</button>
                                </li>
                            </ul>
                        </div>
                        <!-- end tab content -->
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
    </div>
    {{-- transaction --}}
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h4 class="card-title">Inheritance || 1420005 || Initiated</h4>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                                data-bs-target="#exampleModalgridview">+VIEW ACTIVITY LOG</button>
                        </div>
                    </div>
                </div>
                {{-- modal --}}
                <!-- Grids in modals -->
                <div class="modal fade" id="exampleModalgridview" tabindex="-1" aria-labelledby="exampleModalgridLabel"
                    aria-modal="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalgridLabel">VIEW ACTIVITY LOG</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                {{-- start line --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div id="customerList">
                                                    <div class="table-responsive table-card mt-3 mb-1">
                                                        <table class="table align-middle table-nowrap" id="customerTable">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th class="sort" data-sort="customer_name">#
                                                                    </th>
                                                                    <th class="sort" data-sort="email">Date</th>
                                                                    <th class="sort" data-sort="phone">Author</th>
                                                                    <th class="sort" data-sort="date">Role</th>
                                                                    <th class="sort" data-sort="status">Satus</th>
                                                                    <th class="sort" data-sort="date">Remarks</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="list form-check-all">
                                                                <tr>
                                                                    <td class="id" style="display:none;"><a
                                                                            href="javascript:void(0);"
                                                                            class="fw-medium link-primary">#VZ2101</a></td>
                                                                    <td class="customer_name">Mary</td>
                                                                    <td class="email">mary Cousar</td>
                                                                    <td class="phone">580-464-4694</td>
                                                                    <td class="date">06 Apr, 2021</td>
                                                                    <td class="remark">06 Apr, 2021</td>
                                                                    <td class="remark">Remarks</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="noresult" style="display: none">
                                                            <div class="text-center">
                                                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json"
                                                                    trigger="loop"
                                                                    colors="primary:#121331,secondary:#08a88a"
                                                                    style="width:75px;height:75px">
                                                                </lord-icon>
                                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                                <p class="text-muted mb-0">We've searched more than 150+
                                                                    Orders We did not find any
                                                                    orders for you search.</p>
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
                                {{-- end --}}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end of modal ativity log --}}
                <div class="card-body form-steps">
                    <form action="#">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="pills-gen-info" role="tabpanel"
                                aria-labelledby="pills-gen-info-tab">
                                <div>
                                    <!-- Block level -->
                                    <div class="row mt-xl-4 mt-md-4 mt-sm-3">
                                        <div class="col">
                                            <p class="mb-1 font-weight-bold">Transaction No:<strong>142005</strong></p>
                                        </div>
                                        <div class="col">
                                            <p class="mb-1">Transaction Type:<strong>Inheritance</strong></p>
                                        </div>
                                    </div>
                                    <!-- Block level -->
                                    <div class="row">
                                        <div class="col">
                                            <p class="mb-1">Application Date:<strong>25/08/2022</strong></p>
                                        </div>
                                        <div class="col">
                                            <p class="mb-1">Throme/Dzongkhag:<strong>Thimphu</strong></p>
                                        </div>
                                    </div>
                                    {{-- start table --}}
                                    <div class="card mt-xl-3 mt-sm-3">
                                        <div class="card-body">
                                            <div id="customerList">
                                                <div class="row g-4 mb-3 mt-sm-3">
                                                    <div class="col-sm-auto">
                                                        <div>
                                                            <button type="button" class="btn btn-success add-btn"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalgridtrans1"><i
                                                                    class="ri-add-line align-bottom me-1"></i>Add
                                                                Transferor/Transferee </button>
                                                            <button type="button" class="btn btn-success add-btn"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalgridfirms2"><i
                                                                    class="ri-add-line align-bottom me-1"></i>Add
                                                                Transferor/Transferee(Firms/Coporate/Agency)</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- start of add transfer --}}

                                                <!-- Grids in modals -->
                                                <div class="modal fade" id="exampleModalgridtrans1" tabindex="-1"
                                                    aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalgridLabel">+ADD
                                                                    PERSONAL DETAILS</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="javascript:void(0);">
                                                                    <div class="row g-3">
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="firstName"
                                                                                    class="form-label">Citizen ID NO
                                                                                </label>
                                                                                <input type="text" class="form-control"
                                                                                    id="firstName"
                                                                                    placeholder="Citizen ID No">
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="lastName"
                                                                                    class="form-label">Date of
                                                                                    Birth</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="lastName"
                                                                                    placeholder="Date of Birth">
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="emailInput"
                                                                                    class="form-label">Name</label>
                                                                                <input type="email" class="form-control"
                                                                                    id="emailInput"
                                                                                    placeholder="Enter Name">
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="emailInput"
                                                                                    class="form-label">Gender</label>
                                                                                <input type="email" class="form-control"
                                                                                    id="emailInput" placeholder="Gender">
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="passwordInput"
                                                                                    class="form-label">Mobile
                                                                                    No</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-text"
                                                                                        id="basic-addon1">+975</span>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        placeholder="Mobile No"
                                                                                        aria-label="Username"
                                                                                        aria-describedby="basic-addon1">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="passwordInput"
                                                                                    class="form-label">Email</label>
                                                                                <input type="password"
                                                                                    class="form-control"
                                                                                    id="passwordInput" placeholder="Email">
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="passwordInput"
                                                                                    class="form-label">Transaction
                                                                                    Party</label>
                                                                                <input type="password"
                                                                                    class="form-control"
                                                                                    id="passwordInput"
                                                                                    placeholder="Transaction Party">
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="passwordInput"
                                                                                    class="form-label">Thram</label>
                                                                                <input type="password"
                                                                                    class="form-control"
                                                                                    id="passwordInput" placeholder="Thram">
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="passwordInput"
                                                                                    class="form-label">Ownership</label>
                                                                                <input type="password"
                                                                                    class="form-control"
                                                                                    id="passwordInput"
                                                                                    placeholder="Ownership">
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="passwordInput"
                                                                                    class="form-label">Transaction
                                                                                    Party
                                                                                    Qualification</label>
                                                                                <input type="password"
                                                                                    class="form-control"
                                                                                    id="passwordInput"
                                                                                    placeholder="Transaction
                                                                                                                        Party Qualification">
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="passwordInput"
                                                                                    class="form-label">Withness
                                                                                    CID</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-text"
                                                                                        id="basic-addon1">CID#</span>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        placeholder="Withness
                                                                                                                            CID"
                                                                                        aria-label="Username"
                                                                                        aria-describedby="basic-addon1">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="passwordInput"
                                                                                    class="form-label">Withness
                                                                                    Name</label>
                                                                                <input type="password"
                                                                                    class="form-control"
                                                                                    id="passwordInput"
                                                                                    placeholder="Withness
                                                                                                                        Name">
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-lg-12">
                                                                            <div class="hstack gap-2 justify-content-end">
                                                                                <button type="button"
                                                                                    class="btn btn-light"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-primary">Submit</button>
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                    </div>
                                                                    <!--end row-->
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- end of add transfere --}}
                                                {{-- start of firms/corporate --}}
                                                <!-- Grids in modals -->
                                                <div class="modal fade" id="exampleModalgridfirms2" tabindex="-1"
                                                    aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalgridLabel">
                                                                    AddTransferor/Transferee(Firms/Coporate/Agency)</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="javascript:void(0);">
                                                                    <div class="row g-3">
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="firstName"
                                                                                    class="form-label">Name of Thram
                                                                                    Owner(Eng)
                                                                                </label>
                                                                                <input type="text" class="form-control"
                                                                                    id="firstName"
                                                                                    placeholder="Name of Thram Owner(Eng)">
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="lastName"
                                                                                    class="form-label">Name of Thram
                                                                                    Owner(Dzo)
                                                                                </label>
                                                                                <input type="text" class="form-control"
                                                                                    id="lastName"
                                                                                    placeholder="Name of Thram Owner(Dzo)">
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="lastName"
                                                                                    class="form-label"> Mobile No
                                                                                </label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-text"
                                                                                        id="basic-addon1">+975</span>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        placeholder="Mobile No"
                                                                                        aria-label="Username"
                                                                                        aria-describedby="basic-addon1">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="emailInput"
                                                                                    class="form-label">Email</label>
                                                                                <input type="email" class="form-control"
                                                                                    id="emailInput"
                                                                                    placeholder="Enter your email">
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="passwordInput"
                                                                                    class="form-label">Transaction
                                                                                    Party</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="passwordInput"
                                                                                    placeholder="Transaction Party">
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="passwordInput"
                                                                                    class="form-label">Thram</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="passwordInput"
                                                                                    placeholder="Thram No">
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="passwordInput"
                                                                                    class="form-label">Ownership</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="passwordInput"
                                                                                    placeholder="Thram No">
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="passwordInput"
                                                                                    class="form-label">Withess
                                                                                    CID</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-text"
                                                                                        id="basic-addon1">+975</span>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        placeholder="Withnes CID"
                                                                                        aria-label="Username"
                                                                                        aria-describedby="basic-addon1">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="passwordInput"
                                                                                    class="form-label">Withness
                                                                                    Name</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="passwordInput"
                                                                                    placeholder="Withnes Name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="passwordInput"
                                                                                    class="form-label">Withness
                                                                                    DOB</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="passwordInput"
                                                                                    placeholder="Withnes DOB">
                                                                            </div>
                                                                        </div>

                                                                        <!--end col-->
                                                                        <div class="col-lg-12">
                                                                            <div class="hstack gap-2 justify-content-end">
                                                                                <button type="button"
                                                                                    class="btn btn-light"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-primary">Submit</button>
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                    </div>
                                                                    <!--end row-->
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- end of firm --}}
                                                <div class="table-responsive table-card mt-3 mb-1">
                                                    <table class="table align-middle table-nowrap" id="customerTable">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th class="sort" data-sort="sl">SL.No</th>
                                                                <th class="sort" data-sort="party">Party</th>
                                                                <th class="sort" data-sort="name">Name</th>
                                                                <th class="sort" data-sort="phone">CID|DoB|Gender
                                                                </th>
                                                                <th class="sort" data-sort="date">Gewog|House No.
                                                                </th>
                                                                <th class="sort" data-sort="date">
                                                                    Mobile|Email|Qualification</th>
                                                                <th class="sort" data-sort="date">Thram|Ownership
                                                                </th>
                                                                <th class="sort" data-sort="date">
                                                                    WitnessName|CID|Mobile</th>
                                                                <th class="sort" data-sort="date">Lagthram
                                                                    Collection point</th>
                                                                <th class="sort" data-sort="action">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="list form-check-all">
                                                            <tr>
                                                                <td class="id" style="display:none;"><a
                                                                        href="javascript:void(0);"
                                                                        class="fw-medium link-primary">#VZ2101</a></td>
                                                                <td class="customer_name">Mary Cousar</td>
                                                                <td class="email">marycousar@velzon.com</td>
                                                                <td class="phone">580-464-4694</td>
                                                                <td class="date">06 Apr, 2021</td>
                                                                <td class="email">marycousar@velzon.com</td>
                                                                <td class="phone">580-464-4694</td>
                                                                <td class="date">06 Apr, 2021</td>
                                                                <td class="date">06 Apr, 2021</td>
                                                                <td class="date">06 Apr, 2021</td>
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                        <div class="edit">
                                                                            <button
                                                                                class="btn btn-sm btn-success edit-item-btn"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#showModal">Edit</button>
                                                                        </div>
                                                                        <div class="remove">
                                                                            <button
                                                                                class="btn btn-sm btn-danger remove-item-btn"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#deleteRecordModal">Remove</button>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="noresult" style="display: none">
                                                        <div class="text-center">
                                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json"
                                                                trigger="loop" colors="primary:#121331,secondary:#08a88a"
                                                                style="width:75px;height:75px">
                                                            </lord-icon>
                                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                                            <p class="text-muted mb-0">We've searched more than 150+ Orders
                                                                We did not find any
                                                                orders for you search.</p>
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
                                    {{-- end of table --}}
                                </div>

                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-success btn-label right ms-auto nexttabnexttab"
                                        data-nexttab="pills-info-desc-tab"><i
                                            class="ri-arrow-right-line label-icon fs-16 ms-2"></i>Next</button>
                                </div>
                            </div>
                            <!-- end tab pane -->

                            {{-- second step button --}}
                            <div class="tab-pane fade" id="pills-info-desc" role="tabpanel"
                                aria-labelledby="pills-info-desc-tab">
                                <div>
                                    <div class="row g-4 mt-xl-1 mt-lg-mt-1 mt-ms-2 mb-3">
                                        <div class="col-sm-auto mt-sm-2">
                                            <div>
                                                <button type="button" class="btn btn-success add-btn"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModalgridaddtrans"><i
                                                        class="ri-add-line align-bottom me-1"></i>Add Transaction
                                                    Details</button>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- modal --}}
                                    <!-- Grids in modals -->
                                    <div class="modal fade" id="exampleModalgridaddtrans" tabindex="-1"
                                        aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalgridLabel">Add Transaction
                                                        Details
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    {{-- start line --}}
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div id="customerList">
                                                                        {{-- form --}}
                                                                        <form action="javascript:void(0);">
                                                                            <div class="row g-3">
                                                                                <div class="col-xxl-6">
                                                                                    <div>
                                                                                        <label for="firstName"
                                                                                            class="form-label">Nature
                                                                                            of Transaction
                                                                                        </label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="firstName"
                                                                                            placeholder="Nature of Transaction">
                                                                                    </div>
                                                                                </div>
                                                                                <!--end col-->
                                                                                <div class="col-xxl-6">
                                                                                    <div>
                                                                                        <label for="lastName"
                                                                                            class="form-label">Transaction
                                                                                            Thram</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="lastName"
                                                                                            placeholder="Transaction Thram">
                                                                                    </div>
                                                                                </div>
                                                                                <!--end col-->
                                                                                <!--end col-->
                                                                            </div>
                                                                            <!--end row-->
                                                                            {{-- end of form --}}
                                                                            <div
                                                                                class="table-responsive table-card mt-3 mb-1">
                                                                                <table
                                                                                    class="table align-middle table-nowrap"
                                                                                    id="customerTable">
                                                                                    <thead class="table-light">
                                                                                        <tr>
                                                                                            <th class="sort"
                                                                                                data-sort="customer_name">#
                                                                                            </th>
                                                                                            <th class="sort"
                                                                                                data-sort="email">PlotID
                                                                                            </th>
                                                                                            <th class="sort"
                                                                                                data-sort="phone">Precint
                                                                                            </th>
                                                                                            <th class="sort"
                                                                                                data-sort="date">Thram Area
                                                                                            </th>
                                                                                            <th class="sort"
                                                                                                data-sort="status">
                                                                                                Transaction Area</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody class="list form-check-all">
                                                                                        <tr>
                                                                                            <td class="id"
                                                                                                style="display:none;"><a
                                                                                                    href="javascript:void(0);"
                                                                                                    class="fw-medium link-primary">#VZ2101</a>
                                                                                            </td>
                                                                                            <td class="customer_name">Mary
                                                                                            </td>
                                                                                            <td class="email">mary
                                                                                                Cousar</td>
                                                                                            <td class="phone">
                                                                                                580-464-4694</td>
                                                                                            <td class="date">06
                                                                                                Apr,
                                                                                                2021</td>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                                <div class="m-xl-3 m-lg-3 m-sm-3 mt-xl-2">
                                                                                    <label for="VertimeassageInput"
                                                                                        class="form-label">Remark</label>
                                                                                    <textarea class="form-control" id="VertimeassageInput" rows="3" placeholder="Remarks"></textarea>
                                                                                </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end card -->
                                                        </div>
                                                        <!-- end col -->
                                                    </div>
                                                    <!-- end col -->
                                                </div>
                                                <!-- end row -->
                                                <!--end col-->
                                                <div class="col-lg-12">
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <button type="button" class="btn btn-light"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                                {{-- end --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive table-card mt-3 mb-1">
                                    <table class="table align-middle table-nowrap" id="customerTable">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="sort" data-sort="sl">#</th>
                                                <th class="sort" data-sort="party">PlotID</th>
                                                <th class="sort" data-sort="name">Precint</th>
                                                <th class="sort" data-sort="phone">Thram Area
                                                </th>
                                                <th class="sort" data-sort="date">Transaction
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            <tr>
                                                <td class="id" style="display:none;"><a
                                                        href="javascript:void(0);"
                                                        class="fw-medium link-primary">#VZ2101</a></td>
                                                <td class="customer_name">Mary Cousar</td>
                                                <td class="email">marycousar@velzon.com</td>
                                                <td class="phone">580-464-4694</td>
                                                <td class="date">06 Apr, 2021</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <div class="edit">
                                                            <button class="btn btn-sm btn-success edit-item-btn"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#showModal">Edit</button>
                                                        </div>
                                                        <div class="remove">
                                                            <button class="btn btn-sm btn-danger remove-item-btn"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#deleteRecordModal">Remove</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="d-flex align-items-start gap-3 mt-4">
                                <button type="button" class="btn btn-link text-decoration-none btn-label previestab"
                                    data-previous="pills-gen-info-tab"><i
                                        class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to
                                    General</button>
                                <button type="button" class="btn btn-success btn-label right ms-auto nexttab
nexttab"
                                    data-nexttab="pills-success-tab"><i
                                        class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Submit</button>
                            </div>
                        </div>
                        {{-- end second step button --}}

                        {{-- three step button --}}
                        <div class="tab-pane fade" id="pills-success3" role="tabpanel"
                            aria-labelledby="pills-success-tab">
                            <div class="row mt-4 ">
                                <div class="col-lg-12 col-md-12 col-sm-12 tab-pane fade show active" id="valuation-ge-den-lue" aria-labelledby="pills-gen-info-tab" role="tabpanel">
                                    <div class="row mx-5 bg-light border-top rounded-top">
                                        <div class="col-lg-6 col-md-6 col-sm-12 border-bottom-1 topic-custom-css">
                                            <div class="d-flex justify-content-start p-3">
                                                <div class="m-2"><h5 class="fs-4 fw-lighter">Inheritance ||</h5></div>
                                                <div class="m-2"><h5 class="fs-4 fw-lighter">1420005 ||</h5></div>
                                                <div class="m-2"><h5 class="fs-4 fw-lighter"><span>Initiated</span></h5></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 mortgage-custom-css">
                                            <div class="d-flex justify-content-end p-3">
                                                <!-- Button trigger modal -->
                                               <div class="m-1">
                                                <button type="button" class="btn btn-light btn-sm fs-6 border shadow d-flex justify-content-center align-items-center text-soso" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class=" ri-home-4-line pe-1 text-soso"></i>
                                                    MORTGAGE DECLARATION FORM
                                                    </button>
                          
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                ...
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary">Understood</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                               </div>
                                                {{-- end of first modal --}}
                                                <!-- Button trigger modal -->
                                                <div class="m-1">
                                                    <button type="button" class="btn btn-light btn-sm fs-6 border shadow d-flex" data-bs-toggle="modal" data-bs-target="#staticBackdropActivity"><i class="ri-add-line pe-1"></i>
                                                        VIEW ACTIVITY LOG
                                                        </button>
                              
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="staticBackdropActivity" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                    <h5 class="modal-title" id="staticBackdropLabel"><i data-feather="airplay"></i>ACTIVITY LOG</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="modal-body">
                                                                    <div class="">
                                                                        <table class="table table-striped">
                                                                            <thead>
                                                                              <tr>
                                                                                <th scope="col">#</th>
                                                                                <th scope="col">Date</th>
                                                                                <th scope="col">Author</th>
                                                                                <th scope="col">Role</th>
                                                                                <th scope="col">Status</th>
                                                                                <th scope="col">Remark</th>
                                                                              </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                              <tr>
                                                                                <th scope="row">1</th>
                                                                                <td>19/12</td>
                                                                                <td>Mark</td>
                                                                                <td>Finder</td>
                                                                                <td>Excelent</td>
                                                                                <td>Accepted</td>
                                                                              </tr>
                                                                              
                                                                            </tbody>
                                                                          </table>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                    {{-- end of 2nd modal --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-5 bg-light border-bottom rounded-bottom shadow-lg">
                                        <div class="col-12 add-valuation-custom">
                                            <div class="border mx-3 mb-4 p-3">
                                                <h6>valuation and Conveyance</h6>
                                                <div class="mt-3">
                                                    <button type="button" class="btn btn-light btn-sm fs-6 shadow d-flex" data-bs-toggle="modal" data-bs-target="#staticBackdropValuation"><i class="ri-add-line fs-6 pe-1"></i>
                                                        Add Valuation
                                                        </button>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="staticBackdropValuation" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title d-flex" id="staticBackdropLabel"><i data-feather="activity" class="ri-add-line fs-6 pe-1"></i>Add valuation</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    <div class="">
                                                                        <div class="col-12 bg-success m-0">
                                                                            hdjfhjkhdkjfhkdsjfhkjh
                                                                        </div>
                                                                    </div>
                                                                    <form action="#">
                                                                        <div class="mt-3 d-flex justify-content-between">
                                                                            <div class="">
                                                                                <label for="address" class="form-label">Total cost of the Land(Nu):</label>
                                                                                <input type="number" class="form-control" id="address" placeholder="Total cost of the Land">
                                                                            </div>
                                                                            <div class="">
                                                                                <label for="address" class="form-label">Cost of Building/Flat(Nu):</label>
                                                                                <input type="number" class="form-control" id="address" placeholder="Cost of Building/Flat">
                                                                            </div>
                                                                        </div>
                                                                        <div class="mt-5">
                                                                            <label for="address" class="form-label">The land or building conveyance may be:
                                                                            </label>
                                                                            <input type="number" class="form-control" id="address" placeholder="">
                                                                        </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn border text-dark btn-sm" data-bs-dismiss="modal">CLOSE</button>
                                                                            <button type="button" class="btn btn-sm text-light button-bg-custom">SUBMIT</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="mt-2">
                                                            <div class="d-flex">
                                                                <i class=" ri-community-line fs-4 pe-1"></i><span class="d-block py-1"> Land/Flat/Building Valuation</span>
                                                            </div>
                                                            <span class="d-block ps-4 py-1">Cost of Land(Ngultrum | Nu):</span>
                                                            <span class="d-block ps-4 py-1">Cost of Building/Flat(Ngultrum | Nu):</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-lg-6 col-md-6 col-sm-12">
                                                        <div class="d-flex justify-content-start">
                                                            <i class="ri-landscape-fill pe-1 fs-5"></i><p class="mt-1">Cost of Building/Flat(Ngultrum|Nu.): <span class="fw-4">14823443</span> </p>
                                                           
                                                        </div>
                                                    </div>
                                                    <hr class="mt-3">
                                                </div>
                                                {{-- end of 2nd division --}}
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mt-3 mb-5">
                                                                <button type="button" class="btn btn-light btn-sm fs-6 shadow" data-bs-toggle="modal" data-bs-target="#staticBackdropAttachment">
                                                                Add Attachment
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="staticBackdropAttachment" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                            <h5 class="modal-title" id="staticBackdropLabel"><i class="ri-add-line fs-6"></i>Add Attachment</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="">
                                                                                    <div class="col-12 bg-success m-0">
                                                                                        hdjfhjkhdkjfhkdsjfhkjh
                                                                                    </div>
                                                                                </div>
                                                                                <div class="mt-3">
                                                                                    <label for="address" class="form-label">Slect Files:
                                                                                    </label>
                                                                                    <input type="file" class="form-control" id="address" placeholder="1234 Main St">
                                                                                </div>
                                                                                <div class="mt-5">
                                                                                    <label for="">Select File Types:</label>
                                                                                    <select class="form-select mb-3" aria-label="Default select example">
                                                                                        
                                                                                        <option selected></option>
                                                                                        <option value="1">1</option>
                                                                                        <option value="2">2</option>
                                                                                        <option value="3">3</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer mt-3">
                                                                                <button type="button" class="btn btn-sm border shadow-lg text-dark" data-bs-dismiss="modal">CLOSE</button>
                                                                                <button type="button" class="btn btn-sm text-light button-bg-custom">UPLOAD</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- end of row --}}
                                            </div>
                                            <div class="row mb-4 mt-2 mx-1">
                                                <div class="col-12">
                                                    <div class="d-flex justify-content-end">
                                                        <div class="pe-1">
                                                            <button type="button" class="btn border btn-sm text-dark" data-bs-dismiss="modal">Back</button>
                                                        </div>
                                                        <div class="ps-1">
                                                            <button type="button" class="btn btn-sm button-bg-custom text-light" data-bs-dismiss="modal">Complete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end three step button -->
                        {{-- Fourth step button comlpeted --}}
                        <div class="tab-pane fade" id="pills-success" role="tabpanel" aria-labelledby="pills-success-tab">
                            <div>
                                <div class="text-center">

                                    <div class="mb-4">
                                        <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop"
                                            colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px">
                                        </lord-icon>
                                    </div>
                                    <h5>Well Done !</h5>
                                    <p class="text-muted">You have Successfully Completed the transaction
                                        application</p>
                                </div>
                            </div>
                        </div>
                        <!-- end tab pane -->
                        {{-- end of fourth button --}}
                </div>
                <!-- end tab content -->
                </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
    </div><!-- end row -->
    <!-- end row -->
@endsection
@section('script')
    <script src="{{ URL::asset('assets/js/pages/form-wizard.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
