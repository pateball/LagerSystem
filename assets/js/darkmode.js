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

    let dark = 0;

    DarkButton.addEventListener("click", function() {
        artikelStammdatenPanelHeading.classList.toggle(Headline);
        artikelStammdatenPanelBody.classList.toggle(Body);

        interneBeschreibungHeading.classList.toggle(Headline);
        interneBeschreibungBody.classList.toggle(Body);

        lagerorteHeading.classList.toggle(Headline);
        lagerorteBody.classList.toggle(Body);

        bestandHeading.classList.toggle(Headline);
        bestandBody.classList.toggle(Body);
        
        meldebestandHeading.classList.toggle(Headline);
        meldebestandBody.classList.toggle(Body);
        
        preisHeading.classList.toggle(Headline);
        preisBody.classList.toggle(Body);
        
        produktBildHeading.classList.toggle(Headline);
        produktBildBody.classList.toggle(Body);
        //document.getElementById('panelBody').setAttribute('class', 'panel-body-dark');

        if(dark < 1) {
            DarkButton.innerText = 'Daymode';
            dark = 1;
            alert('Nightmode aktiviert');
        } else {
            DarkButton.innerText = 'Darkmode';
            dark = 0;
            alert('Daymode aktiviert');
        }

    }, false);

}, false);
