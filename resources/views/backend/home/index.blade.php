@extends('layouts.backend')

@section('main-container')
    <main id="main-container">

        <!-- Page Content -->
        <div class="content">            
            <h2 class="content-heading">Dashboard</h2> 
                
            <div class="row items-push">
                <!-- Row #2 -->
                <div class="col-xl-4">
                    <a class="block block-rounded block-transparent bg-image d-flex align-items-stretch h-100 mb-0"
                        href="javascript:void(0)" style="background-image: url('assets/media/photos/photo24@2x.jpg');">
                        <div class="block-content block-sticky-options pt-7 bg-black-50">
                            <div class="block-options block-options-left text-white">
                                <div class="block-options-item">
                                    <i class="si si-book-open text-white-75"></i>
                                </div>
                            </div>
                            <div class="block-options text-white">
                                <div class="block-options-item">
                                    <i class="si si-bubbles"></i> 15
                                </div>
                                <div class="block-options-item">
                                    <i class="si si-eye"></i> 3800
                                </div>
                            </div>
                            <h2 class="h3 fw-bold text-white mb-1">Travel the world</h2>
                            <h3 class="fs-base fw-medium text-white-75">Explore and achieve great things</h3>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <a class="block block-rounded block-transparent bg-image d-flex align-items-stretch h-100 mb-0"
                        href="javascript:void(0)" style="background-image: url('assets/media/photos/photo32@2x.jpg');">
                        <div class="block-content block-sticky-options pt-7 bg-primary-dark-op">
                            <div class="block-options block-options-left text-white">
                                <div class="block-options-item">
                                    <i class="si si-book-open text-white-75"></i>
                                </div>
                            </div>
                            <div class="block-options text-white">
                                <div class="block-options-item">
                                    <i class="si si-bubbles"></i> 4
                                </div>
                                <div class="block-options-item">
                                    <i class="si si-eye"></i> 1680
                                </div>
                            </div>
                            <h2 class="h3 fw-bold text-white mb-1">Inspiring Solutions</h2>
                            <h3 class="fs-base fw-medium text-white-75">10 things you should do today</h3>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <a class="block block-rounded block-transparent bg-image d-flex align-items-stretch h-100 mb-0"
                        href="javascript:void(0)" style="background-image: url('assets/media/photos/photo10@2x.jpg');">
                        <div class="block-content block-sticky-options pt-7 bg-primary-op">
                            <div class="block-options block-options-left text-white">
                                <div class="block-options-item">
                                    <i class="si si-book-open text-white-75"></i>
                                </div>
                            </div>
                            <div class="block-options text-white">
                                <div class="block-options-item">
                                    <i class="si si-bubbles"></i> 16
                                </div>
                                <div class="block-options-item">
                                    <i class="si si-eye"></i> 4450
                                </div>
                            </div>
                            <h2 class="h3 fw-bold text-white mb-1">Alternative Road</h2>
                            <h3 class="fs-base fw-medium text-white-75">Don't let anything disorient you</h3>
                        </div>
                    </a>
                </div>
                <!-- END Row #2 -->
            </div>
        </div>
        <!-- END Page Content -->

    </main>
@endsection
