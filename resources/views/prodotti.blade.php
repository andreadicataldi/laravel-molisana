@extends('app')
@include('partials.header')
@section('content')
    <main>
        <section class="lunghe">
            <h2>LE LUNGHE</h2>
            <div class="paste">
                @foreach ($paste as $pasta)
                    @if ($pasta['tipo'] === 'lunga')
                        <div class="pasta">
                            <img src="{{ $pasta['src'] }}" alt="">
                        </div>
                    @endif
                @endforeach
            </div>
        </section>
        <section class="corte">
            <h2>LE CORTE</h2>
            <div class="paste">
                @foreach ($paste as $pasta)
                    @if ($pasta['tipo'] === 'corta')
                        <div class="pasta">
                            <img src="{{ $pasta['src'] }}" alt="">
                        </div>
                    @endif
                @endforeach
            </div>
        </section>
        <section class="cortissime">
            <h2>LE CORTISSIME</h2>
            <div class="paste">
                @foreach ($paste as $pasta)
                    @if ($pasta['tipo'] === 'cortissima')
                        <div class="pasta">
                            <img src="{{ $pasta['src'] }}" alt="">
                        </div>
                    @endif
                @endforeach
            </div>
        </section>
    </main>
@endsection
