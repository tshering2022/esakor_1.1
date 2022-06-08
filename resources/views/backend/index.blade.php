@extends('layouts.master-layouts')
@section('title')
    @lang('translation.profile')
@endsection
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/swiper/swiper.min.css') }}">
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-5 col-12">
            <img src="{{ URL::asset('assets/img/banner/wellcom.webp') }}" class="flex-shrink-0 me-5 rounded"height="190"width="420"alt="..." />
            </div>
            <div class="col-lg-7 col-12">
            <p class="p-3">Welcome <b class="text-secondary"> Land Owner</b> to <b class="text-"> Land and Flat Transfer System </b>(eCitizen Portal).
                You have visited this system for 786 times. Hope everything is going smooth. If you have any suggestions or inquiry, please submit feedbacks for help and support.
               <br><br> Please check the <b class="text-warning"> "Guide to eServices"</b> if you want to process for a Land or Flat tranasction from the menu above.</p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-3">
        <a data-bs-toggle="modal" data-bs-target="#signupModals">
        <div class="card card-animate border card-border-primary">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="avatar-sm flex-shrink-0">
                        <span
                            class="avatar-title bg-gradient text-white rounded-circle fs-2">
                            <i class="bx bx-send"></i>
                        </span>
                    </div>
                    <div class="flex-grow-1 overflow-hidden ms-2 p-1">
                        <p class=" fs-5 text-dark">
                           Apply New Transaction</p>

                    </div>
                </div>
            </div><!-- end card body -->
        </div>
    </a>
    </div><!-- end col -->
    <div class="col-xl-3">
        <div class="card card-animate border card-border-warning">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="avatar-sm flex-shrink-0">
                        <span
                            class="avatar-title bg-warning text-white rounded-circle fs-2">
                            <i class="las la-eye"></i>
                        </span>
                    </div>
                    <div class="flex-grow-1 overflow-hidden ms-2 p-1">
                        <p class=" fs-5 text-dark">
                           View Your Transaction</p>
                    </div>
                </div>
            </div><!-- end card body -->
        </div>
    </div><!-- end col -->
    <div class="col-xl-3">
        <div class="card card-animate border card-border-info">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="avatar-sm flex-shrink-0">
                        <span
                            class="avatar-title bg-info text-white rounded-circle fs-2">
                            <i class="las la-crosshairs"></i>
                        </span>
                    </div>
                    <div class="flex-grow-1 overflow-hidden ms-2 p-1">
                        <p class=" fs-5 text-dark">
                            Track Transaction Status</p>
                    </div>
                </div>
            </div><!-- end card body -->
        </div>
    </div><!-- end col -->
    <div class="col-xl-3">
        <div class="card card-animate border card-border-success">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="avatar-sm flex-shrink-0">
                        <span
                            class="avatar-title bg-success text-white rounded-circle fs-2">
                            <i class="las la-book"></i>
                        </span>
                    </div>
                    <div class="flex-grow-1 overflow-hidden ms-2 p-1">
                        <p class=" fs-5 text-dark">
                            My Urban Land Details</p>
                    </div>
                </div>
            </div><!-- end card body -->
        </div>
    </div><!-- end col -->

</div><!-- end row -->

<div id="signupModals" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 overflow-hidden">
            <div class="modal-header p-3">
                <h4 class="card-title mb-0"><i class="las la-pencil-ruler"></i> Register Transation</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="alert alert-success  rounded-0 mb-0">
                <p class="mb-0">Note : If you are not sure what 
                    transaction type you have to select, please 
                    contact Land Office where your transaction 
                    application is being applied. All contact
                    Details are here. Thromde and Thromde Village 
                    will be on your original Lagthram.</p>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-4">
                        <label for="Transation Type" class="form-label">Transation Type</label>
                        <select class="form-control" data-choices name="choices-single-default"
                            id="choices-single-default">
                            <option value="">Transation Type</option>
                            <option value="Choice 1">Choice 1</option>
                            <option value="Choice 2">Choice 2</option>
                            <option value="Choice 3">Choice 3</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="Thromde/Dzongkhag" class="form-label">Thromde/Dzongkhag</label>
                        <select class="form-control" data-choices name="choices-single-default"
                            id="choices-single-default">
                            <option value="">Thromde/Dzongkhag</option>
                            <option value="Choice 1">Choice 1</option>
                            <option value="Choice 2">Choice 2</option>
                            <option value="Choice 3">Choice 3</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="Thromde Village" class="form-label">Thromde Village</label>
                        <select class="form-control" data-choices name="choices-single-default"
                            id="choices-single-default">
                            <option value="">Thromde Village</option>
                            <option value="Choice 1">Choice 1</option>
                            <option value="Choice 2">Choice 2</option>
                            <option value="Choice 3">Choice 3</option>
                        </select>
                    </div>
                    
                    <div class="text-end">
                        <button type="submit" class="btn btn-light">Close</button>
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/swiper/swiper.min.js') }}"></script>

    <script src="{{ URL::asset('assets/js/pages/profile.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/prismjs/prismjs.min.js') }}"></script>
@endsection
