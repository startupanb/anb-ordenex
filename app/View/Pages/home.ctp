

<form id="float" action="">

    <?php echo $this->Html->image('close.jpg', array('id' => 'close')); ?>

    <h3>Solicite Orçamento Grátis</h3>

    <div class="celula_form">
        <label for="">Titulo:</label>
        <input type="text" name="" value="Ex.: Quero notebook AMD, com HD de 1TB">
    </div>
    
    <div class="celula_form">
        <label for="">Descrição:</label>
        <textarea name="" id="" cols="30" rows="10" >Ex.: Quero notebook AMD, com HD de 1TB da marca Positivo</textarea>
    </div>

    <div class="celula_form">
        
        <label class="radio">
            <input type="radio" value="" name="tipo">
            Produtos
        </label>

        <label class="radio">
            <input type="radio" value="" name="tipo">
            Serviços
        </label>

        <div class="clear"></div>
    </div>

    <div class="celula_form">
        <label for="">Tags / Categorias:</label>
        <input type="text" name="" value="Ex.: Informática, notebook, loja de informática">
    </div>

    <div class="celula_form">
        <label for="">Valor médio investido no produto:</label>
        <input type="text" name="" value="Ex.: R$ 999,99">
    </div>
    
    <div class="celula_form">
        <input type="submit" value="Solicitar Agora">
    </div>
</form>

<div id="form_float">
</div>





<section>
        <div class="container demo-2">
            <div id="slider" class="sl-slider-wrapper">
                <div class="sl-slider">
                
                    <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                        <div class="sl-slide-inner">
                            <div class="bg-img bg-img-1"></div>
                            <h2>Podemos ajudar?</h2>
                            <blockquote><p>Se você esta procurando algum Produto ou Serviço e não tem tempo ou paciência de ficar  procurando, não se preocupe, procuramos para você!

<!--                             <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul> -->

                            </p>
                            <p><a href="#" id="bot_orc">Solicite um orçamento</a></p>
                            </blockquote>
                        </div>
                    </div>
                    
                    <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                        <div class="sl-slide-inner">
                            <div class="bg-img bg-img-2"></div>
                            <h2>Ordenext</h2>
                            <blockquote><p>O jeito mais prático, rápido e direto para você comprar seus produtos ou serviços.</p><p><a href="#" id="bot_orc">Solicite um orçamento</a></p>
                            </blockquote>
                        </div>
                    </div>
                    
                    <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                        <div class="sl-slide-inner">
                            <div class="bg-img bg-img-3"></div>
                            <h2>Ordenext & Akatus</h2>
                            <blockquote><p>O que era rápido de se comprar, agora é facíl e seguro de se pagar.</p><p><a href="#">Veja mais...</a></p>
                            </blockquote>
                        </div>
                    </div>
<!--                     
                    <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
                        <div class="sl-slide-inner">
                            <div class="bg-img bg-img-4"></div>
                            <h2>Donna nobis pacem.</h2>
                            <blockquote><p>The human body has no more need for cows' milk than it does for dogs' milk, horses' milk, or giraffes' milk.</p><p><a href="#">Veja mais...</a></p>
                            </blockquote>
                        </div>
                    </div>
                    
                    <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
                        <div class="sl-slide-inner">
                            <div class="bg-img bg-img-5"></div>
                            <h2>Acta Non Verba.</h2>
                            <blockquote><p>I think if you want to eat more meat you should kill it yourself and eat it raw so that you are not blinded by the hypocrisy of having it processed for you.</p><p><a href="#">Veja mais...</a></p>
                            </blockquote>
                        </div>
                    </div> -->
                </div>
                
                <nav id="nav-arrows" class="nav-arrows">
                    <span class="nav-arrow-prev">Previous</span>
                    <span class="nav-arrow-next">Next</span>
                </nav>

                <nav id="nav-dots" class="nav-dots">
                    <span class="nav-dot-current"></span>
                    <span></span>
                    <span></span>
  <!--              <span></span>
                    <span></span> -->
                </nav>
            </div>
        </div>                   
</section>

<section>
    <div class="centralizer">
        <div id="infograma">
            <h1>Como Funciona:</h1>
            <figure>
                <?php echo $this->Html->image('infograma.png', array('width' => '900')); ?>
                <!-- <img src="../../img/infograma.png" width="900"/> -->
            </figure>

            <div class="clear"></div>

            <div id="celular_sorteio">
                <h4>Com Ordenex você encontra o que você procura e ainda pode em breve concorrer a um lindo Celular!</h4>
                <img src="../../img/galazy.jpg" width="300" />
                <div class="clear"></div>
            </div>

            <div id="form_cadastro">
                
                <p>Digite seus dados</p>

                <?php 
                    echo $this->Form->create('User');
                    echo $this->Form->input('PessoaJuridica.nome', array('type' => 'text'));
                    echo $this->Form->input('PessoaJuridica.sobrenome', array('type' => 'text'));
                    echo $this->Form->input('PessoaJuridica.Email', array('type' => 'text'));
                    echo $this->Form->input('PessoaJuridica.Repetir Email', array('type' => 'text'));
                    echo $this->Form->input('PessoaJuridica.Senha', array('type' => 'text'));
                    echo $this->Form->input('PessoaJuridica.Data de Nascimento', array('type' => 'text'));


                    $options = array('M' => 'Masculino', 'F' => 'Feminino');
                    $attributes = array('legend' => 'Sexo:');
                    echo $this->Form->radio('Sexo', $options, $attributes);

                    echo '<input type="submit" value="Cadastrar" id="cadastrese"> ';

                    echo $this->Form->end(); 
                ?>
                
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
</section>

<section>
    <div class="centralizer separador">
    </div>
</section>

<section>
    <div class="centralizer">
        <div id="infograma">
            <h1>Muito mais prático e rápido</h1>
            <p>Com ordenex em menos 2 minuto você pode solicitar um produto , serviço ou mesmo serviços expressos e mais. O sistema alerta os vendedores ou prestadores de serviço cadastrados que te retornam o orçamento , sem você ficar tempo procurando de site em site.</p>
        </div>
    </div>
</section>

<!-- <section>
    <div class="centralizer linha_divisa">
        <div id="infograma">
            <h1>Serviço Expresso</h1>
            <p>Aposto que você ja precisou de um MOTOBOY, TAXI, FLORICULTURA, DIARISTA e outros profissionais em uma emergência e perdeu um tempão para encontrar. O Serviço Expresso do Ordenex é uma ferramenta faz isso para você , em um clique o sistema procura o prestador de serviço mais próximo de você e te informa os que estão disponiveis para te atender na hora marcada.</p>
        </div>
    </div>
</section> -->





<!-- <section>
    <div class="centralizer">
        <div id="linha_channel">
            <div class="channel">
                <figure>
                    <img src="<?php echo $this->webroot;?>/img/channel-icon-1.png" width="100" />
                </figure>
                <h4>Lorem inpsum indolor</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum sequi tenetur ut minima quod ducimus saepe rem. </p>
                <a href="#">lorem inp...</a>
            </div>
            <div class="channel">
                <figure>
                    <img src="<?php echo $this->webroot;?>/img/channel-icon-2.png" width="100" />
                </figure>
                <h4><span>Velocidade</span> e praticidade em suas compras</h4>
                <p>Ordenex é a maneira mais rapida e prática de fazer compras de produtos e serviços na internet, experimente você também.</p>
                <a href="#">lorem inp...</a>
            </div>
            <div class="channel">
                <figure>
                    <img src="<?php echo $this->webroot;?>/img/channel-icon-3.png" width="100" />
                </figure>
                <h4>Mais <span>segurança</span> em suas <span>compras</span></h4>
                <p>Junte-se a milhares de internautas, e tenha total segurança em suas comrpas através do sistema akatus de pagamento</p>
                <a href="#">lorem inp...</a>
            </div>
        </div>
    </div>
</section> -->

<script>
$(document).ready(function(){
      

    });
});
</script>

