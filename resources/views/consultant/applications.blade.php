@extends('consultant.layouts.app')

@section('content')

<link href="{{ asset('consultant/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Başvurular</h4> 
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ad Soyad</th>
                            <th>E-posta</th>
                            <th>Telefon</th>
                            <th>Program Adı</th>
                            <th>Program Kategorisi</th>
                            <th>Atanan Danışman</th>
                            <th>Durum</th>
                            <th>Başvuru Tarihi</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($applications as $application)
                            <tr>
                                <td>{{ $application->id }}</td>
                                <td>{{ $application->userInformation->name  ?? 'Henüz Doldurulmadı' }} </td>
                                <td>{{ $application->userInformation->email ?? 'Henüz Doldurulmadı' }}</td>
                                <td>{{ $application->userInformation->phone ?? 'Henüz Doldurulmadı' }}</td>
                                <td>{{ $application->program->name }}</td>
                                <td>{{ $application->program->programCategory->name }}</td>
                                <td>@if(isset($application->consultant->name)) {{ $application->consultant->name }} @else <b style="color:red"> Danışman atanmadı! @endif </b> </td>
                                <td>{{ $application->status }}</td>
                                <td>{{ $application->created_at->format('d/m/Y') }}</td>

                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('consultant.application.view', ['id' => $application->id]) }}" class="btn btn-success shadow btn-xs sharp me-1"><i class="fas fa-eye"></i></a>
                                      
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Ad Soyad</th>
                            <th>E-posta</th>
                            <th>Telefon</th>
                            <th>Program</th>
                            <th>Program Adı</th>
                            <th>Program Kategorisi</th>
                            <th>Atanan Danışman</th>
                            <th>İşlemler</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('consultant/vendor/global/global.min.js')}}"></script>
<script src="{{ asset('consultant/vendor/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Apex Chart -->
<script src="{{ asset('consultant/vendor/apexchart/apexchart.js')}}"></script>

<!-- Datatable -->
<script src="{{ asset('consultant/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('consultant/js/plugins-init/datatables.init.js')}}"></script>

<script src="{{ asset('consultant/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>

<script src="{{ asset('consultant/js/custom.min.js')}}"></script>
<script src="{{ asset('consultant/js/deznav-init.js')}}"></script>
<script src="{{ asset('consultant/js/demo.js')}}"></script>
<script src="{{ asset('consultant/js/styleSwitcher.js')}}"></script>


@endsection