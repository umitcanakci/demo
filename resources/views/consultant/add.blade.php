@extends('consultant.layouts.app')

@section('content')


<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Danışman Ekle</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('consultant.add.post') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Ad Soyad</label>
                            <input type="text" class="form-control" placeholder="Ad Soyad">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label">E-posta</label>
                            <input type="email" class="form-control" placeholder="E-posta">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Parola</label>
                            <input type="password" class="form-control" placeholder="Parola">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Telefon</label>
                            <input type="text" class="form-control" placeholder="Telefon">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">LinkedIn</label>
                            <input type="text" class="form-control" placeholder="LinkedIn - Link Yazınız">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Instagram</label>
                            <input type="text" class="form-control" placeholder="Instagram - Link Yazınız">
                        </div>
                        <div class="mb-3 col-12">
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



</script>


@endsection