//////////////////// Barre de navivagation/////////////////////////////
 var burger = document.getElementById('burger');
 var closeNav = document.getElementById('closeNav');
 var mobileNavArea = document.getElementById('mobileNavArea');
 let boxslideshow = document.querySelector('.boxslideshow');
//  let listingProjets = ['Allojyvé', 'TechNews', 'Créatives', 'Commune de Cornod', 'Capgemen', 'Pop Code', 'PortFolio'];
 burger.addEventListener('click', function(){
     mobileNavArea.classList.remove('none');
 
     setTimeout(() => {
         mobileNavArea.classList.add('openNav');
     }, 200);
     
     this.classList.add('none');
     closeNav.classList.remove('none');
 })
  closeNav.addEventListener('click', function(){
 
     mobileNavArea.classList.remove('openNav');
 
     setTimeout(() => {
         mobileNavArea.classList.add('none');
     }, 200);
    
     this.classList.add('none');
     burger.classList.remove('none');
     
 })
 ///////////////////////////////////CURSOR ANIME///////////////////////////////////////////////////
const cursor = document.querySelector('.cursor');
document.addEventListener('mousemove', e => {
    cursor.setAttribute('style', 'top:'+(e.pageY - 20)+"px; left:"+(e.pageX - 20)+"px;")
});
document.addEventListener('click', ()=>{
    cursor.classList.add('expand');

    setTimeout(()=>{
        cursor.classList.remove("expand");
    }, 500);
});
 ///////////////////////////////////SCROLL: LOGO+BURGER///////////////////////////////////////////////////
 window.onscroll = () => {
 	if (window.scrollY > 200) {
		document.getElementById('nav').style.background = '#0000007e';
 		document.getElemenyId('nav').style.backdrop = '#0000007e';
 		document.getElementById('nav').style.boxShadow = '1px 4px 13px 0px rgba(0,0,0,0.75)';
      
	} else {
        // console.log('inf');
 		document.getElementById('nav').style.background = 'transparent';
		document.getElementById('nav').style.boxShadow = 'inherit';
 	}
   };
  //////////////////////////////////////////////////////////////////////
  function modalContent(target){
    fetch('assets/js/description.json').then(responce => responce.json().then(responce => {
        for (let i = 0; i < responce.listeProjets.projets.length; i++) {
            console.log(responce.listeProjets.projets[i].picture);
            let listejson = responce.listeProjets.projets[i].name;
            if (target.toLowerCase() === listejson.replace('é','e').toLowerCase()) {
                document.querySelector('.titleModal').textContent = responce.listeProjets.projets[i].name;
                document.querySelector('.projetDesc').textContent = responce.listeProjets.projets[i].description;
                document.querySelector('.collaboration').textContent = responce.listeProjets.projets[i].collaboration;
                document.querySelector('.date').textContent = responce.listeProjets.projets[i].date;
                document.querySelector('.desc').src = responce.listeProjets.projets[i].picture;
                document.querySelector('.technologie1').textContent = responce.listeProjets.projets[i].technologie1;
                document.querySelector('.tech01').src = responce.listeProjets.projets[i].language1;
                document.querySelector('.tech02').src = responce.listeProjets.projets[i].language2;
                document.querySelector('.tech03').src = responce.listeProjets.projets[i].language3;
                document.querySelector('.technologie2').textContent = responce.listeProjets.projets[i].technologie2;
                document.querySelector('.tech04').src = responce.listeProjets.projets[i].language4;
                document.querySelector('.tech05').src = responce.listeProjets.projets[i].language5;
                document.querySelector('.tech06').src = responce.listeProjets.projets[i].language6;
                document.querySelector('.moyen1').textContent = responce.listeProjets.projets[i].moyens1;
                document.querySelector('.moyen2').textContent = responce.listeProjets.projets[i].moyens2;
                document.querySelector('.moyen3').textContent = responce.listeProjets.projets[i].moyens3;
                document.querySelector('.moyen4').textContent = responce.listeProjets.projets[i].moyens4;
                break;
            }
    }}));
  }
boxslideshow.addEventListener('click', function(e){
    modalContent(e.target.id);
});
/*//////////////////////////////////////////////////////// close ModalDesc*/////////////////////////////////*/
document.getElementsByClassName('cross')[0].addEventListener('click' , function(){
    document.getElementById('boxModalDesc').classList.add('none');
  });
document.getElementsByClassName('boxslideshow')[0].addEventListener('click', function() {
    document.getElementById('boxModalDesc').classList.remove('none')
});





















//   window.addEventListener("scroll", (event) => {

//     //Récupération de la hauteur de l'ecran
//     let viewport_height = window.innerHeight;

//     //Recupération des informations de position des éléments
//     let nav = document.querySelector("#nav").getBoundingClientRect();
//     let header = document.querySelector("#header").getBoundingClientRect();
//     let propos = document.querySelector("#aPropos").getBoundingClientRect();
//     let animationLamp = document.querySelector("#comptencesDev").getBoundingClientRect();
          
//     console.log(animation);

//     //Déclanchement de l'action quand l'élément arrive à une certaine position dans l'écran
//     if (animationLamp.y <= viewport_height / 4) {
//         document.querySelector('.animation').keyframe = " moveLamp";
//     }

    // console.log(positionDivOne);

// });
// var slideIndex = 1;
// showSlides(slideIndex);

// function plusSlides(n) {
//   showSlides(slideIndex += n);
// }

// function currentSlide(n) {
//   showSlides(slideIndex = n);
// }

// function showSlides(n) {
//   var i;
//   var slides = document.getElementsByClassName("slideshw");
//   var dots = document.getElementsByClassName("slide-btn");
//   if (n > slides.length) {slideIndex = 1}
//     if (n < 1) {slideIndex = slides.length}
//     for (i = 0; i < slides.length; i++) {
//       slides[i].style.display = "none";
//     }
//     for (i = 0; i < dots.length; i++) {
//       dots[i].className = dots[i].className.replace(" active", "");
//     }
//   slides[slideIndex-1].style.display = "block";
//   dots[slideIndex-1].className += " active";
// } 


 /* animation du H2 section 1 */
//  var coucou =  document.getElementById('titleH2')

//  window.onscroll = function() {scrollH2()};

//  function scrollH2(){
//      if(document.body.scrollTop > 300 || document.documentElement.scrollTop > 600) {
//          coucou.classList.add("apparitionH2")
//     }else {
//          coucou.classList.remove("apparitionH2")
//  }}


// Pour réaliser une animation en Js à revoir
// var i = 0;
// function move() {
//   if (i == 0) {
//     i = 1;
//     var elem = document.querySelector(".barLangages");
//     var width = 1;
//     var id = setInterval(frame, 10);
//     function frame() {
//       if (width >= 100) {
//         clearInterval(id);
//         i = 0;
//       } else {
//         width++;
//         elem.style.width = width + "%";
//       }
//     }
//   }
// }
//Modale pour la navigation/////////////////////////////////////
// const modalContainer = document.querySelector(".modal-container"); 
// const modalTriggers = document.querySelectorAll(".modal-trigger");

// modalTriggers.forEach(trigger => trigger.addEventListener("click", toggleModal))

// function toggleModal(){
//   modalContainer.classList.toggle("active")}