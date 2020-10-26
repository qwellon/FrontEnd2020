//квадрат прямоуг треугольник
//params array
//name string
class Figure {
    constructor(name, params) {
        this.name = name;
        this.params = params;
    }
    getAreat() {

    }
    get() {
        return this.name;
    }
}

class Square extends Figure {
    getArea() {
        //super.getArea();
        return this.params[0] ** 2;
    }
}
class Triangle extends Figure {
    getArea() {
        //super.getArea();
        let height = this.height
        return this.params[0] * this.params[2];

    }
}
let obj = new Square('Квадрат', [2, 2, 2, 2]);
console.log(objSquare.getArea());
console.log(objSquare.get());

let objTriangle = new Triangle('Треугольник ', [1, 2, 3]);