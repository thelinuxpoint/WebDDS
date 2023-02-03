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