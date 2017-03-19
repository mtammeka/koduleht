
function randomInRange(min, max) {
  return Math.random() * (max - min) + min;
}

window.addEventListener("load", function() {
  /* tehaske kui ka pilt laetud */
  var outerEl = document.querySelector("#outermost");
  outerEl.onclick = function() {
    this.style.top = Math.round(randomInRange(0, screen.height - 150)).toString() + "px";
    this.style.left = Math.round(randomInRange(0, screen.width - 150)).toString() + "px";
    
    // this.style.visibility = "hidden";
    console.log("tehtud");
  };
  
});
