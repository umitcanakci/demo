@extends('consultant.layouts.app')

@section('content')


<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Ek Ücret Ekle</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('consultant.payApplyPost') }}" method="POST" id="serviceAdd">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Ek Ücretin Adı</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Ek Ücretin Adı">
                        </div>

                        <div class="mb-3 col-md-12">
                            <label class="form-label">Fiyat</label>
                            <input type="text" name="price" id="price" class="form-control" placeholder="Fiyat">
                        </div>
                        
                        <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
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