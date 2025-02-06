<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Carregar CSS e JS com Vite -->
    @vite(['resources/js/app.js', 'resources/css/styles.css', 'resources/sass/app.scss']) <!-- Mudança aqui -->
    <title>Alimente - Sua Jornada Nutricional</title>
    <!-- Incluindo o Bootstrap via Vite -->
    
</head>
<body>
    <header>
        <div class="header-container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a href="#" class="navbar-brand mx-auto d-block text-center">
                        <img src="{{ asset('imgs/logo.png') }}" alt="Logo" class="d-inline-block align-top">
                        <span class="site-name">Ali<span class="green-text">MENTE</span></span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a href="#" class="nav-link">Início</a></li>
                            <li class="nav-item"><a href="#sobre-nos" class="nav-link">Sobre Nós</a></li>
                            <li class="nav-item"><a href="#login" class="nav-link">Login</a></li>
                            <li class="nav-item"><a href="#inscricao" class="nav-link button-link">Inscreva-se</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Comunidade</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Artigos</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('imgs/banner1.jpg') }}" class="d-block w-100" alt="Banner 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Frutas: Fonte de Vitaminas</h5>
                    <p>As frutas são ricas em vitaminas, minerais e antioxidantes essenciais para a saúde.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imgs/banner2.jpg') }}" class="d-block w-100" alt="Banner 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Vegetais: Saúde e Bem-Estar</h5>
                    <p>Os vegetais fornecem fibras e nutrientes essenciais para a digestão e imunidade.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imgs/banner3.jpg') }}" class="d-block w-100" alt="Banner 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Grãos Integrais: Energia Sustentável</h5>
                    <p>Os grãos integrais são fontes de carboidratos complexos e fibras, ajudando na saciedade.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imgs/banner4.jpg') }}" class="d-block w-100" alt="Banner 4">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Hidratação: Beba Água!</h5>
                    <p>Manter-se hidratado é fundamental para o bom funcionamento do corpo e da mente.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imgs/banner5.jpg') }}" class="d-block w-100" alt="Banner 5">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Proteínas: Construtoras de Músculos</h5>
                    <p>As proteínas são essenciais para a reparação e crescimento dos tecidos musculares.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imgs/banner6.jpg') }}" class="d-block w-100" alt="Banner 6">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Motivação: Comece Hoje!</h5>
                    <p>Pequenas mudanças hoje podem levar a grandes resultados amanhã. Persista!</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
      
        </section>

        <section class="mission">
            <div class="container">
                <h2>Nossa Missão e Valores</h2>
                <div class="mission-content row">
                    <div class="mission-text col-md-6">
                        <p>Bem-vindo ao nosso espaço dedicado à nutrição e bem-estar! Aqui, acreditamos que a alimentação vai muito além de sustentar o corpo – ela nutre a mente, a alma e nos conecta com escolhas conscientes e equilibradas. Nossa missão é guiá-lo nessa jornada rumo a uma vida mais saudável e plena, sempre com base em ciência, cuidado e humanidade.</p>
                        <h3>Nossa Missão</h3>
                        <p>É Transformar vidas por meio da nutrição personalizada, promovendo saúde, equilíbrio e uma relação positiva com a comida.</p>
                        <h3>Nossos Valores</h3>
                        <p>Baseamos nossas orientações em conhecimento científico atualizado para garantir segurança e eficácia.</p>
                    </div>
                    <div class="mission-image col-md-6">
                        <img src="{{ asset('imgs/banner_familia.jpg') }}" alt="Imagem da Missão" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <!-- Restante das seções mantidas sem alterações -->
        <section class="unlock">
            <div class="container">
               <h2>Desbloqueie seu potencial e mude de vida</h2>
               <div class="unlock-content">
                
                   <div class="unlock-quotes">
                     <p>"Não é apenas o que você come que importa, mas também como você come. Escute o seu corpo e
                        respeite os sinais que ele te dá."
                        <br>
                     - Marion Nestle, especialista em nutrição e saúde pública.
                     </p>
                     <p>"Deixe o alimento ser o seu remédio, e o remédio, o seu alimento."
                       <br>
                        - Hipócrates, Pai da Medicina.
                     </p>
                     <p>"Comer com equilíbrio é a base para uma vida saudável. Não se trata de perfeição, mas de
                       consistência."
                        <br>
                     - Dr. Michael Greger, autor de How Not to Die.
                     </p>
                   </div>
                    
                  <div class="unlock-card">
                    <img src="{{ asset('imgs/lighthouse.png') }}" alt="farol">
                    <p>
                       A nutrição equilibrada é essencial para manter a saúde e o
                       bem-estar. Consiste em consumir todos os grupos
                       alimentares de forma balanceada, garantindo a ingestão
                       adequada de nutrientes como vitaminas, minerais, proteínas,
                       carboidratos e gorduras saudáveis. O equilíbrio evita tanto
                       excessos quanto carências, prevenindo problemas como
                       obesidade, desnutrição e doenças crônicas.
                    </p>
                  </div>
   
                  <div class="unlock-card">
                    <img src="{{ asset('imgs/health.png') }}" alt="health">
                   <p>
                       A nutrição é essencial para o sucesso de tratamentos com
                       medicamentos, influenciando sua eficácia e segurança. Alguns
                       nutrientes, como gorduras saudáveis, auxiliam na absorção de
                       vitaminas, enquanto outros, como a vitamina K, podem interferir
                       em anticoagulantes. Por outro lado, medicamentos podem
                       impactar o estado nutricional, como antibióticos que alteram a
                       flora intestinal ou diuréticos que causam perda de minerais.
                       Planejar a dieta de forma integrada ao tratamento promove
                       melhores resultados e maior bem-estar.
                   </p>
                  </div>
   
                  <div class="unlock-card">
                    <img src="{{ asset('imgs/scale.png') }}" alt="scale">
                    <p>
                       Alimentos ricos em nutrientes, como frutas, vegetais, grãos integrais e
                       proteínas magras, oferecem calorias de qualidade, além de vitaminas e
                       minerais essenciais. Já alimentos ultraprocessados tendem a fornecer
                       "calorias vazias", com baixo valor nutricional. Assim, adotar uma dieta
                       equilibrada e variada é essencial para manter a saúde e prevenir
                       doenças relacionadas à nutrição.
                    </p>
                  </div>
               </div>
           </div>
           </section>
           
           <section class="subscribe">
               <div class="container">
                   <h2>Inscreva-se e seja mais saudável</h2>
                   
                   <div class="subscribe-content">
                       <div class="subscribe-image">
                        <img src="{{ asset('imgs/berries.png') }}" alt="frutas">
                          
                       </div>
                       <div class="subscribe-text">
                           <h4>Registro de diversos alimentos em nosso banco de dados.</h4>
                           <p>
                               Entender as calorias e nutrientes dos alimentos é essencial para alinhar a dieta aos seus
                               objetivos, como perder peso, ganhar massa muscular ou manter a saúde. Cada alimento oferece uma
                               combinação única de macronutrientes (carboidratos, proteínas e gorduras) e micronutrientes
                               (vitaminas e minerais), fundamentais para o funcionamento do corpo.
                           </p>
                           <p>
                               Comparar tamanhos de porções ajuda a evitar excessos ou carências, garantindo equilíbrio
                               entre a ingestão calórica e as necessidades do organismo. Além das calorias, priorize
                               alimentos ricos em fibras, antioxidantes e gorduras saudáveis, que promovem saúde a longo
                               prazo e previnem doenças.
                           </p>
                           <p>
                               Ao fazer escolhas alimentares conscientes, você não só apoia seus objetivos, mas também adota
                               hábitos que fortalecem o corpo e promovem bem-estar geral.
                           </p>
                       </div>
                   </div>
               </div>
           </section>
           
           <section class="nutrition-facts">
            <div class="container">
              <h2>Nutrition Facts</h2>
             <div class="nutrition-content">
              
               <div class="nutrition-card">
                <img src="{{ asset('imgs/nutrition_facts.png') }}" alt="facts">
               </div>
              <div class="nutrition-cards">
                <img src="{{ asset('imgs/piramide.png') }}" alt="piramide">
                <img src="{{ asset('imgs/grafico.png') }}" alt="grafico">
                </div>
              </div>
             
             <p>Tabelas, Gráficos e fatos nutricionais.</p>
            </div>
           </section>
          
            <section id="sobre-nos" class="about-us">
               <div class="container">
                   <h2>Sobre nós</h2>
                   <p>O Alimente é mais do que um portal de nutrição, é um espaço dedicado a transformar vidas por meio de
                   informações acessíveis, confiáveis e práticas. Aqui, acreditamos que a nutrição vai muito além de dietas ou
                   calorias: ela é uma forma de autocuidado, uma conexão com nossa essência e uma ponte para uma vida mais
                   equilibrada e saudável.
                   </p>
                   <p>Nosso propósito é ser uma fonte de inspiração e conhecimento para todos que buscam melhorar sua relação com a
                   alimentação. Seja você alguém que deseja começar uma jornada de mudança, aprofundar seu aprendizado sobre
                   saúde ou simplesmente explorar novas possibilidades no mundo da nutrição, o Alimente está ao seu lado em cada
                   passo.
                  </p>
                  <p>
                   Nossa equipe é formada por profissionais apaixonados por nutrição e bem-estar, comprometidos em trazer
                   conteúdos baseados em ciência e alinhados às tendências mais recentes. Sabemos que cada pessoa tem suas
                   próprias necessidades, objetivos e desafios, e por isso buscamos oferecer informações adaptáveis e inclusivas,
                   sempre respeitando a individualidade de cada um.
                  </p>
                   <p>No Alimente, você encontrará artigos informativos, dicas práticas, ferramentas úteis e reflexões que te ajudarão a
                   viver de forma mais saudável e consciente. Nossa missão é empoderar você para que faça escolhas que
                   transformem sua rotina, trazendo equilíbrio e satisfação para sua vida.
                   </p>
                   <p>Seja bem-vindo ao Alimente, o seu portal de nutrição, saúde e qualidade de vida. Juntos, podemos alimentar o que
                   há de melhor em você!
                   </p>
               </div>
            </section>
          
           <section class="services">
              <div class="container">
               <h2>Serviços</h2>
               <div class="services-grid">
                 <div class="service-card">
                  <h3>Interações Regulares com o Regulatório</h3>
                   <p>Mantemos você atualizado com as mais recentes
                     regulamentações e diretrizes do setor de nutrição e
                     saúde. Nosso objetivo é garantir que todas as
                     recomendações e práticas estejam alinhadas com os
                     padrões vigentes, promovendo segurança e eficácia em
                     sua jornada de bem-estar.
                   </p>
                 </div>
   
                 <div class="service-card">
                   <h3>Questionário de Nutrição</h3>
                    <p>Entenda mais sobre o seu corpo e suas necessidades
                       nutricionais com o nosso questionário detalhado. Ele
                       avalia fatores como hábitos alimentares, estilo de vida
                       e objetivos, permitindo criar estratégias
                       personalizadas para melhorar sua alimentação de
                       forma saudável e equilibrada.
                    </p>
                 </div>
               
                 <div class="service-card">
                   <h3>Lembretes Personalizados</h3>
                   <p>Com base nas suas respostas ao nosso questionário,
                       criamos lembretes adaptados às suas metas e
                       necessidades. Desde ajustes na dieta até atividades de
                       autocuidado, ajudamos você a se manter no caminho
                       certo com orientações simples e práticas que
                       integram saúde e rotina.
                   </p>
                 </div>
               
                 <div class="service-card">
                    <h3>Saúde Mental e Alimentação</h3>
                    <p>Reconhecemos que a nutrição e a saúde mental estão
                       profundamente conectadas. Por isso, desenvolvemos
                       um questionário que identifica padrões emocionais
                       relacionados à alimentação, ajudando você a criar uma
                       relação mais positiva com a comida e a priorizar o
                       cuidado integral do corpo e da mente.
                    </p>
                 </div>
               </div>
              </div>
           </section>
        
           <section class="faq">
             <div class="container">
                <h2>Perguntas frequentes (FAQ)</h2>
               <div class="faq-grid">
                 <div class="faq-item">
                   <h3>O que é o questionário de nutrição e saúde mental?</h3>
                   <p>O questionário de nutrição e saúde mental é uma ferramenta personalizada que avalia seus hábitos alimentares, estilo de vida e aspectos emocionais relacionados à alimentação. Ele serve como base para criar recomendações específicas e estratégias para ajudá-lo a atingir seus objetivos de saúde física e mental.</p>
                 </div>
                 
                 <div class="faq-item">
                  <h3>Existem lembretes automáticos após o questionário?</h3>
                   <p>Sim! Após preencher o questionário, nosso sistema gera lembretes automáticos baseados nas suas respostas. Esses lembretes são enviados para guiá-lo e garantir que você se mantenha focado em seus objetivos de forma simples e eficaz.</p>
                 </div>
               
                 <div class="faq-item">
                   <h3>As informações e orientações são atualizadas?</h3>
                   <p>Sim, todos os conteúdos e orientações do Alimente são elaborados conforme as regulamentações e diretrizes mais atuais do setor de nutrição e saúde. Nossa missão é garantir que as informações fornecidas sejam seguras, confiáveis e fundamentadas em evidências científicas.</p>
                </div>
               
                <div class="faq-item">
                  <h3>Preciso de um nutricionista além do Alimente?</h3>
                  <p>Embora o Alimente ofereça orientações valiosas e ferramentas úteis, recomendamos sempre que você consulte um nutricionista ou outro profissional de saúde para acompanhamento personalizado, especialmente em caso de condições específicas de saúde ou mudanças significativas na dieta.</p>
                </div>
   
                <div class="faq-item">
                   <h3>Como posso acessar os serviços do Alimente?</h3>
                   <p>Para acessar nossos serviços, basta criar uma conta gratuita no site. Após o cadastro, você terá acesso ao questionário, aos lembretes personalizados e a outras ferramentas exclusivas para melhorar sua saúde e bem-estar.</p>
                 </div>
   
               
                <div class="faq-item">
                 <h3>O Alimente é adequado para todas as idades?</h3>
                 <p>Sim! O Alimente é projetado para pessoas de todas as idades. As recomendações e ferramentas podem ser adaptadas conforme a fase da vida, como para crianças, idosos ou atletas, atendendo às necessidades de cada grupo.</p>
               </div>
   
                <div class="faq-item">
                  <h3>Posso atualizar minhas respostas ao questionário?</h3>
                   <p>Com certeza! Você pode revisar e atualizar suas respostas a qualquer momento no seu perfil. Isso permite que possamos ajustar os lembretes e recomendações de acordo com suas mudanças de rotina e objetivos.</p>
                 </div>
              
               <div class="faq-item">
                 <h3>A privacidade dos meus dados é garantida?</h3>
                 <p>A sua privacidade é nossa prioridade. Todos os dados coletados são armazenados de forma segura e usados exclusivamente para fornecer nossos serviços. Não compartilhamos suas informações com terceiros sem o seu consentimento.</p>
               </div>
   
               <div class="faq-item">
                  <h3>Posso personalizar os lembretes?</h3>
                  <p>Sim, você pode modificar ou cancelar os lembretes a qualquer momento diretamente nas configurações do seu perfil. A experiência é totalmente personalizável, sempre com foco nas suas preferências e necessidades.</p>
               </div>
   
               <div class="faq-item">
                 <h3>Os serviços do Alimente são gratuitos?</h3>
                  <p>A maioria do conteúdo e das ferramentas é gratuita. Porém, alguns serviços avançados, como relatórios personalizados ou consultorias especializadas, podem ter custos adicionais, os quais serão informados previamente.</p>
               </div>
             </div>
             </div>
           </section>
       
    </main>

    <footer>
        <div class="footer-content text-center">
            <div class="social-icons">
                <img src="{{ asset('imgs/facebook.png') }}" alt="facebook">
                <img src="{{ asset('imgs/pinterest.png') }}" alt="pinterest">
                <img src="{{ asset('imgs/instagram.png') }}" alt="instagram">
            </div>
        </div>
    </footer>
</body>
</html>
