// Copia aquí las funciones de notas del boletín 1.

const gradebook = {
    students: [
        { name: 'Ana', grades: [8, 7, 9], average: 0 },
        { name: 'Luis', grades: [6, 8, 6], average: 0 },
        { name: 'Maria', grades: [9, 10, 9], average: 0 }
    ]
};

// Calcula la media de cada estudiante y la guarda en average
const calculateAverage = () => {
    gradebook.students.forEach(student => {
        const hasNoGrades = student.grades.length === 0;

        if (hasNoGrades) {
            student.average = 0;   // evita NaN (0/0)
        } else {
            const sumOfGrades = student.grades.reduce(
                (total, currentGrade) => total + currentGrade,
                0
            );
            student.average = sumOfGrades / student.grades.length;
        }
    });
    return gradebook;
};

// Añade un estudiante nuevo con un array de notas vacío
const addStudent = (studentName) => {
    const newStudent = { name: studentName, grades: [], average: 0 };
    gradebook.students.push(newStudent);
    calculateAverage();
    return gradebook;
};

// Añade una nota al estudiante con ese nombre
const addGrade = (studentName, newGrade) => {
    const foundStudent = gradebook.students.find(
        student => student.name === studentName
    );

    if (foundStudent) {
        foundStudent.grades.push(newGrade);
        calculateAverage();
    }
    return gradebook;
};

calculateAverage();
addStudent("Pedro");
addGrade("Ana", 5);

// 1. Imprimir los nombres de los estudiantes con media > 8
const studentsWithHighAverage = gradebook.students.filter(
    student => student.average > 8
);
studentsWithHighAverage.forEach(student => console.log(student.name));

// 2. Array con los nombres de los que tienen al menos una nota > 9
const namesWithGradeAboveNine = gradebook.students
    .filter(student => student.grades.some(grade => grade > 9))
    .map(student => student.name);
console.log(namesWithGradeAboveNine);

// 3. Estudiantes ordenados por media, de mayor a menor
const studentsSortedByAverage = [...gradebook.students].sort(
    (studentA, studentB) => studentB.average - studentA.average
);
console.log(studentsSortedByAverage);




// TODO: representar alumnos y notas en #students.

let btnAlumno = document.getElementById('addStudent');



btnAlumno.addEventListener("submit", (e) => {
    e.preventDefault();
let listaStudents = document.getElementById('students');
let inputAlumno = document.getElementById('studentName');
let nuevoLi = document.createElement('li');

let parrafoInput = document.createTextNode(inputAlumno.value);

nuevoLi.appendChild(parrafoInput);
listaStudents.appendChild(nuevoLi);
})

// TODO: alta de alumno, botón/formulario para añadir nota, media y clase sobresaliente.


