const gradebook = { students:[{name:'Ana',grades:[8,7,9],average:0},
{name:'Luis',grades:[6,8,6],average:0},
{name:'Maria',grades:[9,10,9],average:0}] };
// TODO: calculateAverage, addStudent, addGrade.
// TODO: filtros y ordenación.


    
// Crea un método calculateAverage() que calcule el promedio de las notas de cada estudiante y lo almacene en la propiedad average.


calculateAverage();


// Crea un método addStudent(name) que añada un nuevo estudiante 
// con un array vacío de notas.

function addStudent(name){

     gradebook.students.push({"name":name, "grades" : [], "average":0})

     return gradebook
}
console.log(addStudent("Pedro"))

// Crea un método addGrade(studentName, grade) que añada una nueva nota al array grades del estudiante especificado.
// Utiliza los métodos avanzados de arrays para:

function addGrade (studentName, grade){

    gradebook.students.forEach(element => {
        if (element.name === studentName){
                
            element.grades.push(grade);
    
        }
        
    });

    return gradebook;
}
console.log(addGrade("Ana", 5))

// Imprimir los nombres de los estudiantes cuya nota promedio sea mayor que 8.


// Crear un array con los nombres de todos los estudiantes que tienen al menos una nota mayor que 9.


// Ordenar los estudiantes en función de sus promedios, de mayor a menor.