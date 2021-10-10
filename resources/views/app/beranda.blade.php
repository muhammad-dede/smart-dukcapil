@extends('app._layouts.template')

@section('title', 'Beranda | ')


@section('content')
<main id="main">
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <ol>
                    <li><a href="{{ url('app/beranda') }}">Beranda</a></li>
                </ol>
            </div>
        </div>
    </section>
    <section class="details">
        <div class="container">
            <div class="row profile">
                <div class="col-12">
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('_web/assets/img/hero-bg.jpg') }}" class="card-img-top w-100" alt="..."
                                height="100">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('scripts')
<script>
    var base_url = {!! json_encode(url('/')) !!};
</script>
@endpush
