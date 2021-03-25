var n = 10;
var b_int = 1234567890123456789012345678901234567890n;
var s = "Hi!!"
var b = true;
var f = null;
var u;
let o = new Object();
let sym = Symbol();
function func(){
}
alert("n is " + typeof(n)+"\r\n" +
	  "b_int is " + typeof(b_int)+ "\r\n"+
	  "s is " + typeof(s) + "\r\n"+
	  "b is " + typeof(b) + "\r\n"+
	  "f is " + typeof(f) + "\r\n"+
	  "u is " + typeof(u) + "\r\n"+
	  "o is " + typeof(o) + "\r\n"+
	  "sym is "+ typeof(sym) + "\r\n"+
	  "func() is " + typeof(func));