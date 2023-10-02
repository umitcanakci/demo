@extends('consultant.layouts.app')

@section('content')

<link href="{{ asset('consultant/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data Düzenle</h4>
        </div>
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    @if (is_array(session('success')))
                        @foreach (session('success') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                        </ul>
                    @else
                        {{ session('success') }}
                    @endif
                </div>
            @endif

            @if (session()->has('error'))
                <div class="alert alert-warning">
                    @if (is_array(session('error')))
                        @foreach (session('error') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                        </ul>
                    @else
                        {{ session('error') }}
                    @endif
                </div>
            @endif
            <div class="basic-form">
                <form action="{{ route('consultant.editData.post') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Ad Soyad</label>
                            <input type="text" value="{{ $data->name }}" name="name" class="form-control" placeholder="Ad Soyad">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label">E-posta</label>
                            <input type="email" value="{{ $data->email }}" name="email" class="form-control" placeholder="E-posta">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Telefon</label>
                            <input type="text" name="phone" value="{{ $data->phone }}" class="form-control" placeholder="Telefon">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Şehir</label>
                            <input type="text" name="city" class="form-control" value="{{ $data->city }}" placeholder="Şehir">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label style="color:black" for="marital_status">Medeni Durum</label>
                            <select required name="marital_status" id="marital_status" class="form-select">
                                <option >Lütfen Kategori Seçiniz </option>
                                <option @if($data->marital_status == "Evli") selected @endif value="Evli">Evli</option>
                                <option @if($data->marital_status == "Bekar") selected @endif value="Bekar">Bekar</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Meslek</label>
                            <input type="text" name="job" value="{{ $data->job }}"  class="form-control" placeholder="Meslek">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Data Tarihi</label>
                            <input type="date" value="{{ $data->data_date }}" name="data_date" class="form-control" placeholder="Data Tarihi">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Doğum Tarihi</label>
                            <input type="date" value="{{ $data->birthday }}" name="birthday" class="form-control" placeholder="Doğum Tarihi">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label style="color:black" for="category">Kategori</label>
                            <select required name="category" id="category" class="form-select">
                                <option >Lütfen Kategori Seçiniz </option>
                                <option @if($data->category == "1") selected @endif value="1">WAS</option>
                                <option @if($data->category == "2") selected @endif value="2">Kanada Coop</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label style="color:black" for="reference">Referans</label>
                            <select required name="reference" id="reference" class="form-select">
                                <option >Lütfen Referans Seçiniz </option>
                                <option @if($data->reference == "1") selected @endif  value="1">Instagram</option>
                                <option @if($data->reference == "2") selected @endif  value="2">Google</option>
                                <option @if($data->reference == "3") selected @endif  value="3">Facebookc</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label style="color:black" for="consultant">Danışman</label>
                            <select required name="consultant_id" id="consultant_id" class="form-select">
                                <option >Lütfen Danışman Seçiniz </option>
                                @foreach(consultants() as $consultant)
                                    <option @if($data->consultant_id == $consultant->id) selected @endif value="{{ $consultant->id }}">{{$consultant->name}}</option>

                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label style="color:black" for="status">Durum</label>
                            <select required name="status" id="status" class="form-select">
                                <option >Lütfen Durum Seçiniz </option>
                                <option @if($data->status == "Devam Ediyor") selected @endif value="Devam Ediyor">Devam Ediyor</option>
                                <option @if($data->status == "Tamamlandı") selected @endif value="Tamamlandı">Tamamlandı</option>
                                <option @if($data->status == "İptale aktarıldı") selected @endif value="İptale aktarıldı">İptale aktarıldı</option>
                                <option @if($data->status == "Ertelendi") selected @endif value="Ertelendi">Ertelendi</option>
                                <option @if($data->status == "Ulaşılamadı") selected @endif value="Ulaşılamadı">Ulaşılamadı</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label style="color:black" for="program">Program</label>
                            <select required name="program" id="program" class="form-select">
                                <option >Lütfen Program Seçiniz </option>
                                @foreach(programCategories() as $program)
                                <option @if($data->program == $program->name) selected @endif value="{{ $program->name}}">{{ $program->name }}</option>
                                @endforeach
                            </select>
                        </div>

  


                        <div class="mb-3 col-md-4">
                            <label class="form-label">Eğitim</label>
                            <input type="text" value="{{ $data->education }}"  name="education" class="form-control" placeholder="Eğitim">
                        </div>

                        


                        <div class="mb-3 col-12">
                            <label class="form-label">Notlar</label>
                            <textarea name="content" id="editor">{{ $data->content }}</textarea>
                        </div>

                        <input type="hidden" name="id" value="{{ $data->id }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </form>
            </div>
        </div>
    </div>

</div>



<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hatırlatıcı Ekle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <form id="reminderForm" action="{{ route('consultant.reminder.add.post') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-12">
                            <label class="form-label">Tarih</label>
                            <input type="date" name="date" class="form-control" placeholder="Hatırlatıcı Tarihi">
                        </div>
                        <div class="mb-3 col-12">
                            <label class="form-label">Not</label>
                            <input type="text" name="content" class="form-control" placeholder="Not">
                        </div>

                        <input type="hidden" name="id" value="{{ $data->id }}">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Kapat</button>
                <button type="button" id="reminderPost" class="btn btn-primary">Kaydet</button>
            </div>
        </div>
    </div>
</div>


<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Hatırlatıcılar</h4><button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">Hatırlatıcı Ekle</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th>Hatırlatıcı Tarihi</th>
                            <th>Not</th>
                            <th>Tamamlandı</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data->reminders as $reminder)
                            <tr>
                                <td>{{ $reminder->date }}</td>
                                <td>{{ $reminder->content }}</td>
                                <td>
                                    <input class="reminder" data-id="{{ $reminder->id }}" id="statusReminder-{{$reminder->id}}" type="checkbox" @if($reminder->status == 1) checked @endif name="status" value="1">
                                    <label for="statusReminder-{{$reminder->id}}"> Tamamlandı</label><br></td>
                                </tr>
                        @endforeach   
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Hatırlatıcı Tarihi</th>
                            <th>Not</th>
                            <th>Tamamlandı</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">İşlem Ekle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <form id="processForm" action="{{ route('consultant.process.add.post') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-12">
                            <label class="form-label">İşlem</label>
                                <select required name="name" id="name" class="form-select">
                                    <option value="Program Araştırılıyor"> Program Araştırılıyor </option>
                                    <option value="Teklif İletildi"> Teklif İletildi </option>
                                    <option value="Vize Sürecinde"> Vize Sürecinde </option>
                                    <option value="Kayıt Tamamlandı"> Kayıt Tamamlandı </option>
                                    <option value="Tekrar aranacak"> Tekrar aranacak </option>
                                    <option value="İptal (Farklı Şirket)"> İptal (Farklı Şirket) </option>
                                    <option value="İptal (Uzun Süre Ulaşılamadı)"> İptal (Uzun Süre Ulaşılamadı) </option>
                                    <option value="İptal (Profil Uygun Değil)"> İptal (Profil Uygun Değil) </option>
                                    <option value="Ertelendi"> Ertelendi </option>
                                </select>
                        </div>
                        <div class="mb-3 col-12">
                            <label class="form-label">Tarih</label>
                            <input type="date" name="date" class="form-control" placeholder="İşlem Tarihi">
                        </div>
                        <div class="mb-3 col-12">
                            <label class="form-label">Not</label>
                            <input type="text" name="content" class="form-control" placeholder="Not">
                        </div>

                        <input type="hidden" name="id" value="{{ $data->id }}">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Kapat</button>
                <button type="button" id="processPost" class="btn btn-primary">Kaydet</button>
            </div>
        </div>
    </div>
</div>


<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">İşlem Geçmişi</h4><button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModalLong">İşlem Ekle</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example3" class="display" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th>İşlem Tarihi</th>
                            <th>İşlem</th>
                            <th>Açıklama</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data->processes as $process)
                            <tr>
                                <td>{{ $process->date }}</td>
                                <td>{{ $process->name }}</td>
                                <td>{{ $process->content }}</td>
                            </tr>
                        @endforeach   
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>İşlem Tarihi</th>
                            <th>İşlem</th>
                            <th>Açıklama</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>






<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js" ></script>
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
ClassicEditor.create(document.querySelector("#editor"));
</script>

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

    $('#reminderPost').on('click', function(){
        $( "#reminderForm" ).submit();
    });

    $('#processPost').on('click', function(){
        $( "#processForm" ).submit();
    });
</script>


@endsection