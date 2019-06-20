<?php
    if (session_status() == PHP_SESSION_NONE) session_start();
    if (!isset($_SESSION['username'])) header('Location: ' . constant('URL') . 'login');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'views/base/head.php' ?>
</head>
<body>
    <?php require 'views/base/header.php';
          require 'views/base/topnav.php' ?>

    <main class="container">

        <?php require 'views/base/sidebar.php'; ?>

        <div class="flexmainct">
            <div class="pedidos">
                <section class="cabecera-libro-ped">
                    <h3>Pedido actual:</h3>
                    <img class="img-libro-ped" src="<?php echo 'data:image/jpg;base64,' . base64_encode($this->book->image) ?>" alt="<?php echo $this->book->title; ?>">
                    <div class=items-ped>
                        <div class="single-item-ped">
                            <span class="tit-libro-ped caract-libro">Título</span>
                            <span class="cont-tit-libro"><?php echo $this->book->title; ?></span>
                        </div>
                        <div class="single-item-ped">
                            <span class="aut-libro-ped caract-libro">Autor</span>
                            <span class="cont-aut-libro"><?php echo $this->book->author; ?></span>
                        </div>
                        <div class="single-item-ped">
                            <span class="edi-libro-ped caract-libro">Editorial</span>
                            <span class="cont-edi-libro"><?php echo $this->book->publisher; ?></span>
                        </div>
                        <div class="single-item-ped">
                            <span class="isbn-libro-ped caract-libro">ISBN</span>
                            <span class="cont-isbn-libro"><?php echo $this->book->isbn; ?></span>
                        </div>
                        <div class="single-item-ped">
                            <span class="anno-libro-ped caract-libro">Año</span>
                            <span class="cont-anno-libro"><?php echo $this->book->pubdate; ?></span>
                        </div>
                        <div class="single-item-ped">
                            <span class="prec-libro-ped caract-libro">Precio</span>
                            <span class="cont-prec-libro"><?php echo $this->book->price; ?> $</span>
                        </div>
                    </div>
                </section>

                <section class="form-pedido">
                    <form action="<?php echo constant('URL'); ?>catalogo/validateandbuy" method="POST">
                        <div class="items-pedido">
                            <div class="f-param">
                                <label for="pf-nom-ape" class="nom-ape-ped">Nombre y apellidos</label>
                                <input type="text" name="ped-nomape" id="pf-nom-ape">
                            </div>
                            
                            <div class="f-param">
                                <label for="pf-direccion" class="dir-ped">Dirección</label>
                                <input type="text" name="ped-direccion" id="pf-direccion">
                            </div>
                            
                            <div class="f-param">
                                <label for="pf-email" class="email-ped">Email</label>
                                <input type="email" name="ped-email" id="pf-email">
                            </div>
                            
                            <div class="f-param">
                                <label for="pf-ntarjeta" class="ntarj-ped">Número de tarjeta</label>
                                <input type="text" name="ped-ntarjeta" id="pf-ntarjeta">
                            </div>
                            
                            <div class="f-param">
                                <label class="mes-ped">Fecha de caducidad</label>
                                <select name="ped-mes">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                                <select name="ped-anno">
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                </select>
                            </div>
                            
                            <div class="f-param">
                                <label for="pf-cvc" class="cvc-ped">CVC</label>
                                <input type="number" name="ped-cvc" id="pf-cvc" min="0" max="999">
                            </div>
                            
                            <div class="f-param">
                                <input type="hidden" name="ped-isbn" value="<?php echo $this->book->isbn; ?>">
                            </div>
                            
                            <div class="f-param">
                                <div class="misc-ped">
                                    <span class="misc-txt">Marque si procede:</span>
                                    <span><input type="checkbox" name="ped-condic" required>He leído y acepto las condiciones de compra.</span>
                                    <span><input type="checkbox" name="ped-info">Deseo recibir información sobre novedades.</span>
                                    <span><input type="checkbox" name="ped-regalo">Deseo el envío envuelto para regalo.</span>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Realizar pedido">
                    </form>
                </section>
            </div>
        </div>

    </main>

    <?php require 'views/base/footer.php' ?>
</body>
</html>