@extends('layouts.app') <!-- Extend the main template -->

@section('content')
    <style>
        .btn-group .btn input[type="radio"] {
            display: none; /* Hide the radio input */
        }

        .btn-group .btn.active {
            background-color: #007bff; /* Change the active button background color to primary */
            color: #fff; /* Change the text color for the active button */
        }
    </style>
    <div id="remoteModelData" class="modal fade" role="dialog"></div>
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <!-- Display error message if it exists -->
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="{{url('benefit')}}">Benefit</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Detail Benefit</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mb-3 d-flex justify-content-between">
                    <h4 class="font-weight-bold d-flex align-items-center">Detail Benefit</h4>
                    <a href="{{url('employee')}}"
                       class="btn btn-primary btn-sm d-flex align-items-center justify-content-between ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <span class="ml-2">Kembali</span>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div>
                                    <ul class="list-style-1 mb-0">
                                        <li class="list-item d-flex justify-content-start align-items-center">
                                            <div class="avatar">
                                                <img class="avatar avatar-img avatar-60 rounded-circle"
                                                     src="{{asset('images/user/1.jpg')}}" alt="01.jpg"/>
                                            </div>
                                            <div class="list-style-detail ml-4 mr-2">
                                                <h5 class="font-weight-bold">{{$employment->name}}</h5>
                                                <p class="mb-0 mt-1 text-muted">{{$employment->employmentRole->name}}
                                                    - {{$employment->employmentDivision->name}}</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 text-center">
                                        <form method="GET" action="{{ route('benefit.export', $employment->nik) }}">
                                            @csrf
                                            <div class="btn-group">
                                                <button type="submit" name="format" value="pdf"
                                                        class="btn btn-danger btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                         fill="currentColor" class="bi bi-file-pdf" viewBox="0 0 16 16">
                                                        <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                                                        <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/>
                                                    </svg>
                                                    <span class="">Export as PDF</span>
                                                </button>
                                                <button type="submit" name="format" value="excel"
                                                        class="btn btn-success btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                                         viewBox="0 0 384 512">
                                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                        <style>svg {
                                                                fill: #ffffff
                                                            }</style>
                                                        <path d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm60.1 106.5L224 336l60.1 93.5c5.1 8-.6 18.5-10.1 18.5h-34.9c-4.4 0-8.5-2.4-10.6-6.3C208.9 405.5 192 373 192 373c-6.4 14.8-10 20-36.6 68.8-2.1 3.9-6.1 6.3-10.5 6.3H110c-9.5 0-15.2-10.5-10.1-18.5l60.3-93.5-60.3-93.5c-5.2-8 .6-18.5 10.1-18.5h34.8c4.4 0 8.5 2.4 10.6 6.3 26.1 48.8 20 33.6 36.6 68.5 0 0 6.1-11.7 36.6-68.5 2.1-3.9 6.2-6.3 10.6-6.3H274c9.5-.1 15.2 10.4 10.1 18.4zM384 121.9v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"/>
                                                    </svg>
                                                    <span class="">Export as Excel</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>


                            </li>
                            <li class="list-group-item">
                                <table class="table table-borderless mb-0">
                                    <tr>
                                        <td class="p-0">
                                            <p class="mb-0 text-muted">Email</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 ">{{$employment->email}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-0">
                                            <p class="mb-0 text-muted">NIK</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 ">{{$employment->nik}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-0">
                                            <p class="mb-0 text-muted">Phone</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 ">{{$employment->phone}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-0">
                                            <p class="mb-0 text-muted">Address</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 ">{{$employment->address}}</p>
                                        </td>
                                    </tr>
                                </table>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="tab-content">
                                <div id="invoice" class="tab-pane fade show active">
                                    <div class="d-flex justify-content-between align-items-center p-3">
                                        <h5>Benefit</h5>
                                    </div>
                                    <div class="col-md-12">
                                        <form action="{{route('benefit.update',['benefit' => $employment->nik])}}"
                                              method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="row g-3 date-icon-set-modal">
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <label style="width: 50%;" for="basic_salary"
                                                               class="form-label font-weight-bold text-muted text-uppercase">Gaji
                                                            Pokok<span style="color: red">*</span> :</label>
                                                        <input style="width: 50%;" type="text"
                                                               class="form-control rupiah"
                                                               id="basic_salary" name="basic_salary"
                                                               placeholder="Masukan Gaji Pokok"
                                                               value="{{$benefit->basic_salary}}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <label style="width: 50%;" for="fixed_allowances"
                                                               class="form-label font-weight-bold text-muted text-uppercase">Tunjangan
                                                            Tetap :</label>
                                                        <input style="width: 50%;" type="text"
                                                               class="form-control rupiah"
                                                               id="fixed_allowances" name="fixed_allowances"
                                                               placeholder="Masukan Tunjangan Tetap"
                                                               value="{{$benefit->fixed_allowances}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <label style="width: 60%;" for="bpjs_kesehatan"
                                                               class="form-label font-weight-bold text-muted text-uppercase">Potongan
                                                            BPJS Kesehatan (1%) :</label>
                                                        <input style="width: 40%;" type="text"
                                                               class="form-control rupiah"
                                                               id="bpjs_kesehatan" name="bpjs_kesehatan"
                                                               placeholder="0" value="0" readonly>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <label style="width: 50%;" for="meal_allowances"
                                                               class="form-label font-weight-bold text-muted text-uppercase">Uang
                                                            Makan :</label>
                                                        <input style="width: 50%;" type="text"
                                                               class="form-control rupiah"
                                                               id="meal_allowances" name="meal_allowances"
                                                               placeholder="Masukan Uang Makan"
                                                               value="{{$benefit->meal_allowances}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <label style="width: 60%;" for="bpjs_jht"
                                                               class="form-label font-weight-bold text-muted text-uppercase">Potongan
                                                            BPJS JHT (2%):</label>
                                                        <input style="width: 40%;" type="text"
                                                               class="form-control rupiah"
                                                               id="bpjs_jht" name="bpjs_jht" placeholder="0"
                                                               value="0"
                                                               readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <label style="width: 50%;" for="transport_allowances"
                                                               class="form-label font-weight-bold text-muted text-uppercase">Uang
                                                            Transport :</label>
                                                        <input style="width: 50%;" type="text"
                                                               class="form-control rupiah"
                                                               id="transport_allowances" name="transport_allowances"
                                                               placeholder="Masukan Uang Transport"
                                                               value="{{$benefit->transport_allowances}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <label style="width: 60%;" for="bpjs_pensiun"
                                                               class="form-label font-weight-bold text-muted text-uppercase">Potongan
                                                            BPJS Pensiun (1%):</label>
                                                        <input style="width: 40%;" type="text"
                                                               class="form-control rupiah"
                                                               id="bpjs_pensiun" name="bpjs_pensiun" placeholder="0"
                                                               value="0" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <label style="width: 50%;" for="overtime_allowances"
                                                               class="form-label font-weight-bold text-muted text-uppercase">Uang
                                                            Lembur :</label>
                                                        <input style="width: 50%;" type="text"
                                                               class="form-control rupiah"
                                                               id="overtime_allowances" name="overtime_allowances"
                                                               placeholder="Masukan Uang Lembur"
                                                               value="{{$benefit->overtime_allowances}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="row align-items-center justify-content-between">
                                                        <div class="col-6">
                                                            <label for="pph"
                                                                   class="form-label font-weight-bold text-muted text-uppercase">Potongan
                                                                PPH :</label>
                                                            <div class="btn-group btn-group-sm" data-toggle="buttons">
                                                                <label class="btn btn-secondary @if($benefit->persenpph == 5) active @endif">
                                                                    <input type="radio" id="pph5" name="persenpph"
                                                                           value="5"
                                                                           @if($benefit->persenpph == 5) checked @endif>
                                                                    5%
                                                                </label>
                                                                <label class="btn btn-secondary @if($benefit->persenpph == 15) active @endif">
                                                                    <input type="radio" id="pph15" name="persenpph"
                                                                           value="15"
                                                                           @if($benefit->persenpph == 15) checked @endif>
                                                                    15%
                                                                </label>
                                                                <label class="btn btn-secondary @if($benefit->persenpph == 25) active @endif">
                                                                    <input type="radio" id="pph25" name="persenpph"
                                                                           value="25"
                                                                           @if($benefit->persenpph == 25) checked @endif>
                                                                    25%
                                                                </label>
                                                                <label class="btn btn-secondary @if($benefit->persenpph == 30) active @endif">
                                                                    <input type="radio" id="pph30" name="persenpph"
                                                                           value="30"
                                                                           @if($benefit->persenpph == 30) checked @endif>
                                                                    30%
                                                                </label>
                                                            </div>


                                                        </div>
                                                        <div class="col-6">
                                                            <input style="width: 85%;margin-left: 15%" type="text"
                                                                   class="form-control rupiah" id="pph" name="pph"
                                                                   placeholder="0" value="0" readonly>
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr>
                                                <div class="col-md-12 mb-3" style="border-top: 2px solid grey;">
                                                    <div class="d-flex align-items-center mt-2">
                                                        <label style="width: 50%; font-size: 20px" for="thp"
                                                               class="form-label font-weight-bold text-muted text-uppercase text-right pr-2">Take
                                                            Home Pay : </label>
                                                        <input style="width: 25%;" type="text"
                                                               class="form-control rupiah"
                                                               id="thp" name="thp" placeholder="0" value="0"
                                                               readonly>
                                                        <div class="ml-auto">
                                                            <button type="submit" class="btn btn-primary">Update
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            hitung();
            formatRupiahInputs();
        });

        function formatRupiahInputs() {
            var rupiahInputs = document.getElementsByClassName('rupiah');

            for (var i = 0; i < rupiahInputs.length; i++) {
                var input = rupiahInputs[i];
                var value = input.value;
                if (value.trim() !== "") {
                    // Remove non-numeric characters except commas
                    value = value.replace(/[^\d,]/g, '');

                    // Check if the value is "0" and return it as is
                    if (value === "0") {
                        input.value = "0";
                        continue;
                    }

                    // Remove leading zeros
                    value = value.replace(/^0+/, '');

                    // Remove any existing commas
                    value = value.replace(/,/g, '');

                    // Convert to a number and format with commas
                    var formattedValue = parseFloat(value).toLocaleString('en-US');

                    input.value = formattedValue;
                }
            }
        }

        // Add keyup event listeners for real-time formatting
        var rupiahInputs = document.getElementsByClassName('rupiah');
        for (var i = 0; i < rupiahInputs.length; i++) {
            rupiahInputs[i].addEventListener("keyup", function () {
                hitung();
            });
        }

        var radioButtons = document.getElementsByName('persenpph');
        for (var i = 0; i < radioButtons.length; i++) {
            radioButtons[i].addEventListener('change', function () {
                hitung();
            });
        }

        function hitung() {
            var gajiPokok = document.getElementById('basic_salary').value.replace(/,/g, '');
            var tunjanganTetap = document.getElementById('fixed_allowances').value.replace(/,/g, '');
            var uangMakan = document.getElementById('meal_allowances').value.replace(/,/g, '');
            var uangTransport = document.getElementById('transport_allowances').value.replace(/,/g, '');
            var uangLembur = document.getElementById('overtime_allowances').value.replace(/,/g, '');
            var persenBPJSKesehatan = 1;
            var persenBPJSJHT = 2;
            var persenBPJSPensiun = 1;
            var persenBPJSPPH;
            var radioButtons = document.getElementsByName('persenpph');

            for (var i = 0; i < radioButtons.length; i++) {
                if (radioButtons[i].checked) {
                    persenBPJSPPH = radioButtons[i].value;
                    break;
                }
            }
            if (persenBPJSPPH === undefined) {
                persenBPJSPPH = 5;
            }

            var total = parseInt(gajiPokok) + parseInt(tunjanganTetap);
            var total_all = total + parseInt(uangMakan) + parseInt(uangTransport) + parseInt(uangLembur);
            var bpjs_kesehatan = total * (parseInt(persenBPJSKesehatan) / 100);
            var bpjs_jht = total * (parseInt(persenBPJSJHT) / 100);
            var bpjs_pensiun = total * (parseInt(persenBPJSPensiun) / 100);
            var pph = total_all * (parseInt(persenBPJSPPH) / 100);
            document.getElementById('bpjs_kesehatan').value = bpjs_kesehatan;
            document.getElementById('bpjs_jht').value = bpjs_jht;
            document.getElementById('bpjs_pensiun').value = bpjs_pensiun;
            document.getElementById('pph').value = pph;
            var thp = total_all - bpjs_kesehatan - bpjs_jht - bpjs_pensiun - pph;
            document.getElementById('thp').value = thp;
            formatRupiahInputs();
        }

    </script>
@endsection
