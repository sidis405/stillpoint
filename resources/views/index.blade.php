@extends('layouts.master')

@section('content')


<!--[if lt IE 7]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Including header-->
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display-->
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="#top">
            <h1 class="logo">Still Point</h1></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling-->
        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">      
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#about">Lo Studio  </a></li>
            <li><a href="#attivita">Attività</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#news">News  </a></li>
            <li><a href="#contatti">Contatti    </a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse-->
      </div>
      <!-- /.container-fluid-->
    </nav>
    <!-- Page content -->
    <div class="main-carousel">
      <div class="slide slide1"></div>
      <div class="slide slide2"></div>
      <div class="slide slide3">    </div>
      <div class="slide slide4"></div>
      <div class="slide slide5"></div>
    </div>
    <section id="about">
      <div id="about-anchor"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="about-box">
              <div class="about-img"><img src="img/lostudio.jpg" alt=" " class="img-responsive">
                <h2 class="title">Lo Studio</h2>
              </div>
              <p>
                 
                Il percorso verso la salute può nascere da qui, nella quiete del nostro studio, dove la fisioterapia classica si unisce all’osteopatia,  per creare insieme un approccio globale al processo di guarigione, ristabilendo equilibrio nel fisico e benessere nella persona.  
                <br><br>
                Partendo dal sintomo e attraverso un’accurata valutazione clinica, sarà stabilito un protocollo di trattamento personalizzato.  Le tecniche manuali utilizzate saranno efficaci sia per la prevenzione sia per la risoluzione dei disturbi che interessano l’apparato muscolo-scheletrico e la sfera viscerale, restituendo al corpo la sua naturale mobilità e funzionalità.
              </p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="about-box">
              <div class="about-img"><img src="img/manuela.jpg" alt="" class="img-responsive">
                <h2 class="title">Manuela Allegra</h2>
              </div>
              <p>
                 
                La passione e il desiderio innato di conoscenza mi hanno da sempre stimolato nella ricerca dei fattori che regolano i processi vitali a ogni livello, disegnando per me un preciso iter formativo dove ogni passo si è rivelato perfettamente conseguente al precedente, guidandomi in un continuo divenire di scoperte.
                <br><br>
                Professionalmente nasco nel 1993 come Insegnante di Educazione Fisica dopo aver conseguito il diploma all’ I.S.E.F. di Roma; proseguo gli studi laureandomi in Fisioterapia nel 1996 per poi completare la mia formazione in sei anni di Osteopatia presso il “Centre pour l’Etude, la Recherche et la Diffusion Osteopathiques” . 
                <br><br>
                Dopo oltre vent’anni di pratica presso strutture accreditate e grazie alle esperienze maturate nel mio percorso di vita,  ho deciso di dare luce al mio sogno realizzando Still Point, studio di fisioterapia e terapia manuale, uno spazio dedicato alla ricerca della salute.
              </p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="about-box">
              <div class="about-img"><img src="img/stillpoint.jpg" alt="" class="img-responsive">
                <h2 class="title">Perchè Still Point?</h2>
              </div>
              <p>
                 
                In ambito osteopatico lo Still Point si manifesta durante un trattamento come un periodo di quiete percettiva, grazie alla quale è possibile accedere a una conoscenza più profonda e al manifestarsi della forza terapeutica dinamica, insita in ognuno di noi.
                <br><br>
                Il nostro intento è di offrire alla persona la possibilità di scoprire insieme i processi che regolano la salute individuale, riconoscendo il valore terapeutico della  “quiete dinamica”, come punto di partenza verso la guarigione.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="attivita">
      <div id="attivita-anchor"></div>
      <div class="container-fluid">
        <div class="row osteopatia">
          <div class="col-md-6 col-md-push-6">
            <div class="osteopatia-img attivita-img"></div>
          </div>
          <div class="col-md-6 col-md-pull-6">
            <div class="attivita-box">
              <h2>Osteopatia e Osteopatia Pediatrica </h2>
              <h3>Indicazioni</h3>
              <p>
                Sistema muscolo-scheletrico: dolori articolari, squilibri posturali, cervicalgie, dorsalgie, lombo-sciatalgie, nevralgie.
                Sistema gineco-urinario: cistiti ricorrenti, alterazioni del ciclo mestruale, fertilità, gravidanza, sindrome post-partum.
                Sfera ORL: rinite, sinusite cronica, vertigini, cefalee.              
                <div></div>
                <!-- Nav tabs-->
                <ul role="tablist" class="nav nav-tabs">
                  <li role="presentation" class="active"><a href="#osteopatia" aria-controls="home" role="tab" data-toggle="tab">Osteopatia</a></li>
                  <li role="presentation"><a href="#osteopatia-pediatrica" aria-controls="profile" role="tab" data-toggle="tab">Osteopatia Pediatrica                                               </a></li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                  <div id="osteopatia" role="tabpanel" class="tab-pane active">
                    <p>
                      È una medicina manuale nata negli Stati Uniti grazie al  Dott. A. Taylor Still, che riconosce la persona come un’unità inscindibile di corpo mente e spirito, in una visione olistica dove l’armonia è il tema che regola la salute, il benessere e la loro essenza. La vita è percepita come equilibrio e la malattia come alterazione di tale equilibrio.
                      <br><br>
                      Il trattamento osteopatico è applicabile a numerosi e diversi problemi che prendono origine dal sistema muscolo – scheletrico e lo colpiscono a loro volta, ma esistono anche una serie di fattori funzionali ed emozionali che, agendo sul sistema viscerale, endocrino e metabolico dell’individuo, rompono il suo equilibrio aprendo la porta alla malattia.
                    </p>
                  </div>
                  <div id="osteopatia-pediatrica" role="tabpanel" class="tab-pane">
                    <p>
                      Il trattamento osteopatico in ambito pediatrico utilizza tecniche manuali molto delicate al fine di individuare le zone di tensione del corpo che possono incidere in modo negativo sul normale sviluppo fisiologico del bambino. La valutazione delle asimmetrie del cranio e la loro correzione, riporterà ad un equilibrio tra forma e funzione, fondamentale per l’autoregolazione, lo sviluppo e la conservazione della salute.
                      <br><br>
                      Particolarmente indicata nel trattamento di alterazioni strutturali come le plagiocefalie e le scoliosi, essa porterà benefici anche nelle coliche gassose del neonato, nel reflusso gastro-esofageo, nei disturbi del sonno, le otiti ricorrenti, i disturbi dell’attenzione e dell’apprendimento. 
                    </p>
                  </div>
                </div>
              </p>
            </div>
          </div>
        </div>
        <div class="row terapia-manuale">
          <div class="col-md-6">
            <div class="terapia-img attivita-img"></div>
          </div>
          <div class="col-md-6">
            <div class="attivita-box">
              <h2>Terapia manuale</h2>
              <p>
                È una metodica basata sull’analisi biomeccanica del gesto motorio inserito nella visione globale della persona. Attraverso una serie di tecniche manuali il fisioterapista agirà su articolazioni, muscoli, legamenti, fasce, al fine di correggere e ripristinare una valida funzionalità.
                Trova indicazione in tutte le patologie dell’apparato locomotore, sia in fase acuta sia cronica.
              </p>
            </div>
          </div>
        </div>
        <div class="row rieducazione">        
          <div class="col-md-6 col-md-push-6">
            <div class="rieducazione-img attivita-img"></div>
          </div>
          <div class="col-md-6 col-md-pull-6">
            <div class="attivita-box">
              <h2>Rieducazione Motoria</h2>
              <h3>Post – traumatica</h3>
              <p>Terapia del movimento volta a ristabilire la normale funzionalità articolare, muscolare e miofasciale in seguito a traumatismi di varia natura, quali fratture, distorsioni, lussazioni.</p>
              <h3>Post – chirurgica</h3>
              <p>Indicata in seguito ad intervento chirurgico a carico dell’apparato muscolo-scheletrico, ha come obiettivo  rieducare il paziente al movimento corretto, guidandone il processo di guarigione, attraverso l’applicazione di precisi protocolli fisioterapici.</p>
            </div>
          </div>
        </div>
        <div class="row ginnastica-posturale">        
          <div class="col-md-6">
            <div class="ginnastica-img attivita-img"></div>
          </div>
          <div class="col-md-6">
            <div class="attivita-box">
              <h2>Ginnastica posturale</h2>
              <h3>R.P.G. Rieducazione Posturale Globale metodo Souchard</h3>
              <p>
                È una rieducazione posturale che ha come obiettivo finale il ripristino globale dell’equilibrio statico e dinamico del corpo. Basato su posture di allungamento attivo delle catene muscolari, lento e progressivo, può essere proposto a persone di qualsiasi età, rispettandone le possibilità individuali.
                Particolarmente indicato nelle alterazioni strutturali della colonna vertebrale, come scoliosi, ipercifosi, iperlordosi, patologie dolorose o compressive come lombalgie, sciatalgie, protrusioni ed ernie discali.             
              </p>
              <h3>Back School</h3>
              <p>Insieme di esercizi volti a conoscere e gestire la propria colonna vertebrale nelle posizioni e nei movimenti quotidiani, utili per migliorare la propria mobilità ed elasticità muscolare.      </p>
            </div>
          </div>
        </div>
        <div class="row riabilitazione">                
          <div class="col-md-6 col-md-push-6">
            <div class="riabilitazione-img attivita-img"></div>
          </div>
          <div class="col-md-6 col-md-pull-6">
            <div class="attivita-box">
              <h2>Riabilitazione funzionale</h2>
              <p>È parte integrante del percorso riabilitativo ed ha come obiettivo finale il ripristino della qualità di vita nella persona affetta da patologia acuta o cronica.</p>
              <div>
                <!-- Nav tabs-->
                <ul role="tablist" class="nav nav-tabs">
                  <li role="presentation" class="active"><a href="#propriocettiva" aria-controls="home" role="tab" data-toggle="tab">Propriocettiva</a></li>
                  <li role="presentation"><a href="#respiro-postura" aria-controls="profile" role="tab" data-toggle="tab">Respiro e Postura</a></li>
                  <li role="presentation"><a href="#core-stability" aria-controls="profile" role="tab" data-toggle="tab">Core - Stability                   </a></li>
                  <li role="presentation"><a href="#respiro-movimento" aria-controls="profile" role="tab" data-toggle="tab">Respiro e movimento                                         </a></li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                  <div id="propriocettiva" role="tabpanel" class="tab-pane active">
                    <p>Esercizi finalizzati a migliorare la percezione del proprio corpo rispetto a se stessi e nello spazio. Assolutamente indicata in seguito a traumi o periodi di immobilizzazione  per il recupero del miglior movimento possibile.</p>
                  </div>
                  <div id="respiro-postura" role="tabpanel" class="tab-pane">
                    <p>Pratica di movimenti lenti e graduali in coordinazione con la respirazione. Permette al nostro corpo di allungarsi e tonificarsi aumentando la mobilità articolare e la flessibilità della colonna vertebrale.</p>
                  </div>
                  <div id="core-stability" role="tabpanel" class="tab-pane">
                    <p>Muscoli addominali, diaframma, pavimento pelvico, muscolatura del dorso formano il “Core”: il loro corretto coordinamento conferisce al corpo una stabilità dinamica attraverso una combinazione di forza, flessibilità e controllo. </p>
                  </div>
                  <div id="respiro-movimento" role="tabpanel" class="tab-pane">
                    <p>Riattivare la circolazione periferica con la ginnastica vascolare ed imparare a respirare in modo corretto permette al corpo di affrontare meglio il lavoro aerobico necessario per la salute del cuore.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row taping-kinesiologico">      
          <div class="col-md-6">
            <div class="taping-img attivita-img"></div>
          </div>
          <div class="col-md-6">
            <div class="attivita-box">
              <h2>Kinesio Taping          </h2>
              <p>
                È una metodica basata sull’applicazione di un cerotto elastico in grado di stimolare i recettori superficiali e profondi della cute al fine di alleviare il dolore derivato da contratture e tensioni muscolari e utilizzato nella cura di piccoli edemi ed ematomi sottocutanei.
                Scelta della tensione, forma e direzione del bendaggio saranno determinati dalle diverse patologie cui è applicabile e solo dopo un’attenta valutazione da parte del fisioterapista.                      
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="gallery">
      <div id="gallery-anchor"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6"><a href="img/gallery/gallery01-big.jpg" class="gallery-item">
              <div class="orbit">
                <div class="planet"></div><img src="img/gallery/gallery01.jpg" alt="" class="img-responsive">
              </div></a></div>
          <div class="col-md-3 col-sm-6"><a href="img/gallery/gallery02-big.jpg" class="gallery-item">
              <div class="orbit">
                <div class="planet"></div><img src="img/gallery/gallery02.jpg" alt="" class="img-responsive">
              </div></a></div>
          <div class="col-md-3 col-sm-6"><a href="img/gallery/gallery03-big.jpg" class="gallery-item">
              <div class="orbit">
                <div class="planet"></div><img src="img/gallery/gallery03.jpg" alt="" class="img-responsive">
              </div></a></div>
          <div class="col-md-3 col-sm-6"><a href="img/gallery/gallery04-big.jpg" class="gallery-item">
              <div class="orbit">
                <div class="planet"></div><img src="img/gallery/gallery04.jpg" alt="" class="img-responsive">
              </div></a></div>
          <div class="col-md-3 col-sm-6"><a href="img/gallery/gallery05-big.jpg" class="gallery-item">
              <div class="orbit">
                <div class="planet"></div><img src="img/gallery/gallery05.jpg" alt="" class="img-responsive">
              </div></a></div>
          <div class="col-md-3 col-sm-6"><a href="img/gallery/gallery06-big.jpg" class="gallery-item">
              <div class="orbit">
                <div class="planet"></div><img src="img/gallery/gallery06.jpg" alt="" class="img-responsive">
              </div></a></div>
          <div class="col-md-3 col-sm-6"><a href="img/gallery/gallery07-big.jpg" class="gallery-item">
              <div class="orbit">
                <div class="planet"></div><img src="img/gallery/gallery07.jpg" alt="" class="img-responsive">
              </div></a></div>
          <div class="col-md-3 col-sm-6"><a href="img/gallery/gallery08-big.jpg" class="gallery-item">
              <div class="orbit">
                <div class="planet"></div><img src="img/gallery/gallery08.jpg" alt="" class="img-responsive">
              </div></a></div>
          <div class="col-md-3 col-sm-6"><a href="img/gallery/gallery09-big.jpg" class="gallery-item">
              <div class="orbit">
                <div class="planet"></div><img src="img/gallery/gallery09.jpg" alt="" class="img-responsive">
              </div></a></div>
          <div class="col-md-3 col-sm-6"><a href="img/gallery/gallery11-big.jpg" class="gallery-item">
              <div class="orbit">
                <div class="planet"></div><img src="img/gallery/gallery11.jpg" alt="" class="img-responsive">
              </div></a></div>
          <div class="col-md-3 col-sm-6"><a href="img/gallery/gallery15-big.jpg" class="gallery-item">
              <div class="orbit">
                <div class="planet"></div><img src="img/gallery/gallery15.jpg" alt="" class="img-responsive">
              </div></a></div>
          <div class="col-md-3 col-sm-6"><a href="img/gallery/gallery12-big.jpg" class="gallery-item">
              <div class="orbit">
                <div class="planet"></div><img src="img/gallery/gallery12.jpg" alt="" class="img-responsive">
              </div></a></div>
          <div class="col-md-3 col-sm-6"><a href="img/gallery/gallery13-big.jpg" class="gallery-item">
              <div class="orbit">
                <div class="planet"></div><img src="img/gallery/gallery13.jpg" alt="" class="img-responsive">
              </div></a></div>
          <div class="col-md-3 col-sm-6"><a href="img/gallery/gallery14-big.jpg" class="gallery-item">
              <div class="orbit">
                <div class="planet"></div><img src="img/gallery/gallery14.jpg" alt="" class="img-responsive">
              </div></a></div>
          <div class="col-md-3 col-sm-6"><a href="img/gallery/gallery10-big.jpg" class="gallery-item">
              <div class="orbit">
                <div class="planet"></div><img src="img/gallery/gallery10.jpg" alt="" class="img-responsive">
              </div></a></div>
          <div class="col-md-3 col-sm-6"><a href="img/gallery/gallery16-big.jpg" class="gallery-item">
              <div class="orbit">
                <div class="planet"></div><img src="img/gallery/gallery16.jpg" alt="" class="img-responsive">
              </div></a></div>
        </div>
      </div>
    </section>
    <section id="news">
      <div id="news-anchor"></div>
      <div class="news-carousel">
		
			@foreach($news as $item)

        <div class="news">
          <a href="#news-modal_{{$item->id}}" class="open-news-modal">
          	<div class="news-img"  style="background: url('/uploads/{{$item->featuredImage->id}}/{{$item->featuredImage->file_name}}') no-repeat"></div>
            <h4 class="news-title">{{$item->title}}</h4>
          </a>
          <span class="date">{{$item->created_at->format('d/m/y')}}</span>
          <p class="news-description">{{$item->excerpt}}</p>
        </div>


      @endforeach

      </div>
    </section>
    <section id="quotes">
      <div class="quotes-carousel">
        <div class="quotes">
          <blockquote>Trova la salute, chiunque può trovare la malattia<span>A. T. Still</span></blockquote>
        </div>
      </div>
    </section>
    <!-- Including footer-->
    <footer id="contatti">
      <div id="contatti-anchor"></div>
      <div id="map-canvas">   </div>
      <div class="container">
        <div class="row footer">
          <div class="divider"></div>
          <div class="col-md-6">
            <h2>Still Point</h2>
            <h3>Fisioterapia e Terapia manuale</h3>
            <div class="row">
              <div class="borded">
                <div class="col-sm-6">
                  <p> <i class="fa fa-map-marker"></i>  Via Bressanone 5
                    <br>
                      00198 Roma
                  </p>
                </div>
                <div class="col-sm-6">
                  <p><i class="fa fa-phone"> </i>+39  339 5333244
                    <br><i class="fa fa-envelope-o"></i><a href="mailto:info@stillpoint.it">info@stillpoint.it</a>
                  </p>
                </div>
              </div>
            </div>
            <p><img src="/img/metro.png" alt="" style="margin-right: 10px">A 200m dalla Metro B fermata “S. Agnese/Annibaliano“</p>
          </div>
          <div class="col-md-6" >
            <h2>Informazioni</h2>
            <h3>Scrivici e sarai ricontattato al più presto</h3>
            @include('contact_form')
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row copyright">
          <div class="col-sm-6">
            <p>Copyright @ Stillpoint 2015. All rights reserved - P.IVA 10247900581 | <a href="/privacy-policy" target="_blank">Privacy policy</a></p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Design by <a target="_blank" href="http://officine06.com">Officine06    </a></p>
          </div>
        </div>
      </div>
    </footer>


     @foreach($news as $item)
        @include('modal')
        @endforeach

@stop
       