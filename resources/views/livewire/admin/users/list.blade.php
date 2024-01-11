<div>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-12 col-sm-6 my-2">
                    <div class="card-tools">
                        <div style="width: 250px;">
                            <form class="input-group input-group-sm" action="" method="post">
                                @csrf   
                                <input type="text" name="filter" value="" class="form-control float-right" placeholder="Pesquisar">
                
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                      </div>
                </div>
                <div class="col-12 col-sm-6 my-2 text-right">
                    <a href="" class="btn btn-sm btn-default"><i class="fas fa-plus mr-2"></i> Cadastrar Novo</a>
                </div>
            </div>
        </div>        
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-12">                
                    mensagem
                </div>            
            </div>
            
                <table class="table table-bordered table-striped projects">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Perfil</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                        @forelse ($users as $user)
                            <tbody wire:key="{{ $user->id }}">
                                <tr style="">
                                    
                                    <td class="text-center">
                                        <a href="" data-title="" data-toggle="lightbox">
                                            <img alt="" class="table-avatar" src="">
                                        </a>
                                    </td>
                                    <td>{{$user->name}}</td>
                                    <td>cpf</td>
                                    <td>funcao</td>
                                    <td>
                                        <input type="checkbox" data-onstyle="success" data-offstyle="warning" data-size="mini" class="toggle-class" data-id="" data-toggle="toggle" data-style="slow" data-on="<i class='fas fa-check'></i>" data-off="<i style='color:#fff !important;' class='fas fa-exclamation-triangle'></i>" >
                                        
                                            <a target="_blank" href="" class="btn btn-xs btn-success text-white"><i class="fab fa-whatsapp"></i></a>
                                    
                                        <form class="btn btn-xs" action="" method="post">
                                            @csrf
                                            <input type="hidden" name="nome" value="">
                                            <input type="hidden" name="email" value="">
                                            <button title="Enviar Email" type="submit" class="btn btn-xs text-white bg-teal"><i class="fas fa-envelope"></i></button>
                                        </form> 
                                        <a href="" class="btn btn-xs btn-info text-white"><i class="fas fa-search"></i></a>
                                        <a href="" class="btn btn-xs btn-default"><i class="fas fa-pen"></i></a>
                                        <button type="button" class="btn btn-xs btn-danger text-white j_modal_btn" data-id="" data-toggle="modal" data-target="#modal-default">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        @empty
                            <div class="row mb-4">
                                <div class="col-12">                                                        
                                    <div class="alert alert-info p-3">
                                        Não foram encontrados registros!
                                    </div>                                                        
                                </div>
                            </div>
                        @endforelse                    
                        
                        
                                    
                </table>
            
        </div>
        <div class="card-footer paginacao">  
            {{ $users->links() }}          
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card --> 
</div>
