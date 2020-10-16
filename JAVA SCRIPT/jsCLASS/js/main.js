/*class MyClass {
    constructor(arg) {
        this.name = arg;
    }
    getMyName() {
        alert('My name = ' + this.age);
    }

    method2() {
        return 2;

    }
}

let obj = new MyClass();
console.log(obj);*/

/*class User {
    constructor(name) {
        this.name = name;
    }
    set name(val) {
        if (val.length < 2) {
            alert('Нужно больше символов');
        } else {
            this._name = val;
        }
    }

    get name() {
        return this.name;
    }
}*/

class User {
    constructor(name, surname, bill) {
        this.name = name;
        this.surname = surname;
        this.bill = bill;
    }


    set name(val) {
        if (val.length < 2) {
            alert('Нужно больше символов');
        } else {
            this._name = val;
        }
    }
    get name() {
        return this._name;
    }

    set bill(val) {
        if (typeof val == 'number' || val >= 0) {
            this._bill = val;
        } else {
            alert('Неверное значение!')
        }
    }
    get bill() {
        return this._bill;
    }
}

let user1 = new User('S', 'Kon', 'q300');
/*user1.name = 'Stas';
user1.surname = 'Kon';
user1.bill = 300;*/

alert(user1.name + user1.surname + user1.bill);






