<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Alunos</title>
        
        <script src="js/jquery-3.3.1.js" type="text/javascript"></script>
        <script src="js/form.js" type="text/javascript"></script>
        <script src="js/jquery.mask.js" type="text/javascript"></script>
        
        <style>
            label
            {
                width: 100px;
                display: inline-block;
            }
            
            div
            {
                margin: 10px 0;
            }
            
            fieldset
            {
                width: 400px;
            }
            
            table
            {
                margin: 10px 0;
                border: 1px solid;
                border-collapse: collapse;
            }
            
            td , th
            {
                border: 1px solid;
                padding: 4px;
            }
            
            th
            {
                background-color: silver;
            }
            
            button
            {
                background-color: silver;
                font-weight: bold;
            }
            
            select
            {
                background-color: silver;
            }
            
            legend
            {
                font-weight: bold;
            }
            
            .msg-erro
            {
                color: red;
                border: 1px solid salmon;
                padding: 4px;
                display: none;
            }
            
            .input-erro
            {
                color: red;
            }
            
            .input-erro input
            {
                color: red;
            }
            
            .btn-del
            {
                color: red;
            }
            
            
        </style>
        
    </head>
    
    <body>
        <h1>Cadastro de Alunos</h1>
        
        <fieldset>
            <legend>Dados do Aluno</legend>
            
            <div class="msg-erro">
                Mensagem de erro
            </div>
            
            <div>
                <label>Nome</label>
                <input type="text" name="nome"/>
            </div>
            
            <div>
                <label>Cpf</label>
                <input type="text" name="cpf"/>
            </div>
            
            <div>
                <label>Telefone</label>
                <input type="text" name="telefone"/>
            </div>
            
            <div>
                <label>Email</label>
                <input type="text" name="email"/>
            </div>
            
            <div>
                <label>Turma</label>
                <select name="turma">
                    <option value="0">-- selecione --</option>
                    <option value="PHP1"> PHP1 </option>
                    <option value="PHP2"> PHP2 </option>
                    <option value="Mysql"> Mysql </option>
                    <option value="AJAX"> AJAX </option>
                    <option value="HTML"> HTML </option>
                </select>
            </div>
            
            <div>
                <label>Sexo</label>
                <input type="radio" name="sexo" value="M">Masculino
                <input type="radio" name="sexo" value="F">Feminino
            </div>
            
            <br>
            <button id="btn-cadastrar">Cadastrar</button>
            
        </fieldset>
        
        <table>
            
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cpf</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Turma</th>
                    <th>Sexo</th>
                    <th>Ações</th>
                </tr>
            </thead>
            
            <tbody id="lista">
                <tr>
                    <td>123</td>
                    <td>João</td>
                    <td>111.111.111-11
                    <td>41 99999-9999</td>
                    <td>joao@aluno.com</td>
                    <td>AJAX</td>
                    <td>M</td>
                    <td><a href="#" class="btn-del">[x]</a></td>
                </tr>
            </tbody>
            
        </table>
         
    </body>
</html>
