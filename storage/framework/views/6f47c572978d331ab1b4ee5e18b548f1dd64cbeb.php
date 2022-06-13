
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.profile'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/libs/swiper/swiper.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
                                
                            </div>
                        </div>
                    </div>
                </div>
                
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
                                    
                                    <div class="card mt-xl-3 mt-sm-3">
                                        <div class="card-body">
                                            <div id="customerList">
                                                <div class="row g-4 mb-3">
                                                    <div class="col-sm-auto mt-sm-2">
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
                                                                                                                        CID" aria-label="Username"
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
                                                                                    id="passwordInput" placeholder="Withness
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
                                    
                                </div>

                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-success btn-label right ms-auto nexttabnexttab"
                                        data-nexttab="pills-info-desc-tab"><i
                                            class="ri-arrow-right-line label-icon fs-16 ms-2"></i>Next</button>
                                </div>
                            </div>
                            <!-- end tab pane -->

                            
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
                                                    
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div id="customerList">
                                                                        
                                                                        <form action="javascript:void(0);">
                                                                            <div class="row g-3">
                                                                                <div class="col-xxl-6">
                                                                                    <div>
                                                                                        <label for="firstName"
                                                                                            class="form-label">Nature of Transaction
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
                                                                                            class="form-label">Transaction Thram</label>
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
                                                                        </form>
                                                                        
                                                                        <div class="table-responsive table-card mt-3 mb-1">
                                                                            <table class="table align-middle table-nowrap"
                                                                                id="customerTable">
                                                                                <thead class="table-light">
                                                                                    <tr>
                                                                                        <th class="sort"
                                                                                            data-sort="customer_name">#
                                                                                        </th>
                                                                                        <th class="sort"
                                                                                            data-sort="email">PlotID</th>
                                                                                        <th class="sort"
                                                                                            data-sort="phone">Precint</th>
                                                                                        <th class="sort"
                                                                                            data-sort="date">Thram Area</th>
                                                                                        <th class="sort"
                                                                                            data-sort="status">Transaction Area</th>
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
                                                                                        <td class="date">06 Apr,
                                                                                            2021</td>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            <div class="noresult"
                                                                                style="display: none">
                                                                                <div class="text-center">
                                                                                    <lord-icon
                                                                                        src="https://cdn.lordicon.com/msoeawqm.json"
                                                                                        trigger="loop"
                                                                                        colors="primary:#121331,secondary:#08a88a"
                                                                                        style="width:75px;height:75px">
                                                                                    </lord-icon>
                                                                                    <h5 class="mt-2">Sorry! No
                                                                                        Result Found</h5>
                                                                                    <p class="text-muted mb-0">We've
                                                                                        searched more than 150+
                                                                                        Orders We did not find any
                                                                                        orders for you search.</p>
                                                                                </div>
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
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                    
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
                            

                            
                            <div class="tab-pane fade" id="pills-success3" role="tabpanel"
                                aria-labelledby="pills-success-tab">
                                <div>
                                    <div class="row g-4 mt-xl-2 mt-lg-2 mb-3">
                                        <div class="col-sm-auto mt-sm-2">
                                            <div>
                                                <button type="button" class="btn btn-success add-btn"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModalgridtrans1"><i
                                                        class="ri-add-line align-bottom me-1"></i>Add Valuation</button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row mt-xl-4 mt-md-4 mt-sm-3">
                                        <div class="col">
                                            <p class="mb-1 font-weight-bold">Land/Flat/Building Valuation</p>
                                        </div>
                                        <div class="col">
                                            <p class="mb-1">Cost of Building/Flat(Ngultrum|Nu):14823443</p>
                                        </div>
                                    </div>
                                    <div class="row mt-xl-4 mt-md-4 mt-sm-3">
                                        <div class="col">
                                            <p class="mb-1 font-weight-bold">Cost of Land(Ngultrum|Nu):</p>
                                            <p class="mb-1 font-weight-bold">Cost of Building/Flat(Ngultrum|Nu):</p>
                                        </div>
                                    </div>
                                    <hr class="line-line">
                                    <div class="row g-4 mt-xl-2 mt-lg-2 mb-3">
                                        <div class="col-sm-auto mt-sm-2">
                                            <div>
                                                <button type="button" class="btn btn-success add-btn"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModalgridtrans1"><i
                                                        class="ri-add-line align-bottom me-1"></i>Add Attachment</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end three step button -->
                            
                            <div class="tab-pane fade" id="pills-success" role="tabpanel"
                                aria-labelledby="pills-success-tab">
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/js/pages/form-wizard.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\esakor_1.1\resources\views/front-end/transaction.blade.php ENDPATH**/ ?>