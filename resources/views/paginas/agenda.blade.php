<x-layout title="">
       
        
        <form action="../salvar" method="GET">
            <div class="container text-center">
                <div class="row align-items-center">
                <div class="col">
                        
                </div>
                    <div class="card text-bg-dark p-3" style="max-width: 18rem;">
                        <div class="card-header">Agenda
                        </div>
                            <div class="card-body">
                                <p class="card-text">
                                  <label for="descricao">Descricao:</label>
                                  <textarea id="tarefa" name="tarefa" placeholder="Anotação"></textarea>
                                  <br><br>
                                  <label for="data_hora">Data e Hora:</label>
                                  <input type="datetime-local" id="data" name="data" required>    
                                  <button type="submit" class="btn btn-outline-light">Salvar</button> 
                                </p>
                                
                            </div>
                            
                        <div class="col">

                        </div>
                    </div>
                </div>
            </div>
    
        </form>

</x-layout>