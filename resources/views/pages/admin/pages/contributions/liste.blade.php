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
                    <div class="btn-group">
                        {{-- <a href="{{ route('niveaux.create') }}"><button type="button"
                                class="btn btn-primary">Ajouter</button></a> --}}
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card radius-15">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">Classes</h4>
                    </div>
                    <hr />
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">status</th>
                                    <th scope="col">Titre</th>
                                    <th scope="col">Catégorie</th>
                                    <th scope="col">Auteur</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($contributions as $contribution)
                                    <tr>
                                        <td><i
                                                class="btn btn-sm @if ($contribution->is_validated) btn-light-success @else btn-light-warning @endif
                                             btn-block radius-30"></i>
                                        </td>
                                        <td>{{ $contribution->title }}</td>
                                        <td>{{ $contribution->Category->name }}</td>
                                        <td>{{ $contribution->Author->firstname }}</td>
                                        <td>
                                            <a
                                                href="{{ route('admin.contribution.{contributions}.show', ['contributions' => $contribution->id]) }}">
                                                suivre
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <th colspan="3">Il n'y a pas de contributions actuellement.</th>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
