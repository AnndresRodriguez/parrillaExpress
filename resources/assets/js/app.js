var vm = new Vue({

    el: '#Titulo',


    data: {

        nuevaTarea: '',


        proyectos: [

            {

                nombre: 'Alejandra Marín',
                fecha: '2018-02-11',
                fiabilidad: '90%',
                borrador: 'Alejandra M',
                editando: false

            },

            {

                nombre: 'Andres Carrillo',
                fecha: '2018-02-11',
                fiabilidad: '10%',
                borrador: 'Andres C',
                editando: false

            },

            {

                nombre: 'Joel Rodríguez',
                fecha: '2018-11-12',
                fiabilidad: '10%',
                borrador: 'Joel R',
                editando: false

            },

               {

                nombre: 'Jonathan Quiñonez Q',
                fecha: '2018-11-12',
                fiabilidad: '60%',
                borrador: 'Jonathan Q',
                editando: false

            },



        ]



    },


    methods: {


        iconoEditar(proyecto) {

            return proyecto.editando ? 'fa-times' : 'fa-check';
        },

        iconoBorrar(proyecto) {

            return proyecto.editando ? 'fa-times' : 'fa-trash';
        },


        crearTarea() {

            var f = new Date();

            this.proyectos.push({
  

                'nombre': this.nuevaTarea,
                'fecha': f.getFullYear() + "-" + (f.getMonth() +1) + "-" + f.getDate(),
                'fiabilidad': '10%',
                'borrador': 'New User',
                'editando': true

            });



            this.nuevaTarea = '';

        },


        funcionEditOrAccept(proyecto) {


            if (!proyecto.editando) {

                proyecto.editando = true;

            } else {


                proyecto.editando = false;
                proyecto.descripcion = proyecto.borrador;

            }

        },

        funcionDeleteOrCancel(proyecto, index) {

            if (proyecto.editando) {

                proyecto.borrador = proyecto.nombre;
                proyecto.editando = false;

            } else {

                this.proyectos.splice(index, 1);

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