"use Strict";

let NightmodeButton;
let NightmodeHead;

onload = (event) => {
    let PanelBody = document.getElementById('panelBody');
    let InterneBeschreibungBox = document.getElementById('interneBeschreibung');
    let LagerorteBox = document.getElementById('lagerorteBox');
    let BestandBox = document.getElementById('bestandBox');
    let MeldebestandBox = document.getElementById('meldebestandBox');
    let PreisBox = document.getElementById('preisBox');
    let ProduktBildBox = document.getElementById('produktBildBox');
}

let onDarkButtonClick = function() {
    let p = 'panel-body-dark';
    let c = 'class';
    
    PanelBody.setAttribute(c, p);
    InterneBeschreibungBox.setAttribute(c, p);
    LagerorteBox.setAttribute(c, p);
    BestandBox.setAttribute(c, p);
    MeldebestandBox.setAttribute(c, p);
    PreisBox.setAttribute(c, p);
    ProduktBildBox.setAttribute(c, p);
    //document.getElementById('panelBody').setAttribute('class', 'panel-body-dark');

    alert('Nightmode aktiviert');
}