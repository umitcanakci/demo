@extends('consultant.layouts.app')

@section('content')

<link href="{{ asset('consultant/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    @if(empty($filter))
        <form action="{{ route('consultant.data.filter') }}" method="POST">
            @csrf
            <div class="row mb-5">
                <div class="col-3 mb-3">
                    <h4 class="card-title">Kategori</h4>
                    <select name="category" id="category" class="form-select">
                        <option value="">Lütfen Kategori Seçiniz </option>
                        <option value="1">WAS</option>
                        <option value="2">Kanada Coop</option>
                    </select>
                </div>
                <div class="col-3 mb-3">
                    <h4 class="card-title">Danışman</h4>
                    <select  name="consultant_id" id="consultant_id" class="form-select">
                        <option value="" >Lütfen Danışman Seçiniz </option>
                        @foreach(consultants() as $consultant)
                            <option value="{{ $consultant->id }}">{{$consultant->name}}</option>

                        @endforeach
                    </select>
                </div>
                <div class="col-3 mb-3">
                    <h4 class="card-title">Durum</h4>
                    <select name="status" id="status" class="form-select">
                        <option value="">Lütfen Durum Seçiniz </option>
                        <option value="Devam Ediyor">Devam Ediyor</option>
                        <option value="Tamamlandı">Tamamlandı</option>
                        <option value="İptale aktarıldı">İptale aktarıldı</option>
                        <option value="Ertelendi">Ertelendi</option>
                        <option value="Ulaşılamadı">Ulaşılamadı</option>
                    </select>
                </div>
                <div class="col-3 mb-3">
                    <h4 class="card-title">Program</h4>
                    <select name="program" id="program" class="form-select">
                        <option value="">Lütfen Program Seçiniz </option>
                        @foreach(programCategories() as $program)
                        <option value="{{ $program->name}}">{{ $program->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-4 mb-3">
                    <h3 class="card-title">Data Tarihi Başlangıç</h3>
                    <input  type="date" name="data_date_start" class="form-control" placeholder="Data Tarihi Başlangıç">
                </div>

                <div class="col-4 mb-3">
                    <h3 class="card-title">Data Tarihi Bitiş</h3>
                    <input type="date" name="data_date_end" class="form-control" placeholder="Data Tarihi Bitiş">
                </div>

                <div class="col-4 mb-3">
                    <h3 class="card-title"> &nbsp;</h3>
                    <button type="submit" class="btn btn-success">Filtrele</button>
                </div>
            </div>
        </form>
    @endif


<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Datalar</h4> <a href="{{ route('consultant.add.data') }}" class="btn btn-sm btn-success"> Data Ekle </a> 
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display text-center" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th>Ad Soyad</th>
                            <th>Telefon</th>
                            <th>Program</th>
                            <th>Ülke</th>
                            <th>Danışman</th>
                            <th>Durum</th>
                            <th>Tarih</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $data)

                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->phone }}</td>
                                <td>{{ $data->program }}</td>
                                <td>{{ $data->country }}</td>
                                <td>@if(isset($data->consultant->name)) {{ $data->consultant->name }} @else <span style="color:red;">Danışman Atanmadı!</span> @endif </td>
                                <td>{{ $data->status }}</td>
                                <td>{{ $data->created_at}}</td>
                                
                                <td class="justify-content-center text-center">
                                    <a href="{{ route('consultant.data.edit', ['id' => $data->id ]) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach    
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Ad Soyad</th>
                            <th>Telefon</th>
                            <th>Program</th>
                            <th>Ülke</th>
                            <th>Danışman</th>
                            <th>Durum</th>
                            <th>Tarih</th>
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