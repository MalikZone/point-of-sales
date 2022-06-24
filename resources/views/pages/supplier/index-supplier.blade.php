@extends('layouts.layout')

@yield('title', 'Supplier')

@section('content')
    <div class="main-content app-content mt-0">
        <div class="side-app">
            
            <!-- CONTAINER -->
            <div class="main-container container-fluid">
                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Supplier</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Apps</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cards</li>
                        </ol>
                    </div> 
                </div>
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <button id="table2-new-row-button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#largemodal"> Add data</button>
                                <div class="table-responsive">
                                    <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom-0">#</th>
                                                <th class="border-bottom-0">Supplier Name</th>
                                                <th class="border-bottom-0">Supplier Phone</th>
                                                <th class="border-bottom-0">Address</th>
                                                <td class="border-bottom-0">Action</td>
                                            </tr>
                                        </thead>
                                        <tbody id="supplier-datas">
                                            {{-- @foreach ($suppliers as $supplier)
                                                <tr>
                                                    <td>{{$supplier->id}}</td>
                                                    <td>{{$supplier->name}}</td>
                                                    <td>{{$supplier->phone}}</td>
                                                    <td>{{$supplier->address}}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#largemodal-{{$supplier->id}}">
                                                            <span class="fe fe-edit" > </span>
                                                        </button>
                                                        <button type="button" class="btn  btn-sm btn-danger">
                                                            <span class="fe fe-trash-2" > </span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <!-- Modal edit -->
                                                <div class="modal fade" id="largemodal-{{$supplier->id}}" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog modal-lg " role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Supplier form</h5>
                                                                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="needs-validation" id="form_supplier" novalidate>
                                                                    <div class="form-row">
                                                                        <div class="col-xl-6 mb-3">
                                                                            <label for="supplier-name">Supplier name</label>
                                                                            <input type="text" name="supplier_name" class="form-control" id="supplier-name" value="{{$supplier->name}}" required>
                                                                            <div class="invalid-feedback">Please provide a valid address.</div>
                                                                        </div>
                                                                        <div class="col-xl-6 mb-3">
                                                                            <label for="validationCustom02">Phone</label>
                                                                            <input type="text" name="phone" class="form-control" id="phone" value="{{$supplier->phone}}" required>
                                                                            <div class="invalid-feedback">Please provide a valid address.</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="col-xl-12 mb-6">
                                                                            <label for="validationCustom03">Address</label>
                                                                            <textarea name="address" class="form-control" id="address" cols="30" rows="5" required>{{$supplier->address}}</textarea>
                                                                            <div class="invalid-feedback">Please provide a valid address.</div>
                                                                        </div>
                                                                    </div>
                                                                    <button class="btn btn-primary" type="button" id="btn_submit">Submit form</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="largemodal" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg " role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Supplier form</h5>
                                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" id="form_supplier" novalidate>
                                    <div class="form-row">
                                        <div class="col-xl-6 mb-3">
                                            <label for="supplier-name">Supplier name</label>
                                            <input type="text" name="supplier_name" class="form-control" id="supplier-name" required>
                                            <div class="invalid-feedback">Please provide a valid address.</div>
                                        </div>
                                        <div class="col-xl-6 mb-3">
                                            <label for="validationCustom02">Phone</label>
                                            <input type="text" name="phone" class="form-control" id="phone" required>
                                            <div class="invalid-feedback">Please provide a valid address.</div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-12 mb-6">
                                            <label for="validationCustom03">Address</label>
                                            <textarea name="address" class="form-control" id="address" cols="30" rows="5" required></textarea>
                                            <div class="invalid-feedback">Please provide a valid address.</div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="button" id="btn_submit">Submit form</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('js-resource')
    {{-- <!-- DATA TABLE JS-->
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>
    <script src="{{ asset('assets/js/table-data.js')}}"></script>
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js')}}"></script>
	<script src="{{ asset('assets/js/select2.js')}}"></script> --}}

    {{-- <!-- SELECT2 JS -->
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js')}}"></script> --}}

    <!-- FORMVALIDATION JS -->
    {{-- <script src="{{ asset('assets/js/form-validation.js')}}"></script> --}}

    <script src="{{ asset('src/supplier.js') }}"></script>
    <script>
        SupplierController.init('{{ csrf_token() }}')
    </script>
@endpush
