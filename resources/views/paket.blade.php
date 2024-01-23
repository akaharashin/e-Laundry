@extends('layouts.layout')

@section('container')
<style>
    .container{
        display: flex;
        justify-content: center;
    }
    .plan {
        border-radius: 16px;
        box-shadow: 0 30px 30px -25px rgba(0, 38, 255, 0.205);
        padding: 10px;
        background-color: #fff;
        color: #697e91;
        max-width: 300px;
        display: inline-block;
    }

    .plan strong {
        font-weight: 600;
        color: #425275;
    }

    .plan .inner {
        align-items: center;
        padding: 20px;
        padding-top: 40px;
        background-color: #ecf0ff;
        border-radius: 12px;
        position: relative;
    }

    .plan .pricing {
        position: absolute;
        top: 0;
        right: 0;
        background-color: #bed6fb;
        border-radius: 99em 0 0 99em;
        display: flex;
        align-items: center;
        padding: 0.625em 0.75em;
        font-size: 1.25rem;
        font-weight: 600;
        color: #425475;
    }

    .plan .pricing small {
        color: #707a91;
        font-size: 0.75em;
        margin-left: 0.25em;
    }

    .plan .title {
        font-weight: 600;
        font-size: 1.25rem;
        color: #425675;
    }

    .plan .title+* {
        margin-top: 0.75rem;
    }

    .plan .info+* {
        margin-top: 1rem;
    }

    .plan .features {
        display: flex;
        flex-direction: column;
    }

    .plan .features li {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .plan .features li+* {
        margin-top: 0.75rem;
    }

    .plan .features .icon {
        background-color: #1FCAC5;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        border-radius: 50%;
        width: 20px;
        height: 20px;
    }

    .plan .features .icon svg {
        width: 14px;
        height: 14px;
    }

    .plan .features+* {
        margin-top: 1.25rem;
    }

    .plan .action {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: end;
    }

    .plan .button {
        background-color: rgb(0, 184, 83);
        border-radius: 6px;
        color: #fff;
        font-weight: 500;
        font-size: 1.125rem;
        text-align: center;
        border: 0;
        outline: 0;
        width: 100%;
        padding: 0.625em 0.75em;
        text-decoration: none;
    }

    .plan .button:hover,
    .plan .button:focus {
        background-color: rgb(17, 129, 67);
    }

</style>
<div class="container mt-5">
    @foreach ($pakets as $paket)
    <div class="plan">
        <div class="inner">
            <span class="pricing">
                <span>
                    Rp. {{ number_format($paket->harga, 0, ',' , '.')  }} <small>/ kg</small>
                </span>
            </span>
            <p class="title">{{ $paket->nama }}</p>
            <p class="info">{{ $paket->desc }}</p>
            <ul class="features">
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                        </svg>
                    </span>
                    <span>{{ $paket->service1 }}</span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                        </svg>
                    </span>
                    <span>{{ $paket->service2 }}</strong></span>
                </li>
                <li>
                    <span class="icon">
                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                        </svg>
                    </span>
                    <span>{{ $paket->service3 }}</span>
                </li>
            </ul>
            <div class="action">
                <a class="button" href="{{ route('kasir', $paket->id) }}">
                    Pilih
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
