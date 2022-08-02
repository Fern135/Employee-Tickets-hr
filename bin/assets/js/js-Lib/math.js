export default class Math {

    constructor() {
        //#region constant math
        this.PI = Math.PI;            // PI
        this.EULER = Math.E;          // euler
        this.SQRT2 = Math.SQRT2       // square root of 2
        this.SQRT1_2 = Math.SQRT1_2;  // square root of 1/2
        this.LN2 = Math.LN2;          // natural logarithm of 2
        this.LN10 = Math.LN10;        // natural logarithm of 10
        this.LOG2E = Math.LOG2E;      // base 2 logarithm of E
        this.LOG10E = Math.LOG10E;    // base 10 logarithm of E
        this.NDegree = 90;             
        //#endregion
    }

    round(x) { // Returns x rounded to its nearest integer
        return Math.round(x);
    }

    roundUp(x) { // Returns x rounded up to its nearest integer
        return Math.ceil(x);
    }

    roundDown(x) { // Returns x rounded down to its nearest integer
        return Math.floor(x);
    }

    trunc(x) { // returns the integer part of x
        return Math.trunc(x)
    }

    mathSign(x) { // Returns x rounded down to its nearest integer
        return Math.sign(x);
    }

    powerOf(a, b) { // returns the value of a to the power of b
        return Math.pow(a, b);
    }

    pythagoreomTherom(a, b){ // returns the square root of A times A and B times B
        return this.squareRoot( (this.powerOf(a,2) + this.powerOf(b, 2)) );
    }

    squareRoot(x) { // returns the square root of x
        return Math.sqrt(x);
    }

    absoluteValue(x) { //  returns the absolute (positive) value of x
        return Math.abs(x);
    }

    min(data = []) { // find lowesest in a list
        try {
            return Math.min(data);
        } catch (e) {
            return toString(e);
        }
    }

    max(data = []) { // find highest in a list
        try {
            return Math.max(data);
        } catch (e) {
            return toString(e);
        }
    }

    log(x) { // returns The natural logarithm returns the time needed to reach a certain level of growth
        return Math.log(x);
    }

    log2(x) { //  returns the base 2 logarithm of x
        return Math.log2(x);
    }

    log10(x) { // returns the base 10 logarithm of x
        return Math.log10(x);
    }

    //#region advanced Math methods
    cosh(x) { // returns the hyperbolic cosine of a number.
        return Math.cosh(x);
    }

    exp(x) { // returns the value of Ex, where E is Euler's number (approximately 2.7183) and x is the number passed to it.
        return Math.exp(x);
    }

    sinh(x) { // returns the hyperbolic sine of a number
        return Math.sinh(x);
    }

    tangent(x) { // returns the tangent of a number
        return Math.tan(x);
    }

    cubicRoot(x) { // returns the cubic root of a number
        return Math.cbrt(x);
    }

    hyperbolicArctangent(x) { // returns the hyperbolic arctangent of a number
        /*
            Note: If the parameter x is greater than 1, or less than -1, the method will return NaN.
            Note: If the parameter x is 1, the method will return Infinity.
            Note: If the parameter x is -1, the method will return -Infinity.
        */
        return Math.atanh(x);
    }

    atan2(y, x) { // returns the arctangent of the quotient of its arguments, as a numeric value between PI and -PI radians
        /*
            The number returned represents the counterclockwise angle in radians (not degrees) between the positive X axis and the point (x, y).
            Note: With atan2(), the y coordinate is passed as the first argument and the x coordinate is passed as the second argument.
        */
        return Math.atan2(y, x);
    }

    arctangent(x) { // returns the arctangent of a number as a value between - PI/2 and PI/2 radians
        return Math.atan(x);
    }

    asinh(x) { // returns the hyperbolic arcsine of a number
        return Math.asinh(x);
    }

    arcsine(x) { // returns the arcsine of a number as a value between -PI/2 and PI/2 radians
        /*
            Note: If the parameter x is outside the range -1 to 1, the browser will return NaN.
            Tip: 1 will return the value of PI/2. -1 will return the value of -PI/2.
        */
        return Math.asin(x);
    }

    acosh(x) { // returns the hyperbolic arccosine of a number
        // Note: If the parameter x is less than 1, the method will return NaN.
        return Math.acosh(x);
    }

    tanh(x) { // returns the hyperbolic tangent of a number
        return Math.tanh(x);
    }

    acos(x) { //  returns the arccosine of a number as a value value between 0 and PI radians
        /*
            Note: If the parameter x is outside the range -1 to 1, the method will return NaN.
            Tip: -1 will return the value of PI.
        */
        return Math.acos(x);
    }
    //#endregion
}