describe("checkBrackets",function(){
    it("1)()(())2(()", function() {
      assert.equal(checkBrackets('1)()(())2(()'), 2);
    })

    
    it(")0()(()Hi))0(()(", function() {
      assert.equal(checkBrackets(')0()(()Hi))0(()('), -1);
    })

    
  it("((", function() {
    assert.equal(checkBrackets('(('), 2);
  })
 it("09090999()()()()", function() {
    assert.equal(checkBrackets('09090999()()()()'), 0);
  })
  it("cossen())()((one))))", function() {
    assert.equal(checkBrackets('(('), 2);
  })
  it("Hi((from)inside))()", function() {
    assert.equal(checkBrackets('Hi((from)inside))()'), -1);
  })

  it(20, function() {
    assert.equal(checkBrackets(20), 0);
  })
  it("I am a string", function() {
    assert.equal(checkBrackets('I am a string'), 0);
  })
  it("7890()4450)(())41", function() {
    assert.equal(checkBrackets('7890()4450)(())41'), 1);
  })
  it("Nan", function() {
    assert.equal(checkBrackets(NaN), -1);
  })
  it("(()((()()()(()())))))", function() {
    assert.equal(checkBrackets('(()((()()()(()())))))'), -1);
  })
  it("TEST)(TEST()()())(", function() {
    assert.equal(checkBrackets('(()((()()()(()())))))'), 1);
  })
  it(new Object(), function() {
    assert.equal(checkBrackets(new Object()), -1);
  })
  it("gH(F)DF())())F(F)F)", function() {
    assert.equal(checkBrackets('gH(F)DF())())F(F)F)'), -1);
  })

    it("Nan", function() {
      assert.equal(checkBrackets(NaN), -1);
    })
});
console.log(checkBrackets('1)()(())2(()'));
console.log(checkBrackets('1)()(()55))2(()('));
console.log(checkBrackets(NaN));
