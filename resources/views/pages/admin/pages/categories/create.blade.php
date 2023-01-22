@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
                <div class="breadcrumb-title pr-3">Catégories</div>
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
                        {{-- <button type="button" class="btn btn-primary">Liste</button> --}}
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card border-lg-top-danger">
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <div><i class='bx bxs-user mr-1 font-24 text-danger'></i>
                                </div>
                                <h4 class="mb-0 text-danger">Créer une catégorie</h4>
                            </div>
                            <hr />
                            <form class="form-body" action="{{ route('admin.category.store') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Nom de la catégorie</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"> <span class="input-group-text bg-transparent"><i
                                                    class='bx bx-user'></i></span>
                                        </div>
                                        <input type="text" class="form-control border-left-0"
                                            placeholder="Entrez le nom de la catégorie" name="name">
                                        @error('name')
                                            <p>{{ $message }} </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"> <span class="input-group-text bg-transparent"><i
                                                    class='bx bx-user'></i></span>
                                        </div>
                                        <input type="text" class="form-control border-left-0"
                                            placeholder="Entrez la description de la catégorie" name="description">

                                        @error('description')
                                            <p>{{ $message }} </p>
                                        @enderror
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-danger px-5">Ajouter</button>
                            </form>
                        </div>
                        <hr>
                        <div>
                            <h4>Liste des catégories</h4>
                            <div class="row">
                                @forelse ($categories as $category)
                                    <a href="">
                                        <div class="col-12 col-lg-3 col-xl-3 m-2">
                                            <div class="card bg-info radius-15">
                                                <div class="card-body">
                                                    <h5 class="text-white">{{ $category->name }}</h5>
                                                    <div class="row">
                                                        <a class="btn btn-block btn-success radius-15 col-md-5 m-0 mr-2"
                                                            href="{{ route('admin.category.{category}.show', ['category' => $category->routingKey()]) }} ">
                                                            Liste</a>
                                                        <a class="btn btn-block btn-danger radius-15 col-md-5 m-0 ml-2"
                                                            href="{{ route('admin.category.{category}.destroy', ['category' => $category->routingKey()]) }} ">
                                                            Supprimer</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @empty
                                    <p>La liste des catégories est vide.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
