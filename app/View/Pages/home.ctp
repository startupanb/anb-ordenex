
<section>
        <div class="container demo-2">
            <div id="slider" class="sl-slider-wrapper">
                <div class="sl-slider">
                
                    <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                        <div class="sl-slide-inner">
                            <div class="bg-img bg-img-1"></div>
                            <h2>A bene placito.</h2>
                            <blockquote><p>You have just dined, and however scrupulously the slaughterhouse is concealed in the graceful distance of miles, there is complicity.</p>
                            <p><a href="#">Veja mais...</a></p>
                            </blockquote>
                        </div>
                    </div>
                    
                    <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                        <div class="sl-slide-inner">
                            <div class="bg-img bg-img-2"></div>
                            <h2>Regula aurea.</h2>
                            <blockquote><p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p><p><a href="#">Veja mais...</a></p>
                            </blockquote>
                        </div>
                    </div>
                    
                    <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                        <div class="sl-slide-inner">
                            <div class="bg-img bg-img-3"></div>
                            <h2>Dum spiro, spero.</h2>
                            <blockquote><p>Thousands of people who say they 'love' animals sit down once or twice a day to enjoy the flesh of creatures who have been utterly deprived of everything that could make their lives worth living and who endured the awful suffering and the terror of the abattoirs.</p><p><a href="#">Veja mais...</a></p>
                            </blockquote>
                        </div>
                    </div>
                    
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
                    </div>
                </div>

                <nav id="nav-dots" class="nav-dots">
                    <span class="nav-dot-current"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </nav>
            </div>
        </div>                   
</section>




<section>
    <div class="centralizer">
        <div id="infograma">
            <figure>
                <img src="<?php echo $this->webroot;?>/img/infograma.png" />
            </figure>

            <h1>Muito mais prático e rápido</h1>
            <p>Com ordenex em menos 2 minuto você pode solicitar um produto , serviço ou mesmo serviços expressos e mais. O sistema alerta os vendedores ou prestadores de serviço cadastrados que te retornam o orçamento , sem você ficar tempo procurando de site em site.</p>
        </div>
    </div>
</section>

<section>
    <div class="centralizer">

        <div id="celular_sorteio">
            <h4>Com Ordenex você encontra o que você procura e ainda pode em breve concorrer a um lindo Celular!</h4>
            <img src="<?php echo $this->webroot;?>/img/galazy.jpg" width="300" />
            <div class="clear"></div>
        </div>
        <div id="form_cadastro">
            
            <p>Digite seus dados:</p>

            <?php 
                echo $this->Form->create('User');
                echo $this->Form->input('PessoaJuridica.nome', array('type' => 'text'));
                echo $this->Form->input('PessoaJuridica.sobrenome', array('type' => 'text'));
                echo $this->Form->input('PessoaJuridica.Email', array('type' => 'text'));
                echo $this->Form->input('PessoaJuridica.Repetir Email', array('type' => 'text'));
                echo $this->Form->input('PessoaJuridica.Senha', array('type' => 'text'));
                echo $this->Form->input('PessoaJuridica.Data de Nascimento', array('type' => 'text'));
                echo $this->Form->end(); 
            ?>
            <div class="clear"></div>
        </div>

<div class="clear"></div>
        <a id="cadastrese">Cadastre-se agora mesmo</a>
    </div>
</section>


<section>
    <div class="centralizer separador">
    </div>
</section>


<section>
    <div class="centralizer linha_divisa">
        <div id="infograma">
            <h1>Serviço Expresso</h1>
            <p>Aposto que você ja precisou de um MOTOBOY, TAXI, FLORICULTURA, DIARISTA e outros profissionais em uma emergência e perdeu um tempão para encontrar. O Serviço Expresso do Ordenex é uma ferramenta faz isso para você , em um clique o sistema procura o prestador de serviço mais próximo de você e te informa os que estão disponiveis para te atender na hora marcada.</p>
        </div>
    </div>
</section>





<section>
    <div class="centralizer">
        <div id="linha_channel">
            <div class="channel">
                <figure>
                    <img src="<?php echo $this->webroot;?>/img/channel-icon.png" width="100" />
                </figure>
                <h4>Lorem inpsum indolor</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum sequi tenetur ut minima quod ducimus saepe rem. </p>
                <a href="#">lorem inp...</a>
            </div>
            <div class="channel">
                <figure>
                    <img src="<?php echo $this->webroot;?>/img/channel-icon.png" width="100" />
                </figure>
                <h4>Lorem inpsum indolor</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum sequi tenetur ut minima quod ducimus saepe rem. </p>
                <a href="#">lorem inp...</a>
            </div>
            <div class="channel">
                <figure>
                    <img src="<?php echo $this->webroot;?>/img/channel-icon.png" width="100" />
                </figure>
                <h4>Lorem inpsum indolor</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum sequi tenetur ut minima quod ducimus saepe rem. </p>
                <a href="#">lorem inp...</a>
            </div>
        </div>
    </div>
</section>

<script>
$(document).ready(function(){

    $('#cadastrese').click(function(){
        $('#form_cadastro').fadeIn('slow');
        $('#celular_sorteio').fadeIn('slow');
        
    });
});
</script>