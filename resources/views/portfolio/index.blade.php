@extends('layouts.portfolio')

@push('custom-css')
    <style>
        .page {
            width: 210mm;
            min-height: 297mm;
            padding: 20mm;
            margin: 10mm auto;
            border: 1px #D3D3D3 solid;
            border-radius: 5px;
            background: linear-gradient(#F2F4F9, #E0E6EF);
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .subpage {
            height: 257mm;
        }

        @page {
            size: A4;
            margin: 0;
        }
        @media print {
            html, body {
                width: 210mm;
                height: 297mm;     
            }
            .page {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
        }

        #introduction img {
            border-radius: 0px 90px;
            width: auto;
            height: 500px;
            object-fit: cover;
            position: absolute;
        }

        #introduction h3, #introduction h5 {
            color: #2083CA;
            position: relative;
        }

        #introduction h3::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: #2083CA;
            bottom: -8px;
        }

        #introduction p {
            text-align: justify;
        }
    </style>
@endpush

@section('content')
    <div class="page">
        <div class="subpage" id="introduction">
            <div class="row">
                <div class="col">
                    <h3 class="fw-bold">Nadys Pratiwi</h3>
                    <h5 class="mb-4 text-justify">UI Designer</h5>
                    <p class="ms-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pellentesque viverra tortor sit lectus eget habitasse scelerisque duis. Non ornare id sodales adipiscing commodo tortor mi donec lacus. Aliquet amet nascetur purus maecenas netus malesuada amet, duis. Justo convallis pretium nibh tortor. Tincidunt tellus bibendum vehicula interdum fermentum quis vitae tortor augue. Viverra ullamcorper sit condimentum egestas. </p>
                </div>
                <div class="col">
                    <img src="https://dummyimage.com/350x500/000/fff">
                </div>
            </div>
        </div>    
    </div>
    <div class="page">
        <div class="subpage">Page 2/2</div>    
    </div>
@endsection