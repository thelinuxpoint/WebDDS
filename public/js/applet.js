function toggleStore(){
    if (document.getElementsByClassName("nav-container-store")[0].hidden){

        document.getElementsByClassName("nav-container-store")[0].hidden = false
        document.getElementsByClassName("nav-container-computer")[0].hidden = true
        document.getElementsByClassName("nav-container-accesories")[0].hidden = true
        document.getElementsByClassName("nav-container-electronics")[0].hidden = true

    }else{
        document.getElementsByClassName("nav-container-store")[0].hidden = true
    }

}

function toggleComputer(){
    if (document.getElementsByClassName("nav-container-computer")[0].hidden){
        document.getElementsByClassName("nav-container-computer")[0].hidden = false
        document.getElementsByClassName("nav-container-store")[0].hidden = true
        document.getElementsByClassName("nav-container-accesories")[0].hidden = true
        document.getElementsByClassName("nav-container-electronics")[0].hidden = true
    }else{
        document.getElementsByClassName("nav-container-computer")[0].hidden = true
       
    }
}

function toggleAccesories(){
    if (document.getElementsByClassName("nav-container-accesories")[0].hidden){
        document.getElementsByClassName("nav-container-accesories")[0].hidden = false
        document.getElementsByClassName("nav-container-store")[0].hidden = true
        document.getElementsByClassName("nav-container-computer")[0].hidden = true
        document.getElementsByClassName("nav-container-electronics")[0].hidden = true

    }else{
        document.getElementsByClassName("nav-container-accesories")[0].hidden = true
    }
}

function toggleElectronics(){
    if (document.getElementsByClassName("nav-container-electronics")[0].hidden){
        document.getElementsByClassName("nav-container-electronics")[0].hidden = false
        document.getElementsByClassName("nav-container-store")[0].hidden = true
        document.getElementsByClassName("nav-container-computer")[0].hidden = true
        document.getElementsByClassName("nav-container-accesories")[0].hidden = true

    }else{
        document.getElementsByClassName("nav-container-electronics")[0].hidden = true
    }
}

function hamburger(arg){
    if(document.getElementById('hambure')){
        let c = document.getElementById('hambure');
        c.id='hamburx';
        // document.getElementsByClassName('flap-cpp')[0].style.left='0px';

    }else if(document.getElementById('hamburx')){
        let c = document.getElementById('hamburx');
        c.id='hambure';
        // document.getElementsByClassName('flap-cpp')[0].style.left='-300px'
    }
}