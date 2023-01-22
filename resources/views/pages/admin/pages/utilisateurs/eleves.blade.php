@extends('layouts.admin')

@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
            <div class="breadcrumb-title pr-3">Utilisateurs</div>
            <div class="pl-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Administrateurs</li>
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
                    <h4 class="mb-0">Elèves inscrits sur la plateforme</h4>
                </div>
                <hr />
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nom & Prénom(s)</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Age</th>
                                <th>Inscrit le ...</th>
                                <th>-</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                               <tr>
                                <td>{{ $user->firstname }} {{ $user->lastname }}</td>
                                <td>{{ $user->email }}</td>
                                <td>-</td>
                                <td>N/A</td>
                                <td>{{ $user->created_at }}</td>
                                <td>-</td>
                            </tr> 
                            @empty
                            <tr>
                                <td colspan="6">Aucun élève enregistré pour le moment</td>
                            </tr>
                            @endforelse
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nom & Prénom(s)</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Age</th>
                                <th>Inscrit le ...</th>
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