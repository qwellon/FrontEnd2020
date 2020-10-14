//111111111111111111111111111111111111111111

user = {};
user.name = 'John';
user.surname = 'Smith';

user.name = 'Pete';
delete user.name;

//2222222222222222222222222222222222222222222222
let empty = {};

function isEmpty(obj) {

    for (key in obj) {
        return false;
    }

    if (key in obj) {
        return true;
    } else {
        return false;
    }
}
//alert(isEmpty(empty));
empty.go = 1;
//33333333333333333333333333333333
//da
//44444444444444444444444444444444444444
let salaries = {
    John: 100,
    Ann: 161,
    Pete: 130
}

function summary(obj) {
    let sum = 0;
    for (let key in obj) {
        sum += obj[key];
    }
    return sum;
}
//alert(summary(salaries));

//555555555555555555555555555

let menu = {
    width: 200,
    height: 300,
    title: "My menu"
};

function multiplyNumeric(obj) {
    for (let key in obj) {
        if (typeof obj[key] === 'number') {
            obj[key] = obj[key] * 2;
        }
    }
    for (let key in obj) {
        document.write(obj[key]);
    }
}
multiplyNumeric(menu);

//alert(menu.width);

/*calculator = {
    x: +prompt('x'),
    y: +prompt('y'),

    sum: function sum() {
        return sum = this.x + this.y;
    }

}
alert(calculator.sum());*/


