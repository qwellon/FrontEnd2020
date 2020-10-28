//квадрат прямоуг треугольник
//params array
//name string
/*class Figure {
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

let objTriangle = new Triangle('Треугольник ', [1, 2, 3]);*/

<html><head></head><body>
    <form name="search">
        <label>Search the site:
      <input type="text" name="search">
    </label>
            <input type="submit" value="Search!">
  </form>

            <hr>

                <form name="search-person">
                    Search the visitors:
    <table id="age-table">
                        <tbody><tr>
                            <td>Age:</td>
                            <td id="age-list">
                                <label>
                                    <input type="radio" name="age" value="young">less than 18</label>
                                    <label>
                                        <input type="radio" name="age" value="mature">18-50</label>
                                        <label>
                                            <input type="radio" name="age" value="senior">more than 50</label>
        </td>
      </tr>

                                    <tr>
                                        <td>Additionally:</td>
                                        <td>
                                            <input type="text" name="info[0]">
                                                <input type="text" name="info[1]">
                                                    <input type="text" name="info[2]">
        </td>
      </tr>

    </tbody></table>

                                        <input type="submit" value="Search!">
  </form>


</body></html>