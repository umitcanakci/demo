@extends('consultant.layouts.app')

@section('content')

<link href="{{ asset('consultant/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Mesajlar</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th>Gönderen</th>
                            <th>Konu</th>
                            <th>Mesaj</th>
                            <th>Durumu</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($messages as $message)
                            <tr>
                                <td>{{ $message->user->name }}</td>
                                <td>{{ $message->subject }}</td>
                                <td>{{ $message->message }}</td>
                                <td>@if(empty($message->answer)) <span style="color:red;">Cevaplanmadı! @else <span style="color:green;">Cevaplandı! @endif</span> </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('consultant.message.detail', ['id' => $message->id ]) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pen"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Gönderen</th>
                            <th>Konu</th>
                            <th>Mesaj</th>
                            <th>Durumu</th>
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