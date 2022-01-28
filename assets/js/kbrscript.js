window.onload = () => {
    // generate mailto icon
    var mail = document.createElement("div");
    mail.classList.add("col","col-md-3", "align-self-center");
    mail.innerHTML = "<a href=mailto:info@kommunalbuendnis-recke.de><i class='far fa-paper-plane'></i></a>"; 
    document.getElementById("social").appendChild(mail);
}