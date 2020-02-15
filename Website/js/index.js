// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

function openSignupSigninModal() {

    document.getElementById('signupModal').style.display = 'block';
    document.getElementById('signupContainer').style.display = 'flex';

}

function openHomeBlock() {
    document.getElementById('homeBlock').style.display = 'block';
    document.getElementById('sellBlock').style.display = 'none';
}

function openSellBlock() {
    document.getElementById('homeBlock').style.display = 'none';
    document.getElementById('sellBlock').style.display = 'block';
}

function openSigninModal() {

    document.getElementById('signupContainer').style.display = 'none';
    document.getElementById('signinContainer').style.display = 'flex';
}

function openSignupModal() {
    document.getElementById('signupContainer').style.display = 'flex';
    document.getElementById('signinContainer').style.display = 'none';
}

function CloseSignupModal() {
    document.getElementById('signupModal').style.display = 'none';
}