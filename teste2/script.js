document.getElementById("sim").addEventListener("click", function() {
    document.getElementById("resposta").innerHTML = "<h2>🎉 Ebaaa! Que felicidade! 💙</h2>";
});

document.getElementById("nao").addEventListener("mouseenter", function() {
    let x = Math.random() * window.innerWidth;
    let y = Math.random() * window.innerHeight;
    
    this.style.position = "absolute";
    this.style.left = x + "px";
    this.style.top = y + "px";
});
