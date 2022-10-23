class Animal {

	constructor(tipo, nombre) {
		this.tipo = tipo;
		this.nombre = nombre;
	}

	hacerRuido() {
		throw new Error("No implementado");
	}
}

class Gato extends Animal {

	constructor(raza, nombre) {
		super("gato", nombre);
		this.raza = raza;
	}

	hacerRuido() {
		console.log("Miau");
	}
}

class Perro extends Animal {

	constructor(nombre) {
		super("perro", nombre);
	}
}

let misu = new Gato("siamés", "Pipo");
let firulais = new Perro("Firuláis");

misu.hacerRuido();
firulais.hacerRuido();