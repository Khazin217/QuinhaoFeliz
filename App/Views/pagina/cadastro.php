<form action="formulario" class="form">
    <h1 class="titulo">Faça seu cadastro</h1>
        <div>
            <label for="Nome">Nome: </label>
            <input type="text" id="nome" name="nome" placeholder="Nome completo"> <br>

            <label for="Email">E-mail: </label>
            <input type="email" id="email" name="email" placeholder="Digite seu e-mail"> <br>

            <label for="Senha">Senha: </label>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha"> <br>

            <label for="Senha">Confirma Senha: </label>
            <input type="password" id="senha" name="senha" placeholder="Confirme sua Senha.."> <br>

            <a class="link_login" style="width: 10px;" href="<?=URL?>/pagina/login">Já possui uma conta? - Faça Login. </a>

            <button class="botao" style="left: center;" type="submit" href="<?=URL?>/pagina/login">Cadastrar</button>
        </div>
</form>