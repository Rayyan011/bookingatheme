@extends('layouts.base')

@section('header')
@include('layouts.partials/navbar')
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
        Page Banner START -->
    <section class="pt-4 pt-md-5 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto text-center">
                    <h1 class="fs-2 mb-2">Add New Listing</h1>
                    <p class="mb-0">Praise effects wish change way and any wanted. Lively use looked latter regard
                        had.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        Page Banner END -->

    <!-- =======================
        Main content START -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <form class="vstack gap-4">

                        <!-- Owner Detail START -->
                        <div class="card shadow">
                            <!-- Card header -->
                            <div class="card-header border-bottom">
                                <h5 class="mb-0">Owner Detail</h5>
                            </div>

                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row g-3">
                                    <!-- Owner name -->
                                    <div class="col-12">
                                        <label class="form-label">Owner name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="First name">
                                            <input type="text" class="form-control" placeholder="Last name">
                                        </div>
                                    </div>

                                    <!-- Contact number -->
                                    <div class="col-md-6">
                                        <label class="form-label">Contact number</label>
                                        <input class="form-control" type="text"
                                            placeholder="Enter contact number">
                                    </div>

                                    <!-- Email -->
                                    <div class="col-md-6">
                                        <label class="form-label">Email address</label>
                                        <input class="form-control" type="email" placeholder="Enter email address">
                                    </div>

                                    <!-- Address -->
                                    <div class="col-12">
                                        <label class="form-label">Address</label>
                                        <textarea class="form-control" rows="2" placeholder="Enter keywords"></textarea>
                                    </div>

                                    <!-- State -->
                                    <div class="col-md-6">
                                        <label class="form-label">State</label>
                                        <select class="form-select js-choice" data-search-enabled="true">
                                            <option value="">Select state</option>
                                            <option>India</option>
                                            <option>Usa</option>
                                            <option>Japan</option>
                                            <option>United Kingdom</option>
                                        </select>
                                    </div>

                                    <!-- City -->
                                    <div class="col-md-6">
                                        <label class="form-label">City</label>
                                        <input class="form-control" type="text" placeholder="Enter city">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Owner Detail END -->

                        <!-- Cab Detail START -->
                        <div class="card shadow">
                            <!-- Card header -->
                            <div class="card-header border-bottom">
                                <h5 class="mb-0">Cab Detail</h5>
                            </div>

                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row g-3">
                                    <!-- Car name -->
                                    <div class="col-md-6">
                                        <label class="form-label">Car name</label>
                                        <input class="form-control" type="text" placeholder="Enter car name">
                                    </div>

                                    <!-- car type -->
                                    <div class="col-md-6">
                                        <label class="form-label">Car type *</label>
                                        <div class="d-sm-flex">
                                            <!-- Radio -->
                                            <div class="form-check radio-bg-light me-4">
                                                <input class="form-check-input" type="radio"
                                                    name="flexRadioDefault" id="flexRadioDefault1" checked="">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Ac
                                                </label>
                                            </div>
                                            <!-- Radio -->
                                            <div class="form-check radio-bg-light me-4">
                                                <input class="form-check-input" type="radio"
                                                    name="flexRadioDefault" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Non Ac
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- State -->
                                    <div class="col-md-6">
                                        <label class="form-label">Car model</label>
                                        <select class="form-select js-choice" data-search-enabled="true">
                                            <option value="">Select item</option>
                                            <option>Sedan</option>
                                            <option>Micro</option>
                                            <option>CUV</option>
                                            <option>SUV</option>
                                            <option>Pick up</option>
                                            <option>Coupe</option>
                                        </select>
                                    </div>

                                    <!-- Model Year -->
                                    <div class="col-md-6">
                                        <label class="form-label">Model Year</label>
                                        <input class="form-control" type="text"
                                            placeholder="Enter car model year">
                                    </div>

                                    <!-- Image Gallery -->
                                    <div class="col-12">
                                        <label class="form-label">Upload image *</label>
                                        <div class="dropzone dropzone-custom"
                                            data-dropzone='{"maxFiles": 5, "addRemoveLinks": false}'>
                                            <div class="dz-message needsclick">
                                                <i class="bi bi-upload display-3"></i>
                                                <p>Drop files here or click to upload.</p>
                                            </div>
                                            <div class="dz-preview row g-4">
                                                <div class="col-xl-2 col-md-4 col-sm-6">
                                                    <div
                                                        class="card p-2 mb-0 shadow-none border position-relative h-100">
                                                        <!-- Image -->
                                                        <img data-dz-thumbnail src="#" class="rounded bg-light"
                                                            alt="">
                                                        <!-- info -->
                                                        <div class="mt-2">
                                                            <a href="javascript:void(0);"
                                                                class="text-body-secondary fw-bold" data-dz-name></a>
                                                            <p class="mb-0 small" data-dz-size></p>
                                                        </div>
                                                        <!-- Close btn -->
                                                        <div
                                                            class="position-absolute top-0 start-100 translate-middle">
                                                            <a href="#!"
                                                                class="btn btn-danger rounded-circle icon-sm p-0"
                                                                data-dz-remove>
                                                                <i class="fas fa-times"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="small mb-0 mt-2"><b>Note:</b> Only JPG, JPEG, and PNG. Our suggested
                                            dimensions are 600px * 450px. The larger image will be cropped to 4:3 to fit
                                            our thumbnails/previews.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Cab Detail END -->

                        <!-- Driver Detail START -->
                        <div class="card shadow">
                            <!-- Card header -->
                            <div class="card-header border-bottom">
                                <h5 class="mb-0">Driver Detail</h5>
                            </div>

                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row g-3">
                                    <!-- Select item -->
                                    <div class="col-md-3">
                                        <label class="form-label">Title</label>
                                        <select class="form-select js-choice">
                                            <option>Mr</option>
                                            <option>Mrs</option>
                                        </select>
                                    </div>

                                    <!-- Owner name -->
                                    <div class="col-md-9">
                                        <label class="form-label">Driver Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="First name">
                                            <input type="text" class="form-control" placeholder="Last name">
                                        </div>
                                    </div>

                                    <!-- Contact number -->
                                    <div class="col-md-6">
                                        <label class="form-label">Contact Number</label>
                                        <input class="form-control" type="text"
                                            placeholder="Enter contact number">
                                    </div>

                                    <!-- License number -->
                                    <div class="col-md-6">
                                        <label class="form-label">License Number</label>
                                        <input class="form-control" type="email"
                                            placeholder="Enter license number">
                                    </div>

                                    <!-- State -->
                                    <div class="col-md-6">
                                        <label class="form-label">State</label>
                                        <select class="form-select js-choice" data-search-enabled="true">
                                            <option value="">Select state</option>
                                            <option>India</option>
                                            <option>Usa</option>
                                            <option>Japan</option>
                                            <option>United Kingdom</option>
                                        </select>
                                    </div>

                                    <!-- City -->
                                    <div class="col-md-6">
                                        <label class="form-label">City</label>
                                        <input class="form-control" type="text" placeholder="Enter city">
                                    </div>

                                    <!-- Address -->
                                    <div class="col-12">
                                        <label class="form-label">Address</label>
                                        <textarea class="form-control" rows="2" placeholder="Enter keywords"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Driver Detail END -->

                        <!-- Button -->
                        <div class="text-end">
                            <a href="{{ route('second', ['listing', 'listing-added']) }}"
                                class="btn btn-primary mb-0">Add listing</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        Main content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer')

<!-- Back to top -->
<div class="back-top"></div>
@endsection