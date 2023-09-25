<?php
include_once('../components/header.php');
?>
<main>
    <section class="sectionUmSobre">
        <div class="containerGeralCursos">
            <div class="divTitleProjetos">
                <h2 class="tituloProjetos" style="color: #FFF;">Transparência e Documentação</h2>
                <h2 class="subTituloProjetos" style="color: #FFF; text-align: center; font-size: 18px">Comprometidos com a transparência, fornecemos acesso a documentos importantes que demonstram nosso compromisso com a responsabilidade financeira e a missão do Instituto XP.</h2>
            </div>
            <div class="geralEnvolvase">
                <div class="containerGeralTransparencia">
                    <span class="tituloGeralTransparencia">
                        Estatuto
                    </span>
                    <a href="#" class="buttonGrayTransparencia">VER MAIS</a>
                </div>
                <div class="containerGeralTransparencia">
                    <span class="tituloGeralTransparencia">
                        Relatórios anuais
                    </span>
                    <a href="#" class="buttonGrayTransparencia">VER MAIS</a>
                </div>
                <div class="containerGeralTransparencia">
                    <span class="tituloGeralTransparencia">
                        Demonstrações contábeis
                    </span>
                    <a href="#" class="buttonGrayTransparencia">VER MAIS</a>
                </div>
            </div>
            <br><br>
        </div>
    </section>
    <section class="sectionUm" style="background-color: #ECECEC;">
        <div class="container sectionAboutUs">
            <div class="divTitleProjetos">
                <h2 class="tituloProjetos">Entre em contato para mais informações</h2>
            </div>
            <div class="formTransparencia">
                <div class="textForm">Se você tiver alguma dúvida ou precisar de mais informações, entre em contato conosco através do <span style="color: #f56c87;">formulário de contato ao lado</span>.</div>
                <div class="formInternoTransparencia">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nome</label>
                        <input type="nome" class="form-control" id="exampleFormControlInput1" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">E-mail</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Mensagem</label>
                        <textarea class="form-control" id="mensagem" rows="3"></textarea>
                    </div>
                    <div style="display: flex; justify-content: center; align-items:center;margin-top: 15px;">
                        <a href="#" class="buttonBlue" style="background-color: #1F1F5C;">ENVIAR</a>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </section>
</main>
<?php
include_once('../components/footer.php');
?>