<aside class="side-menu">
    
    <?php if(isset($_SESSION['isadmin']) && $_SESSION['isadmin'] == true) { ?>
        <section class="mas-vendidos">
            <h3>Herramientas</h3>
            <ul>
                <li><a class="btna btna-default" href="<?php echo constant('URL'); ?>administracion/add">Agregar usuario</a></li>
                <li><a class="btna btna-default" href="<?php echo constant('URL'); ?>administracion/list">Listar usuarios</a></li>
            </ul>
        </section>
        <section class="mas-populares">
            <ul>
                <li><a class="btna btna-default" href="<?php echo constant('URL'); ?>libreria/add">Agregar libro</a></li>
                <li><a class="btna btna-default" href="<?php echo constant('URL'); ?>libreria/list">Listar libros</a></li>
            </ul>
        </section>
    <?php } else { ?>
        <section class="mas-vendidos">
            <h3>Top 3 autores</h3>
            <ul>
                <?php foreach($this->topauthors as $author) { ?>
                    <li><?php echo $author; ?></li>
                <?php } ?>
            </ul>
        </section>
        <section class="mas-populares">
            <h3>Más populares</h3>
            <?php if (isset($this->randbook) && $this->randbook != null) { ?>
                <div class="libro">
                    <img src="<?php echo 'data:image/jpg;base64,' . base64_encode($this->randbook->image) ?>" alt="<?php echo $this->randbook->title; ?>">
                    <span class="nombre"><?php echo $this->randbook->title; ?></span>
                    <span class="autor"><?php echo $this->randbook->author; ?></span>
                    <a href="<?php echo constant('URL'); ?>catalogo/book/<?php echo $this->randbook->isbn; ?>" class="btna btna-default">Ver</a>
                </div>
            <?php } ?>
        </section>
    <?php } ?>
</aside>