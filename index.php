<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';
?>

<?php
echo $_SERVER['DOCUMENT_ROOT'];
?>
     <style>
::selection {
    background: var(--azul);
    color: var(--yellow);
}
.cerrar {
    position: fixed;
    top: 5px;
    right: 16px;
    background: var(--turquesa);
    padding: 10px;
    border-radius: 50%;
    font-weight: bold;
    color: var(--azul);
    cursor: pointer;
    z-index: 10;
}
.intro {
    background: rgb(99, 99, 107);
    margin: 10px;
    padding-top: 6px;
    padding-bottom: 6px;
}
#bannerhome {
    padding: 20px;
    display: flex;
    align-items: center;
    flex-direction: column-reverse;
    justify-content: flex-end;
}
h2.intro {
    color: rgb(246, 250, 244)!important;
    padding: 12px;
    background-color: rgb(255, 0, 183);
}
.intro.class2 {
    font-style: italic;
    font-weight: bold;
    font-size: medium;
    color: white
    ;
}
.intro.class2 a{
    color: white;
}
.intro.class3 {
    font-size: 10px;
    border: solid 20px;
    border-radius: 10px;
    border-color: var(--turquesa);
    padding: 15px;
}
.intro div{
    filter: blur(2px);
}
div .intro {
    text-align: center;
}
.intro, li, .coma{
    font-weight: bold;
}
.herencias > p {
    text-align: center;}
.herencias p {
    background: red;
}
em {
    position: relative;
    bottom: 50px;
    color: blueviolet;
}
.arana {
    position: absolute;
    top: 30px;
    right: 50px;
    z-index: -1;
}
h1 {
    color: #f7fcff;
    font-size: 35px;
    position: fixed;
    top: 60px;
    left: 30px;
}
.divflex{
    background-color: var(--yellow);
    display: flex;
    padding: 5px;
    flex-wrap: nowrap;
    flex-direction: row;
    align-items: stretch;
}
.herencias {
    display: inline-block;
}
.divpadre {
    background: #d7e4ef;
}
p:first-child {
    background: rgb(136, 136, 156);
}
.parrafofirstletter p:first-letter {
    color: crimson;
}
    </style>

   <section id="bannerhome">
        <h1>Hola me llamo Claire</h1>
        <h2><?php echo "Hola Carlos este es mi primer contacto con php";?></h2>
        <h2 class="intro">Hoy es <?php echo date ("d/M/Y/s") ;?></h2>
        <h2 class="intro">Hoy es <?php echo date("F j, Y, g:i a");?></h2>
     <?php
        $curso = "Curso de SEO T??cnico";
        $seo = "google";
        if ($seo == "google")
        echo "$curso" . " en Asdrubal Academy " . "clase PHP";
    ?>
    <?php
        $num = 10;
        if($num > 6){
         echo '</p>El n??mero es mayor que 6';
        }
        elseif($num == 6){
        echo '</p>El n??mero es igual que 6';
       }
        else {
        echo '</p> El n??mero NO es mayor que 6';
        }
    ?>

        <div class="intro">Estoy empezando el curso de SEO T??cnico en Asdrubal Academy
            <div>div para ver la class1  .class2</div>
        </div>
        <div class="medidas">
        <p class="coma">Descubre las <b style="color: var(--azul); font-style: italic;">habilidades</b> del <a href="seo-tecnico.html">SEO T??cnico</a></p>
        </div>
        <img style="padding: 30px; z-index: -2;" src="/imagenes/imagen-seo-tecnico.png" alt="habilidades del SEO T??cnico">
    </section>
    <section id="cuerpo">
        <div class="divflex" title="este div tiene un background amarillo">
            <h2 style="color: var(--azul);">Como se desarrolla el curso de SEO</h2>
            <h2 class="intro"style="color: var(--azul);">Este <em>H2</em> es element class y posici??n relativa</h2>
            <p> dolor sit amet, consectetur adipiscing elit. Ut ultrices massa vitae nibh blandit, eget pellentesque libero porttitor. Proin hendrerit id orci quis rutrum. Quisque tincidunt felis eget sem vulputate, ut accumsan leo venenatis. Proin molestie lectus at enim mollis, et iaculis ipsum faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi malesuada arcu nisl, porta volutpat turpis cursus et. Cras ipsum arcu, dignissim viverra libero nec, lobortis convallis nisi.

            Phasellus pulvinar lobortis tortor vel mollis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed dapibus diam sem, vitae eleifend diam pretium dictum. Morbi molestie, orci ut rutrum aliquet, diam nunc pharetra eros, vel dictum libero risus dignissim libero. Duis id posuere enim. Phasellus sit amet nulla posuere, iaculis metus sit amet, aliquet neque. Sed tristique lacinia lorem in hendrerit. Integer tempor urna nibh, vel tristique nisi congue a.

            Ut in eleifend lorem.</p>
            <p class="intro class2">ipsum dolor sit amet, consectetur adipiscing elit. Ut ultrices massa vitae nibh blandit, eget pellentesque libero porttitor. Proin hendrerit id orci quis rutrum. Quisque tincidunt felis eget sem vulputate, ut accumsan leo venenatis. Proin molestie lectus at enim mollis, et iaculis ipsum faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi malesuada arcu nisl, porta volutpat turpis cursus et. Cras ipsum arcu, dignissim viverra libero nec, lobortis convallis nisi.

            Phasellus pulvinar lobortis tortor vel mollis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed dapibus diam sem, vitae eleifend diam pretium dictum. Morbi molestie, orci ut rutrum aliquet, diam nunc pharetra eros, vel dictum libero risus dignissim libero. Duis id posuere enim. Phasellus sit amet nulla posuere, iaculis metus sit amet, aliquet neque. Sed tristique lacinia lorem in hendrerit. Integer tempor urna nibh, vel tristique nisi congue a.

            Ut in eleifend lorem.</p>
            <p class="intro class3">dolor sit amet, consectetur adipiscing elit. Ut ultrices massa vitae nibh blandit, eget pellentesque libero porttitor. Proin hendrerit id orci quis rutrum. Quisque tincidunt felis eget sem vulputate, ut accumsan leo venenatis. Proin molestie lectus at enim mollis, et iaculis ipsum faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi malesuada arcu nisl, porta volutpat turpis cursus et. Cras ipsum arcu, dignissim viverra libero nec, lobortis convallis nisi.

            Phasellus pulvinar lobortis tortor vel mollis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed dapibus diam sem, vitae eleifend diam pretium dictum. Morbi molestie, orci ut rutrum aliquet, diam nunc pharetra eros, vel dictum libero risus dignissim libero. Duis id posuere enim. Phasellus sit amet nulla posuere, iaculis metus sit amet, aliquet neque. Sed tristique lacinia lorem in hendrerit. Integer tempor urna nibh, vel tristique nisi congue a.

            Ut in eleifend lorem. Praesent aliquam fermentum sapien, quis suscipit lorem eleifend nec. Phasellus nec congue mauris, at hendrerit libero. Integer non lacus tincidunt, consectetur eros at, interdum odio. Praesent hendrerit augue eget mi finibus vehicula. Fusce placerat porta vehicula. Praesent id augue sem. Donec varius at sem et efficitur. Nunc feugiat posuere quam, et fermentum ex mattis et.

            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Maecenas placerat at turpis sit amet efficitur. Mauris mauris lorem, consequat quis tincidunt ornare, dignissim non risus. Duis vitae accumsan leo. Nullam interdum, magna vel accumsan fringilla, lacus orci laoreet enim, nec laoreet leo quam a risus. Maecenas auctor non est a dapibus. Suspendisse non semper leo, a lobortis risus. Vestibulum volutpat dui ut semper hendrerit. Morbi nisl magna, hendrerit quis lacus ac, imperdiet consectetur tortor. Vestibulum consectetur risus ac orci placerat porta. Duis blandit dapibus fringilla. Morbi porttitor quis purus condimentum rhoncus. Praesent vel ultricies urna.

             In non purus sodales, dapibus enim ut, venenatis lacus. Nunc elementum rutrum dolor nec aliquet. Quisque ante sapien, fermentum in justo vitae, consectetur interdum nisi. Fusce blandit commodo sapien nec interdum. Quisque elementum dapibus dolor sit amet volutpat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque tincidunt, ante sit amet tempor lobortis, mauris nulla sollicitudin dui, et dignissim diam ligula vel tellus. Curabitur tincidunt ante sed dui feugiat malesuada. Nunc tincidunt, elit vel vulputate euismod, lacus odio accumsan mi, non feugiat eros ligula eget mauris. In vehicula orci lorem, vel fermentum justo posuere sit amet. Aenean blandit ac dui vel convallis. Fusce euismod odio vel leo tincidunt aliquam. Nunc accumsan bibendum ex, quis tempus diam porttitor vitae. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;</p>
        </div>
        <img class="arana" src="/imagenes/arana.png">
        <div class="divpadre">
            <a href="https://www.agenceglobalweb.com/"></a>
            <div class="parrafofirstletter">Esto es un div hijo</div>
            <p>esto des un parrafo hijo</p>
            <p>segundo parrafo hijo</p>
            <p>tercer parrafo hijo</p>
            <div>
                <div>este es otro div dentro</div>
                <div><p>esto es otro div con un p??rrafo y un <span>span</span></p></div>
            </div>
                <p>cuarto p??rrafo</p>
        </div>
    </section>
    <div class="herencias">
        <div class="parrafo"><p>parrafo 1 que pertence a p??rrafo</p>
        </div>
    <p>parrafo 2 que pertenece a herencias</p>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.php';
?>
