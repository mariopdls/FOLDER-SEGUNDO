let estudiantes = [
  { nombre: 'Carla', nota: 8.5, asistencia: 95 },
  { nombre: 'Dani', nota: 4.0, asistencia: 80 },
  { nombre: 'Elena', nota: 6.5, asistencia: 60 },
  { nombre: 'Hugo', nota: 9.0, asistencia: 100 }
]

function estadoDelCurso(estudiantes){

    let hayAlgunSuspenso= estudiantes.some(t => t.nota<5);

    let todosAsisten = estudiantes.every(t => t.asistencia>70);

    let primerExcelente = estudiantes.find(t => {
        if(t.nota>=9){
            return t.nombre;
        }else{
            return null;
        }
    })

    return {hayAlgunSuspenso,todosAsisten,primerExcelente};
}


console.log(estadoDelCurso(estudiantes));