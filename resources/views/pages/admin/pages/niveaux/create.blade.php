@extends('layouts.admin')

@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
            <div class="breadcrumb-title pr-3">Niveaux</div>
            <div class="pl-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Classes</li>
                    </ol>
                </nav>
            </div>
            <div class="ml-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Liste</button>
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
                            <h4 class="mb-0 text-danger">Créer une classe</h4>
                        </div>
                        <hr />
                        <form class="form-body" action="{{ route('niveaux.store') }}" method="POST">
                            @csrf
                            @method('post')
                            <div class="form-group">
                                <label>Nom du niveau</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"> <span class="input-group-text bg-transparent"><i
                                                class='bx bx-user'></i></span>
                                    </div>
                                    <input type="text" class="form-control border-left-0"
                                        placeholder="Entrez le nom de la classe" name="nom" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Cycle</label>
                                <div class="input-group">
                                    {{-- <input type="text" class="form-control border-left-0" placeholder=""> --}}
                                    <select class="form-control form-control-lg" name="cycle">
                                        <option value="Primaire">Primaire</option>
                                        <option value="Collège">Collège</option>
                                        <option value="Lycée">Lycée</option>
                                        <option value="Université - Licence">Université - Licence</option>
                                        <option value="Université - Master">Université - Master</option>
                                        <option value="Université - Doctorat">Université - Doctorat</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-danger px-5">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection