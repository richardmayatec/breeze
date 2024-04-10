@extends('layouts.main')

@section('content')

<div class="container">
    <x-header-component titulo="Todos los usuarios"></x-header-component>

    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-6">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque veniam obcaecati dolorem sit veritatis incidunt iste voluptates id ex iusto. Unde, ipsa. Hic a nam perferendis? Earum, eum recusandae! Fuga ratione, quia perspiciatis provident, labore magni laboriosam similique quibusdam, ab nulla voluptatem. Error ab impedit corporis? Cupiditate mollitia corrupti expedita!</p>
        </div>
    </div>
</div>

@endsection


@section('breadcrumb')
<div class="container py-4">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
              </ol>
            </nav>
        </div>
    </div>
</div>
@endsection