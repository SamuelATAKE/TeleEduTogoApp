@extends('layouts.admin')

@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card radius-15">
                    <div class="card-body">
                        <div class="d-flex mb-2">
                            <div>
                                <p class="mb-0 font-weight-bold">Sessions</p>
                                <h2 class="mb-0">501</h2>
                            </div>
                            <div class="ml-auto align-self-end">
                                <p class="mb-0 font-14 text-primary"><i class='bx bxs-up-arrow-circle'></i> <span>1.01%
                                        31 derniers jours </span>
                                </p>
                            </div>
                        </div>
                        <div id="chart1"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card radius-15">
                    <div class="card-body">
                        <div class="d-flex mb-2">
                            <div>
                                <p class="mb-0 font-weight-bold">Visiteurs</p>
                                <h2 class="mb-0">409</h2>
                            </div>
                            <div class="ml-auto align-self-end">
                                <p class="mb-0 font-14 text-success"><i class='bx bxs-up-arrow-circle'></i> <span>0.49%
                                        31 derniers jours</span>
                                </p>
                            </div>
                        </div>
                        <div id="chart2"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card radius-15">
                    <div class="card-body">
                        <div class="d-flex mb-2">
                            <div>
                                <p class="mb-0 font-weight-bold">Page vues</p>
                                <h2 class="mb-0">2,346</h2>
                            </div>
                            <div class="ml-auto align-self-end">
                                <p class="mb-0 font-14 text-danger"><i class='bx bxs-down-arrow-circle'></i>
                                    <span>130.68% 31 derniers jours</span>
                                </p>
                            </div>
                        </div>
                        <div id="chart3"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card radius-15">
                    <div class="card-header border-bottom-0">
                        <div class="d-lg-flex align-items-center">
                            <div>
                                <h5 class="mb-lg-0">Nouveaux VS visiteurs habitués</h5>
                            </div>
                            <div class="ml-lg-auto mb-2 mb-lg-0">
                                <div class="btn-group-round">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-white">Ce mois</button>
                                        <div class="dropdown-menu"> <a class="dropdown-item" href="javaScript:;">Cette semaine</a>
                                            <a class="dropdown-item" href="javaScript:;">Cette année</a>
                                        </div>
                                        <button type="button"
                                            class="btn btn-white dropdown-toggle dropdown-toggle-split"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span
                                                class="sr-only">Toggle Dropdown</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="chart4"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card radius-15">
                    <div class="card-body">
                        <div class="d-lg-flex align-items-center">
                            <div>
                                <h5 class="mb-4">Appareil des visiteurs</h5>
                            </div>
                        </div>
                        <div id="chart5"></div>
                    </div>
                    <ul class="list-group list-group-flush mb-0">
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                            Mobile<span class="badge badge-danger badge-pill">25%</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                            Desktop<span class="badge badge-primary badge-pill">65%</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                            Tablette<span class="badge badge-warning badge-pill">10%</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection