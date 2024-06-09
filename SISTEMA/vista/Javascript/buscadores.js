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

//BUSCADOR INCENDIO
document.addEventListener('DOMContentLoaded', () => {

    const fecha_incendio_buscador = document.getElementById('fecha_incendio_buscador');
    const seccion_incendio_buscador = document.getElementById('seccion_incendio_buscador');
    const municipio_incendio_buscador = document.getElementById('municipio_incendio_buscador');
    const localidad_incendio_buscador = document.getElementById('localidad_incendio_buscador');
    const propietario_incendio_buscador = document.getElementById('propietario_incendio_buscador');
    const valor_inmueble_incendio_buscador = document.getElementById('valor_inmueble_incendio_buscador');
    const num_residenciados_incendio_buscador = document.getElementById('num_residenciados_incendio_buscador');
    const fuente_ignicion_incendio_buscador = document.getElementById('fuente_ignicion_incendio_buscador');
    const causa_incendio_buscador = document.getElementById('causa_incendio_buscador');
    const tabla = document.getElementById('tabla_incendio');
    const rows = tabla.getElementsByTagName('tbody')[0].getElementsByTagName('tr');


    [fecha_incendio_buscador, seccion_incendio_buscador, municipio_incendio_buscador, localidad_incendio_buscador, propietario_incendio_buscador, valor_inmueble_incendio_buscador, valor_inmueble_incendio_buscador, num_residenciados_incendio_buscador, fuente_ignicion_incendio_buscador, causa_incendio_buscador].forEach((input) => {
        input.addEventListener('keyup', () => {

            const filtro1 = fecha_incendio_buscador.value.toLowerCase();
            const filtro2 = seccion_incendio_buscador.value.toLowerCase();
            const filtro3 = municipio_incendio_buscador.value.toLowerCase();
            const filtro4 = localidad_incendio_buscador.value.toLowerCase();
            const filtro5 = propietario_incendio_buscador.value.toLowerCase();
            const filtro6 = valor_inmueble_incendio_buscador.value.toLowerCase();
            const filtro7 = num_residenciados_incendio_buscador.value.toLowerCase();
            const filtro8 = fuente_ignicion_incendio_buscador.value.toLowerCase();
            const filtro9 = causa_incendio_buscador.value.toLowerCase();

            for (let i = 0; i < rows.length; i++) {
                let row = rows[i];
                let cell1 = row.getElementsByTagName('td')[1].textContent.toLowerCase();
                let cell2 = row.getElementsByTagName('td')[2].textContent.toLowerCase();
                let cell3 = row.getElementsByTagName('td')[12].textContent.toLowerCase();
                let cell4 = row.getElementsByTagName('td')[13].textContent.toLowerCase();
                let cell5 = row.getElementsByTagName('td')[21].textContent.toLowerCase();
                let cell6 = row.getElementsByTagName('td')[22].textContent.toLowerCase();
                let cell7 = row.getElementsByTagName('td')[23].textContent.toLowerCase();
                let cell8 = row.getElementsByTagName('td')[34].textContent.toLowerCase();
                let cell9 = row.getElementsByTagName('td')[35].textContent.toLowerCase();

                let match1 = !filtro1 || cell1.includes(filtro1);
                let match2 = !filtro2 || cell2.includes(filtro2);
                let match3 = !filtro3 || cell3.includes(filtro3);
                let match4 = !filtro4 || cell4.includes(filtro4);
                let match5 = !filtro5 || cell5.includes(filtro5);
                let match6 = !filtro6 || cell6.includes(filtro6);
                let match7 = !filtro7 || cell7.includes(filtro7);
                let match8 = !filtro8 || cell8.includes(filtro8);
                let match9 = !filtro9 || cell9.includes(filtro9);

                if (match1 && match2 && match3 && match4 && match5 && match6 && match7 && match8 && match9) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            }
        });
    });
});