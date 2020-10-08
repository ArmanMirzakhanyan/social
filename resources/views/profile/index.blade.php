@extends('layouts.profile')
@section('profile')

    <div class="col-lg-6">
        <div class="central-meta">
            <div class="about">
                <div class="personal">
                    <h5 class="f-title"><i class="ti-info-alt"></i> Personal Info</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="d-flex flex-row mt-2">
                    <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left">
                        <li class="nav-item">
                            <a href="#basic" class="nav-link active" data-toggle="tab">Basic info</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="basic">
                            <ul class="basics">
                                <li><i class="ti-user"></i>{{ Auth::user()->name }}</li>
                                <li><i class="ti-email"></i><a href="https://wpkixx.com/cdn-cgi/l/email-protection"
                                                               class="__cf_email__"
                                                               data-cfemail="3c4553494e515d55507c59515d5550125f5351">{{ Auth::user()->email}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- centerl meta -->

@endsection

