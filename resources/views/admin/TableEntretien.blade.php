<div class="container-fluid">
    <div class="card table-card">
        <div class="card-header">

            <div class="row">
                <div class="col-md-6">
                    <h3>Candidats qui ont postulé </h3>
                </div>
            </div>

        </div>

        <div class="card-body px-0 py-0">
            <div class="table-responsive">
                <div class="session-scroll" style="height:478px;position:relative;">
                    <table class="table table-hover m-b-0">
                        <thead>
                            <tr>
                                <th><span>Stagiaire</span></th>
                                <th><span>Entreprise</span></th>
                                <th><span>Etablissement</span></th>
                                <th><span>Status</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($interviewData as $data)
                                <tr>
                                    <td>{{ $data->nom . ' ' . $data->prenom }}</td>
                                    <td>{{ $data->entreprise }}</td>
                                    <td>{{ $data->etablissement }}</td>
                                    <td>{{ $data->status === 1 ? 'postulé' : '' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
