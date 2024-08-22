@extends('admin.layouts.master')
@section('panel')
    <div id="layout-wrapper">
        @include('admin.partials.header')
        <div class="vertical-menu">
            <div class="h-100" data-simplebar>
                @include('admin.partials.sidebar')
            </div>
        </div>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @include('admin.partials.page_title')
                    @yield('content')
                </div>
            </div>
            @include('admin.partials.footer')
        </div>
    </div>
    <div class="rightbar-overlay"></div>
@endsection
