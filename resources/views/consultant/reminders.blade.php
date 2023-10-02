
@extends('consultant.layouts.app')

@section('content')

<link href="{{ asset('consultant/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Hatırlatıcılar</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th>Gün</th>
                            <th>Veri Detayı</th>
                            <th>Ad Soyad</th>
                            <th>Hatırlatıcı Tarihi</th>
                            <th>Not</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reminders as $reminder)
                            <tr>
                                @php $day = round(((strtotime($reminder->date) - time()) / 3600) / 24) + 1 @endphp
                                <td class="text-center" style="color:white;@if($day == 0) background-color:gray!important; @elseif($day <= 0) background-color:red!important; @else background-color:green!important; @endif"  >{{ $day  }}</td>
                                <td><a style="color:blue" href="{{ route('consultant.data.edit', ['id' => $reminder->data->id]) }}">İncelemek İçin Tıklayın </a></td>
                                <td>{{ $reminder->data->name }}</td>
                                <td>{{ $reminder->date }}</td>
                                <td>{{ $reminder->content }}</td>
                                
                                </tr>
                        @endforeach   
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Gün</th>
                            <th>Ad Soyad</th>
                            <th>Veri Detayı</th>
                            <th>Hatırlatıcı Tarihi</th>
                            <th>Not</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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

<script>
        $('.reminder').on('click', function(){
        var id = $(this).data('id');
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type:'POST',
            url: "{{ route('consultant.reminder.status.update') }}",
            data: {
                id:id
            },
            success: function(response) {
                swal("Başarılı!", "Kaydedildi!", "success");
            },
            error:function(response) {
                console.log(response)
            },
                
        });
    });
</script>

@endsection