var vm = new Vue({

    el: '#Titulo',


    data: {

        nuevaTarea: '',


        proyectos: [

            {

                nombre: 'Victor Ernesto Leal',
                fecha: '2018-02-11',
                pendiente: true,
                avance: '60%',
                borrador: 'Victor L',
                editando: false

            },

            {

                nombre: 'Andres Joel Carrillo',
                fecha: '11-12-2018',
                pendiente: true,
                avance: '60%',
                borrador: 'Andres C',
                editando: false

            },

              {

                nombre: 'Jessica María Daza',
                fecha: '2018-11-12',
                pendiente: true,
                avance: '60%',
                borrador: 'Andres C',
                editando: false

            },

               {

                nombre: 'Jonathan Quiñonez Q',
                fecha: '2018-11-12',
                pendiente: true,
                avance: '60%',
                borrador: 'Andres C',
                editando: false

            },



        ]



    },


    methods: {


        verificarCompletado(tarea) {

            return tarea.pendiente ? '' : 'tarea-completada';

        },

        iconoCheckeable(tarea) {

            return tarea.pendiente ? 'glyphicon-unchecked' : 'fa-pencil-square-o';

        },

        iconoEditar(tarea) {

            return tarea.editando ? 'fa-times' : 'fa-check';
        },

        iconoBorrar(tarea) {

            return tarea.editando ? 'fa-times' : 'fa-trash';
        },


        crearTarea() {

            this.tareas.push({
                'descripcion': this.nuevaTarea,
                'borrador': this.nuevaTarea,
                'pendiente': true,
                'editando': false

            });



            this.nuevaTarea = '';

        },


        funcionEditOrAccept(tarea) {


            if (!tarea.editando) {

                tarea.editando = true;

            } else {


                tarea.editando = false;
                tarea.descripcion = tarea.borrador;

            }

        },

        funcionDeleteOrCancel(tarea, index) {

            if (tarea.editando) {

                tarea.borrador = tarea.descripcion;
                tarea.editando = false;

            } else {

                this.tareas.splice(index, 1);

            }
        },

        funcionGuardarCambios(proyecto) {

            proyecto.nombre = proyecto.borrador;
            proyecto.editando = false;


        },

        funcionDescartarCambios(proyecto) {

            proyecto.borrador = proyecto.nombre;
            proyecto.editando = false;
        }



    }
});