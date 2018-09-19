<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Alunos</title>
        
        <script src="js/jquery-3.3.1.js" type="text/javascript"></script>
        <script src="js/form.js" type="text/javascript"></script>
        
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
            
            
        </style>
        
    </head>
    
    <body>
        <h1>Cadastro de Alunos</h1>
        
        <fieldset>
            <legend>Dados do Aluno</legend>
            
            <div>
                <label>Nome</label>
                <input type="text" name="nome"/>
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
                    <option>-- selecione --</option>
                    <option> PHP1 </option>
                    <option> PHP2 </option>
                    <option> Mysql </option>
                    <option> AJAX </option>
                    <option> HTML </option>
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
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Turma</th>
                    <th>Sexo</th> 
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td>123</td>
                    <td>João</td>
                    <td>41 99999-9999</td>
                    <td>joao@aluno.com</td>
                    <td>AJAX</td>
                    <td>M</td>
                </tr>
            </tbody>
            
        </table>
         
    </body>
</html>
