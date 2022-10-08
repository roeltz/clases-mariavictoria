
function agregarItem(lista, valor) {
	if (lista) {
		let actual = lista;
		do {
			if (!actual.siguiente) {
				actual.siguiente = {
					valor,
					siguiente: null
				};
				break;
			}
		} while (actual = actual.siguiente);
		return lista;
	} else {
		return {
			valor,
			siguiente: null
		};
	}
}

function mostrarLista(lista) {
	if (lista) {
		let actual = lista;
		while (actual) {
			console.log(actual.valor);
			actual = actual.siguiente;
		}
	} else {
		console.log("[Lista vacía]");
	}
}

function eliminarItem(lista, nombre) {
	let anterior;
	let actual = lista;
	while (actual) {
		if (actual.valor.nombre === nombre) {
			if (anterior) {
				anterior.siguiente = actual.siguiente;
				break;
			} else {
				return actual.siguiente;
			}
		}
		anterior = actual;
		actual = actual.siguiente;
	}
	return lista;
}

let lista = null;

lista = agregarItem(lista, {nombre: "María Victoria"});
lista = agregarItem(lista, {nombre: "Leonardo"});
lista = agregarItem(lista, {nombre: "Mary"});
lista = agregarItem(lista, {nombre: "Ada"});
lista = agregarItem(lista, {nombre: "Cereza"});

lista = eliminarItem(lista, "Leonardo");
lista = eliminarItem(lista, "Ada");
lista = eliminarItem(lista, "Mary");
lista = eliminarItem(lista, "María Victoria");
lista = eliminarItem(lista, "Cereza");

mostrarLista(lista);


class Lista {

	constructor() {
		this.contenido = [];
	}
}


$("p").each(function(){
	$(this).addClass("sdfdsf");
})