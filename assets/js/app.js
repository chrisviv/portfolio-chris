var burger = document.getElementById('burger');
var closeNav = document.getElementById('closeNav');
var mobileNavArea = document.getElementById('mobileNavArea');
let boxslideshow = document.querySelector('.boxslideshow');
let navbar = document.querySelectorAll('li');

function closing(){
    mobileNavArea.classList.remove('openNav');

    setTimeout(() => {
        mobileNavArea.classList.add('none');
    }, 200);


    burger.classList.remove('none');
}
burger.addEventListener('click', function () {
    mobileNavArea.classList.remove('none');

    setTimeout(() => {
        mobileNavArea.classList.add('openNav');
    }, 200);

    this.classList.add('none');
    closeNav.classList.remove('none');
})
closeNav.addEventListener('click', function () {
    closing();
    this.classList.add('none');

})
///////////////////////////////////CURSOR ANIME///////////////////////////////////////////////////
const cursor = document.querySelector('.cursor');
document.addEventListener('mousemove', e => {
    cursor.setAttribute('style', 'top:' + (e.pageY - 20) + "px; left:" + (e.pageX - 20) + "px;")
});
document.addEventListener('click', () => {
    cursor.classList.add('expand');

    setTimeout(() => {
        cursor.classList.remove("expand");
    }, 500);
});
/////////////////////////////////////projet Json-Modal-carousel/////////////////////////////////
function modalContent(target) {
    fetch('assets/js/description.json').then(responce => responce.json().then(responce => {
        for (let i = 0; i < responce.listeProjets.projets.length; i++) {
            console.log(responce.listeProjets.projets[i].picture);
            let listejson = responce.listeProjets.projets[i].name;
            if (target.toLowerCase() === listejson.replace('é', 'e').toLowerCase()) {
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
                if (responce.listeProjets.projets[i].language4 === "") {
                    if (responce.listeProjets.projets[i].language5 === "") {
                        if (responce.listeProjets.projets[i].language6 === "") {
                            document.querySelector('.tech06').classList.remove('cssTech06');
                        }
                        document.querySelector('.tech05').classList.remove('cssTech05');
                    }
                    document.querySelector('.tech04').classList.remove('cssTech04');
                } else {
                    if (document.querySelector('.tech04').classList.contains('cssTech04') === false) {
                        document.querySelector('.tech04').classList.add('cssTech04');
                    }
                    if (responce.listeProjets.projets[i].language5 != "") {
                        document.querySelector('.tech05').classList.add('cssTech05');
                    }
                    if (responce.listeProjets.projets[i].language6 != "") {
                        document.querySelector('.tech06').classList.add('cssTech06');
                    }
                }
                document.querySelector('.tech04').src = responce.listeProjets.projets[i].language4;
                document.querySelector('.tech05').src = responce.listeProjets.projets[i].language5;
                document.querySelector('.tech06').src = responce.listeProjets.projets[i].language6;
                document.querySelector('.moyen1').textContent = responce.listeProjets.projets[i].moyens1;
                document.querySelector('.moyen2').textContent = responce.listeProjets.projets[i].moyens2;
                document.querySelector('.moyen3').textContent = responce.listeProjets.projets[i].moyens3;
                document.querySelector('.moyen4').textContent = responce.listeProjets.projets[i].moyens4;
                document.querySelector('.lien1').textContent = responce.listeProjets.projets[i].lien1;
                document.querySelector('.lien2').textContent = responce.listeProjets.projets[i].lien2;
                break;
            }
        }
    }));
}
boxslideshow.addEventListener('click', function (e) {
    modalContent(e.target.id);
});
///////////////////////////////////SCROLL: LOGO+BURGER///////////////////////////////////////////////////
window.onscroll = () => {
    if (window.scrollY > 200) {
        document.getElementById('nav').style.background = '#0000007e';
        // document.getElemenyId('nav').style.backdrop = '#0000007e';
        document.getElementById('nav').style.boxShadow = '1px 4px 13px 0px rgba(0,0,0,0.75)';

    } else {
        console.log('inf');
        document.getElementById('nav').style.background = 'transparent';
        document.getElementById('nav').style.boxShadow = 'inherit';
    }
};
/*/////////////////////////////////////////////////////////////////////////////////////////////////////////// */
// var i = 0;
// var time = 3000;
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}
function currentSlide(n) {
    showSlides(slideIndex = n);
}function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("custom-slider");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}
/*//////////////////////////////////////////////////////// close ModalDesc*/ ////////////////////////////////*/
document.getElementsByClassName('cross')[0].addEventListener('click', function () {
    document.getElementById('boxModalDesc').classList.add('none');
});
document.getElementsByClassName('boxslideshow')[0].addEventListener('click', function () {
    document.getElementById('boxModalDesc').classList.remove('none');
});
for (let i = 0; i < navbar.length; i++) {
    navbar[i].addEventListener('click', function () {
        closing();
        closeNav.classList.add('none');
    })
}

