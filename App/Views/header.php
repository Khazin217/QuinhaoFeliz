<header>
    <div class="logo">
        <a href="<?=URL?>/pagina/home"><img src="<?=URL?>/img/Logotipo - Quinhão Feliz.png" alt="logo_Quinhao"></a>
    </div>
    <nav class="navegacao"> <!-- começo navegação -->
        <ul class="ul">
            <li><a href="<?=URL?>/pagina/home">Home</a></li>
            <li><a href="#footer" class="rolagem">Sobre Nos</a></li>
            <li><a href="#footer" class="rolagem">Contato</a></li>
        </ul>
    </nav> <!-- fim navegação -->

    <?php if(isset($_SESSION['usuario_id'])): ?>
                <span class="navbar-text">
                    <p>Olá, <?= $_SESSION['usuario_nome'] ?>, seja bem-vindo(a)!</p>
                    <a class="btn btn-sm btn-danger" href="<?=URL?>/usuarios/sair" data-tooltip="tooltip" title="Sair do sistema">Sair</a>
                </span>
    <?php else: ?>

    <div class="butoes">
        <button class="botao1"><a href="<?=URL?>/pagina/login">Entrar</a></button>
        <button class="botao_cadastra"><a href="<?=URL?>/usuarios/cadastrar">Cadastra-se</a></button>
    </div>
    <?php endif; ?>
</header>