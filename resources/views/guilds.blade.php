<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Servidores</title>
    <link rel="shortcut icon" href="https://img.icons8.com/material-sharp/24/fa314a/source-code.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('assets/css/guild.css')}}">
    <script>
    $(document).ready(function(){
        // Activate tooltip
        $('[data-toggle="tooltip"]').tooltip();
        
        // Select/Deselect checkboxes
        var checkbox = $('table tbody input[type="checkbox"]');
        $("#selectAll").click(function(){
            if(this.checked){
                checkbox.each(function(){
                    this.checked = true;                        
                });
            } else{
                checkbox.each(function(){
                    this.checked = false;                        
                });
            } 
        });
        checkbox.click(function(){
            if(!this.checked){
                $("#selectAll").prop("checked", false);
            }
        });
    });
    </script>
</head>
<body>
<div class="container-xl">
    @if(session('sucesso'))
        <p style="margin-top: 15px;" class="alert alert-success">{{session('sucesso')}}</p>
    @endif
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
                    
					<div class="col-sm-6">
						<h2>Seus Servidores</h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Criar um servidor</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Sair</span></a>						
						<a href="{{ url('landing') }}" class="btn btn-warning"><i class="material-icons">&#xe5c4;</i><span>Voltar</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>Nome</th>
						<th>Membros</th>
						<th>Bots</th>
						<th>Cargos</th>
						<th>Canais texto</th>
						<th>Canais de voz</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
                    @foreach ($guilds as $guild)
                        <tr>
                            <td>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                    <label for="checkbox1"></label>
                                </span>
                            </td>
                            <td>{{ $guild['name'] }}</td>
                            <td>{{ $guild['members'] }}</td>
                            <td>{{ $guild['bots'] }}</td>
                            <td>{{ $guild['roles'] }}</td>
                            <td>{{ $guild['channel_texts'] }}</td>
                            <td>{{ $guild['channel_voice'] }}</td>
                            <td width="15%">
                                <a href="#"><i class="material-icons" data-toggle="tooltip" title="Ver">&#xE8f4;</i></a>
                                <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Excluir">&#xE872;</i></a>
                                <div id="editEmployeeModal" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="{{route('guilds.editar', ['id' => $guild['id']])}}" method="post">
                                                @csrf
                                                <div class="modal-header">						
                                                    <h4 class="modal-title">Editar servidor</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                </div>
                                                <div class="modal-body">					
                                                    <div class="form-group">
                                                        <label>Nome</label>
                                                        <input name="name" type="text" class="form-control" required>
                                                    </div>				
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                                                    <input type="submit" class="btn btn-info" value="Salvar">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="deleteEmployeeModal" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="{{ route('guilds.delete', ['id' => $guild['id']]) }}">
                                                @csrf
                                                <div class="modal-header">						
                                                    <h4 class="modal-title">Sair do servidor</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                </div>
                                                <div class="modal-body">					
                                                    <p>Você tem certeza que deseja sair deste servidor?</p>
                                                    @if (1 == 2)
                                                        <p class="text-warning"><small>Essa ação não pôde ser concluida.</small></p>
                                                    @endif
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                                                    <input type="submit" class="btn btn-danger" value="Deletar">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
				</tbody>
			</table>
			<div class="clearfix">
				<div class="hint-text">Exibindo <b>6</b> de <b>25</b> servidores</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div>
		</div>
	</div>        
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="{{ route('guild') }}" method="POST" class="login-form">
				@csrf
				<div class="modal-header">						
					<h4 class="modal-title">Criar servidor</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Nome</label>
						<input name="name" type="text" class="form-control" required>
					</div>				
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
					<input type="submit" class="btn btn-success" value="Criar">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->

<!-- Delete Modal HTML -->

</body>
</html>