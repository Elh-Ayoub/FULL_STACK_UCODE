let container = document.getElementById("container");
let situation = {
    target: null
}

container.addEventListener("mousedown", e => {
    if (e.target && e.target.classList.contains("elem") && e.target.getAttribute("move") == "off") {
        e.target.style.cursor = "none";
        situation.target = e.target;
        situation.offsetX = e.offsetX;
        situation.offsetY = e.offsetY;
    }
});

container.addEventListener("mouseup", () => {
    situation.target = null;
});

container.addEventListener("mousemove", e => {
    if (situation.target) {
        situation.target.style.left = (e.pageX - situation.offsetX) + "px";
        situation.target.style.top = (e.pageY - situation.offsetY) + "px";
    }
});

container.addEventListener("dblclick", e => {
    if (e.target && e.target.classList.contains("elem")) {
        if (e.target.getAttribute("move") == "on")
            e.target.setAttribute("move", "off");
        else
            e.target.setAttribute("move", "on");
    }
});