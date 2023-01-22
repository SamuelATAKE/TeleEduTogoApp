@extends('layouts.admin')

@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
            <div class="breadcrumb-title pr-3">Blog</div>
            <div class="pl-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Articles</li>
                    </ol>
                </nav>
            </div>
            <div class="ml-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Paramètres</button>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h4 class="mb-0">Articles à valider</h4>
                </div>
                <hr />
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Auteur</th>
                                <th>Catégorie</th>
                                <th>Publié le ...</th>
                                <th>-</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($articles as $article)
                            <tr>
                                <td>{{ $article->titre }}</td>
                                <td>{{ $article->user->firstname }} {{ $article->user->lastname }}</td>
                                <td>{{ $article->categorie }}</td>
                                <td>{{ $article->created_at }}</td>
                                <td>-</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6">Aucun article nouveau pour le moment</td>
                            </tr>
                            @endforelse

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Titre</th>
                                <th>Auteur</th>
                                <th>Catégorie</th>
                                <th>Publié le ...</th>
                                <th>-</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<!--Data Tables js-->
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
			//Default data table
			$('#example').DataTable();
			var table = $('#example2').DataTable({
				lengthChange: false,
				buttons: ['copy', 'excel', 'pdf', 'print']
			});
			table.buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
		});
</script>
@endsection