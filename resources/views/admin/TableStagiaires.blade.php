<div class="container-fluid">
    <div class="card table-card">
        <div class="card-header">

            <div class="row">
                <div class="col-md-6">
                    <h3>List stagiaires</h3>
                </div>
            </div>

        </div>

        <div class="card-body px-0 py-0">
            <div class="table-responsive">
                <div class="session-scroll" style="height:478px;position:relative;">
                    <table class="table table-hover m-b-0">
                        <thead>
                            <tr>


                                <th><span>Matricule</span></th>
                                <th><span>Nom Complet</span></th>
                                <th><span>Sexe</span></th>
                                <th><span>Telephone</span></th>
                                <th><span>Filiere</span></th>
                                <th><span>Etablissement</span></th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($stagiaires as $stagiaire)
                            <tr>
                                <td>{{ $stagiaire->matricule }}</td>
                                <td>{{ $stagiaire->nom }}</td>
                                <td>{{ $stagiaire->sexe }}</td>
                                <td>{{ $stagiaire->telephone }}</td>
                                <td>{{ $stagiaire->efp }}</td>
                                <td>{{ $stagiaire->filiere }}</td>
                                <td>
                                    <a class="text-primary" href="#"><span><i class="fas fa-edit"></i></span></a>
                                    &nbsp &nbsp &nbsp
                                    <a class="text-danger"
                                        href="{{ route('admin.student.delete', ['id' => $stagiaire['id']]) }}"><span><i
                                                class="fas fa-trash-alt"></i></span></a>
                                </td>
                            </tr>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
