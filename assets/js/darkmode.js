"use Strict";

window.addEventListener("load", function() {
    let artikelStammdatenPanelHeading = document.getElementById("artikelStammdatenPanelHeading");
    let artikelStammdatenPanelBody = document.getElementById('artikelStammdatenPanelBody');

    let interneBeschreibungHeading = document.getElementById('interneBeschreibungHeading');
    let interneBeschreibungBody = document.getElementById('interneBeschreibungBody');

    let lagerorteHeading = document.getElementById('lagerorteHeading');
    let lagerorteBody = document.getElementById('lagerorteBody');

    let bestandHeading = document.getElementById('bestandHeading');
    let bestandBody = document.getElementById('bestandBody');

    let meldebestandHeading = document.getElementById('meldebestandHeading');
    let meldebestandBody = document.getElementById('meldebestandBody');

    let preisHeading = document.getElementById('preisHeading');
    let preisBody = document.getElementById('preisBody');

    let produktBildHeading = document.getElementById('produktBildHeading');
    let produktBildBody = document.getElementById('produktBildBody');
    
    let DarkButton = document.getElementById("darkButton");

    let Body = 'panel-body-dark';
    let Headline = 'panel-heading-dark';
    let c = 'class';

    DarkButton.addEventListener("click", function() {
        artikelStammdatenPanelHeading.setAttribute(c, Headline);
        artikelStammdatenPanelBody.setAttribute(c, Body);

        interneBeschreibungHeading.setAttribute(c, Headline);
        interneBeschreibungBody.setAttribute(c, Body);

        lagerorteHeading.setAttribute(c, Headline);
        lagerorteBody.setAttribute(c, Body);

        bestandHeading.setAttribute(c, Headline);
        bestandBody.setAttribute(c, Body);
        
        meldebestandHeading.setAttribute(c, Headline);
        meldebestandBody.setAttribute(c, Body);
        
        preisHeading.setAttribute(c, Headline);
        preisBody.setAttribute(c, Body);
        
        produktBildHeading.setAttribute(c, Headline);
        produktBildBody.setAttribute(c, Body);
        //document.getElementById('panelBody').setAttribute('class', 'panel-body-dark');


        alert('Nightmode aktiviert');
    }, false);

}, false);
