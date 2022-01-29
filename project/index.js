$(document).ready(() => {
    $('#hamburger-menu').click(() => {
        $('#hamburger-menu').toggleClass('active')
        
    })

    // setting owl carousel

    let navText = ["<i class='bx bx-chevron-left'></i>", "<i class='bx bx-chevron-right'></i>"]

    $('#hero-carousel').owlCarousel({
        items: 1,
        
        loop: true,
        nav:true,
        navText: navText,
        autoplay: true
    
    })

   

    $('.movies-slide').owlCarousel({
        
        dots: false,
        nav:true,
        navText: navText,
        margin: 15,
        responsive: {
            500: {
                items: 2
            },
            1200: {
                items: 4
            },
            1600: {
                items: 6
            }
        }
    })
})