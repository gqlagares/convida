<?php include( 'inc/inc.header.php' ); ?>

<?php include( 'inc/inc.nav.php' ); ?>


<!-- CONTENT -->

<div class="content">

    <div class="container">

        <section class="top">

            <div class="salutation">Olá, visitante!</div>

            <p class="msgTop">Colocamos aqui todas as informações sobre o pacote escolhido. Você pode alterá-lo à vontade e, se ainda precisar de apoio, clique no botão do Chat para falar conosco.</p>

            <div class="addUnit">

                <input type="text" class="srcAddUnit" id="srcAddUnit" placeholder="Adicionar unidade">
                
                <ul class="wrpUnitTags">

                    <li class="unitTag noselect">Sheraton, Leblon, Rio de Janeiro<span class="closeTag"><img src="img/icon_close.png" alt=""></span></li>
                    <li class="unitTag noselect">Maguje, Jardim Botânico, Rio de Janeiro<span class="closeTag"><img src="img/icon_close.png" alt=""></span></li>
                    
                </ul>
            </div>



            <form action="" class="searchForm" id="searchForm">

                <!-- RENGE DATE -->

                <div class="rangeDate">

                    <figure>

                        <img src="img/icon_calendar.png" alt="">

                    </figure>
                    
                    <input type="text" class="initialDate" name="initialDate" id="initialDate" value="22/01/21"><span>,</span>
                    <input type="text" class="firstDate" name="firstDate" id="firstDate" value="23/01/21">

                    
                </div>


                
                <!-- FILTER OPTIONS -->

                <div class="filterOptions">

                    <!-- convidados -->

                    <div class="wrpFilter">

                        <label for="guests" class="titleFilterOpt">Convidados</label>

                        <div class="custom-select">

                            <select name="guests" id="guests" >

                                <option value="0">50</option>

                            </select>

                        </div>

                    </div> <!-- end wrp filter -->


                    <!-- turno -->

                    <div class="wrpFilter">

                        <label for="shift" class="titleFilterOpt">Turno</label>

                        <div class="custom-select">

                            <select name="shift" id="shift">

                                <option value="1">Manhã</option>
                                <!-- <option value="2">Tarde</option>
                                <option value="3">Noite</option> -->
                            </select>
                            
                        </div>

                    </div> <!-- end wrp filter -->


                    <!-- ordenar -->
                    
                    <div class="wrpFilter">

                        <label for="order" class="titleFilterOpt">Ordenar por</label>

                        <div class="custom-select">
                            <select name="order" id="order">

                                <option value="0">Mais vendidos</option>

                            </select>
                        </div>

                    </div> <!-- end wrp filter -->

                </div> <!-- end filter options -->



                <!-- EXTERNAL OPTIONS CHECK -->

                <div class="externalOptions"> 

                    <label for="extOptCheck">Opções externas (festa em casa, clube, play, outros)</label>
                    <input name="extOptCheck" id="extOptCheck" type="checkbox">

                </div>




                <button class="btnSearch">Buscar</button>


            </form> <!-- end search form -->


        </section> <!-- end top section -->


    </div> <!-- end container -->





    <!-- LISTAGEM DE RESULTADOS -->

    <section class="result">
       
        <div class="container fullMobileCase">
    
            <p class="dateResults dataRes01">Dia 22/01/2021 | Sexta-feira</p>

    
            <ul class="listItem owl-carousel owl-results">

                <li class="itemRes item">

                    

                    <div class="wrpResults">

                        <div class="headerResultArea">
    
                            <figure>
        
                                <img class="tagPromo tag" src="img/tag_promo.png" alt="">
                                <img class="itemLogo" src="img/results/logo_casa_em_festa.png" alt="">

                            </figure>

                            <div class="countdownTag">
                                <span>restam</span>
                                <span>03</span>
                                <span>dias</span>
                            </div>

                            <span class="infoShowcase">* 5 ofertas <span>encontradas nesta casa</span></span>
                            <p class='counter'>1/5</p>
                        </div>
    
    
            
                        <div class="showcase testaCarousel owl-carousel">

                            <div class="showcaseRes">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->

                                    <div class="trashAndLikeBtn">
                                        <span class="trash"><img src="img/icon_trash.png" alt="" width="13" height="13"></span>
                                        <span class="like"><img src="img/icon_like.png" alt="" width="13" height="13"></span>
                                    </div>

                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
                                    <a href="" class="btn btn-01">Reserve GRÁTIS*</a>
                                    
                                </div>  <!-- end item details -->

                            </div>

                            <div class="showcaseRes">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->

                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt="" width="13" height="13"></span>
                                        <span class="like"><img src="img/icon_like.png" alt="" width="13" height="13"></span>
                                    </div>

                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
                                    <a href="" class="btn btn-01">Reserve GRÁTIS*</a>
                                    
                                </div>  <!-- end item details -->

                            </div>

                            <div class="showcaseRes">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->

                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt="" width="13" height="13"></span>
                                        <span class="like"><img src="img/icon_like.png" alt="" width="13" height="13"></span>
                                    </div>

                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
                                    <a href="" class="btn btn-01">Reserve GRÁTIS*</a>
                                    
                                </div>  <!-- end item details -->

                            </div>

                            <div class="showcaseRes">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->

                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt="" width="13" height="13"></span>
                                        <span class="like"><img src="img/icon_like.png" alt="" width="13" height="13"></span>
                                    </div>

                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
                                    <a href="" class="btn btn-01">Reserve GRÁTIS*</a>
                                    
                                </div>  <!-- end item details -->

                            </div>

                            <div class="showcaseRes">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->

                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt="" width="13" height="13"></span>
                                        <span class="like"><img src="img/icon_like.png" alt="" width="13" height="13"></span>
                                    </div>

                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
                                    <a href="" class="btn btn-01">Reserve GRÁTIS*</a>
                                    
                                </div>  <!-- end item details -->

                            </div>

                            
                        
                        </div>
    
    
                        
                    
                    </div> <!-- end wrp results -->
                    
                    
    
    
                </li> <!-- end item -->

                <li class="itemRes item">

                    <div class="wrpResults">

                        <div class="headerResultArea">
    
                            <figure>
        
                                <img class="tagExtOpt tag" src="img/tag_external_options.png" alt="">
                                <img class="itemLogo" src="img/results/logo_quintal_festas.png" alt="">
                            
                            </figure>

                            <span class="infoShowcase">* 3 ofertas <span>encontradas nesta casa</span></span>
                            
                            <p class='counter'>1/3</p>

                        </div>
    
    
                        <div class="showcase testaCarousel owl-carousel">

                            <div class="showcaseRes">
    
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
                                    <a href="" class="btn btn-01">Reserve GRÁTIS*</a>
            
            
                                </div>  <!-- end item details -->

                            </div>

                            <div class="showcaseRes">
    
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
                                    <a href="" class="btn btn-01">Reserve GRÁTIS*</a>
            
            
                                </div>  <!-- end item details -->

                            </div>

                            <div class="showcaseRes">
    
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
                                    <a href="" class="btn btn-01">Reserve GRÁTIS*</a>
            
            
                                </div>  <!-- end item details -->

                            </div>
                        
                        </div>
                        
                    
                    </div> <!-- end wrp results -->
    
    
                </li> <!-- end item -->

                <li class="itemRes item">

                    <div class="wrpResults">

                        <div class="headerResultArea">
    
                            <figure>
        
                                
                                <img class="itemLogo" src="img/results/logo_animasom.png" alt="">
                            
                            </figure>

                            <span class="infoShowcase">* 5 ofertas <span>encontradas nesta casa</span></span>
                            
                            <p class='counter'>1/5</p>

                        </div>
    
    
                        <div class="showcase testaCarousel owl-carousel">

                            <div class="showcaseRes">
                                
                                <img class="tagSold tag" src="img/tag_sold.png" alt="">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
    
    
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
    
    
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
            
                                    <a href="" class="btn btn-01 disable">Reserve GRÁTIS*</a>
            
                                </div>  <!-- end item details -->

                            </div> 

                            <div class="showcaseRes">
    
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
    
    
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
    
    
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
            
                                    <a href="" class="btn btn-01 disable">Reserve GRÁTIS*</a>
            
                                </div>  <!-- end item details -->

                            </div> 

                            <div class="showcaseRes">
    
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
    
    
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
    
    
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
            
                                    <a href="" class="btn btn-01 disable">Reserve GRÁTIS*</a>
            
                                </div>  <!-- end item details -->

                            </div> 

                            <div class="showcaseRes">
    
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
    
    
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
    
    
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
            
                                    <a href="" class="btn btn-01 disable">Reserve GRÁTIS*</a>
            
                                </div>  <!-- end item details -->

                            </div> 

                            <div class="showcaseRes">
    
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
    
    
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
    
    
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
            
                                    <a href="" class="btn btn-01 disable">Reserve GRÁTIS*</a>
            
                                </div>  <!-- end item details -->

                            </div> 




                        </div>
    
    
                        
                    
                    </div> <!-- end wrp results -->
    
    
                </li> <!-- end item -->

                <li class="itemRes item">

                    <div class="wrpResults">

                        <div class="headerResultArea">
    
                            <figure>
        
                                
                                <img class="itemLogo" src="img/results/logo_casa_x.png" alt="">
                            
                            </figure>

                            <span class="infoShowcase">* 2 ofertas <span>encontradas nesta casa</span></span>
                            
                            <p class='counter'>1/2</p>

                        </div>
    
    
                        
                        <div class="showcase testaCarousel owl-carousel">

                            <div class="showcaseRes">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
                                    <a href="" class="btn btn-01">Reserve GRÁTIS*</a>
            
            
                                </div>  <!-- end item details -->

                            </div>

                            <div class="showcaseRes">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
                                    <a href="" class="btn btn-01">Reserve GRÁTIS*</a>
            
            
                                </div>  <!-- end item details -->

                            </div>

                        </div>
    
    
                        
                    
                    </div> <!-- end wrp results -->
    
    
                </li> <!-- end item -->

                <li class="itemRes item">

                    

                    <div class="wrpResults">

                        <div class="headerResultArea">
    
                            <figure>
        
                                <img class="tagPromo tag" src="img/tag_promo.png" alt="">
                                <img class="itemLogo" src="img/results/logo_casa_em_festa.png" alt="">

                            </figure>

                            <div class="countdownTag">
                                <span>restam</span>
                                <span>03</span>
                                <span>dias</span>
                            </div>

                            <span class="infoShowcase">* 5 ofertas <span>encontradas nesta casa</span></span>
                            <p class='counter'>1/5</p>
                        </div>
    
    
            
                        <div class="showcase testaCarousel owl-carousel">

                            <div class="showcaseRes">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->

                                    <div class="trashAndLikeBtn">
                                        <span class="trash"><img src="img/icon_trash.png" alt="" width="13" height="13"></span>
                                        <span class="like"><img src="img/icon_like.png" alt="" width="13" height="13"></span>
                                    </div>

                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
                                    <a href="" class="btn btn-01">Reserve GRÁTIS*</a>
                                    
                                </div>  <!-- end item details -->

                            </div>

                            <div class="showcaseRes">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->

                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt="" width="13" height="13"></span>
                                        <span class="like"><img src="img/icon_like.png" alt="" width="13" height="13"></span>
                                    </div>

                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
                                    <a href="" class="btn btn-01">Reserve GRÁTIS*</a>
                                    
                                </div>  <!-- end item details -->

                            </div>

                            <div class="showcaseRes">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->

                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt="" width="13" height="13"></span>
                                        <span class="like"><img src="img/icon_like.png" alt="" width="13" height="13"></span>
                                    </div>

                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
                                    <a href="" class="btn btn-01">Reserve GRÁTIS*</a>
                                    
                                </div>  <!-- end item details -->

                            </div>

                            <div class="showcaseRes">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->

                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt="" width="13" height="13"></span>
                                        <span class="like"><img src="img/icon_like.png" alt="" width="13" height="13"></span>
                                    </div>

                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
                                    <a href="" class="btn btn-01">Reserve GRÁTIS*</a>
                                    
                                </div>  <!-- end item details -->

                            </div>

                            <div class="showcaseRes">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->

                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt="" width="13" height="13"></span>
                                        <span class="like"><img src="img/icon_like.png" alt="" width="13" height="13"></span>
                                    </div>

                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
                                    <a href="" class="btn btn-01">Reserve GRÁTIS*</a>
                                    
                                </div>  <!-- end item details -->

                            </div>

                            
                        
                        </div>
    
    
                        
                    
                    </div> <!-- end wrp results -->
                    
                    
    
    
                </li> <!-- end item -->

                <li class="itemRes item">

                    <div class="wrpResults">

                        <div class="headerResultArea">
    
                            <figure>
        
                                <img class="tagExtOpt tag" src="img/tag_external_options.png" alt="">
                                <img class="itemLogo" src="img/results/logo_quintal_festas.png" alt="">
                            
                            </figure>

                            <span class="infoShowcase">* 3 ofertas <span>encontradas nesta casa</span></span>
                            
                            <p class='counter'>1/3</p>

                        </div>
    
    
                        <div class="showcase testaCarousel owl-carousel">

                            <div class="showcaseRes">
    
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
                                    <a href="" class="btn btn-01">Reserve GRÁTIS*</a>
            
            
                                </div>  <!-- end item details -->

                            </div>

                            <div class="showcaseRes">
    
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
                                    <a href="" class="btn btn-01">Reserve GRÁTIS*</a>
            
            
                                </div>  <!-- end item details -->

                            </div>

                            <div class="showcaseRes">
    
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
                                    <a href="" class="btn btn-01">Reserve GRÁTIS*</a>
            
            
                                </div>  <!-- end item details -->

                            </div>
                        
                        </div>
                        
                    
                    </div> <!-- end wrp results -->
    
    
                </li> <!-- end item -->

                <li class="itemRes item">

                    <div class="wrpResults">

                        <div class="headerResultArea">
    
                            <figure>
        
                                
                                <img class="itemLogo" src="img/results/logo_animasom.png" alt="">
                            
                            </figure>

                            <span class="infoShowcase">* 5 ofertas <span>encontradas nesta casa</span></span>
                            
                            <p class='counter'>1/5</p>

                        </div>
    
    
                        <div class="showcase testaCarousel owl-carousel">

                            <div class="showcaseRes">
                                
                                <img class="tagSold tag" src="img/tag_sold.png" alt="">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
    
    
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
    
    
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
            
                                    <a href="" class="btn btn-01 disable">Reserve GRÁTIS*</a>
            
                                </div>  <!-- end item details -->

                            </div> 

                            <div class="showcaseRes">
    
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
    
    
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
    
    
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
            
                                    <a href="" class="btn btn-01 disable">Reserve GRÁTIS*</a>
            
                                </div>  <!-- end item details -->

                            </div> 

                            <div class="showcaseRes">
    
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
    
    
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
    
    
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
            
                                    <a href="" class="btn btn-01 disable">Reserve GRÁTIS*</a>
            
                                </div>  <!-- end item details -->

                            </div> 

                            <div class="showcaseRes">
    
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
    
    
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
    
    
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
            
                                    <a href="" class="btn btn-01 disable">Reserve GRÁTIS*</a>
            
                                </div>  <!-- end item details -->

                            </div> 

                            <div class="showcaseRes">
    
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
    
    
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
    
    
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
            
                                    <a href="" class="btn btn-01 disable">Reserve GRÁTIS*</a>
            
                                </div>  <!-- end item details -->

                            </div> 




                        </div>
    
    
                        
                    
                    </div> <!-- end wrp results -->
    
    
                </li> <!-- end item -->

                <li class="itemRes item">

                    <div class="wrpResults">

                        <div class="headerResultArea">
    
                            <figure>
        
                                
                                <img class="itemLogo" src="img/results/logo_casa_x.png" alt="">
                            
                            </figure>

                            <span class="infoShowcase">* 2 ofertas <span>encontradas nesta casa</span></span>
                            
                            <p class='counter'>1/2</p>

                        </div>
    
    
                        
                        <div class="showcase testaCarousel owl-carousel">

                            <div class="showcaseRes">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
                                    <a href="" class="btn btn-01">Reserve GRÁTIS*</a>
            
            
                                </div>  <!-- end item details -->

                            </div>

                            <div class="showcaseRes">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
                                    <a href="" class="btn btn-01">Reserve GRÁTIS*</a>
            
            
                                </div>  <!-- end item details -->

                            </div>

                        </div>
    
    
                        
                    
                    </div> <!-- end wrp results -->
    
    
                </li> <!-- end item -->


                

               
            </ul> <!-- end list item -->


            <div class="navListItem">

                <span class="prevItem"><img src="img/btn_left_carrousel_BDBFC1.png" alt=""></span>
                <span class="nextItem"><img src="img/btn_right_carrousel_BDBFC1.png" alt=""></span>


            </div> <!-- end nav list item -->

        
        </div> <!-- end container -->

      
    </section> <!-- end list result -->




    <section class="result clr2">

        
        <div class="container fullMobileCase">
    
            <p class="dateResults dataRes02">Dia 23/01/2021 | Sábado</p>
    
            <ul class="listItem owl-carousel owl-results">

                <li class="itemRes item">



                    <div class="wrpResults">

                        <div class="headerResultArea">
    
                            <figure>
                                    
                                <img class="itemLogo" src="img/logo_convida_BDBFC1_thumb.png" alt="">
                            
                            </figure>

                            <span class="infoShowcase">* 1 oferta <span>encontrada nesta casa</span></span>
                            
                            <p class='counter'>1/1</p>

                        </div>
    
    
                        
    
                        <div class="showcase testaCarousel owl-carousel">

                            <div class="showcaseRes">

                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->

                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>

                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
                                    <a href="" class="btn btn-01">Reserve GRÁTIS*</a>
                                    
                                </div>  <!-- end item details -->
                            </div>

                        </div>
    
    
                        
                    
                    </div> <!-- end wrp results -->
    
    
                </li> <!-- end item -->

                <li class="itemRes item">

                    <div class="wrpResults">

                        <div class="headerResultArea">
    
                            <figure>
        
                                
                                <img class="itemLogo" src="img/logo_convida_BDBFC1_thumb.png" alt="">
                            
                            </figure>

                            <span class="infoShowcase">* 3 ofertas <span>encontradas nesta casa</span></span>
                            
                            <p class='counter'>1/3</p>

                        </div>
    
    
                        
                        <div class="showcase testaCarousel owl-carousel">

                            <div class="showcaseRes">

                                <img class="tagReserved tag" src="img/tag_reserved.png" alt="">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
            
                                    <a href="" class="btn btn-01 disable">Reserve GRÁTIS*</a>
            
                                </div>  <!-- end item details -->
                            
                            </div>

                            <div class="showcaseRes">

                                
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
            
                                    <a href="" class="btn btn-01 disable">Reserve GRÁTIS*</a>
            
                                </div>  <!-- end item details -->
                            
                            </div>

                            <div class="showcaseRes">

                                
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
            
                                    <a href="" class="btn btn-01 disable">Reserve GRÁTIS*</a>
            
                                </div>  <!-- end item details -->
                            
                            </div>
                        
                        </div>
    
    
                        
                    
                    </div> <!-- end wrp results -->
    
    
                </li> <!-- end item -->

                <li class="itemRes item">

                    <div class="wrpResults">

                        <div class="headerResultArea">
    
                            <figure>
        
                                <img class="tagExtOpt tag" src="img/tag_external_options.png" alt="">
                                <img class="itemLogo" src="img/logo_convida_BDBFC1_thumb.png" alt="">
                            
                            </figure>

                            <span class="infoShowcase">* 1 oferta <span>encontrada nesta casa</span></span>
                            
                            <p class='counter'>1/1</p>

                        </div>
    
    
                        
                        <div class="showcase testaCarousel owl-carousel">

                            <div class="showcaseRes">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
                                    <a href="" class="btn btn-01">Reserve GRÁTIS*</a>
            
            
                                </div>  <!-- end item details -->
                            
                            </div>

                        </div>
    
    
                        
                    
                    </div> <!-- end wrp results -->
    
    
                </li> <!-- end item -->

                <li class="itemRes item">

                    <div class="wrpResults">

                        <div class="headerResultArea">
    
                            <figure>
        
                                
                                <img class="itemLogo" src="img/logo_convida_BDBFC1_thumb.png" alt="">
                            
                            </figure>

                            <span class="infoShowcase">* 1 oferta <span>encontrada nesta casa</span></span>
                            
                            <p class='counter'>1/1</p>

                        </div>
    
    
                        
                        <div class="showcase testaCarousel owl-carousel">

                            <div class="showcaseRes">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
                                    <a href="" class="btn btn-01">Reserve GRÁTIS*</a>
            
            
                                </div>  <!-- end item details -->
                            
                            </div>
                        
                        </div>
                    
                    </div> <!-- end wrp results -->
    
    
                </li> <!-- end item -->

                <li class="itemRes item">



                    <div class="wrpResults">

                        <div class="headerResultArea">
    
                            <figure>
                                    
                                <img class="itemLogo" src="img/logo_convida_BDBFC1_thumb.png" alt="">
                            
                            </figure>

                            <span class="infoShowcase">* 1 oferta <span>encontrada nesta casa</span></span>
                            
                            <p class='counter'>1/1</p>

                        </div>
    
    
                        
    
                        <div class="showcase testaCarousel owl-carousel">

                            <div class="showcaseRes">

                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->

                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>

                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
                                    <a href="" class="btn btn-01">Reserve GRÁTIS*</a>
                                    
                                </div>  <!-- end item details -->
                            </div>

                        </div>
    
    
                        
                    
                    </div> <!-- end wrp results -->
    
    
                </li> <!-- end item -->

                <li class="itemRes item">

                    <div class="wrpResults">

                        <div class="headerResultArea">
    
                            <figure>
        
                                
                                <img class="itemLogo" src="img/logo_convida_BDBFC1_thumb.png" alt="">
                            
                            </figure>

                            <span class="infoShowcase">* 3 ofertas <span>encontradas nesta casa</span></span>
                            
                            <p class='counter'>1/3</p>

                        </div>
    
    
                        
                        <div class="showcase testaCarousel owl-carousel">

                            <div class="showcaseRes">

                                <img class="tagReserved tag" src="img/tag_reserved.png" alt="">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
            
                                    <a href="" class="btn btn-01 disable">Reserve GRÁTIS*</a>
            
                                </div>  <!-- end item details -->
                            
                            </div>

                            <div class="showcaseRes">

                                <img class="tagReserved tag" src="img/tag_reserved.png" alt="">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
            
                                    <a href="" class="btn btn-01 disable">Reserve GRÁTIS*</a>
            
                                </div>  <!-- end item details -->
                            
                            </div>

                            <div class="showcaseRes">

                                <img class="tagReserved tag" src="img/tag_reserved.png" alt="">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
            
                                    <a href="" class="btn btn-01 disable">Reserve GRÁTIS*</a>
            
                                </div>  <!-- end item details -->
                            
                            </div>
                        
                        </div>
    
    
                        
                    
                    </div> <!-- end wrp results -->
    
    
                </li> <!-- end item -->

                <li class="itemRes item">

                    <div class="wrpResults">

                        <div class="headerResultArea">
    
                            <figure>
        
                                <img class="tagExtOpt tag" src="img/tag_external_options.png" alt="">
                                <img class="itemLogo" src="img/logo_convida_BDBFC1_thumb.png" alt="">
                            
                            </figure>

                            <span class="infoShowcase">* 3 ofertas <span>encontradas nesta casa</span></span>
                            
                            <p class='counter'>1/3</p>

                        </div>
    
    
                        
                        <div class="showcase testaCarousel owl-carousel">

                            <div class="showcaseRes">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
                                    <a href="" class="btn btn-01">Reserve GRÁTIS*</a>
            
            
                                </div>  <!-- end item details -->
                            
                            </div>

                        </div>
    
    
                        
                    
                    </div> <!-- end wrp results -->
    
    
                </li> <!-- end item -->

                <li class="itemRes item">

                    <div class="wrpResults">

                        <div class="headerResultArea">
    
                            <figure>
        
                                
                                <img class="itemLogo" src="img/logo_convida_BDBFC1_thumb.png" alt="">
                            
                            </figure>

                        </div>
    
    
                        
                        <div class="showcase testaCarousel owl-carousel">

                            <div class="showcaseRes">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_casa_festa_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Air Game, Arvorismo<a href="#" class="more">...mais detalhes</a></p>
                                    <p>22/01/2021 | Sexta-feira | TURNO: manhã</p>
                                    <p>60 CONVIDADOS</p>
                                    <a href="#" class="viewPrice">Ver orçamento</a>
            
            
                                    <div class="itemRating">
            
                                        <ul>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star checked"></li>
                                            <li class="star"></li>
                                        </ul>
            
                                        <p>2.330 Avaliações</p>
            
                                    </div> <!-- end item rating -->
            
                                    <a href="" class="btn btn-01">Reserve GRÁTIS*</a>
            
            
                                </div>  <!-- end item details -->
                            
                            </div>
                        
                        </div>
                    
                    </div> <!-- end wrp results -->
    
    
                </li> <!-- end item -->

               
            </ul> <!-- end list item -->


            <div class="navListItem">

                <span class="prevItem"><img src="img/btn_left_carrousel_97999B.png" alt=""></span>
                <span class="nextItem"><img src="img/btn_right_carrousel_BDBFC1.png" alt=""></span>


            </div> <!-- end nav list item -->

        
        </div> <!-- end container -->

      
    </section> <!-- end list result -->



    <section class="result clr3 otherSuggestionsResults">

        
        <div class="container fullMobileCase">
    
            <p class="dateResults dataRes03">OUTRAS SUGESTÕES DE CASAS DE FESTAS PARA VOCÊ!</p>
    
            <ul class="listItem owl-carousel owl-results">

                <li class="itemRes item">

                    <div class="wrpResults">

                        <div class="headerResultArea">

                            <h2>Salão Aquarela</h2>

                            <span class="infoShowcase">* 1 oferta <span>encontrada nesta casa</span></span>
                            
                            <p class='counter'>1/1</p>

                        </div>
    
                        
                        <div class="showcase testaCarousel owl-carousel">

                            <div class="showcaseRes">
     
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_salao_aquarela_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->

                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt="" width="13" height="13"></span>
                                        <span class="like"><img src="img/icon_like.png" alt="" width="13" height="13"></span>
                                    </div>

                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Área baby | Decoração | <a href="#" class="more">...mais detalhes</a></p>
                                    <p><span>23/01/2021 - Sábado&nbsp;</span><span class="redLink"><a href="">(Sob consulta)</a></span></p>
                                    <p><span>60 CONVIDADOS&nbsp;</span><span class="redLink"><a href="">(Sob consulta)</a></span></p>
                                    <p><span>Turno: manhã&nbsp;</span><span class="redLink"><a href="">(Sob consulta)</a></span></p>
            
                                    
            
                                    <a href="" class="btn btn-01">Peça seu ORÇAMENTO*</a>
                                    
                                </div>  <!-- end item details -->
                            
                            </div>
                        
                        </div>
                        
                    
                    </div> <!-- end wrp results -->
    
    
                </li> <!-- end item -->

                <li class="itemRes item">

                    <div class="wrpResults">
    
                       
                        <div class="headerResultArea">

                            <h2>Nosso Jardim</h2>

                            <span class="infoShowcase">* 1 oferta <span>encontrada nesta casa</span></span>
                            
                            <p class='counter'>1/1</p>

                        </div>
    
    
                        
                        <div class="showcase testaCarousel owl-carousel">

                            <div class="showcaseRes">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_nosso_jardim_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    
                                    <p><span>23/01/2021 - Sábado&nbsp;</span><span class="redLink"><a href="">(Sob consulta)</a></span></p>
                                    <p><span>60 CONVIDADOS&nbsp;</span><span class="redLink"><a href="">(Sob consulta)</a></span></p>
                                    <p><span>Turno: manhã&nbsp;</span><span class="redLink"><a href="">(Sob consulta)</a></span></p>
                                    <p style="visibility: hidden;">Área baby | Decoração | <a href="#" class="more">...mais detalhes</a></p>
            
                                    
            
                                    <a href="" class="btn btn-01">Peça seu ORÇAMENTO*</a>
                                    
                                </div>  <!-- end item details -->
                            
                            </div>
                        </div>
    
    
                        
                    
                    </div> <!-- end wrp results -->
    
    
                </li> <!-- end item -->

                <li class="itemRes item">

                    <div class="wrpResults">

                        <div class="headerResultArea">
    
                            <h2>Par-t-perfect</h2>

                            <span class="infoShowcase">* 1 oferta <span>encontrada nesta casa</span></span>
                            
                            <p class='counter'>1/1</p>
                        
                        </div>
    
                        
                        <div class="showcase testaCarousel owl-carousel">

                            <div class="showcaseRes">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_part_perfect_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Área baby | Decoração | <a href="#" class="more">...mais detalhes</a></p>
                                    <p><span>23/01/2021 - Sábado&nbsp;</span><span class="redLink"><a href="">(Sob consulta)</a></span></p>
                                    <p><span>60 CONVIDADOS&nbsp;</span><span class="redLink"><a href="">(Sob consulta)</a></span></p>
                                    <p><span>Turno: manhã&nbsp;</span><span class="redLink"><a href="">(Sob consulta)</a></span></p>
            
                                    
            
                                    <a href="" class="btn btn-01">Peça seu ORÇAMENTO*</a>
                                    
                                </div>  <!-- end item details -->
                            </div>
                        </div>
    
    
                        
                    
                    </div> <!-- end wrp results -->
    
    
                </li> <!-- end item -->

                <li class="itemRes item">

                    <div class="wrpResults">

                        
                        <div class="headerResultArea">
                            
                            <h2>Mixtura Buffet</h2>

                            <span class="infoShowcase">* 1 oferta <span>encontrada nesta casa</span></span>
                            
                            <p class='counter'>1/1</p>

                        </div>
    
    
                        
                        <div class="showcase testaCarousel owl-carousel">

                            <div class="showcaseRes">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_mistura_buffet_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    
                                    <p><span>23/01/2021 - Sábado&nbsp;</span><span class="redLink"><a href="">(Sob consulta)</a></span></p>
                                    <p><span>60 CONVIDADOS&nbsp;</span><span class="redLink"><a href="">(Sob consulta)</a></span></p>
                                    <p><span>Turno: manhã&nbsp;</span><span class="redLink"><a href="">(Sob consulta)</a></span></p>
                                    <p style="visibility: hidden;">Área baby | Decoração | <a href="#" class="more">...mais detalhes</a></p>
            
                                    
            
                                    <a href="" class="btn btn-01">Peça seu ORÇAMENTO*</a>
                                    
                                </div>  <!-- end item details -->
                            </div>
                        
                        </div>
                        
                    
                    </div> <!-- end wrp results -->
    
    
                </li> <!-- end item -->

                <li class="itemRes item">

                    <div class="wrpResults">

                        <div class="headerResultArea">

                            <h2>Salão Aquarela</h2>

                            <span class="infoShowcase">* 1 oferta <span>encontrada nesta casa</span></span>
                            
                            <p class='counter'>1/1</p>

                        </div>
    
                        
                        <div class="showcase testaCarousel owl-carousel">

                            <div class="showcaseRes">
     
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_salao_aquarela_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->

                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt="" width="13" height="13"></span>
                                        <span class="like"><img src="img/icon_like.png" alt="" width="13" height="13"></span>
                                    </div>

                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    
                                    <p><span>23/01/2021 - Sábado&nbsp;</span><span class="redLink"><a href="">(Sob consulta)</a></span></p>
                                    <p><span>60 CONVIDADOS&nbsp;</span><span class="redLink"><a href="">(Sob consulta)</a></span></p>
                                    <p><span>Turno: manhã&nbsp;</span><span class="redLink"><a href="">(Sob consulta)</a></span></p>
                                    <p style="visibility: hidden;">Área baby | Decoração | <a href="#" class="more">...mais detalhes</a></p>
                                    
            
                                    <a href="" class="btn btn-01">Peça seu ORÇAMENTO*</a>
                                    
                                </div>  <!-- end item details -->
                            
                            </div>
                        
                        </div>
                        
                    
                    </div> <!-- end wrp results -->
    
    
                </li> <!-- end item -->

                <li class="itemRes item">

                    <div class="wrpResults">
    
                       
                        <div class="headerResultArea">

                            <h2>Nosso Jardim</h2>

                            <span class="infoShowcase">* 1 oferta <span>encontrada nesta casa</span></span>
                            
                            <p class='counter'>1/1</p>

                        </div>
    
    
                        
                        <div class="showcase testaCarousel owl-carousel">

                            <div class="showcaseRes">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_nosso_jardim_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    
                                    <p><span>23/01/2021 - Sábado&nbsp;</span><span class="redLink"><a href="">(Sob consulta)</a></span></p>
                                    <p><span>60 CONVIDADOS&nbsp;</span><span class="redLink"><a href="">(Sob consulta)</a></span></p>
                                    <p><span>Turno: manhã&nbsp;</span><span class="redLink"><a href="">(Sob consulta)</a></span></p>
                                    <p style="visibility: hidden;">Área baby | Decoração | <a href="#" class="more">...mais detalhes</a></p>
            
                                    
            
                                    <a href="" class="btn btn-01">Peça seu ORÇAMENTO*</a>
                                    
                                </div>  <!-- end item details -->
                            
                            </div>
                        </div>
    
    
                        
                    
                    </div> <!-- end wrp results -->
    
    
                </li> <!-- end item -->

                <li class="itemRes item">

                    <div class="wrpResults">

                        <div class="headerResultArea">
    
                            <h2>Par-t-perfect</h2>

                            <span class="infoShowcase">* 1 oferta <span>encontrada nesta casa</span></span>
                            
                            <p class='counter'>1/1</p>
                        
                        </div>
    
                        
                        <div class="showcase testaCarousel owl-carousel">

                            <div class="showcaseRes">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_part_perfect_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    <p>Área baby | Decoração | <a href="#" class="more">...mais detalhes</a></p>
                                    <p><span>23/01/2021 - Sábado&nbsp;</span><span class="redLink"><a href="">(Sob consulta)</a></span></p>
                                    <p><span>60 CONVIDADOS&nbsp;</span><span class="redLink"><a href="">(Sob consulta)</a></span></p>
                                    <p><span>Turno: manhã&nbsp;</span><span class="redLink"><a href="">(Sob consulta)</a></span></p>
            
                                    
            
                                    <a href="" class="btn btn-01">Peça seu ORÇAMENTO*</a>
                                    
                                </div>  <!-- end item details -->
                            </div>
                        </div>
    
    
                        
                    
                    </div> <!-- end wrp results -->
    
    
                </li> <!-- end item -->

                <li class="itemRes item">

                    <div class="wrpResults">

                        
                        <div class="headerResultArea">
                            
                            <h2>Mixtura Buffet</h2>

                            <span class="infoShowcase">* 1 oferta <span>encontrada nesta casa</span></span>
                            
                            <p class='counter'>1/1</p>

                        </div>
    
    
                        
                        <div class="showcase testaCarousel owl-carousel">

                            <div class="showcaseRes">
    
                                <div class="wrpGalleryItem">
            
                                    <ul class="galleryItem">
            
                                        <li><img src="img/results/thumb_mistura_buffet_01.jpg" alt=""></li>
                                    
                                    </ul>

                                    <!-- TRASH AND LIKE BUTTON -->
                                    
                                    <div class="trashAndLikeBtn">
                                        <span><img src="img/icon_trash.png" alt=""></span>
                                        <span class="like"><img src="img/icon_like.png" alt=""></span>
                                    </div>
            
                                </div> <!-- end gallery item -->
            
            
                                <div class="itemCaption">
            
                                    <h3 class="itemTitle">FLORESTA - COMPLETA</h3>
                                    <P>Casa Em Festa, Botafogo, Rio de Janeiro</P>
                                
                                </div>
            
            
                                <div class="itemDetails">
            
                                    
                                    <p><span>23/01/2021 - Sábado&nbsp;</span><span class="redLink"><a href="">(Sob consulta)</a></span></p>
                                    <p><span>60 CONVIDADOS&nbsp;</span><span class="redLink"><a href="">(Sob consulta)</a></span></p>
                                    <p><span>Turno: manhã&nbsp;</span><span class="redLink"><a href="">(Sob consulta)</a></span></p>
                                    <p style="visibility: hidden;">Área baby | Decoração | <a href="#" class="more">...mais detalhes</a></p>
            
                                    
            
                                    <a href="" class="btn btn-01">Peça seu ORÇAMENTO*</a>
                                    
                                </div>  <!-- end item details -->
                            </div>
                        
                        </div>
                        
                    
                    </div> <!-- end wrp results -->
    
    
                </li> <!-- end item -->

                

               
            </ul> <!-- end list item -->


            <div class="navListItem">

                <span class="prevItem"><img src="img/btn_left_carrousel_BDBFC1.png" alt=""></span>
                <span class="nextItem"><img src="img/btn_right_carrousel_BDBFC1.png" alt=""></span>


            </div> <!-- end nav list item -->

        
        </div> <!-- end container div -->

      
    </section> <!-- end section list result -->






    <section class="srcConvida">

        <div class="wrpSrcConvida">

            <div class="container ">

                <p>AINDA NÃO ENCONTROU A CASA DE FESTAS IDEAL? DEIXA COM A GENTE! </p>
                <p>O CONVIDA vai atrás do que você está procurando e te envia por e-mail logo que novas ofertas chegarem.</p>

                <button class="btnSearch">Busca CONVIDA</button>

            </div>

        </div>


    </section> <!-- end src convida -->


    <section class="srcConvida">

        <div class="wrpSrcConvida formart2">

            <div class="container fullMobileCase">

                <p>PROCURE CASAS DE FESTAS EM OUTROS BAIRROS</p>
                <br>
                <div class="addUnit listTagsSrc">
    
                        <span class="unitTagSrc noselect">Botafogo, Rio de Janeiro, RJ</span>
                        <span class="unitTagSrc noselect">Flamento, Rio de Janeiro, RJ</span>
                        <span class="unitTagSrc noselect">São Conrado, Rio de Janeiro, RJ</span>
                        <span class="unitTagSrc noselect active">Ipanema, Rio de Janeiro, RJ</span>
                        <span class="unitTagSrc noselect">Barra da Tijuca, Rio de Janeiro, RJ</span>
                        <span class="unitTagSrc noselect">Joá, Rio de Janeiro, RJ</span>

                </div>
                

                <button class="btnSearch">Buscar</button>

            </div>

        </div>


    </section> <!-- end top section -->


</div> <!-- end content -->





<?php include( 'inc/inc.footer.php' ); ?>