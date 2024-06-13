//BUSCADOR RECURSO
document.addEventListener('DOMContentLoaded', () => {
    const nombreRecurso = document.getElementById('nombre_recurso_buscador');
    const tipoRecurso = document.getElementById('tipo_recurso_buscador');
    const cantidadRecurso = document.getElementById('cantidad_recurso_buscador');
    const tabla = document.getElementById('tabla_recurso');
    const rows = tabla.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

    [nombreRecurso, tipoRecurso, cantidadRecurso].forEach((input) => {
        input.addEventListener('keyup', () => {
            const filtro1 = nombreRecurso.value.trim().toLowerCase();
            const filtro2 = tipoRecurso.value.trim().toLowerCase();
            const filtro3 = cantidadRecurso.value.trim().toLowerCase();

            for (let i = 0; i < rows.length; i++) {
                let row = rows[i];
                let cell1 = row.getElementsByTagName('td')[1].textContent.trim().toLowerCase();
                let cell2 = row.getElementsByTagName('td')[2].textContent.trim().toLowerCase();
                let cell3 = row.getElementsByTagName('td')[3].textContent.trim().toLowerCase();

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


    [fecha_incendio_buscador, seccion_incendio_buscador, municipio_incendio_buscador, localidad_incendio_buscador, propietario_incendio_buscador, valor_inmueble_incendio_buscador, num_residenciados_incendio_buscador, fuente_ignicion_incendio_buscador, causa_incendio_buscador].forEach((input) => {
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

//BUSCADOR MUNICIPIO
document.addEventListener('DOMContentLoaded', () => {

    const nombre_municipio_buscador = document.getElementById('nombre_municipio_buscador');
    const codigo_municipio_buscador = document.getElementById('codigo_municipio_buscador');

    const tabla = document.getElementById('tabla_municipio');
    const rows = tabla.getElementsByTagName('tbody')[0].getElementsByTagName('tr');


    [nombre_municipio_buscador, codigo_municipio_buscador].forEach((input) => {
        input.addEventListener('keyup', () => {

            const filtro1 = nombre_municipio_buscador.value.toLowerCase();
            const filtro2 = codigo_municipio_buscador.value.toLowerCase();

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

//BUSCADOR RECURSO
document.addEventListener('DOMContentLoaded', () => {

    const nombre_lugar_buscador = document.getElementById('nombre_lugar_buscador');
    const municipio_lugar_buscador = document.getElementById('municipio_lugar_buscador');
    const distancia_lugar_buscador = document.getElementById('distancia_lugar_buscador');
    const tabla = document.getElementById('tabla_lugar');
    const rows = tabla.getElementsByTagName('tbody')[0].getElementsByTagName('tr');


    [nombre_lugar_buscador, municipio_lugar_buscador, distancia_lugar_buscador].forEach((input) => {
        input.addEventListener('keyup', () => {

            const filtro1 = nombre_lugar_buscador.value.toLowerCase();
            const filtro2 = municipio_lugar_buscador.value.toLowerCase();
            const filtro3 = distancia_lugar_buscador.value.toLowerCase();

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

//BUSCADOR ESTACION
document.addEventListener('DOMContentLoaded', () => {

    const nombre_estacion_buscador = document.getElementById('nombre_estacion_buscador');

    const tabla = document.getElementById('tabla_estacion');
    const rows = tabla.getElementsByTagName('tbody')[0].getElementsByTagName('tr');


    [nombre_estacion_buscador].forEach((input) => {
        input.addEventListener('keyup', () => {

            const filtro1 = nombre_estacion_buscador.value.toLowerCase();

            for (let i = 0; i < rows.length; i++) {
                let row = rows[i];
                let cell1 = row.getElementsByTagName('td')[1].textContent.toLowerCase();

                let match1 = !filtro1 || cell1.includes(filtro1);

                if (match1) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            }
        });
    });
});

//BUSCADOR SECCION
document.addEventListener('DOMContentLoaded', () => {

    const numero_seccion_buscador = document.getElementById('numero_seccion_buscador');

    const tabla = document.getElementById('tabla_seccion');
    const rows = tabla.getElementsByTagName('tbody')[0].getElementsByTagName('tr');


    [numero_seccion_buscador].forEach((input) => {
        input.addEventListener('keyup', () => {

            const filtro1 = numero_seccion_buscador.value.toLowerCase();

            for (let i = 0; i < rows.length; i++) {
                let row = rows[i];
                let cell1 = row.getElementsByTagName('td')[1].textContent.toLowerCase();

                let match1 = !filtro1 || cell1.includes(filtro1);

                if (match1) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            }
        });
    });
});

//BUSCADOR CARGO
document.addEventListener('DOMContentLoaded', () => {

    const nombre_cargo_buscador = document.getElementById('nombre_cargo_buscador');

    const tabla = document.getElementById('tabla_cargo');
    const rows = tabla.getElementsByTagName('tbody')[0].getElementsByTagName('tr');


    [nombre_cargo_buscador].forEach((input) => {
        input.addEventListener('keyup', () => {

            const filtro1 = nombre_cargo_buscador.value.toLowerCase();

            for (let i = 0; i < rows.length; i++) {
                let row = rows[i];
                let cell1 = row.getElementsByTagName('td')[1].textContent.toLowerCase();

                let match1 = !filtro1 || cell1.includes(filtro1);

                if (match1) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            }
        });
    });
});

//BUSCADOR USUARIO
document.addEventListener('DOMContentLoaded', () => {

    const cedula_usuario_buscador = document.getElementById('cedula_usuario_buscador');
    const nombre_usuario_buscador = document.getElementById('nombre_usuario_buscador');
    const estado_usuario_buscador = document.getElementById('estado_usuario_buscador');
    const tabla = document.getElementById('tabla_usuario');
    const rows = tabla.getElementsByTagName('tbody')[0].getElementsByTagName('tr');


    [cedula_usuario_buscador, nombre_usuario_buscador, estado_usuario_buscador].forEach((input) => {
        input.addEventListener('keyup', () => {

            const filtro1 = cedula_usuario_buscador.value.toLowerCase();
            const filtro2 = nombre_usuario_buscador.value.toLowerCase();
            const filtro3 = estado_usuario_buscador.value.toLowerCase();

            for (let i = 0; i < rows.length; i++) {
                let row = rows[i];
                let cell1 = row.getElementsByTagName('td')[0].textContent.toLowerCase();
                let cell2 = row.getElementsByTagName('td')[1].textContent.toLowerCase();
                let cell3 = row.getElementsByTagName('td')[2].textContent.toLowerCase();

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

//BUSCADOR PERSONA
document.addEventListener('DOMContentLoaded', () => {

    const cedula_persona_buscador = document.getElementById('cedula_persona_buscador');
    const nombre_persona_buscador = document.getElementById('nombre_persona_buscador');
    const edad_persona_buscador = document.getElementById('edad_persona_buscador');
    const telefono_persona_buscador = document.getElementById('telefono_persona_buscador');
    const sexo_persona_buscador = document.getElementById('sexo_persona_buscador');
    const tipo_persona_buscador = document.getElementById('tipo_persona_buscador');
    const cargo_persona_buscador = document.getElementById('cargo_persona_buscador');
    const seccion_persona_buscador = document.getElementById('seccion_persona_buscador');
    const estacion_persona_buscador = document.getElementById('estacion_persona_buscador');

    const tabla = document.getElementById('tabla_persona');
    const rows = tabla.getElementsByTagName('tbody')[0].getElementsByTagName('tr');


    [cedula_persona_buscador, nombre_persona_buscador, edad_persona_buscador, telefono_persona_buscador, sexo_persona_buscador, tipo_persona_buscador, cargo_persona_buscador, seccion_persona_buscador, estacion_persona_buscador].forEach((input) => {
        input.addEventListener('keyup', () => {

            const filtro1 = cedula_persona_buscador.value.toLowerCase();
            const filtro2 = nombre_persona_buscador.value.toLowerCase();
            const filtro3 = edad_persona_buscador.value.toLowerCase();
            const filtro4 = telefono_persona_buscador.value.toLowerCase();
            const filtro5 = sexo_persona_buscador.value.toLowerCase();
            const filtro6 = tipo_persona_buscador.value.toLowerCase();
            const filtro7 = cargo_persona_buscador.value.toLowerCase();
            const filtro8 = seccion_persona_buscador.value.toLowerCase();
            const filtro9 = estacion_persona_buscador.value.toLowerCase();

            for (let i = 0; i < rows.length; i++) {
                let row = rows[i];
                let cell1 = row.getElementsByTagName('td')[0].textContent.toLowerCase();
                let cell2 = row.getElementsByTagName('td')[1].textContent.toLowerCase();
                let cell3 = row.getElementsByTagName('td')[2].textContent.toLowerCase();
                let cell4 = row.getElementsByTagName('td')[4].textContent.toLowerCase();
                let cell5 = row.getElementsByTagName('td')[6].textContent.toLowerCase();
                let cell6 = row.getElementsByTagName('td')[7].textContent.toLowerCase();
                let cell7 = row.getElementsByTagName('td')[8].textContent.toLowerCase();
                let cell8 = row.getElementsByTagName('td')[9].textContent.toLowerCase();
                let cell9 = row.getElementsByTagName('td')[10].textContent.toLowerCase();

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

//BUSCADOR ASEGURADORA
document.addEventListener('DOMContentLoaded', () => {

    const nombre_aseguradora_buscador = document.getElementById('nombre_aseguradora_buscador');
    const tipo_aseguradora_buscador = document.getElementById('tipo_aseguradora_buscador');

    const tabla = document.getElementById('tabla_aseguradora');
    const rows = tabla.getElementsByTagName('tbody')[0].getElementsByTagName('tr');


    [nombre_aseguradora_buscador, tipo_aseguradora_buscador].forEach((input) => {
        input.addEventListener('keyup', () => {

            const filtro1 = nombre_aseguradora_buscador.value.toLowerCase();
            const filtro2 = tipo_aseguradora_buscador.value.toLowerCase();

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

//BUSCADOR MARCA
document.addEventListener('DOMContentLoaded', () => {

    const nombre_marca_buscador = document.getElementById('nombre_marca_buscador');

    const tabla = document.getElementById('tabla_marca');
    const rows = tabla.getElementsByTagName('tbody')[0].getElementsByTagName('tr');


    [nombre_marca_buscador].forEach((input) => {
        input.addEventListener('keyup', () => {

            const filtro1 = nombre_marca_buscador.value.toLowerCase();

            for (let i = 0; i < rows.length; i++) {
                let row = rows[i];
                let cell1 = row.getElementsByTagName('td')[1].textContent.toLowerCase();

                let match1 = !filtro1 || cell1.includes(filtro1);

                if (match1) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            }
        });
    });
});

//BUSCADOR MODELO
document.addEventListener('DOMContentLoaded', () => {

    const nombre_modelo_vehiculo = document.getElementById('nombre_modelo_vehiculo');
    const marca_modelo_vehiculo = document.getElementById('marca_modelo_vehiculo');

    const tabla = document.getElementById('tabla_modelo');
    const rows = tabla.getElementsByTagName('tbody')[0].getElementsByTagName('tr');


    [nombre_modelo_vehiculo, marca_modelo_vehiculo].forEach((input) => {
        input.addEventListener('keyup', () => {

            const filtro1 = nombre_modelo_vehiculo.value.toLowerCase();
            const filtro2 = marca_modelo_vehiculo.value.toLowerCase();

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

//BUSCADOR VEHICULO
document.addEventListener('DOMContentLoaded', () => {

    const niv_vehiculo_buscador = document.getElementById('niv_vehiculo_buscador');
    const numero_vehiculo_buscador = document.getElementById('numero_vehiculo_buscador');
    const marca_vehiculo_buscador = document.getElementById('marca_vehiculo_buscador');
    const modelo_vehiculo_buscador = document.getElementById('modelo_vehiculo_buscador');
    const serial_vehiculo_buscador = document.getElementById('serial_vehiculo_buscador');
    const cilindrada_vehiculo_buscador = document.getElementById('cilindrada_vehiculo_buscador');
    const carburante_vehiculo_buscador = document.getElementById('carburante_vehiculo_buscador');
    const seguro_vehiculo_buscador = document.getElementById('seguro_vehiculo_buscador');
    const propietario_vehiculo_buscador = document.getElementById('propietario_vehiculo_buscador');

    const tabla = document.getElementById('tabla_vehiculo');
    const rows = tabla.getElementsByTagName('tbody')[0].getElementsByTagName('tr');


    [niv_vehiculo_buscador, numero_vehiculo_buscador, marca_vehiculo_buscador, modelo_vehiculo_buscador, serial_vehiculo_buscador, cilindrada_vehiculo_buscador, carburante_vehiculo_buscador, seguro_vehiculo_buscador, propietario_vehiculo_buscador].forEach((input) => {
        input.addEventListener('keyup', () => {

            const filtro1 = niv_vehiculo_buscador.value.toLowerCase();
            const filtro2 = numero_vehiculo_buscador.value.toLowerCase();
            const filtro3 = marca_vehiculo_buscador.value.toLowerCase();
            const filtro4 = modelo_vehiculo_buscador.value.toLowerCase();
            const filtro5 = serial_vehiculo_buscador.value.toLowerCase();
            const filtro6 = cilindrada_vehiculo_buscador.value.toLowerCase();
            const filtro7 = carburante_vehiculo_buscador.value.toLowerCase();
            const filtro8 = seguro_vehiculo_buscador.value.toLowerCase();
            const filtro9 = propietario_vehiculo_buscador.value.toLowerCase();

            for (let i = 0; i < rows.length; i++) {
                let row = rows[i];
                let cell1 = row.getElementsByTagName('td')[0].textContent.toLowerCase();
                let cell2 = row.getElementsByTagName('td')[2].textContent.toLowerCase();
                let cell3 = row.getElementsByTagName('td')[3].textContent.toLowerCase();
                let cell4 = row.getElementsByTagName('td')[4].textContent.toLowerCase();
                let cell5 = row.getElementsByTagName('td')[5].textContent.toLowerCase();
                let cell6 = row.getElementsByTagName('td')[6].textContent.toLowerCase();
                let cell7 = row.getElementsByTagName('td')[7].textContent.toLowerCase();
                let cell8 = row.getElementsByTagName('td')[8].textContent.toLowerCase();
                let cell9 = row.getElementsByTagName('td')[9].textContent.toLowerCase();

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