//BUSCADOR RECURSO
document.addEventListener('DOMContentLoaded', () => {

    const nombre_recurso_buscador = document.getElementById('nombre_recurso_buscador');
    const tipo_recurso_buscador = document.getElementById('tipo_recurso_buscador');
    const cantidad_recurso_buscador = document.getElementById('cantidad_recurso_buscador');
    const tabla = document.getElementById('tabla_recursos');
    const rows = tabla.getElementsByTagName('tbody')[0].getElementsByTagName('tr');


    [nombre_recurso_buscador, tipo_recurso_buscador, cantidad_recurso_buscador].forEach((input) => {
        input.addEventListener('keyup', () => {

            const filtro1 = nombre_recurso_buscador.value.toLowerCase();
            const filtro2 = tipo_recurso_buscador.value.toLowerCase();
            const filtro3 = cantidad_recurso_buscador.value.toLowerCase();

            for (let i = 0; i < rows.length; i++) {
                let row = rows[i];
                let cell1 = row.getElementsByTagName('td')[1].textContent.toLowerCase();
                let cell2 = row.getElementsByTagName('td')[2].textContent.toLowerCase();
                let cell3 = row.getElementsByTagName('td')[3].textContent.toLowerCase();

                let match1 = !filtro1 || cell1.includes(filtro1);
                let match2 = !filtro2 || cell2.includes(filtro2);
                let match3 = !filtro3 || cell3.includes(filtro3);


                if (match1 && match2 && match3) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            }
        });
    });
});

//BUSCADOR TIPO PERSONA
document.addEventListener('DOMContentLoaded', () => {

    const tipo_persona_buscador = document.getElementById('tipo_persona_buscador');
    const descripcion_tipo_buscador = document.getElementById('descripcion_tipo_buscador');

    const tabla = document.getElementById('tabla_Tpersona');
    const rows = tabla.getElementsByTagName('tbody')[0].getElementsByTagName('tr');


    [tipo_persona_buscador, descripcion_tipo_buscador].forEach((input) => {
        input.addEventListener('keyup', () => {

            const filtro1 = tipo_persona_buscador.value.toLowerCase();
            const filtro2 = descripcion_tipo_buscador.value.toLowerCase();

            for (let i = 0; i < rows.length; i++) {
                let row = rows[i];
                let cell1 = row.getElementsByTagName('td')[1].textContent.toLowerCase();
                let cell2 = row.getElementsByTagName('td')[2].textContent.toLowerCase();

                let match1 = !filtro1 || cell1.includes(filtro1);
                let match2 = !filtro2 || cell2.includes(filtro2);

                if (match1 && match2) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            }
        });
    });
});