@extends('layouts.layout')

@yield('title', 'Dashboard')

@section('content')
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">
                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Dashboard</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Apps</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cards</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js-resource')
    {{-- <script src="{{ asset('src/file_upload.js') }}"></script>
    <script>
        FileUploadController.init('{{ Session::get('ematerai-auth')['token'] }}')
    </script> --}}
@endpush
