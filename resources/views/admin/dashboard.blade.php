@extends('layouts.admin')

@section('content')
<div class="content-area">
    @include('includes.form-success')
    <div class="row row-cards-one">

        <div class="col-md-6 col-lg-6 col-xl-6">
            <div class="card">
                <h5 class="card-header">{{ __('Top Referrals') }}</h5>
                <div class="card-body">
                    <div class="admin-fix-height-card">
                         <div id="chartContainer-topReference"></div>
                    </div>
                       
                </div>
            </div>

        </div>

        <div class="col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                        <h5 class="card-header">{{ __('Most Used OS') }}</h5>
                        <div class="card-body">
        <div class="admin-fix-height-card">
                        <div id="chartContainer-os"></div>
</div>
                        </div>
                    </div>
        </div>
        
    </div>



</div>

@endsection

@section('scripts')

@endsection