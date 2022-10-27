
export default class util {

    constructor() { // constructor
        // this.notify                 = new Notifications();
        this.chars                  = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ~!@#$%^&*()_+';
        this.randomStringResult     = "";
    }

    randomString(length) { // generate a random string of alphanumeric characters with length specified
        for (var i = length; i > 0; --i) this.randomStringResult += this.chars[Math.floor(Math.random() * this.chars.length)];
        return this.randomStringResult;
    }

    getRndInteger(min, max) { // generating random integers from min to max
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    randChoice(arr = []) { // choice version from python
        return arr[Math.floor(Math.random() * arr.length)];
    }

    getRndInteger(max) { // generating random integers from min (Default = 1) and max
        return Math.floor(Math.random() * (max - 1 + 1)) + 1;
    }

    rnd() { // generates and returns random float between 0 and 1 
        return Math.random();
    }

    isFloat(num) { // checking if the input is a float
        return Number(num) === n && n % 1 !== 0;
    }

    isInt(num) { // checking if the input is a interger
        return Number.isInteger(num);
    }

    isNumber(num) { // checking if the input is a number
        if (isNaN(num)) {
            return false;
        } else {
            return true;
        }
    }

    isString(str) { // checking if the input is a string
        return typeof str === 'string' || str instanceof String;
    }

    isObject(val) { // checking if the input is an object
        return val instanceof Object;
    }

    isArray(myARR) { // checking if the input is an array type
        return myARR.constructor === Array;
    }

    isDate(myDate) { // checking if the input is date type
        return myDate.constructor === Date;
    }

    isEmpty(data) { // checking if the input is null or not
        return !data.trim().length;
    }

    len(data) { // return the size of the data in INT
        return parseInt(data.length);
    }

    turnInt(data) { // returns value as integer
        return parseInt(data);
    }

    uperCase(str) { // return string in upper case
        return str.toUpperCase();
    }

    lowerCase(str) { // return string in lower case
        return str.toLowerCase();
    }

    toString(data) { // returns data as a string
        return data.toString();
    }

    trim(str) { // trim the empty spaces of a string
        return str.trim();
    }

    isJson(data) { // checking if the input is a JSON or not
        try {
            JSON.parse(data);
        } catch (e) {
            return false;
        }
        return true;
    }

    jsonify(data) { // returns the data as a json object
        return JSON.parse(data);
    }

    replaceWord(main_string, rep_word, rep_with) { // replace the rep_word with rep_with
        return main_string.replace(rep_word, rep_with);
    }

    print(data) { // printing on the console
        console.log(data);
    }

    strSearch(str, searchWord) { // search for specific words (searchWord) in str
        return str.search(searchWord);
    }

    hasVal(str, val) { // returns true if the string contains val 
        return str.includes(val);
    }

    ValidateEmail(mail) { // validate the email to be sure it's in the same format
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)) {
            return true
        }
        return false
    }

    Sleep(ms) { // the js version of sleep
        return new Promise(resolve => setTimeout(resolve, ms));
    }
}

