@extends('consultant.layouts.app')

@section('content')

<link href="{{ asset('consultant/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Danışmanlar</h4> <a href="{{ route('consultant.add') }}" class="btn btn-sm btn-success"> Danışman Ekle </a> 
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th>Ad Soyad</th>
                            <th>Telefon</th>
                            <th>E-posta</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($consultants as $consultant)
                            <tr id="consultant-{{$consultant->id}}">
                                <td>{{ $consultant->name }}</td>
                                <td>{{ $consultant->phone }}</td>
                                <td>{{ $consultant->email }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('consultant.edit', ['id' => $consultant->id ]) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                        <button type="button" id="deleteConsultant" data-id="{{ $consultant->id }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Ad Soyad</th>
                            <th>Telefon</th>
                            <th>E-posta</th>
                            <th>İşlemler</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<script>
    $('.btn-danger').on('click', function(){
        var id = $(this).attr("data-id");
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type:'POST',
            url: "{{ route('consultant.delete')}}",
            data: {
                id:id
            },
            success: function(response) {
                $('#consultant-'+id).remove()
                swal("Başarılı!", "Kaydedildi!", "success");
            },
            error:function(response) {
                console.log(response)
            },
                
        });

    });
</script>

@endsection