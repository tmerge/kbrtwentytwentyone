window.onload = () => {
  // generate mailto icon
  /*var mail = document.createElement("div");
  mail.classList.add("col", "col-md-3", "align-self-center");
  mail.innerHTML =
    "<a class='social-link' href='mailto:info@kommunalbuendnis-recke.de'><i class='far fa-paper-plane'></i></a>";
  document.getElementById("social").appendChild(mail);*/
  /*let menuitems = document.getElementsByClassName('item');
  var hover = false;
  for (let i = menuitems.length; i--;) {
    menuitems[i].addEventListener('mouseover', function (event) {
        if (!hover) {
          let overlay = document.getElementsByClassName('overlay')[0];
          overlay.classList.add('is-visible');
        }
        hover = true;
      }
    }*/
  // get menu toggle
  let body = document.getElementById('body');
  let menuToggle = document.getElementsByClassName('menu-toggle')[0];
  let toggle = false;
  menuToggle.addEventListener('click', (event) => {
    if (toggle) {
      body.classList.remove('menu-open');
    } else {
      body.classList.add('menu-open');
    }
    toggle = !toggle;
  });

  // set menu mode based on vw (inital)
  let vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);
  if (vw < 1200) {
    body.classList.add('menu-mobile');
    body.classList.remove('menu-desktop');
  } else {
    body.classList.add('menu-desktop');
    body.classList.remove('menu-mobile');
  }

  // check for view resize
  window.addEventListener('resize', (event) => {
    let vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);
    if (vw < 1200) {
      body.classList.add('menu-mobile');
      body.classList.remove('menu-desktop');
    } else {
      body.classList.add('menu-desktop');
      body.classList.remove('menu-mobile');
    }
  });
};