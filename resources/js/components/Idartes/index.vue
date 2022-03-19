<template>

    <div>

       
        <table class="table">
            <thead>
                <tr>
                    <td># Historia</td>
                    <td>Paciente</td>
                    <td>Telefono</td>
                    <td>Acción</td>
                </tr>
            </thead>
            <tbody>
                <!-- <tr v-for="comment in comments.data" :key="comment.id"> -->
                <tr>
                    <td>asdf</td>
                    <td>dsf</td>
                    <td>dsf</td>
                    <td>
                        <button>dsafdsff</button>
                    </td>
                </tr>
            </tbody>
        </table>

    
    </div>
</template>

<script>
export default {
    data() {
        return {
            base: "",
            tipoAccion: 0,
            modal: 0,
            title: "",
            historia: 1,
            comments: {},
            nombres_apellidos: "",
            fecha_hora: "",
            identificacion: "",
            edad: "",
            sexo: "",
            fecha_nacimiento: "",
            estado_civil: "",
            eps: "",
            acompaniante: "",
            procedencia: "",
            ocupacion: "",
            telefono: "",
            pacientes: [],
            idPrimary: "",
            search: null,
            column: null,
            items: [],
            base: ""
        };
    },
    mounted() {
        this.base = "/";
        this.getResults();
        this.listarPacientes();
        alert(2)
   
    },
    methods: {
        tabla() {
            this.$nextTick(() => {
                $("#sampleTable").DataTable();
            });
        },
        listarPacientes() {
            axios.get("listar_pacientes").then(res => {
                this.items = res.data;
                this.tabla();
            });
        },
        registrarData() {
            let me = this;
            if (me.tipoAccion == 1) {
                axios
                    .post(me.base + "productos/registrar", {
                        nombres_apellidos: this.nombres_apellidos,
                        fecha_hora: this.fecha_hora,
                        identificacion: this.identificacion,
                        edad: this.edad,
                        sexo: this.sexo,
                        fecha_nacimiento: this.fecha_nacimiento,
                        estado_civil: this.estado_civil,
                        eps: this.eps,
                        acompaniante: this.acompaniante,
                        procedencia: this.procedencia,
                        ocupacion: this.ocupacion,
                        telefono: this.telefono
                    })
                    .then(function(response) {
                        me.listarPacientes();
                        me.cerrarModal();
                        me.$swal({
                            title: "Muy bien!",
                            text: "Registro Almacenado!",
                            icon: "success",
                            button: "Aww yiss!"
                        });
                    })
                    .catch(function(error) {
                        me.$swal({
                            title: "Lo sentimos!",
                            text: "Dato Existente",
                            icon: "error",
                            button: "Aww yiss!"
                        });
                    });
            }
            if (me.tipoAccion == 3) {
                axios
                    .post(me.base + "productos/editar", {
                        nombres_apellidos: this.nombres_apellidos,
                        fecha_hora: this.fecha_hora,
                        identificacion: this.identificacion,
                        edad: this.edad,
                        sexo: this.sexo,
                        fecha_nacimiento: this.fecha_nacimiento,
                        estado_civil: this.estado_civil,
                        eps: this.eps,
                        acompaniante: this.acompaniante,
                        procedencia: this.procedencia,
                        ocupacion: this.ocupacion,
                        telefono: this.telefono,
                        idPrimary: this.idPrimary
                    })
                    .then(function(response) {
                        me.listarPacientes();
                        me.cerrarModal();
                        me.$swal({
                            title: "Muy bien!",
                            text: "Registro Almacenado!",
                            icon: "success",
                            button: "Aww yiss!"
                        });
                    })
                    .catch(function(error) {
                        me.$swal({
                            title: "Lo sentimos!",
                            text: "Dato Existente",
                            icon: "error",
                            button: "Aww yiss!"
                        });
                    });
            }
        },
        cerrarModal() {
            this.modal = 0;
        },
        abrirModal(modelo, accion, data = []) {
            switch (modelo) {
                case "paciente": {
                    switch (accion) {
                        case "crear": {
                            console.log(1111);
                            this.modal = 1;
                            this.title = "Crear Paciente";
                            this.nombres_apellidos = "";
                            this.fecha_hora = "";
                            this.identificacion = "";
                            this.edad = "";
                            this.sexo = "";
                            this.fecha_nacimiento = "";
                            this.estado_civil = "";
                            this.eps = "";
                            this.acompaniante = "";
                            this.procedencia = "";
                            this.ocupacion = "";
                            this.telefono = "";
                            this.tipoAccion = 1;
                            break;
                        }
                        case "ver": {
                            console.log(1111);
                            this.modal = 1;
                            this.title = "Ver Paciente";
                            // this.tituloModal = 'Registrar Rol';
                            this.tipoAccion = 2;
                            break;
                        }
                        case "editar": {
                            console.log(data);
                            this.modal = 1;
                            this.title = "Editar Paciente";
                            this.nombres_apellidos = data["nombres_apellidos"];
                            this.fecha_hora = data["fecha_hora"];
                            this.identificacion = data["identificacion"];
                            this.edad = data["edad"];
                            this.sexo = data["sexo"];
                            this.fecha_nacimiento = data["fecha_nacimiento"];
                            this.estado_civil = data["estado_civil"];
                            this.eps = data["eps"];
                            this.acompaniante = data["acompaniante"];
                            this.procedencia = data["procedencia"];
                            this.ocupacion = data["ocupacion"];
                            this.telefono = data["telefono"];
                            this.tipoAccion = 3;
                            this.idPrimary = data["id"];
                            break;
                        }
                    }
                }
            }
        },
        // Our method to GET results from a Laravel endpoint
        getResults(page = 1) {
            axios.get("/api/comments?page=" + page).then(response => {
                this.comments = response.data;
            });
        },

        delete_comment(comment_id) {
            this.$swal({
                title: "Are you sure?",
                text: "You won´t be able to revert this",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it"
            }).then(result => {
                if (result.value) {
                    axios
                        .delete("/api/comments/" + comment_id)
                        .then(response => {
                            this.$swal({
                                icon: "error",
                                title: "Deleted successfully"
                            });
                            this.getResults();
                        })
                        .catch(error => {
                            this.$swal({
                                icon: "error",
                                title: "Error happened"
                            });
                        });
                }
            });
        }
    },
     computed: {
    cols () {
      return this.items.length >= 1 ? Object.keys(this.items[0]) : []
    },
    rows () {
      if (!this.items.length) {
        return []
      }
      
      return this.items.filter(item => {
        let props = (this.search && this.column) ? [item[this.column]] : Object.values(item)
        
        
        return props.some(prop => !this.search || ((typeof prop === 'string') ? prop.includes(this.search) : prop.toString(10).includes(this.search)))
      })
    }
  }
};
</script>
<style>
.modal-content {
    width: 100% !important;
    position: absolute !important;
    top: 32px;
}

.mostrar {
    display: block !important;
    opacity: 1 !important;
    position: absolute !important;
    background-color: #3c29297a !important;
    height: 100vh;
}

.div-error {
    display: flex;
    justify-content: center;
}

.text-error {
    color: red !important;
    font-weight: bold;
}

@media (max-width: 768px) {
    .mostrar {
        height: 150%;
    }
}
</style>
