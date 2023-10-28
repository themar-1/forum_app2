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
                                
                                
                                <th><span>email<a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                class="feather icon-help-circle f-16"></i></a></span></th>
                                <th><span>nom<a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                class="feather icon-help-circle f-16"></i></a></span></th>
                                <th><span>sexe<a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                class="feather icon-help-circle f-16"></i></a></span></th>
                                
                                <th><span>telephone<a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                class="feather icon-help-circle f-16"></i></a></span></th>
                                <th><span>filiere<a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                class="feather icon-help-circle f-16"></i></a></span></th>
                                <th><span>Actions<a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                class="feather icon-help-circle f-16"></i></a></span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($stg as $student)
                                    <tr>
                                        <td>{{$student['email']}}</td>
                                        <td>{{$student['nom']}}</td>
                                        <td>{{$student['sexe']}}</td>
                                        <td>{{$student['telephone']}}</td>
                                        <td>{{$student['filiere']}}</td>
                                        <td>
                                            <a class="text-primary" href="#"><span><i class="fas fa-edit"></i></span></a> &nbsp &nbsp &nbsp
                                            <a class="text-danger" href="{{ route('admin.student.delete', ['id' => $student['id']]) }}"><span><i class="fas fa-trash-alt"></i></span></a>
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