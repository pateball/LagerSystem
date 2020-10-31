let NightmodeButton;
let NightmodeHead;
let PanelBody;

onload = (event) => {
    Nightmode = document.getElementById('NightmodeButton');
    NightmodeHead = document.getElementById('headArtikelStammdaten');
    PanelBody = document.getElementById('panelBody');
}

function onButtonClick() {
    alert('Nightmode aktiviert');
    //document.body.style.color = "black";
    //document.getElementById('headArtikelStammdaten').style.color ="black";
    
    setPanelBody.panel-body = "panel-body-darkmode";
}

