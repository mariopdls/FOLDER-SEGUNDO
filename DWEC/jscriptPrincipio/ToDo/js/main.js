
/*
    Cada tarea tendrá esta estructura:

        id: 1,
        name: "Estudiar JavaScript",
        completed: false
*/


// Recuperamos las tareas guardadas.
// Si no hay datos, comenzamos con un array vacío.


// Recuperamos el siguiente identificador.


// Elementos del DOM


let taskList = document.getElementById("taskList");
let input = document.getElementById("taskInput");
let sendButton = document.getElementById("addBtn");
let count = 0;

/**
 * Muestra todas las tareas en la página.
* Añade una nueva tarea al array. */


function addTask() {
    
    let li = document.createElement("li");
    let text = input.value;

    let nodeLi = document.createTextNode(text);

    li.setAttribute("id", "tarea-".concat(count));
    li.setAttribute("status", "toDo");

    count++;



    li.innerText = li.getAttribute("status").concat("  --  ");
    li.appendChild(nodeLi);

    taskList.appendChild(li);

   
}


sendButton.addEventListener("click", () => {
    addTask();
})


/**
 * Cambia el estado de una tarea.




/**
 * Elimina una tarea por su identificador.




// EVENTOS

// Añadir tarea al pulsar el botón.


// Añadir tarea al pulsar Enter.


// Mostramos las tareas al cargar la página.
*/
