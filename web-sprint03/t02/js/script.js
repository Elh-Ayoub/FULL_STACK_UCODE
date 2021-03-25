class Timer{
    constructor(title, delay, stopCount){
        this.title = title;
        this.delay = delay;
        this.stopCount = stopCount;
    }
    start(){
        console.log("Timer " + this.title +  " started (delay=" + this.delay  + ",  stopCount=" + this.stopCount + ")");
    }
    tick(){
        var t = this.title;
        var sc = this.stopCount;
        var int = setInterval(function(){
            if(sc > 0){
                console.log("Timer " + t + " Tick! | cycles left " + --sc);
            }
        }, this.delay);

    }
    stop(){
        console.log("Timer "  + this.title + " stopped");
    }
}    
function runTimer(id, delay, counter){
    let timer = new Timer(id, delay, counter);
    timer.start();
    timer.tick();
    setInterval(function(){
        if(counter === timer.stopCount){
            timer.stop();
            counter = 0;
        }
    },delay*(counter));
    
}
// runTimer("Bleep", 1000, 5);
