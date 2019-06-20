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
                    <h3>Pedido confirmado:</h3>
                    <img class="img-libro-ped" src="<?php echo 'data:image/jpg;base64,' . base64_encode($this->orderbook->image) ?>" alt="<?php echo $this->book->title; ?>">
                    <div class=items-ped>
                        <div class="single-item-ped">
                            <span class="tit-libro-ped caract-libro">Título</span>
                            <span class="cont-tit-libro"><?php echo $this->orderbook->title; ?></span>
                        </div>
                        <div class="single-item-ped">
                            <span class="aut-libro-ped caract-libro">Autor</span>
                            <span class="cont-aut-libro"><?php echo $this->orderbook->author; ?></span>
                        </div>
                        <div class="single-item-ped">
                            <span class="edi-libro-ped caract-libro">Editorial</span>
                            <span class="cont-edi-libro"><?php echo $this->orderbook->publisher; ?></span>
                        </div>
                        <div class="single-item-ped">
                            <span class="isbn-libro-ped caract-libro">ISBN</span>
                            <span class="cont-isbn-libro"><?php echo $this->orderbook->isbn; ?></span>
                        </div>
                        <div class="single-item-ped">
                            <span class="anno-libro-ped caract-libro">Año</span>
                            <span class="cont-anno-libro"><?php echo $this->orderbook->pubdate; ?></span>
                        </div>
                        <div class="single-item-ped">
                            <span class="prec-libro-ped caract-libro">Precio</span>
                            <span class="cont-prec-libro"><?php echo $this->orderbook->price; ?> $</span>
                        </div>
                    </div>
                </section>

                <section class="form-pedido">
                    <div class="items-pedido">
                        <div class="f-param">
                            <label for="pf-nom-ape" class="nom-ape-ped">Nombre y apellidos</label>
                            <input type="text" name="ped-nomape" id="pf-nom-ape" value="<?php echo $this->ordercustomer['nomape'] ?>" readonly="readonly">
                        </div>
                        
                        <div class="f-param">
                            <label for="pf-direccion" class="dir-ped">Dirección</label>
                            <input type="text" name="ped-direccion" id="pf-direccion" value="<?php echo $this->ordercustomer['direccion'] ?>" readonly="readonly">
                        </div>
                        
                        <div class="f-param">
                            <label for="pf-email" class="email-ped">Email</label>
                            <input type="email" name="ped-email" id="pf-email" value="<?php echo $this->ordercustomer['email'] ?>" readonly="readonly">
                        </div>
                        
                        <div class="f-param">
                            <label for="pf-ntarjeta" class="ntarj-ped">Número de tarjeta</label>
                            <input type="text" name="ped-ntarjeta" id="pf-ntarjeta" value="<?php echo $this->ordercustomer['ntarjeta'] ?>" readonly="readonly">
                        </div>
                        
                        <div class="f-param">
                            <label class="mes-ped">Fecha de caducidad</label>
                            <select name="ped-mes">
                                <option value="<?php echo $this->ordercustomer['mes'] ?>"><?php echo $this->ordercustomer['mes'] ?></option>
                            </select>
                            <select name="ped-anno">
                                <option value="<?php echo $this->ordercustomer['anno'] ?>"><?php echo $this->ordercustomer['anno'] ?></option>
                            </select>
                        </div>
                        
                        <div class="f-param">
                            <label for="pf-cvc" class="cvc-ped">CVC</label>
                            <input type="number" name="ped-cvc" id="pf-cvc" value="<?php echo $this->ordercustomer['cvc'] ?>" readonly="readonly">
                        </div>
                        
                        <div class="f-param">
                            <div class="misc-ped">
                                <span><input type="checkbox" name="ped-condic" checked>He leído y acepto las condiciones de compra.</span>
                                <?php if ($this->ordercustomer['info']) { ?>
                                    <span><input type="checkbox" checked name="ped-info" onclick="javascript: return false;">Deseo recibir información sobre novedades.</span>
                                <?php } else { ?>
                                    <span><input type="checkbox" name="ped-info" onclick="javascript: return false;">Deseo recibir información sobre novedades.</span>
                                <?php } ?>
                                <?php if ($this->ordercustomer['gift']) { ?>
                                    <span><input type="checkbox" checked name="ped-regalo" onclick="javascript: return false;">Deseo el envío envuelto para regalo.</span>
                                <?php } else { ?>
                                    <span><input type="checkbox" name="ped-regalo" onclick="javascript: return false;">Deseo el envío envuelto para regalo.</span>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </main>

    <?php require 'views/base/footer.php' ?>
</body>
</html>