@extends('consultant.layouts.app')

@section('content')

<link href="{{ asset('consultant/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Ücretlerim</h4> <a href="{{ route('consultant.pay.add') }}" class="btn btn-sm btn-success"> Ek Ücret Ekle </a> 
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th>Ücret Adı</th>
                            <th>Fiyat</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pays as $pay)
                            <tr id="pay-{{$pay->id}}">
                                <td>{{ $pay->name }}</td>
                                <td>{{ $pay->price }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                        <button type="button" id="deletePay" data-id="{{ $pay->id }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Ücret Adı</th>
                            <th>Fiyat</th>
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
            url: "{{ route('consultant.pay.delete')}}",
            data: {
                id:id
            },
            success: function(response) {
                $('#pay-'+id).remove()
                swal("Başarılı!", "Kaydedildi!", "success");
            },
            error:function(response) {
                console.log(response)
            },
                
        });

    });
</script>

@endsection