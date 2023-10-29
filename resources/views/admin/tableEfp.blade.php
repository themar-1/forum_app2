<div class="container-fluid">
    <div class="card table-card">
        <div class="card-header">

            <div class="row">
                <div class="col-md-6">
                    <h3>Participation par EFP</h3>
                </div>
            </div>

        </div>

        <div class="card-body px-0 py-0">
            <div class="table-responsive">
                <div class="session-scroll" style="height:478px;position:relative;">
                    <table class="table table-hover m-b-0">
                        <thead>
                            <tr>
                                <th><span>EFP</span></th>
                                <th><span>non confirmé</span></th>
                                <th><span>confirmé</span></th>
                                <th><span>attended</span></th>
                                <th><span>total</span></th>
                                <th><span>Taux de confirmation %</span></th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($dataByEFP as $data)
                            <tr>
                                <td>{{ $data->nom }}</td>
                                <td>{{ $data->status_0_count }}</td>
                                <td>{{ $data->status_1_count }}</td>
                                <td>{{ $data->status_2_count }}</td>
                                <td>{{ $data->total }}</td>
                                <td>{{ number_format(($data->status_1_count / $data->total) * 100, 2) }}%</td>
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
