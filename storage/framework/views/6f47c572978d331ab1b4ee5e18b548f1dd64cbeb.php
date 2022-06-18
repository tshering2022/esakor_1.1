
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.profile'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/libs/swiper/swiper.min.css')); ?>">
    <link href="<?php echo e(URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body form-steps">
                    <form action="#">
                        <div id="custom-progress-bar" class="progress-nav mb-2">
                            <div class="progress" style="height:1px;">
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
                        <div class="col-md-6">
                            <h4 class="m-xl-3 m-md-3 m-sm-3 justify-content-center">Inheritance || 1420005 || <span
                                    class="text-primary">Initiated</span>
                            </h4>
                        </div>
                        <div class="col-md-6">
                            <button type="button"
                                class="btn btn-success  text-shadow shadow-sm p-2 mb-1  rounded float-md-end m-xl-2 m-md-2 m-sm-3"
                                data-bs-toggle="modal" data-bs-target="#exampleModalgridview">+ VIEW ACTIVITY
                                LOG</button>
                            <button type="button"
                                class="btn btn-success  text-shadow shadow-sm p-2 mb-1  rounded float-md-end float-sm-end m-xl-2 m-md-2 m-sm-4"
                                data-bs-toggle="modal" data-bs-target="#exampleModalgridview33"><i
                                    class="ri-home-4-line pe-1 text-soso"></i> MORTGAGE DECLARATION
                                FORM</button>
                        </div>
                    </div>
                </div>
                
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
                                                                    <th data-sort="customer_name">#
                                                                    </th>
                                                                    <th data-sort="email">Date</th>
                                                                    <th data-sort="phone">Author
                                                                    </th>
                                                                    <th data-sort="date">Role</th>
                                                                    <th data-sort="status">Satus
                                                                    </th>
                                                                    <th data-sort="date">Remarks
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="list form-check-all">
                                                                <tr>
                                                                    <td class="id" style="display:none;"><a
                                                                            href="javascript:void(0);"
                                                                            class="fw-medium link-primary">#VZ2101</a>
                                                                    </td>
                                                                    <td class="customer_name">Mary</td>
                                                                    <td class="email">mary Cousar</td>
                                                                    <td class="phone">580-464-4694</td>
                                                                    <td class="date">06 Apr, 2021</td>
                                                                    <td class="remark">06 Apr, 2021</td>
                                                                    <td class="remark">Remarks</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
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
                                            <p class="mb-1 font-weight-bold">Transaction No:<strong
                                                    class="p-xl-2 p-md-2 p-sm-2">142005</strong></p>
                                        </div>
                                        <div class="col">
                                            <p class="mb-1">Transaction Type:<strong
                                                    class="p-xl-2 p-md-2 p-sm-2">Inheritance</strong></p>
                                        </div>
                                    </div>
                                    <!-- Block level -->
                                    <div class="row">
                                        <div class="col">
                                            <p class="mb-1">Application Date:<strong
                                                    class="p-xl-2 p-md-2 p-sm-2">25/08/2022</strong></p>
                                        </div>
                                        <div class="col">
                                            <p class="mb-1">Throme/Dzongkhag:<strong
                                                    class="p-xl-2 p-md-2 p-sm-2">Thimphu</strong></p>
                                        </div>
                                    </div>
                                    
                                    <div class="card mt-xl-5 mt-md-4 mt-sm-5">
                                        <div class="card-body">
                                            <div id="customerList">
                                                <div class="row" style="--bs-gutter-x: 1rem">
                                                    <div class="col-md-3">
                                                        <div class="d-flex mb-3">
                                                            <button class="btn btn-success add-btn flex-fill"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalgridtrans1"><i
                                                                    class="ri-add-line align-bottom me-1"></i>Add
                                                                Transferor/Transferee</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="d-flex mb-3">
                                                            <button class="btn btn-success add-btn flex-fill"
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
                                                                <h5 class="modal-title" id="exampleModalgridLabel">
                                                                    +ADD
                                                                    PERSONAL DETAILS</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="">
                                                                    <div class="col-12 p-3 mb-2 btn-success text-white">
                                                                        NOTE:If CID NO. is valid other
                                                                        details(Name,DoB
                                                                        and Gender) will be fetched automatically.
                                                                    </div>
                                                                </div>
                                                                <form action="javascript:void(0);">
                                                                    <div class="row g-3">
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="firstName"
                                                                                    class="form-label">Citizen ID
                                                                                    NO
                                                                                </label>
                                                                                <input type="text" class="form-control"
                                                                                    id="firstName"
                                                                                    placeholder="Citizen ID No Required">
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
                                                                                    placeholder="Date of Birth Required">
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="emailInput"
                                                                                    class="form-label">Name</label>
                                                                                <input type="email" class="form-control"
                                                                                    id="emailInput"
                                                                                    placeholder="Enter Name Required">
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="emailInput"
                                                                                    class="form-label">Gender</label>
                                                                                <input type="email" class="form-control"
                                                                                    id="emailInput"
                                                                                    placeholder="Gender Required">
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
                                                                                        placeholder="Mobile No Required"
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
                                                                                    id="passwordInput"
                                                                                    placeholder="Email Required">
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
                                                                                    placeholder="Transaction Party Required">
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="passwordInput"
                                                                                    class="form-label">Thram</label>
                                                                                <input type="password"
                                                                                    class="form-control"
                                                                                    id="passwordInput"
                                                                                    placeholder="Thram Required">
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
                                                                                    placeholder="Ownership Required">
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
                                                                                    placeholder="Transaction Required">

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
                                                                                        placeholder="Withness CID Required"
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
                                                                                    placeholder="Withness Required">
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
                                                                    Add Transferor/Transferee(Firms/Coporate/Agency)
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="">
                                                                    <div class="col-12 p-3 mb-2 btn-success text-white">
                                                                        NOTE:If CID NO. is valid other
                                                                        details(Name,DoB
                                                                        and Gender) will be fetched automatically.
                                                                    </div>
                                                                </div>
                                                                <form action="javascript:void(0);">
                                                                    <div class="row g-3">
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="firstName"
                                                                                    class="form-label">Name of
                                                                                    Thram
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
                                                                                    class="form-label">Name of
                                                                                    Thram
                                                                                    Owner(Dzo)
                                                                                </label>
                                                                                <input type="text" class="form-control"
                                                                                    id="lastName"
                                                                                    placeholder="Name of Thram Owner(Dzo) Required">
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="lastName" class="form-label">
                                                                                    Mobile No
                                                                                </label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-text"
                                                                                        id="basic-addon1">+975</span>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        placeholder="Mobile No Required"
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
                                                                                    placeholder="Email Required">
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
                                                                                    placeholder="Transaction Party Required">
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="passwordInput"
                                                                                    class="form-label">Thram</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="passwordInput"
                                                                                    placeholder="Thram No Required">
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="passwordInput"
                                                                                    class="form-label">Ownership</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="passwordInput"
                                                                                    placeholder="Thram No Required">
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
                                                                                        placeholder="Withnes CID Required"
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
                                                                                    placeholder="Withnes Name Required">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="passwordInput"
                                                                                    class="form-label">Withness
                                                                                    DOB</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="passwordInput"
                                                                                    placeholder="Withnes DOB Required">
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
                                                                <th>SL.No</th>
                                                                <th>Party</th>
                                                                <th>Name</th>
                                                                <th>
                                                                    CID|DoB|Gender
                                                                </th>
                                                                <th>Gewog|House
                                                                    No.
                                                                </th>
                                                                <th>
                                                                    Mobile|Email|Qualification</th>
                                                                <th>
                                                                    Thram|Ownership
                                                                </th>
                                                                <th>
                                                                    WitnessName|CID|Mobile</th>
                                                                <th>Lagthram
                                                                    Collection point</th>
                                                                <th data-sort="action">Action
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="list form-check-all">
                                                            <tr>
                                                                <td class="id" style="display:none;"><a
                                                                        href="javascript:void(0);"
                                                                        class="fw-medium link-primary">#VZ2101</a>
                                                                </td>
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
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                                    </div>
                                    <!-- end col -->
                                    
                                </div>

                                <div class="d-flex align-items-start gap-3 mt-4">
                                    <button type="button" class="btn btn-link text-decoration-none btn-label previestab"
                                        data-previous="pills-gen-info-tab"><i
                                            class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back
                                        to
                                        General</button>
                                    <button type="button" class="btn btn-success btn-label right ms-auto nexttabnexttab"
                                        data-nexttab="pills-success-tab"><i
                                            class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>NEXT</button>
                                </div>
                            </div>
                            <!-- end tab pane -->

                            
                            <div class="tab-pane fade" id="pills-info-desc" role="tabpanel"
                                aria-labelledby="pills-info-desc-tab">
                                <div>
                                    <div class="row g-4 mt-xl-1 mt-lg-mt-1 mt-ms-2 mb-3">
                                        <div class="col-sm-auto mt-sm-2">
                                            <div>
                                                <button type="button" class="btn btn-success add-btn "
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
                                                    <h5 class="modal-title" id="exampleModalgridLabel">Add
                                                        Transaction
                                                        Details
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="">
                                                        <div class="col-12 p-3 mb-2 btn-success text-white">
                                                            NOTE:if you are transfering the whole plot enter the
                                                            same
                                                            area and please use this remark section to help the
                                                            officials at Thromde/Dzongkhag to understand what you
                                                            are
                                                            trying to do.
                                                        </div>
                                                    </div>
                                                    
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
                                                                                            class="form-label">Nature
                                                                                            of Transaction
                                                                                        </label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="firstName"
                                                                                            placeholder="Nature of Transaction Required">
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
                                                                                            placeholder="Transaction Thram Required">
                                                                                    </div>
                                                                                </div>
                                                                                <!--end col-->
                                                                                <!--end col-->
                                                                            </div>
                                                                            <!--end row-->
                                                                            
                                                                            <div
                                                                                class="table-responsive table-card mt-3 mb-1">
                                                                                <table
                                                                                    class="table align-middle table-nowrap"
                                                                                    id="customerTable">
                                                                                    <thead class="table-light">
                                                                                        <tr>
                                                                                            <th class="sort"
                                                                                                data-sort="customer_name">
                                                                                                #
                                                                                            </th>
                                                                                            <th class="sort"
                                                                                                data-sort="email">
                                                                                                PlotID
                                                                                            </th>
                                                                                            <th class="sort"
                                                                                                data-sort="phone">
                                                                                                Precint
                                                                                            </th>
                                                                                            <th class="sort"
                                                                                                data-sort="date">
                                                                                                Thram
                                                                                                Area
                                                                                            </th>
                                                                                            <th class="sort"
                                                                                                data-sort="status">
                                                                                                Transaction Area
                                                                                            </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody class="list form-check-all">
                                                                                        <tr>
                                                                                            <td class="id"
                                                                                                style="display:none;">
                                                                                                <a href="javascript:void(0);"
                                                                                                    class="fw-medium link-primary">#VZ2101</a>
                                                                                            </td>
                                                                                            <td class="customer_name">
                                                                                                Mary
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
                                                <td class="id" style="display:none;"><a href="javascript:void(0);"
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
                                <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                    data-nexttab="pills-success-tab"><i
                                        class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>NEXT</button>
                            </div>
                        </div>
                        
                        
                        <div class="tab-pane fade" id="pills-success3" role="tabpanel"
                            aria-labelledby="pills-success-tab">
                            
                            <div class="row g-4 mb-3 mt-sm-3">
                                <div class="col-sm-auto">
                                    <div>
                                        <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdropValuation"><i
                                                class="ri-add-line align-bottom me-1"></i>Add Valuation</button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdropValuation" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title d-flex" id="staticBackdropLabel"><i
                                                    data-feather="activity" class="ri-add-line fs-6 pe-1"></i>Add
                                                valuation
                                            </h5>

                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="">
                                                <div class="col-12 p-3 mb-2 bg-in text-white">
                                                    NOTE:if there is no land and flat/building cost, you can enter
                                                    0(Zero).if there is only one plot under the thram and
                                                    transfering
                                                    the whole plot,please select keep same thram number.
                                                </div>
                                            </div>
                                            <form action="#">
                                                <div class="mt-3 d-flex justify-content-between">
                                                    <div class="">
                                                        <label for="address" class="form-label">Total cost of
                                                            the Land(Nu):</label>
                                                        <input type="number" class="form-control" id="address"
                                                            placeholder="Total cost of the Land">
                                                    </div>
                                                    <div class="">
                                                        <label for="address" class="form-label">Cost of
                                                            Building/Flat(Nu):</label>
                                                        <input type="number" class="form-control" id="address"
                                                            placeholder="Cost of Building/Flat">
                                                    </div>
                                                </div>
                                                <div class="mt-5">
                                                    <label for="address" class="form-label">The
                                                        land or building conveyance may be:
                                                    </label>
                                                    <input type="number" class="form-control" id="address"
                                                        placeholder="">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="hstack gap-2 justify-content-end m-lg-4 m-md-4 m-sm-4">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mt-2">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="mt-2">
                                        <div class="d-flex">
                                            <i class=" ri-community-line fs-4 pe-1"></i><span class="d-block py-1">
                                                Land/Flat/Building
                                                Valuation</span>
                                        </div>
                                        <span class="d-block ps-4 py-1">Cost of Land(Ngultrum | Nu):</span>
                                        <span class="d-block ps-4 py-1">Cost of Building/Flat(Ngultrum |
                                            Nu):</span>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="d-flex justify-content-start">
                                        <i class="ri-landscape-fill pe-1 fs-5"></i>
                                        <p class="mt-1">Cost of Building/Flat(Ngultrum|Nu.): <span
                                                class="fw-4">14823443</span> </p>

                                    </div>
                                </div>
                            </div>
                            <hr class="mt-3">
                            
                            
                            <div class="row">
                                <div class="col-12">
                                    <div class="mt-3 mb-5">
                                        <button type="button" class="btn btn-success  add-btn" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdropAttachment"><i
                                                class="ri-add-line align-bottom me-1"></i> Add Attachment</button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdropAttachment" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel"><i
                                                                class="ri-add-line fs-6"></i>Add
                                                            Attachment</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="">
                                                            <div class="col-12 p-3 mb-2 btn-success text-white">
                                                                Note:System will accept file size of only 2MB(Size
                                                                per
                                                                File/Attachment).Comparess your files if size is
                                                                above
                                                                2MB.We recommend you to upload your files in PDF
                                                                format.
                                                                Allowed File Types:jpg,png, jpeg, pdf, xlsx, tif,
                                                                xml,
                                                                raw,see,fld,dwg,csv.
                                                            </div>
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="address" class="form-label">Slect Files:
                                                            </label>
                                                            <input type="file" class="form-control" id="address"
                                                                placeholder="1234 Main St">
                                                        </div>
                                                        <div class="mt-5">
                                                            <label for="">Select File Types:</label>
                                                            <select class="form-select mb-3"
                                                                aria-label="Default select example">

                                                                <option selected></option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end m-lg-4 m-md-4 m-sm-4">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                        class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>COMPLETE</button>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/js/pages/form-wizard.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/prismjs/prismjs.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/list.js/list.js.min.js')); ?>"></script>
    <!-- listjs init -->
    <script src="<?php echo e(URL::asset('assets/js/pages/listjs.init.js')); ?>"></script>
    <!-- listjs init -->
    <script src="<?php echo e(URL::asset('assets/js/pages/listjs.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\esakor_1.1\resources\views/front-end/transaction.blade.php ENDPATH**/ ?>