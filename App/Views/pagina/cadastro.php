<form action="formulario" class="form">
    <h1 class="titulo" >Faça seu Cadastro</h1>
    <div>
        <label for="nome">Nome: </label>
        <input type="nome" id="nome" name="nome" placeholder="Digite seu nome" required><br><br> 
                
        <label for="Email">E-mail: </label>
        <input type="email" id="Email" name="email" placeholder="Digite seu e-mail" required><br><br>

        <label for="senha">Senha: </label>
        <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required><br><br>

        <label for="Senha">Confirma Senha: </label>
        <input type="password" id="senha" name="senha" placeholder="Confirme sua Senha.."> <br>

        <a class="link_login" href="<?=URL?>/pagina/login">Já possui uma conta? - Fazer Login.</a><br>

        <button class="botao" type="submit" href="<?=URL?>/pagina/login">Cadastrar</button>
    </div>
</form>