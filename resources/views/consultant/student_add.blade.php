@extends('consultant.layouts.app')

@section('content')


<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Öğrenci Ekle</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('consultant.serviceApplyPost') }}" method="POST" id="serviceAdd">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Ad Soyad</label>
                            <input type="text" name="name" id="name" class="form-control" >
                        </div>

                        <div class="mb-3 col-md-4">
                            <label class="form-label">E-posta</label>
                            <input type="text" name="price" id="price" class="form-control">
                        </div>

                        <div class="mb-3 col-md-4">
                            <label class="form-label">Telefon</label>
                            <input type="text" name="price" id="price" class="form-control">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label">Parola</label>
                            <input type="text" name="price" id="price" class="form-control">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label">Parola Tekrarı</label>
                            <input type="text" name="price" id="price" class="form-control">
                        </div>

                    </div>
                    <button type="submit" class="service-button btn btn-primary">Kaydet</button>
                </form>
            </div>
        </div>
    </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@if (session()->has('success'))
    <script>
        swal("Başarılı!", "Kaydedildi!", "success");
    </script>
@endif

@endsection