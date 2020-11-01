let NightmodeButton;
let NightmodeHead;
let PanelBody;

onload = (event) => {
    PanelBody = document.getElementById('panelBody');
    InterneBeschreibungBox = document.getElementById('interneBeschreibung');
    LagerorteBox = document.getElementById('lagerorteBox');
    BestandBox = document.getElementById('bestandBox');
    MeldebestandBox = document.getElementById('meldebestandBox');
    PreisBox = document.getElementById('preisBox');
    ProduktBildBox = document.getElementById('produktBildBox');
}

function onDarkButtonClick() {
    var p = 'panel-body-dark';
    var c = 'class';
    
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
