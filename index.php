<?php
if(isset($_POST['message'])) {
   if(!empty($_POST['user_name']) AND !empty($_POST['user_surname']) AND !empty($_POST['sujet']) AND !empty($_POST['email'])AND !empty($_POST['message'])) {
      $header="MIME-Version: 1.0\r\n";
      $header.='From:"nom_d\'expediteur"<votre@mail.com>'."\n";
      $header.='Content-Type:text/html; charset="uft-8"'."\n";
      $header.='Content-Transfer-Encoding: 8bit';
      $message='
      <html>
         <body>
            <div align="center">
           
               <u>Nom de l\'expéditeur :</u>'.$_POST['user_name'].'<br />
               <u>prenom de l\'expéditeur :</u>'.$_POST['user_surname'].'<br />
               <u>sujet de l\'expéditeur :</u>'.$_POST['sujet'].'<br />
               <u>mail de l\'expéditeur :</u>'.$_POST['email'].'<br />
               <br />
               '.nl2br($_POST['message']).'
          
            </div>
         </body>
      </html>
      ';
      mail("chris.vivancos@codeur.online", "Sujet du message", $message, $header);
      $msg="Votre message a bien été envoyé !";
   } else {
      $msg="Tous les champs doivent être complétés !";
   }
}
?> 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Je me présente Chris un amoureux de la nature et passionné du numérique ! Mes objectifs de développeur web sont de créer des sites éco-responsable pour tous... ">
    <title>Portfolio-Chris-vivanvcos</title>
    <link rel="icon" href="assets/img/Logo1.png"/>
    <!-- lien pour CSS -->
    <link rel="stylesheet" href="./assets/css/style.css"/>
</head>
<body>
    <div class="cursor"></div>
    <nav id="nav">
        <div id="logoLeaf">
            <a href="#contact"><img src="./assets/img/Logo1.png" alt="logo en forme de d'une C avec l'extrémitée en fléche et une feuille verte à l 'autre extrémité de C"></a>
        </div>
        <svg id="burger" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="#063E11" d="M20 5V2H0v3h20zm0 6V8H0v3h20zm0 6v-3H0v3h20z"/></svg>
        <svg class="none" id="closeNav" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="m13.41 12l4.3-4.29a1 1 0 1 0-1.42-1.42L12 10.59l-4.29-4.3a1 1 0 0 0-1.42 1.42l4.3 4.29l-4.3 4.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l4.29-4.3l4.29 4.3a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.42Z"/></svg>
    </nav>
        <div id="mobileNavArea" class="none">
        <ul>
            <li><a href="#aPropos">A PROPOS</a></li>
            <li><a href="#competencesDev">COMPETENCES</a></li>
            <li><a href="#portFolio">PORTFOLIO</a></li>
            <li><a href="#contact">CONTACT</a></li>
        </ul>
        <div class="navReseau">
            <!--icon linkedin  -->
            <a href="https://www.linkedin.com/in/chris-vivancos/"><svg class="linkedInNav" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M1 2.838A1.838 1.838 0 0 1 2.838 1H21.16A1.837 1.837 0 0 1 23 2.838V21.16A1.838 1.838 0 0 1 21.161 23H2.838A1.838 1.838 0 0 1 1 21.161V2.838Zm8.708 6.55h2.979v1.496c.43-.86 1.53-1.634 3.183-1.634c3.169 0 3.92 1.713 3.92 4.856v5.822h-3.207v-5.106c0-1.79-.43-2.8-1.522-2.8c-1.515 0-2.145 1.089-2.145 2.8v5.106H9.708V9.388Zm-5.5 10.403h3.208V9.25H4.208v10.54ZM7.875 5.812a2.063 2.063 0 1 1-4.125 0a2.063 2.063 0 0 1 4.125 0Z" clip-rule="evenodd"/></svg></a>
            <!--icon facebook  -->
            <a href="https://www.facebook.com/chris.vivancos"> <svg  class='facebookNav' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20" "><path  d="M17 1H3c-1.1 0-2 .9-2 2v14c0 1.101.9 2 2 2h7v-7H8V9.525h2v-2.05c0-2.164 1.212-3.684 3.766-3.684l1.803.002v2.605h-1.197c-.994 0-1.372.746-1.372 1.438v1.69h2.568L15 12h-2v7h4c1.1 0 2-.899 2-2V3c0-1.1-.9-2-2-2z"/></svg></a>
           <!-- iscon gitHub -->
            <a href="https://github.com/chrisviv"><svg class='gitHubNav' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512"><path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM277.3 415.7c-8.4 1.5-11.5-3.7-11.5-8c0-5.4.2-33 .2-55.3c0-15.6-5.2-25.5-11.3-30.7c37-4.1 76-9.2 76-73.1c0-18.2-6.5-27.3-17.1-39c1.7-4.3 7.4-22-1.7-45c-13.9-4.3-45.7 17.9-45.7 17.9c-13.2-3.7-27.5-5.6-41.6-5.6c-14.1 0-28.4 1.9-41.6 5.6c0 0-31.8-22.2-45.7-17.9c-9.1 22.9-3.5 40.6-1.7 45c-10.6 11.7-15.6 20.8-15.6 39c0 63.6 37.3 69 74.3 73.1c-4.8 4.3-9.1 11.7-10.6 22.3c-9.5 4.3-33.8 11.7-48.3-13.9c-9.1-15.8-25.5-17.1-25.5-17.1c-16.2-.2-1.1 10.2-1.1 10.2c10.8 5 18.4 24.2 18.4 24.2c9.7 29.7 56.1 19.7 56.1 19.7c0 13.9.2 36.5.2 40.6c0 4.3-3 9.5-11.5 8c-66-22.1-112.2-84.9-112.2-158.3c0-91.8 70.2-161.5 162-161.5S388 165.6 388 257.4c.1 73.4-44.7 136.3-110.7 158.3zm-98.1-61.1c-1.9.4-3.7-.4-3.9-1.7c-.2-1.5 1.1-2.8 3-3.2c1.9-.2 3.7.6 3.9 1.9c.3 1.3-1 2.6-3 3zm-9.5-.9c0 1.3-1.5 2.4-3.5 2.4c-2.2.2-3.7-.9-3.7-2.4c0-1.3 1.5-2.4 3.5-2.4c1.9-.2 3.7.9 3.7 2.4zm-13.7-1.1c-.4 1.3-2.4 1.9-4.1 1.3c-1.9-.4-3.2-1.9-2.8-3.2c.4-1.3 2.4-1.9 4.1-1.5c2 .6 3.3 2.1 2.8 3.4zm-12.3-5.4c-.9 1.1-2.8.9-4.3-.6c-1.5-1.3-1.9-3.2-.9-4.1c.9-1.1 2.8-.9 4.3.6c1.3 1.3 1.8 3.3.9 4.1zm-9.1-9.1c-.9.6-2.6 0-3.7-1.5s-1.1-3.2 0-3.9c1.1-.9 2.8-.2 3.7 1.3c1.1 1.5 1.1 3.3 0 4.1zm-6.5-9.7c-.9.9-2.4.4-3.5-.6c-1.1-1.3-1.3-2.8-.4-3.5c.9-.9 2.4-.4 3.5.6c1.1 1.3 1.3 2.8.4 3.5zm-6.7-7.4c-.4.9-1.7 1.1-2.8.4c-1.3-.6-1.9-1.7-1.5-2.6c.4-.6 1.5-.9 2.8-.4c1.3.7 1.9 1.8 1.5 2.6z"/></svg></a>
        </div>
    </div> 
    <header id="header">
        <div id="boxIdentite">
            <div class="hello">
                <h1 >HELLO,</h1>
                <p class="moi">moi c'est</p>
            </div>
            <h2 class="chris">CHRIS</h2>
            <div id="boxScroll">
                <p class="scroll">Scroll Moi</p>
                <div class="roundH">
                <a class="chevron-down" href="#aPropos" alt="icon pour scroller sur la page suivante"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 9l8 8l8-8"/></svg></a>
            </div>
               
            </div>
            <div class="boxReseau">
                 <!--icon linkedin  -->
                <a href="https://www.linkedin.com/in/chris-vivancos/"alt="lien pour aller sur le linkedin de chris vivancos"><svg class="linkedIn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M1 2.838A1.838 1.838 0 0 1 2.838 1H21.16A1.837 1.837 0 0 1 23 2.838V21.16A1.838 1.838 0 0 1 21.161 23H2.838A1.838 1.838 0 0 1 1 21.161V2.838Zm8.708 6.55h2.979v1.496c.43-.86 1.53-1.634 3.183-1.634c3.169 0 3.92 1.713 3.92 4.856v5.822h-3.207v-5.106c0-1.79-.43-2.8-1.522-2.8c-1.515 0-2.145 1.089-2.145 2.8v5.106H9.708V9.388Zm-5.5 10.403h3.208V9.25H4.208v10.54ZM7.875 5.812a2.063 2.063 0 1 1-4.125 0a2.063 2.063 0 0 1 4.125 0Z" clip-rule="evenodd"/></svg></a>
                <!--icon facebook  -->
                <a href="https://www.facebook.com/chris.vivancos"alt="lien pour aller sur le facebook de chris vivancos"> <svg  class='facebook' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20" "><path  d="M17 1H3c-1.1 0-2 .9-2 2v14c0 1.101.9 2 2 2h7v-7H8V9.525h2v-2.05c0-2.164 1.212-3.684 3.766-3.684l1.803.002v2.605h-1.197c-.994 0-1.372.746-1.372 1.438v1.69h2.568L15 12h-2v7h4c1.1 0 2-.899 2-2V3c0-1.1-.9-2-2-2z"/></svg></a>
                <!-- iscon gitHub -->
                <a href="https://github.com/chrisviv" alt="lien pour aller sur le gitHub de chris vivancos"><svg class='gitHub' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512"><path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM277.3 415.7c-8.4 1.5-11.5-3.7-11.5-8c0-5.4.2-33 .2-55.3c0-15.6-5.2-25.5-11.3-30.7c37-4.1 76-9.2 76-73.1c0-18.2-6.5-27.3-17.1-39c1.7-4.3 7.4-22-1.7-45c-13.9-4.3-45.7 17.9-45.7 17.9c-13.2-3.7-27.5-5.6-41.6-5.6c-14.1 0-28.4 1.9-41.6 5.6c0 0-31.8-22.2-45.7-17.9c-9.1 22.9-3.5 40.6-1.7 45c-10.6 11.7-15.6 20.8-15.6 39c0 63.6 37.3 69 74.3 73.1c-4.8 4.3-9.1 11.7-10.6 22.3c-9.5 4.3-33.8 11.7-48.3-13.9c-9.1-15.8-25.5-17.1-25.5-17.1c-16.2-.2-1.1 10.2-1.1 10.2c10.8 5 18.4 24.2 18.4 24.2c9.7 29.7 56.1 19.7 56.1 19.7c0 13.9.2 36.5.2 40.6c0 4.3-3 9.5-11.5 8c-66-22.1-112.2-84.9-112.2-158.3c0-91.8 70.2-161.5 162-161.5S388 165.6 388 257.4c.1 73.4-44.7 136.3-110.7 158.3zm-98.1-61.1c-1.9.4-3.7-.4-3.9-1.7c-.2-1.5 1.1-2.8 3-3.2c1.9-.2 3.7.6 3.9 1.9c.3 1.3-1 2.6-3 3zm-9.5-.9c0 1.3-1.5 2.4-3.5 2.4c-2.2.2-3.7-.9-3.7-2.4c0-1.3 1.5-2.4 3.5-2.4c1.9-.2 3.7.9 3.7 2.4zm-13.7-1.1c-.4 1.3-2.4 1.9-4.1 1.3c-1.9-.4-3.2-1.9-2.8-3.2c.4-1.3 2.4-1.9 4.1-1.5c2 .6 3.3 2.1 2.8 3.4zm-12.3-5.4c-.9 1.1-2.8.9-4.3-.6c-1.5-1.3-1.9-3.2-.9-4.1c.9-1.1 2.8-.9 4.3.6c1.3 1.3 1.8 3.3.9 4.1zm-9.1-9.1c-.9.6-2.6 0-3.7-1.5s-1.1-3.2 0-3.9c1.1-.9 2.8-.2 3.7 1.3c1.1 1.5 1.1 3.3 0 4.1zm-6.5-9.7c-.9.9-2.4.4-3.5-.6c-1.1-1.3-1.3-2.8-.4-3.5c.9-.9 2.4-.4 3.5.6c1.1 1.3 1.3 2.8.4 3.5zm-6.7-7.4c-.4.9-1.7 1.1-2.8.4c-1.3-.6-1.9-1.7-1.5-2.6c.4-.6 1.5-.9 2.8-.4c1.3.7 1.9 1.8 1.5 2.6z"/></svg></a>
            </div>
        </div>
    </header>
    <section id="aPropos">
        <div class="boxApropos">
            <div class="propos">
                <h2> A Propos</h2>
            </div>
        </div>
       <div id="boxPresentation">
            <div class="presentation">
                <div class="photoChris">
                    <img src="./assets/img/photo-chris.jpg" alt="photo de chris">
                </div>
                <div class="identite">
                    <h3 class="nomPrenom"> Chris Vivancos</h3>
                    <h4 class="dev">DEVELOPPEUR WEB FRONT-END</h4>
                </div>
            </div>
            <div class="resumer">
                <P>Je me présente Chris, un amoureux de la nature et passionné du numérique.<br> J'ai décidé de faire une reconversion professionnelle dans le but de concilier mes plus grands centres d'intêrets, le numérique et la nature pour les combiner ensemble dans le plus grand respect !<br> Mes objectifs de développeur web et web mobile sont de créer des sites éco-responsables plus légers en data, efficaces et sobres pour tous !
                </P>
                <p>Je suis très sensible à tous les attraits porter sur l'économie circulaire. Je suis très à l'écoute sur toutes propositions axer sur des valeurs communes et la bienveillance de notre planéte.  
                </p>
            </div>          
       </div>
    </section>
    <section id="competencesDev">
        <div class="division">
            <h2 class="comptet">Compétences</h2>
            <div class="boxLeafDeve">
                 <h3 class="develop">Développement Web</h3> 
                 <svg class="leaf" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><g transform="rotate(-90 256 256)"><path fill="#6cc431" d="M272 96c-78.6 0-145.1 51.5-167.7 122.5c33.6-17 71.5-26.5 111.7-26.5h88c8.8 0 16 7.2 16 16s-7.2 16-16 16h-88c-16.6 0-32.7 1.9-48.3 5.4c-25.9 5.9-49.9 16.4-71.4 30.7C38.3 298.8 0 364.9 0 440v16c0 13.3 10.7 24 24 24s24-10.7 24-24v-16c0-48.7 20.7-92.5 53.8-123.2C121.6 392.3 190.3 448 272 448h1c132.1-.7 239-130.9 239-291.4c0-42.6-7.5-83.1-21.1-119.6c-2.6-6.9-12.7-6.6-16.2-.1C455.9 72.1 418.7 96 376 96H272z"/></g></svg>
            </div>
        </div>
        <div class="boxLangages">
            <div id="contenaireDev">
                <div class="contenaireLang">
                    <div class="langagesDev">
                        <div class="barLangages balise"></div>
                        <!-- html5 -->
                        <svg class="icons  html5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><g transform="rotate(180 16 16)"><path d="m4 2l2.181 24.738L15.969 30l9.85-3.262L28 2zm19.262 7.994H11.774l.256 3.088h10.975l-.85 9.275l-6.119 1.688v.019h-.069l-6.169-1.706l-.375-4.738h2.981l.219 2.381l3.344.906l3.356-.906l.375-3.887H9.267l-.8-9.1h15.069z"/></g></svg>
                    </div>
                    <div class="langagesDev">
                        <div class="barLangages css"></div>
                        <!-- css3 -->
                        <svg class="icons css3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g transform="rotate(180 12 12)"><path  d="M4.192 3.143h15.615l-1.42 16.034l-6.404 1.812l-6.369-1.813L4.192 3.143zM16.9 6.424l-9.8-.002l.158 1.949l7.529.002l-.189 2.02H9.66l.179 1.913h4.597l-.272 2.62l-2.164.598l-2.197-.603l-.141-1.569h-1.94l.216 2.867L12 17.484l3.995-1.137l.905-9.923z"/></g></svg>
                    </div>
                    <div class="langagesDev">
                        <div class="barLangages js"></div> 
                        <!-- js-->
                        <svg class='icons  javascript' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><g transform="rotate(180 16 16)"><path d="M2 2v28h28V2zm15.238 21.837c0 2.725-1.6 3.969-3.931 3.969c-2.106 0-3.325-1.087-3.95-2.406l2.144-1.294c.413.731.788 1.35 1.694 1.35c.862 0 1.412-.338 1.412-1.656v-8.944h2.631zm6.224 3.969c-2.444 0-4.025-1.162-4.794-2.688l2.144-1.237c.563.919 1.3 1.6 2.594 1.6c1.087 0 1.788-.544 1.788-1.3c0-.9-.713-1.219-1.919-1.75l-.656-.281c-1.9-.806-3.156-1.825-3.156-3.969c0-1.975 1.506-3.475 3.85-3.475c1.675 0 2.875.581 3.738 2.106l-2.05 1.313c-.45-.806-.938-1.125-1.694-1.125c-.768 0-1.256.488-1.256 1.125c0 .788.488 1.106 1.619 1.6l.656.281c2.238.956 3.494 1.938 3.494 4.137c0 2.363-1.863 3.662-4.357 3.662z"/></g></svg>
                    </div>
                    <div class="langagesDev">
                        <div class="barLangages php"></div> 
                        <!-- php -->
                        <svg  class="icons php8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g transform="rotate(180 12 12)"><path d="M12 5.601h-.116c-1.61 0-3.18.175-4.69.507l.144-.027a16.125 16.125 0 0 0-3.91 1.343l.094-.042a8.123 8.123 0 0 0-2.57 1.93l-.007.008A3.6 3.6 0 0 0 0 11.684v.004c.019.914.374 1.741.946 2.367l-.002-.003a8.105 8.105 0 0 0 2.529 1.917l.048.021a15.7 15.7 0 0 0 3.71 1.282l.106.019c1.366.305 2.936.48 4.546.48h.123H12h.116c1.61 0 3.18-.175 4.69-.507l-.144.027a16.125 16.125 0 0 0 3.91-1.343l-.094.042a8.123 8.123 0 0 0 2.57-1.93l.007-.008A3.6 3.6 0 0 0 24 11.688v-.004a3.608 3.608 0 0 0-.947-2.371l.002.003a8.105 8.105 0 0 0-2.529-1.917l-.048-.021a15.7 15.7 0 0 0-3.71-1.282l-.106-.019a21.212 21.212 0 0 0-4.546-.48h-.123h.006zm-3.12 7.264c-.131.119-.28.221-.442.301l-.011.005a2.916 2.916 0 0 1-.482.179l-.021.005a1.723 1.723 0 0 1-.579.099h-.024h.001H5.35l-.32 1.963H3.583l1.28-6.675h2.773l.062-.001c.36 0 .706.063 1.026.179l-.021-.007c.295.108.546.276.748.489l.001.001c.175.223.3.493.354.789l.002.011a2.932 2.932 0 0 1-.015 1.059l.003-.019a2.82 2.82 0 0 1-.142.485l.007-.019q-.086.221-.184.417q-.122.196-.27.393a2.164 2.164 0 0 1-.317.343l-.003.002zm4.172.589l.565-2.822c.024-.107.038-.229.038-.355l-.002-.078v.004a.426.426 0 0 0-.111-.283a.671.671 0 0 0-.241-.134l-.005-.001a1.388 1.388 0 0 0-.418-.062l-.051.001h.002h-1.126l-.736 3.73H9.544l1.28-6.48h1.423l-.343 1.767h1.28l.073-.001c.331 0 .653.041.961.117l-.027-.006c.249.055.466.172.641.332l-.001-.001a.84.84 0 0 1 .306.498l.001.005a1.945 1.945 0 0 1-.04.787l.003-.014l-.589 2.994zm7.902-2.184c-.04.181-.082.328-.132.473l.009-.031c-.054.159-.12.297-.201.425l.005-.008a1.812 1.812 0 0 1-.248.408l.003-.004c-.098.122-.203.23-.317.329l-.003.003c-.131.119-.28.221-.442.301l-.011.005a2.916 2.916 0 0 1-.482.179l-.021.005a1.723 1.723 0 0 1-.579.099h-.024h.001h-1.972l-.343 1.959h-1.423l1.28-6.675h2.749l.073-.001c.365 0 .716.063 1.041.18l-.022-.007c.287.104.529.272.718.488l.002.002c.19.222.325.497.378.799l.002.01a2.763 2.763 0 0 1-.04 1.076l.004-.019zm-2.7-1.547h-.978l-.513 2.749h.908c.25 0 .496-.023.734-.066l-.025.004c.204-.036.386-.109.546-.212l-.006.003c.136-.122.25-.263.339-.421l.004-.008c.103-.188.18-.407.219-.638l.002-.012a1.877 1.877 0 0 0 .036-.649l.001.009a.812.812 0 0 0-.161-.419l.001.002a1.116 1.116 0 0 0-.409-.243l-.008-.002a1.982 1.982 0 0 0-.689-.096h.003zm-11.19 0h-.978l-.515 2.749h.91c.25 0 .496-.023.734-.066l-.025.004c.204-.036.386-.109.546-.212l-.006.003c.136-.122.25-.263.339-.421l.004-.008c.103-.188.18-.407.219-.638l.002-.012a1.877 1.877 0 0 0 .036-.649l.001.009a.812.812 0 0 0-.161-.419l.001.002a1.116 1.116 0 0 0-.409-.243l-.008-.002a1.982 1.982 0 0 0-.689-.096h.003z"/></g></svg>
                    </div>
                    <div class="langagesDev">
                        <div class="barLangages laravel"></div> 
                        <!-- laravel -->
                        <svg class='icons larav' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><g transform="rotate(180 16 16)"><path d="M31.526 7.24c.01.042.016.089.016.13v6.87a.496.496 0 0 1-.25.432l-5.766 3.323v6.578a.496.496 0 0 1-.25.432L13.24 31.932a.394.394 0 0 1-.089.036l-.031.016a.524.524 0 0 1-.255 0a.154.154 0 0 1-.036-.016a.416.416 0 0 1-.083-.036L.715 25.005a.502.502 0 0 1-.255-.432V3.964c0-.042.01-.089.021-.13c.005-.016.01-.026.016-.042l.031-.078c.005-.016.021-.026.031-.042l.047-.063a.295.295 0 0 0 .047-.036c.021-.016.036-.031.057-.042L6.726.067a.502.502 0 0 1 .5 0l6.021 3.464c.021.01.036.026.052.042l.052.036a.573.573 0 0 1 .042.063c.01.01.026.026.036.042l.031.078c.005.016.016.026.016.042a.351.351 0 0 1 .021.13v12.87l5.01-2.885V7.371a.491.491 0 0 1 .037-.172l.031-.078c.01-.021.026-.031.036-.047c.016-.021.026-.042.042-.057s.036-.026.052-.036a.213.213 0 0 1 .052-.042l6.021-3.464a.478.478 0 0 1 .5 0l6.016 3.464c.021.01.036.026.057.042c.016.01.031.021.047.036s.031.036.047.057c.01.016.026.026.031.047c.016.026.021.052.031.078c.01.01.016.026.021.042zm-.99 6.708V8.24l-2.104 1.208l-2.906 1.677v5.708zm-6.01 10.333v-5.714l-2.865 1.63l-8.167 4.667v5.766zM1.458 4.833v19.448l11.031 6.349v-5.766l-5.766-3.266c-.021-.01-.036-.026-.052-.042c-.016-.01-.036-.021-.047-.036h-.005c-.016-.016-.026-.036-.042-.052c-.01-.016-.026-.031-.036-.052a.238.238 0 0 1-.026-.063c-.01-.021-.021-.036-.026-.057s-.01-.047-.01-.073c-.005-.021-.01-.036-.01-.057V7.718L3.563 6.041zm5.516-3.755l-5.01 2.885l5.01 2.885l5.01-2.885zm2.609 18.011l2.906-1.677V4.834l-2.104 1.208l-2.911 1.677v12.578zM25.026 4.484L20.01 7.369l5.016 2.885l5.01-2.885zm-.5 6.641L19.51 8.24v5.708l2.906 1.677l2.109 1.208zM12.99 23.995l11.026-6.292l-5.005-2.885L7.99 21.162z"/></g></svg>
                    </div>
                    <div class="langagesDev">
                        <div class="barLangages wordpress"></div> 
                        <!-- wordpress -->
                        <svg class='icons wordpres' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><g transform="rotate(180 8 8)"><path d="M12.633 7.653c0-.848-.305-1.435-.566-1.892l-.08-.13c-.317-.51-.594-.958-.594-1.48c0-.63.478-1.218 1.152-1.218c.02 0 .039.002.058.003l.031.003A6.838 6.838 0 0 0 8 1.137A6.855 6.855 0 0 0 2.266 4.23c.16.005.313.009.442.009c.717 0 1.828-.087 1.828-.087c.37-.022.414.521.044.565c0 0-.371.044-.785.065l2.5 7.434l1.5-4.506l-1.07-2.929c-.369-.022-.719-.065-.719-.065c-.37-.022-.326-.588.043-.566c0 0 1.134.087 1.808.087c.718 0 1.83-.087 1.83-.087c.37-.022.413.522.043.566c0 0-.372.043-.785.065l2.48 7.377l.684-2.287l.054-.173c.27-.86.469-1.495.469-2.046zM1.137 8a6.864 6.864 0 0 0 3.868 6.176L1.73 5.206A6.837 6.837 0 0 0 1.137 8z"/><path d="M6.061 14.583L8.121 8.6l2.109 5.78c.014.033.03.064.049.094a6.854 6.854 0 0 1-4.218.109zm7.96-9.876c.03.219.047.453.047.706c0 .696-.13 1.479-.522 2.458l-2.096 6.06a6.86 6.86 0 0 0 2.572-9.224z"/><path fill-rule="evenodd" d="M0 8c0-4.411 3.589-8 8-8c4.41 0 8 3.589 8 8s-3.59 8-8 8c-4.411 0-8-3.589-8-8zm.367 0c0 4.209 3.424 7.633 7.633 7.633c4.208 0 7.632-3.424 7.632-7.633C15.632 3.79 12.208.367 8 .367C3.79.367.367 3.79.367 8z"/></g></g></svg>                    
                    </div>
                </div>
                <div class="imgGreen">
                        <img class="animation" src="./assets/img/green-it.png" alt="image d'une ampoule avec de la verdure à l'intérieur pour illustrer le Green It">
                </div>
            </div>
        </div>
    </section>
    <section id="competencesDeg">
        <div class="boxCompetencesDeg">
            <h3>Eco-Responsable <br> Accessible pour Tous!</h3>
            <img src="./assets/img/green-it2.png" alt="image d'une ampoule est dedant il y a de la verdure pour représenter le green it">
        </div>
        <div class="boxDig">
            <div class="type">
                <h2>Design</h2>
                 <svg class="leaf" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><g transform="rotate(-90 256 256)"><path fill="#6cc431" d="M272 96c-78.6 0-145.1 51.5-167.7 122.5c33.6-17 71.5-26.5 111.7-26.5h88c8.8 0 16 7.2 16 16s-7.2 16-16 16h-88c-16.6 0-32.7 1.9-48.3 5.4c-25.9 5.9-49.9 16.4-71.4 30.7C38.3 298.8 0 364.9 0 440v16c0 13.3 10.7 24 24 24s24-10.7 24-24v-16c0-48.7 20.7-92.5 53.8-123.2C121.6 392.3 190.3 448 272 448h1c132.1-.7 239-130.9 239-291.4c0-42.6-7.5-83.1-21.1-119.6c-2.6-6.9-12.7-6.6-16.2-.1C455.9 72.1 418.7 96 376 96H272z"/></g></svg>
            </div>
            <div class="langagesDig">
                <div class="barLangages figma"></div>
                <svg class="imgSvg"vxmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g transform="rotate(180 12 12)"><g fill="none"><g clip-path="url(#IconifyId-18308085f54-899ef6-10035)"><path fill="white" fill-rule="evenodd" d="M8.415 0C5.968 0 4 2.053 4 4.568c0 1.529.728 2.887 1.847 3.716A4.613 4.613 0 0 0 4 12c0 1.53.728 2.887 1.847 3.716A4.613 4.613 0 0 0 4 19.432C4 21.947 5.968 24 8.415 24c2.446 0 4.415-2.053 4.415-4.568V15.57a4.307 4.307 0 0 0 2.755.999C18.032 16.568 20 14.515 20 12a4.61 4.61 0 0 0-1.847-3.716A4.613 4.613 0 0 0 20 4.568C20 2.053 18.032 0 15.585 0h-7.17ZM5.659 4.568c0-1.591 1.242-2.865 2.756-2.865h2.755v5.73H8.415c-1.514 0-2.756-1.275-2.756-2.865Zm9.926 2.864H12.83v-5.73h2.755c1.515 0 2.756 1.275 2.756 2.866c0 1.59-1.241 2.864-2.756 2.864ZM5.66 12c0-1.59 1.242-2.865 2.756-2.865h2.755v5.73H8.415C6.9 14.865 5.659 13.59 5.659 12Zm7.17 0c0-1.59 1.242-2.865 2.756-2.865c1.515 0 2.756 1.274 2.756 2.865c0 1.59-1.241 2.865-2.756 2.865c-1.514 0-2.755-1.274-2.755-2.865Zm-7.17 7.432c0-1.59 1.242-2.864 2.756-2.864h2.755v2.864c0 1.591-1.24 2.865-2.755 2.865c-1.514 0-2.756-1.274-2.756-2.865Z" clip-rule="evenodd"/></g><defs><clipPath id="IconifyId-18308085f54-899ef6-10035"><path fill="#fff" d="M0 0h24v24H0z"/></clipPath></defs></g></g></svg>
            </div>
            <div class="type">
                <h2>Digital et Mobile</h2>
                <svg class="leaf" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><g transform="rotate(-90 256 256)"><path fill="#6cc431" d="M272 96c-78.6 0-145.1 51.5-167.7 122.5c33.6-17 71.5-26.5 111.7-26.5h88c8.8 0 16 7.2 16 16s-7.2 16-16 16h-88c-16.6 0-32.7 1.9-48.3 5.4c-25.9 5.9-49.9 16.4-71.4 30.7C38.3 298.8 0 364.9 0 440v16c0 13.3 10.7 24 24 24s24-10.7 24-24v-16c0-48.7 20.7-92.5 53.8-123.2C121.6 392.3 190.3 448 272 448h1c132.1-.7 239-130.9 239-291.4c0-42.6-7.5-83.1-21.1-119.6c-2.6-6.9-12.7-6.6-16.2-.1C455.9 72.1 418.7 96 376 96H272z"/></g></svg>
            </div>
            <div class="langagesDig">
                <div class="barLangages integration"></div>
                <svg class="imgSvg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><g transform="rotate(180 8 8)"><path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"/></g></svg>
            </div>
            <div class="langagesDig">
                <div class="barLangages mobile"></div> 
                <svg class="imgSvg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g transform="rotate(180 12 12)"><path  d="M18 22c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2H8c-1.103 0-2 .897-2 2v16c0 1.103.897 2 2 2h10zm-5-5a1 1 0 1 1 0 2a1 1 0 1 1 0-2z"/></g></svg>
             </div>
            <div class="type">
                <h2>Autres</h2>
                <svg class="leaf" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><g transform="rotate(-90 256 256)"><path fill="#6cc431" d="M272 96c-78.6 0-145.1 51.5-167.7 122.5c33.6-17 71.5-26.5 111.7-26.5h88c8.8 0 16 7.2 16 16s-7.2 16-16 16h-88c-16.6 0-32.7 1.9-48.3 5.4c-25.9 5.9-49.9 16.4-71.4 30.7C38.3 298.8 0 364.9 0 440v16c0 13.3 10.7 24 24 24s24-10.7 24-24v-16c0-48.7 20.7-92.5 53.8-123.2C121.6 392.3 190.3 448 272 448h1c132.1-.7 239-130.9 239-291.4c0-42.6-7.5-83.1-21.1-119.6c-2.6-6.9-12.7-6.6-16.2-.1C455.9 72.1 418.7 96 376 96H272z"/></g></svg>
            </div>
            <div class="langagesDig">
                <div class="barLangages git"></div> 
                <svg class="imgSvg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M21.623 11.11L12.89 2.376a1.288 1.288 0 0 0-1.821 0L9.256 4.191l2.3 2.3a1.53 1.53 0 0 1 1.937 1.95l2.217 2.217a1.532 1.532 0 1 1-.918.864l-2.068-2.068v5.441a1.533 1.533 0 1 1-1.26-.045V9.36a1.532 1.532 0 0 1-.832-2.01L8.365 5.081l-5.988 5.987a1.289 1.289 0 0 0 0 1.822l8.733 8.732a1.288 1.288 0 0 0 1.821 0l8.692-8.692a1.288 1.288 0 0 0 0-1.822"/></svg>
            </div>
            <div class="langagesDig">
                <div class="barLangages sass"></div> 
                <svg class="imgSvg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><g transform="rotate(180 16 16)"><path d="M15.092 22.146c-.015.03-.03.054 0 0zm12.456-4.35c-1.006 0-1.998.23-2.9.675c-.295-.595-.6-1.115-.65-1.505c-.06-.455-.125-.725-.055-1.265s.385-1.305.38-1.36c-.005-.055-.07-.33-.715-.335s-1.2.125-1.265.295a6.09 6.09 0 0 0-.265.955c-.115.585-1.289 2.675-1.954 3.765c-.22-.425-.405-.8-.445-1.1c-.06-.455-.125-.725-.055-1.265s.385-1.305.38-1.36c-.005-.055-.07-.33-.714-.335s-1.2.125-1.265.295c-.065.17-.135.57-.265.955s-1.695 3.865-2.104 4.77c-.21.46-.39.83-.52 1.08c-.02.04-.035.065-.045.085c.015-.025.025-.05.025-.04c-.11.215-.175.335-.175.335v.005c-.085.16-.18.305-.225.305c-.03 0-.095-.42.015-.995c.235-1.21.79-3.09.785-3.155c-.005-.035.105-.36-.365-.535c-.455-.165-.62.11-.66.11s-.07.1-.07.1s.505-2.12-.97-2.12c-.92 0-2.2 1.01-2.829 1.925c-.395.215-1.25.68-2.15 1.175l-1.035.57c-.025-.025-.045-.05-.07-.075c-1.79-1.91-5.094-3.26-4.954-5.825c.05-.935.375-3.39 6.354-6.37c4.9-2.44 8.817-1.77 9.492-.28c.97 2.125-2.095 6.08-7.183 6.65c-1.94.215-2.959-.535-3.214-.815c-.265-.295-.305-.31-.405-.255c-.165.09-.06.35 0 .505c.15.395.775 1.095 1.84 1.445c.935.305 3.209.475 5.958-.59c3.089-1.19 5.494-4.505 4.788-7.28c-.718-2.82-5.394-3.745-9.815-2.175c-2.635.935-5.484 2.405-7.533 4.32C.26 11.361-.129 13.346.031 14.176c.57 2.945 4.629 4.865 6.253 6.285l-.225.125c-.815.405-3.909 2.025-4.684 3.735c-.875 1.94.145 3.33.814 3.52c2.09.58 4.229-.465 5.379-2.18s1.01-3.955.48-4.975c-.005-.015-.015-.025-.02-.04a72.558 72.558 0 0 1 1.815-1.04c-.2.54-.345 1.19-.42 2.13c-.09 1.1.365 2.525.955 3.085c.26.245.574.25.77.25c.69 0 1-.57 1.345-1.25c.425-.83.8-1.795.8-1.795s-.47 2.61.815 2.61c.47 0 .94-.605 1.15-.915v.005s.01-.02.035-.06c.05-.075.075-.12.075-.12v-.015c.19-.325.605-1.07 1.23-2.3c.81-1.59 1.584-3.575 1.584-3.575c.075.436.179.867.31 1.29c.14.475.435.995.67 1.5c-.19.26-.305.41-.305.41c0 .004.002.007.005.01c-.15.2-.32.415-.495.625c-.639.76-1.4 1.63-1.5 1.88c-.12.295-.09.515.14.685c.17.13.47.15.785.125c.575-.04.98-.18 1.175-.27a4.11 4.11 0 0 0 1.01-.53c.625-.46 1.005-1.12.97-1.99c-.02-.48-.175-.96-.365-1.41c.055-.08.115-.165.17-.25a26.716 26.716 0 0 0 1.755-3.031c.075.436.178.867.31 1.29c.12.405.355.85.57 1.285c-.93.755-1.505 1.63-1.704 2.205c-.37 1.065-.08 1.545.465 1.655c.245.05.595-.065.855-.175c.386-.129.75-.316 1.079-.555c.625-.46 1.23-1.105 1.189-1.98c-.015-.395-.125-.79-.27-1.17c.785-.33 1.805-.51 3.105-.36c2.784.325 3.329 2.065 3.224 2.79s-.69 1.13-.885 1.25c-.195.12-.255.165-.24.255c.025.13.115.125.28.095c.23-.04 1.46-.59 1.515-1.935c.08-1.7-1.555-3.57-4.45-3.555zM6.089 25.031c-.92 1.005-2.209 1.385-2.764 1.065c-.595-.346-.36-1.825.774-2.896c.69-.65 1.58-1.25 2.17-1.62c.135-.08.33-.2.57-.345a.828.828 0 0 1 .06-.035c.045-.03.095-.055.145-.085c.414 1.52.015 2.86-.955 3.915zm6.718-4.57c-.32.785-.994 2.785-1.405 2.68c-.35-.09-.565-1.615-.07-3.115c.25-.755.78-1.655 1.095-2.005c.505-.565 1.06-.745 1.19-.52c.175.295-.61 2.47-.81 2.96zm5.55 2.65c-.135.07-.26.115-.32.08c-.045-.025.055-.12.055-.12s.695-.745.97-1.085c.16-.2.345-.435.545-.695c0 .025.005.05.005.08c-.006.895-.866 1.5-1.256 1.74zm4.28-.975c-.1-.07-.085-.305.25-1.035c.13-.285.43-.765.95-1.225c.059.174.091.356.095.54c-.005 1.125-.81 1.545-1.295 1.72z"/></g></svg>
            </div>
            <div class="langagesDig">
                <div class="barLangages leaf">Eco-Responable</div>
                <svg class="imgSvg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"><path fill="white" d="M17 8C8 10 5.9 16.17 3.82 21.34l1.89.66l.95-2.3c.48.17.98.3 1.34.3C19 20 22 3 22 3c-1 2-8 2.25-13 3.25S2 11.5 2 13.5s1.75 3.75 1.75 3.75C7 8 17 8 17 8Z"/></svg>
            </div>
        </div>
    </section>
    <section id="boxPortFolio">
        <div class="titleProjets">
            <h1>PortFolio</h1>
            <svg class="leaf" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><g transform="rotate(-90 256 256)"><path fill="#6cc431" d="M272 96c-78.6 0-145.1 51.5-167.7 122.5c33.6-17 71.5-26.5 111.7-26.5h88c8.8 0 16 7.2 16 16s-7.2 16-16 16h-88c-16.6 0-32.7 1.9-48.3 5.4c-25.9 5.9-49.9 16.4-71.4 30.7C38.3 298.8 0 364.9 0 440v16c0 13.3 10.7 24 24 24s24-10.7 24-24v-16c0-48.7 20.7-92.5 53.8-123.2C121.6 392.3 190.3 448 272 448h1c132.1-.7 239-130.9 239-291.4c0-42.6-7.5-83.1-21.1-119.6c-2.6-6.9-12.7-6.6-16.2-.1C455.9 72.1 418.7 96 376 96H272z"/></g></svg>
        </div>
    </section>
    <section id="listeProjets">
        <div class="container">
            <div class="carousel-content">
                <h1 class="carousel-heading">
                    Projets
                </h1>
            </div>

            <div class="slideshow">
                <div class="boxslideshow">
                    <div class="slide">
                        <img id="allojyve" class="slide-img" src= "./assets/img/carousel/allojyveScreen.webp"alt="image du projet d'un site internet pour connaitre les films de cinéma nommé allojyvé"/>
                    </div>
                    <div class="slide">
                        <img id="techNews" class="slide-img" src= "./assets/img/carousel/techNewsScreen.webp" alt="image du projet d'un site sur des acticles sur les métiers du numérique nommé techNews"/>
                    </div>
                    <div class="slide">
                        <img id="creatives" class="slide-img" src= "./assets/img/carousel/creativesScreen.webp" alt="image du projet d'un site nommé Créatives"/>
                    </div>
                    <div class="slide">
                        <img id="Maquette_Cornod" class="slide-img" src= "./assets/img/carousel/maquetteScreen.webp" alt="image du projet d'une maquette de Cornod"/>
                    </div> 
                    <div class="slide">
                        <img id="capgemen" class="slide-img" src= "./assets/img/carousel/capgementScreen.webp" alt="image du projet d'un site intnert nommé Capgemen"/>
                    </div>
                    <div class="slide">
                        <img id="popCode" class="slide-img" src= "./assets/img/carousel/popCodeScreen.webp" alt="image du projet d'un jeu intéractif sur le languge de progommation nommmé popCode"/>
                    </div>
                    <div class="slide">
                        <img id="portfolio" class="slide-img" src= "./assets/img/carousel/portfolioScreen.webp" alt="image du projet mon portfolio"/>
                    </div>
                    <div class="slide">
                        <img id="conciergerie" class="slide-img" src= "./assets/img/carousel/conciergerieScreen.webp" alt="image du projet d'une apllication pour une administration d'une conciergerie"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="boxModalDesc" class='none'>
        <div class="modalDesc">
            <div class="firstLine">
                <h2 class="titleModal"></h2>
                <svg class='cross' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="m13.41 12l4.3-4.29a1 1 0 1 0-1.42-1.42L12 10.59l-4.29-4.3a1 1 0 0 0-1.42 1.42l4.3 4.29l-4.3 4.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l4.29-4.3l4.29 4.3a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.42Z"/></svg>       
            </div>
            <div class="secondLine">
                <div class="contenairSecond">
                    <div class="boxdetail">
                        <p class="projetDesc"></p>
                        <p class="collaboration"></p>
                        <p class="date">Date de réalisation du</p>
                    </div>
                    <div class="boxDesc">
                        <img src="" alt="image du projet de développement web" class="desc">
                    </div>
                </div>
            </div>
            <div id="boxTech">
                <div class="thirdLine">
                    <h3 class="tech">Technologie</h3>
                    <p class="technologie1"></p>
                    <div class="boxImgTech1">
                        <img src="" alt="icon d'un language de programmation utilisé" class="tech01">
                        <img src="" alt="icon d'un language de programmation utilisé" class="tech02">
                        <img src="" alt="icon d'un language de programmation utilisé" class="tech03">
                    </div>
                    <p class="technologie2"></p>
                    <div class="boxImgTech2">
                        <img src="" alt="icon d'un language de programmation utilisé" class="tech04 cssTech04">
                        <img src="" alt="icon d'un language de programmation utilisé" class="tech05 cssTech05">
                        <img src="" alt="icon d'un language de programmation utilisé" class="tech06 cssTech06">
                    </div>
                </div>
                <div class="fourLine">
                    <h3 class="moyens">Moyens utilisés</h3>
                    <div class="boxMoyens">
                        <p class="moyen1"></p>
                        <p class="moyen2"></p>
                        <p class="moyen3"></p>
                        <p class="moyen4"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="boxContact">
            <h1>Contact</h1>
            <svg class="leaf" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><g transform="rotate(-90 256 256)"><path fill="#6cc431" d="M272 96c-78.6 0-145.1 51.5-167.7 122.5c33.6-17 71.5-26.5 111.7-26.5h88c8.8 0 16 7.2 16 16s-7.2 16-16 16h-88c-16.6 0-32.7 1.9-48.3 5.4c-25.9 5.9-49.9 16.4-71.4 30.7C38.3 298.8 0 364.9 0 440v16c0 13.3 10.7 24 24 24s24-10.7 24-24v-16c0-48.7 20.7-92.5 53.8-123.2C121.6 392.3 190.3 448 272 448h1c132.1-.7 239-130.9 239-291.4c0-42.6-7.5-83.1-21.1-119.6c-2.6-6.9-12.7-6.6-16.2-.1C455.9 72.1 418.7 96 376 96H272z"/></g></svg>
        </div>
        <div id="contenairContact">
            <div class="boxMap">
                <div class="boxAddress">
                    <svg class='iconPositionSvg'xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  preserveAspectRatio="xMidYMid meet" viewBox="0 0 100 100"><g transform="rotate(180 50 50)"><path d="M50.002 0C33.524 0 20 13.48 20 29.922c0 6.372 2.04 12.31 5.48 17.174l-.123-.192l19.205 33.198l.098.127c.774 1.01 1.54 1.824 2.467 2.437c.927.613 2.114 1 3.28.883c2.33-.234 3.684-1.844 4.935-3.54l.078-.105L76.594 43.87l.017-.03c.507-.915.874-1.838 1.188-2.732A29.578 29.578 0 0 0 80 29.922C80 13.48 66.48 0 50.002 0Zm0 5C63.756 5 75 16.218 75 29.922a24.55 24.55 0 0 1-1.84 9.332l-.025.062l-.022.065c-.263.757-.549 1.444-.879 2.04L51.275 77.087c-.928 1.222-1.575 1.51-1.367 1.488c.107-.01.206.074-.023-.078c-.219-.144-.666-.57-1.196-1.246L29.63 44.3l-.066-.093C26.689 40.147 25 35.23 25 29.922C25 16.219 36.248 5 50.002 5zm0 7.85c-9.462 0-17.115 7.626-17.115 17.072c0 9.446 7.654 17.072 17.115 17.072c9.461 0 17.111-7.627 17.111-17.072c0-9.446-7.65-17.072-17.111-17.072zm0 5c6.817 0 12.111 5.285 12.111 12.072c0 6.787-5.293 12.072-12.111 12.072c-6.818 0-12.115-5.286-12.115-12.072c0-6.787 5.298-12.072 12.115-12.072z" color="#759d59"/><path fill="#759d59" d="m63.848 73.354l-1.383 1.71c1.87.226 3.68.491 5.375.812l-5.479 1.623l7.313 1.945l5.451-1.719c3.348 1.123 7.984 2.496 9.52 4.057h-10.93l1.086 3.176h11.342c-.034 1.79-3.234 3.244-6.29 4.422l-7.751-1.676l-7.303 2.617l7.8 1.78c-4.554 1.24-12.2 1.994-18.53 2.341l-.266-3.64h-7.606l-.267 3.64c-6.33-.347-13.975-1.1-18.53-2.34l7.801-1.781l-7.303-2.617l-7.752 1.676c-3.012-.915-6.255-2.633-6.289-4.422H25.2l1.086-3.176h-10.93c1.536-1.561 6.172-2.934 9.52-4.057l5.451 1.719l7.313-1.945l-5.479-1.623a82.552 82.552 0 0 1 5.336-.807l-1.363-1.713c-14.785 1.537-27.073 4.81-30.295 9.979C.7 91.573 19.658 99.86 49.37 99.989c.442.022.878.006 1.29 0c29.695-.136 48.636-8.42 43.501-16.654c-3.224-5.171-15.52-8.445-30.314-9.981z" color="#6CC431"/></g></svg>
                    <p class="addresse">Adresse:</p>
                    <p class="rue">239, rue de la république Hameau Thoregna 39240 Cornod</p>
                </div>
                <div class="boxEmail">
                    <svg class='iconEmailSvg'xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g stroke="#759d59" stroke-linejoin="round" stroke-width="2"><path stroke-linecap="round" d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6Z"/><path d="m2 8l7.501 6.001a4 4 0 0 0 4.998 0L22 8"/></g></g></svg>
                    <p class="email">Email:</p>
                    <a href="chris.vivancos@codeur.online" alt="adresse email de chris vivancos" class="mail">chris.vivancos@codeur.online</a>
                </div>
                <div class="boxPhone">
                    <svg class="iconPhoneSvg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"><g transform="rotate(180 12 12)"><path d="M18 22c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2H8c-1.103 0-2 .897-2 2v16c0 1.103.897 2 2 2h10zm-5-5a1 1 0 1 1 0 2a1 1 0 1 1 0-2z"/></g></svg>
                    <p class="phone">Téléphone:</p>
                    <p class="phon">+33 6 19 91 75 48</p>
                </div>
                <div class="imgIframe">
                    <img class='iframe' src="./assets/img/mapScreen.webp" alt="carte google pour situer l'adresse de chris vivancos"/>
                </div>
            </div>
            <div id="mapContact">
                <div class="formulaire">
                    <p class="paraContact">Contactes moi !</p>
                    <form method="post" action="">
                        <div class="contactName">
                            <input type="text" class="name" name="user_name" placeholder="Nom"  required>
                            <input type="text" class="surname" name="user_surname" placeholder="Prénom"  required>
                        </div>
                        <input type="text" class="sujet" name="sujet" placeholder="Sujet">
                        <input type="email" class="courriel" name="email" placeholder="Email">
                        <input type="message" class="msg" placeholder="Entrez Votre message..">
                        <input type="submit" value="Envoyer !" class="envoye" name="message" placeholder="Envoyer">
                        <?php if(isset($msg)){echo "<p>".$msg."</p>";}?>
                    </form>
                <div class="traitSend"></div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footerLigne1">
            <a href="#aPropos"><img src="./assets/img/Logo1.png" alt="logo en forme de d'une C avec l'extrémitée en fléche et une feuille verte à l 'autre extrémité de C"></a>
        </div>
        <div class="footerLigne2">
            <p><span> &copy </span> -2022-Chris VIvancos</p>
        </div>
        <div class="footerLigne3">
            <a href="https://www.linkedin.com/in/chris-vivancos" alt="lien pour aller sur le linkedin de chris vivancos"><svg class="linkedInFooter" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M1 2.838A1.838 1.838 0 0 1 2.838 1H21.16A1.837 1.837 0 0 1 23 2.838V21.16A1.838 1.838 0 0 1 21.161 23H2.838A1.838 1.838 0 0 1 1 21.161V2.838Zm8.708 6.55h2.979v1.496c.43-.86 1.53-1.634 3.183-1.634c3.169 0 3.92 1.713 3.92 4.856v5.822h-3.207v-5.106c0-1.79-.43-2.8-1.522-2.8c-1.515 0-2.145 1.089-2.145 2.8v5.106H9.708V9.388Zm-5.5 10.403h3.208V9.25H4.208v10.54ZM7.875 5.812a2.063 2.063 0 1 1-4.125 0a2.063 2.063 0 0 1 4.125 0Z" clip-rule="evenodd"/></svg></a>
            <a href="https://www.facebook.com/chris.vivancos" alt="lien pour aller sur le facebook de chris vivancos"> <svg  class='facebookFooter' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20" "><path  d="M17 1H3c-1.1 0-2 .9-2 2v14c0 1.101.9 2 2 2h7v-7H8V9.525h2v-2.05c0-2.164 1.212-3.684 3.766-3.684l1.803.002v2.605h-1.197c-.994 0-1.372.746-1.372 1.438v1.69h2.568L15 12h-2v7h4c1.1 0 2-.899 2-2V3c0-1.1-.9-2-2-2z"/></svg></a>
            <a href="https://github.com/chrisviv" alt="lien pour aller sur le gitHub de chris vivancos"><svg class='gitHubFooter' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512"><path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM277.3 415.7c-8.4 1.5-11.5-3.7-11.5-8c0-5.4.2-33 .2-55.3c0-15.6-5.2-25.5-11.3-30.7c37-4.1 76-9.2 76-73.1c0-18.2-6.5-27.3-17.1-39c1.7-4.3 7.4-22-1.7-45c-13.9-4.3-45.7 17.9-45.7 17.9c-13.2-3.7-27.5-5.6-41.6-5.6c-14.1 0-28.4 1.9-41.6 5.6c0 0-31.8-22.2-45.7-17.9c-9.1 22.9-3.5 40.6-1.7 45c-10.6 11.7-15.6 20.8-15.6 39c0 63.6 37.3 69 74.3 73.1c-4.8 4.3-9.1 11.7-10.6 22.3c-9.5 4.3-33.8 11.7-48.3-13.9c-9.1-15.8-25.5-17.1-25.5-17.1c-16.2-.2-1.1 10.2-1.1 10.2c10.8 5 18.4 24.2 18.4 24.2c9.7 29.7 56.1 19.7 56.1 19.7c0 13.9.2 36.5.2 40.6c0 4.3-3 9.5-11.5 8c-66-22.1-112.2-84.9-112.2-158.3c0-91.8 70.2-161.5 162-161.5S388 165.6 388 257.4c.1 73.4-44.7 136.3-110.7 158.3zm-98.1-61.1c-1.9.4-3.7-.4-3.9-1.7c-.2-1.5 1.1-2.8 3-3.2c1.9-.2 3.7.6 3.9 1.9c.3 1.3-1 2.6-3 3zm-9.5-.9c0 1.3-1.5 2.4-3.5 2.4c-2.2.2-3.7-.9-3.7-2.4c0-1.3 1.5-2.4 3.5-2.4c1.9-.2 3.7.9 3.7 2.4zm-13.7-1.1c-.4 1.3-2.4 1.9-4.1 1.3c-1.9-.4-3.2-1.9-2.8-3.2c.4-1.3 2.4-1.9 4.1-1.5c2 .6 3.3 2.1 2.8 3.4zm-12.3-5.4c-.9 1.1-2.8.9-4.3-.6c-1.5-1.3-1.9-3.2-.9-4.1c.9-1.1 2.8-.9 4.3.6c1.3 1.3 1.8 3.3.9 4.1zm-9.1-9.1c-.9.6-2.6 0-3.7-1.5s-1.1-3.2 0-3.9c1.1-.9 2.8-.2 3.7 1.3c1.1 1.5 1.1 3.3 0 4.1zm-6.5-9.7c-.9.9-2.4.4-3.5-.6c-1.1-1.3-1.3-2.8-.4-3.5c.9-.9 2.4-.4 3.5.6c1.1 1.3 1.3 2.8.4 3.5zm-6.7-7.4c-.4.9-1.7 1.1-2.8.4c-1.3-.6-1.9-1.7-1.5-2.6c.4-.6 1.5-.9 2.8-.4c1.3.7 1.9 1.8 1.5 2.6z"/></svg></a>
        </div>
    </footer>
   <script src="./assets/js/app.js"></script>
</body>
</html>
