
function randomInRange(min, max) {
  return Math.random() * (max - min) + min;
}

function reverseBeads(beads) {
  for (var i = 0; i < beads.length; i++) {
    stiil = window.getComputedStyle(beads[i]);
    if (stiil.getPropertyValue("float") == "right") {
      beads[i].style.cssFloat = "left";
    } else {
      beads[i].style.cssFloat = "right";
    }
  }
}

function reverseBead(bead) { // see meetod lubab abakusega mängida
  if (bead.style.cssFloat == "right") {
    bead.style.cssFloat = "left";
  } else {
    bead.style.cssFloat = "right";
  }
}

window.addEventListener("load", function() {
  /* tehaske kui ka pilt laetud */
  var beads = document.querySelectorAll(".bead");
  
  // järgmine for loop lubab abakusega mängida
  for (var i = 0; i < beads.length; i++) {
    beads[i].onclick = function() {
      reverseBead(this);
    }
  }
  
  // järgmine rida teeb kodutöös nõutud osa, st flipib kõik pärlid ümber
  reverseBeads(beads);
  
});

