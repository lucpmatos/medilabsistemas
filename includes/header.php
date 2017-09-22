<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<title>Medilab Sistemas</title>
</head>
<body>

<div id="total-header">
        <div id="topo-header">
            <nav id="navtop" class="navtop-estilo">
                <a href="index.php"><img src="img/medilab_logo.png" alt="Medilab Sistemas" title="Medilab Sistemas"></a>
                <p>Antecipando soluções em medicina.
                    <p>
            </nav>
            <!-- nav-top -->
            <nav id="navbottom" class="navbottom-estilo">

                <a href="index.php"><img id="mlogo" class="mlogo" src="img/m_logo.png" alt="Medilab Sistemas"></a>
                <a href="index.php">Início</a>

                <div class="dropdown">
                    <button class="dropbtn">Soluções <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-content">
                        <h5>Gestão de Imagens</h5>
                        <a href="#">PACS</a>
                        <a href="#">Telerradiologia</a>
                        <h5>Gestão de Clínicas</h5>
                        <a href="#">RIS</a>
                        <h5>Sob Demanda</h5>
                        <a href="#">Servidor de Impressão</a>
                        <a href="#">Servidor de Gravação</a>
                    </div>
                    <!-- fecha dropdown content -->
                </div>
                <!-- fecha dropdown -->
                <a href="loja/index.php">Loja</a>
                <a href="http://medilab.net.br/" target="new">Blog</a>
                <a href="#" class="waves-light">Empresa</a>
                <a href="#" data-toggle="modal" data-target="#myModal">Contato</a>
                <a href="#">Trabalhe Conosco</a>
                <div class="dropdown">
                    <button class="dropbtn">Idioma <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="#"><img src="http://medilab.net.br/wp-content/uploads/2017/02/flags_brasil.png" alt="Português Brasileiro"> Português</a>
                        <a href="#"><img src="http://medilab.net.br/wp-content/uploads/2017/02/flags_espanha.png" alt="Espanhol"> Español</a>
                    </div>
                    <!-- fecha dropdown content -->
                </div>
                <!-- fecha dropdown -->
            </nav>
            <!-- fecha nav bottom -->
        </div>
        <!-- fecha topo -->
    </div>
    <!-- fecha total -->

    <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Entre em contato conosco</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div><!-- modal header -->
      <div class="modal-body">
        <form>
            <div class="form-group">
                <label for="nome">Seu Nome:</label>
                <input type="nome" class="form-control" id="nome"><br>
                <label for="email">Seu Email:</label>
                <input type="email" class="form-control" id="email"><br>
            </div><!-- form group -->
            <button type="submit" class="btn btn-success-mdlb">Enviar</button>
        </form>
      </div><!-- modal body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div><!-- modal footer -->
    </div><!-- modal content -->
  </div><!-- modal dialog -->
</div><!-- myModal -->


    <script type="text/javascript">
        //ABRE FUNÇÃO NAV
        document.onscroll = function navFunc() {
            var nav = document.getElementById('navtop');
            if (window.pageYOffset > 1) {
                nav.classList.add("navtop-scrolled");
            } else {
                nav.classList.remove("navtop-scrolled");
            }

            var nav = document.getElementById('navbottom');
            if (window.pageYOffset > 1) {
                nav.classList.add("navbottom-scrolled");
            } else {
                nav.classList.remove("navbottom-scrolled");
            }

            var div = document.getElementById('mlogo');
            if (window.pageYOffset > 1) {
                div.classList.add("mlogo-scrolled");
            } else {
                div.classList.remove("mlogo-scrolled");
            }

        } //FECHA FUNÇÃO NAV

    </script>

</body>
</html>