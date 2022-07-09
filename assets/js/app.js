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
/*******************************************************************************************/
 window.onscroll = () => {
 	if (window.scrollY > 200) {
		document.getElementById('nav').style.background = '#0000007e';
 		/*document.getElemenyId('nav').style.backdrop = '#0000007e';*/
 		document.getElementById('nav').style.boxShadow = '1px 4px 13px 0px rgba(0,0,0,0.75)';
      
	} else {
        console.log('inf');
 		document.getElementById('nav').style.background = 'transparent';
		document.getElementById('nav').style.boxShadow = 'inherit';
 	}
   };
 /*---------------modale navigation-----------------------------*/
 var burger = document.getElementById('burger');
 var closeNav = document.getElementById('closeNav');
 var mobileNavArea = document.getElementById('mobileNavArea');

 burger.addEventListener('click', function(){
     mobileNavArea.classList.remove('none');

    setTimeout(() => {
        mobileNavArea.classList.add('openNav');
     }, 200);
    
     this.classList.add('none');
     closeNav.classList.remove('none');
 });

 closeNav.addEventListener('click', function(){

     mobileNavArea.classList.remove('openNav');

    setTimeout(() => {
         mobileNavArea.classList.add('none');
     }, 200);
   
     this.classList.add('none');
     burger.classList.remove('none');
    
 });
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

  //////////////////////////////////////////////////////////////////////
  window.addEventListener("scroll", (event) => {

    //Récupération de la hauteur de l'ecran
    let viewport_height = window.innerHeight;

    //Recupération des informations de position des éléments
    // let positionHeader = document.querySelector("header").getBoundingClientRect()
    // let positionPropos = document.querySelector("#aPropos").getBoundingClientRect()
    let positionLangages = document.querySelector("#comptenceDev").getBoundingClientRect()
   
    
    
    console.log(positionLangages)

    //Déclanchement de l'action quand l'élément arrive à une certaine position dans l'écran
    if (positionLangages.y <= viewport_height / 2) {
        document.querySelector('.imgGeeen').style = "";
    }

    // console.log(positionDivOne);

});