@extends('consultant.layouts.app')

@section('content')


<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data Ekle</h4>
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
                <form action="{{ route('consultant.add.post') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Ad Soyad</label>
                            <input type="text" name="name" class="form-control" placeholder="Ad Soyad">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label">E-posta</label>
                            <input type="email" name="email" class="form-control" placeholder="E-posta">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Telefon</label>
                            <input type="text" name="phone" class="form-control" placeholder="Telefon">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Şehir</label>
                            <input type="text" name="city" class="form-control" placeholder="Şehir">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label style="color:black" for="marital_status">Medeni Durum</label>
                            <select required name="marital_status" id="marital_status" class="form-select">
                                <option >Lütfen Kategori Seçiniz </option>
                                <option value="Evli">Evli</option>
                                <option value="Bekar">Bekar</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Meslek</label>
                            <input type="text" name="job" class="form-control" placeholder="Meslek">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Data Tarihi</label>
                            <input type="date" value="" id="todayDate" name="data_date" class="form-control" placeholder="Data Tarihi">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Doğum Tarihi</label>
                            <input type="date" name="birthday" class="form-control" placeholder="Doğum Tarihi">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label style="color:black" for="category">Kategori</label>
                            <select required name="category" id="category" class="form-select">
                                <option >Lütfen Kategori Seçiniz </option>
                                <option value="1">WAS</option>
                                <option value="1">Kanada Coop</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label style="color:black" for="reference">Referans</label>
                            <select required name="reference" id="reference" class="form-select">
                                <option >Lütfen Referans Seçiniz </option>
                                <option value="1">Instagram</option>
                                <option value="1">Google</option>
                                <option value="1">Facebookc</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label style="color:black" for="consultant">Danışman</label>
                            <select required name="consultant_id" id="consultant_id" class="form-select">
                                <option >Lütfen Danışman Seçiniz </option>
                                @foreach(consultants() as $consultant)

                                <option value="{{ $consultant->id }}">{{$consultant->name}}</option>

                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label style="color:black" for="status">Durum</label>
                            <select required name="status" id="status" class="form-select">
                                <option >Lütfen Durum Seçiniz </option>
                                <option value="Devam Ediyor">Devam Ediyor</option>
                                <option value="Tamamlandı">Tamamlandı</option>
                                <option value="İptale aktarıldı">İptale aktarıldı</option>
                                <option value="Ertelendi">Ertelendi</option>
                                <option value="Ulaşılamadı">Ulaşılamadı</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label style="color:black" for="program">Program</label>
                            <select required name="program" id="program" class="form-select">
                                <option >Lütfen Program Seçiniz </option>
                                @foreach(programCategories() as $program)
                                <option value="{{ $program->name}}">{{ $program->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3 col-md-4">
                            <label style="color:black" for="country">Ülke</label>
                            <select required name="country" id="country" class="form-select">
                                <option >Lütfen Ülke Seçiniz </option>
                                @foreach(countries() as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3 col-md-4">
                            <label class="form-label">Eğitim</label>
                            <input type="text" name="education" class="form-control" placeholder="Eğitim">
                        </div>

                        


                        <div class="mb-3 col-12">
                            <label class="form-label">Notlar</label>
                            <textarea name="content" id="editor"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </form>
            </div>
        </div>
    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js" ></script>

<script>

ClassicEditor.create(document.querySelector("#editor"));

$(document).ready( function() {
    var now = new Date();
    var month = (now.getMonth() + 1);               
    var day = now.getDate();
    if (month < 10) 
        month = "0" + month;
    if (day < 10) 
        day = "0" + day;
    var today = now.getFullYear() + '-' + month + '-' + day;
    $('#todayDate').val(today);
});



</script>


@endsection