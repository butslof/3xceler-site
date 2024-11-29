window.onload = function(){
  // Menu hamburger
  let buttonMenu = document.querySelectorAll(".hamb");
  buttonMenu ? (
    buttonMenu.forEach(buttonMenu => {
      buttonMenu.addEventListener('click', () => {
        if(buttonMenu.classList.contains("open-hamb")){
          buttonMenu.classList.remove( "open-hamb" );
          document.querySelector("#nav-menu-container").classList.remove( "container-menu-aberto" ); 
          document.querySelector(".burger-overlay").classList.remove( "burger-overlay-aberto" );
          document.querySelector("html").classList.remove( "no-scroll" );
          document.querySelector("body").classList.remove( "no-scroll" );
          document.querySelector("#menu-secundary").classList.remove( "open-menu-secundary" );
          document.querySelector("#menu-princ").classList.remove( "menu-princ-off" );
        } 
        else{
          buttonMenu.classList.add('open-hamb');
          document.querySelector("#nav-menu-container").classList.add('container-menu-aberto');
          document.querySelector(".burger-overlay").classList.add('burger-overlay-aberto');
          document.querySelector("body").classList.add('no-scroll');
          document.querySelector("html").classList.add('no-scroll');
        }
      })
    })
  ) : false   


  let closeMenu = document.querySelectorAll(".close-menu");
  closeMenu ? (
    closeMenu.forEach(closeMenu => {
      closeMenu.addEventListener('click', () => {
          document.querySelector("#nav-menu-container").classList.remove( "container-menu-aberto" ); 
          document.querySelector(".burger-overlay").classList.remove( "burger-overlay-aberto" );
          document.querySelector("html").classList.remove( "no-scroll" );
          document.querySelector("body").classList.remove( "no-scroll" );
          document.querySelector("#menu-secundary").classList.remove( "open-menu-secundary" );
          document.querySelector("#menu-princ").classList.remove( "menu-princ-off" );
          // document.querySelector(".hamb").classList.remove( "open-hamb" );

          let hamburger = document.querySelectorAll(".hamb");
          hamburger ? (
            hamburger.forEach(hamburger => {
              hamburger.classList.remove( "open-hamb" );

            })
          ) : false   

          
      })
    })
  ) : false   


  
  // menu services
  let buttonMenuServices = document.querySelectorAll(".button-open-service");
  buttonMenuServices ? (
    buttonMenuServices.forEach(buttonMenuService => {
      buttonMenuService.addEventListener('click', () => {
        document.querySelector(".burger-overlay").classList.add('burger-overlay-aberto');
        document.querySelector(".hamb").classList.add('open-hamb');
        document.querySelector("#menu-princ").classList.add('menu-princ-off');
        document.querySelector("#menu-secundary").classList.add('open-menu-secundary'); 

        let hamburger = document.querySelectorAll(".hamb");
        hamburger ? (
          hamburger.forEach(hamburger => {
            hamburger.classList.add('open-hamb');
          })
        ) : false   

        var windowWidth = window.innerWidth;
        if(windowWidth <= 1023){
           const buttonReturn = document.querySelector(".name-buttom")
           const nameButton = buttonMenuService.getAttribute('data-name-button'); 
           console.log(nameButton);
           buttonReturn.innerHTML = nameButton;
        }
      })
    })
  ) : false   

  // close services menu
  let buttonMenuCloseServices = document.querySelector(".button-close-service");
  buttonMenuCloseServices.addEventListener("click", function(){
    document.querySelector("#menu-princ").classList.remove('menu-princ-off');
    document.querySelector("#menu-secundary").classList.remove('open-menu-secundary');
    var windowWidth = window.innerWidth;
    if(windowWidth <= 1023){
      document.querySelector(".second-level-menu-body").classList.remove('invisible');
      let MenuHasChildren = document.querySelectorAll(".second-level-menu-body-sub");
      MenuHasChildren  ? (
        MenuHasChildren .forEach(MenuHasChildren  => {
          MenuHasChildren.classList.remove('active');
        })
      ) : false   
    }
  });

  // open children services
  var windowWidth = window.innerWidth;
  if(windowWidth <= 1023){
    let buttonMenuHasChildren = document.querySelectorAll(".has-children");
    buttonMenuHasChildren ? (
      buttonMenuHasChildren.forEach(buttonMenuHasChildren => {
        buttonMenuHasChildren.addEventListener('click', () => {
          const attributeButton = buttonMenuHasChildren.getAttribute('data-id-button'); 
          document.querySelector(".second-level-menu-body").classList.add('invisible');
          document.querySelector("#body-sub-menu-" + attributeButton).classList.add('active');
          const buttonReturn = document.querySelector(".name-buttom")
          buttonReturn.innerHTML = buttonMenuHasChildren.getAttribute('data-name-button');
        })
      })
    ) : false   
  }
  
 
}

// ativar tracking whatsapp
const btns = document.querySelectorAll('.whats-tracking')
btns ? (
  btns.forEach(btn => {
    btn.addEventListener('click', () => {
        gtag('event', 'WhatsApp', {
          'event_category': 'WhatsApp',
          'event_action' : 'Click',
          'event_label': 'WhatsApp',
          'value': 'WhatsApp'
        });
        fbq('track', 'WhatsApp');
    })
  })
) : false   

// called when the window is scrolled. 
window.onscroll = function (e) {  
  if(window.pageYOffset || document.documentElement.scrollTop > 100){
    document.querySelector( "header" ).classList.add( "header-fixed" );
  }
  else{
    document.querySelector( "header" ).classList.remove( "header-fixed" );
  }
} 


