<x-layout title="">
    
    
    <div>
        
        <form action="/cadastrar/salvar" method="POST">
            @csrf   


            <div class="container text-center">
                <div class="row align-items-center">

                    <div class="col">
                        One of three columns
                    </div>

                    <div class="col">

                    <div class="card text-bg-dark p-3" style="max-width: 18rem;">
                        <div class="card-header">Login</div>
                        <div class="card-body">
                            <p class="card-text">
                                <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Cadastro</label>
                                        <input type="cadastrar" class="form-control" id="cadastrar" name="cadastrar" aria-describedby="emailHelp">
                                </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Senha</label>
                                        <input type="password" class="form-control" id="senha" name="senha">
                                    </div>
                                <button type="submit" class="btn btn-outline-light">Cadastrar</button> 
                            
            
                                </div>
                            </p>
                        </div>
                        </div>
                    
                        
                    <div class="col">
                        <div>
                            coisa aq
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-layout>