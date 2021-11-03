<?php
require_once 'CallAPI.php';
//$abelha = CallAPI('GET', 'http://localhost:80/api/polinizacao/' . $_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Collapsible sidebar using Bootstrap 4</title>
    <link rel="stylesheet" href="../../../apiario_test/bootstrap.css">
    <link rel="stylesheet" href="../../../apiario_test/style.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
</head>
<body>

<div class="wrapper">

    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>API ARIO</h3>
            <h4>Pesquisas</h4>
        </div>
        <ul class="list-unstyled components bg-dark">
            <li>
                <a href="index.php">Abelhas</a>
            </li>
            <li>
                <a href="meses.php">Meses</a>
            </li>
        </ul>
    </nav>
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span class="texto_botao_menu">Menu</span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>
            </div>
        </nav>

        <span class="nome">Escolher meses de floração</span>

        <form method="get" action="floracao.php">
            <div class="row">

                <div class="btn-group-toggle col-3" data-toggle="buttons">
                    <label class="btn btn-secondary botao_check  active">
                        <input type="checkbox" checked name="mes[]" value="1"> Janeiro
                    </label>
                </div>
                <div class="btn-group-toggle col-3" data-toggle="buttons">
                    <label class="btn btn-secondary botao_check  active">
                        <input type="checkbox" checked name="mes[]" value="2"> Fevereiro
                    </label>
                </div>
                <div class="btn-group-toggle col-3" data-toggle="buttons">
                    <label class="btn btn-secondary botao_check  active">
                        <input type="checkbox" checked name="mes[]" value="3"> Março
                    </label>
                </div>
                <div class="btn-group-toggle col-3 cent" data-toggle="buttons">
                    <label class="btn btn-secondary botao_check  active ">
                        <input type="checkbox" checked name="mes[]" value="4"> Abril
                    </label>
                </div>
                <!-- Force next columns to break to new line at md breakpoint and up -->
                <div class="w-100 d-none d-md-block"></div>


                <div class="btn-group-toggle col-3" data-toggle="buttons">
                    <label class="btn btn-secondary botao_check  active">
                        <input type="checkbox" checked name="mes[]" value="5"> Maio
                    </label>
                </div>
                <div class="btn-group-toggle col-3" data-toggle="buttons">
                    <label class="btn btn-secondary botao_check  active">
                        <input type="checkbox" checked name="mes[]" value="6"> Junho
                    </label>
                </div>
                <div class="btn-group-toggle col-3" data-toggle="buttons">
                    <label class="btn btn-secondary botao_check  active">
                        <input type="checkbox" checked name="mes[]" value="7"> Julho
                    </label>
                </div>
                <div class="btn-group-toggle col-3" data-toggle="buttons">
                    <label class="btn btn-secondary botao_check  active">
                        <input type="checkbox" checked name="mes[]" value="8"> Agosto
                    </label>
                </div>
                <!-- Force next columns to break to new line at md breakpoint and up -->
                <div class="w-100 d-none d-md-block"></div>

                <div class="btn-group-toggle col-3" data-toggle="buttons">
                    <label class="btn btn-secondary botao_check  active">
                        <input type="checkbox" checked name="mes[]" value="9"> Setembro
                    </label>
                </div>
                <div class="btn-group-toggle col-3" data-toggle="buttons">
                    <label class="btn btn-secondary botao_check  active">
                        <input type="checkbox" checked name="mes[]" value="10"> Outubro
                    </label>
                </div>
                <div class="btn-group-toggle col-3" data-toggle="buttons">
                    <label class="btn btn-secondary botao_check  active">
                        <input type="checkbox" checked name="mes[]" value="11"> Novembro
                    </label>
                </div>
                <div class="btn-group-toggle col-3" data-toggle="buttons">
                    <label class="btn btn-secondary botao_check  active">
                        <input type="checkbox" checked name="mes[]" value="12"> Dezembro
                    </label>
                </div>
                <!-- Force next columns to break to new line at md breakpoint and up -->
                <div class="w-100 d-none d-md-block"></div>

            </div>

<!---->
<!--            <table>-->
<!---->
<!--                <tr>-->
<!--                    <td class="bg-dark"><label>Janeiro<br/><input type="checkbox" name="mes[]" value="1"></label></td>-->
<!--                    <td class="bg-dark"><label>Fevereiro<br/><input type="checkbox" name="mes[]" value="2"></label></td>-->
<!--                    <td class="bg-dark"><label>Março<br/><input type="checkbox" name="mes[]" value="3"></label></td>-->
<!--                    <td class="bg-dark"><label>Abril<br/><input type="checkbox" name="mes[]" value="4"></label></td>-->
<!--                </tr>-->
<!---->
<!--                <tr>-->
<!--                    <td><label>Maio<br/><input type="checkbox" name="mes[]" value="5"></label></td>-->
<!--                    <td><label>Junho<br/><input type="checkbox" name="mes[]" value="6"></label></td>-->
<!--                    <td><label>Julho<br/><input type="checkbox" name="mes[]" value="7"></label></td>-->
<!--                    <td><label>Agosto<br/><input type="checkbox" name="mes[]" value="8"></label></td>-->
<!--                </tr>-->
<!---->
<!--                <tr>-->
<!--                    <td><label>Setembro<br/><input type="checkbox" name="mes[]" value="9"></label></td>-->
<!--                    <td><label>Outubro<br/><input type="checkbox" name="mes[]" value="10"></label></td>-->
<!--                    <td><label>Novembro<br/><input type="checkbox" name="mes[]" value="11"></label></td>-->
<!--                    <td><label>Dezembro<br/><input type="checkbox" name="mes[]" value="12"></label></td>-->
<!--                </tr>-->
<!---->
<!--            </table>-->

            <br><br>

            <button>Buscar</button>
        </form>
        <p>aposdoaskd</p>

        <a href="index.php">Lista de Abelhas</a>
        <!--<a href="abelha.php">Lista de Meses</a>-->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
                integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
                crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
                integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar, #content').toggleClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>
</body>
</html>