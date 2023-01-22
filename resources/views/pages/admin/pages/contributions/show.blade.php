@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
                <div class="breadcrumb-title pr-3">Contributions</div>
                <div class="pl-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Liste</li>
                        </ol>
                    </nav>
                </div>
                <div class="ml-auto">

                    @if (!$contributions->is_validated)
                        <div class="btn-group">
                            <a
                                href="{{ route('admin.contribution.{contributions}.validate', ['contributions' => $contributions->routingKey()]) }}"><button
                                    type="button" class="btn btn-success">Valider</button></a>
                        </div>
                    @endif
                    <div class="btn-group">
                        <a
                            href="{{ route('admin.contribution.{contributions}.destroy', ['contributions' => $contributions->routingKey()]) }}"><button
                                type="button" class="btn btn-danger">Supprimer</button></a>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card radius-15">
                <div class="card-header border-bottom-0">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="mb-0"> - - - </h5>
                        </div>
                        <div class="ml-auto w-25">
                            @if ($contributions->is_validated)
                                <a href="javascript:;" class="btn btn-sm btn-light-success btn-block radius-30">
                                    validé
                                </a>
                            @else
                                <a href="javascript:;" class="btn btn-sm btn-light-warning btn-block radius-30">
                                    en attente
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="list mt-0">
                                <div class="row">
                                    <div class="row col-md-12 mb-4">
                                        <div class="col-md-6">
                                            <h4>Nom : {{ $contributions->title }}</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Categorie : {{ $contributions->Category->name }}</h4>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <p> {{ $contributions->content }} </p>
                                    </div>
                                    <div class="col-md-6 mt-2 row">
                                        <p class="col-md-12">Liste des fichiers associés
                                            <span>
                                                <a href="{{route('download.{contributions}.files', ['contributions' => $contributions->routingKey()])}}">Tout télécharger</a>
                                            </span>
                                        </p>

                                        <div class="list mt-0">
                                            <ul class="icons row">
                                                @foreach ($contributions->contributionsFiles as $contributionFile)
                                                    <a href="{{ route('download.{contributionsFiles}.show', ['contributionsFiles' => $contributionFile->routingKey()]) }} "
                                                        target="_blank">
                                                        <li class="trigger Free">
                                                            <i class="lni lni-download"></i>
                                                            <span>{{ $loop->iteration }}.{{ $contributionFile->file_extension() }}</span>
                                                        </li>
                                                    </a>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
