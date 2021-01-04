/* Homepage MODAL */

const modal = document.getElementById("myModal");
const btn2 = document.getElementById("button2");
const closeBtn = document.getElementsByClassName("close")[0];

btn2.onclick = function() {
    modal.style.display = "block";
}

closeBtn.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

/* NAME save */

const fname = document.getElementById('fname');
const submitNameBtn = document.getElementById('submitNameBtn');
const lsOutput = document.getElementById('lsOutput');

submitNameBtn.onclick = function () {
    const key = fname.value;

    if (key) {
        localStorage.setItem('fname', fname.value);
        location.href="zaciname";
    }
}
