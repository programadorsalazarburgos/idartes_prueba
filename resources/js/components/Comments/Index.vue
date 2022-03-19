<template>

    <div>
  <div :class="{ mostrar: modal }" class="modal fade bs-example-modal-lg" aria-labelledby="myLargeModalLabel"  role="dialog" style="display: none; height: 10000px;" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">
                           {{titulo}}
                        </h4>
                        <button class="btn-close" @click="cerrarModal()" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""
                        ></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" @submit.prevent="registrarData" enctype="multipart/form-data" class="form-horizontal">
                            <div class="form-group row">
                            <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" required placeholder="Nombres" v-model="nombres" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Identificacion" v-model="identificacion" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="clearfix"></div><br>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Telefono" v-model="telefono" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Sexo" v-model="sexo" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button
                                    class="btn btn-secondary"
                                    @click="cerrarModal()"
                                    type="button"
                                    data-bs-dismiss="modal"
                                    data-bs-original-title=""
                                    title=""
                                >
                                    Cerrar
                                </button>
                                <button
                                    class="btn btn-primary"                                   
                                    type="submit"
                                    data-bs-original-title=""
                                    title=""
                                    v-if="tipoAccion == 1"
                                    
                                >
                                    Guardar
                                </button>
                                <button
                                    class="btn btn-primary"                                   
                                    type="submit"
                                    data-bs-original-title=""
                                    title=""
                                     v-if="tipoAccion == 2"
                                >
                                    Editar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


  <input type="text"  v-model="search" placeholder="Ingrese su busqueda" class="form-control">
        <div class="card-body btn-showcase">
            <button
                @click="abrirModal('paciente', 'creacion', 1)"
                class="btn btn-success btn-sm"
                type="button"
                title=""               
            >
                Crear <i class="fa fa-users"></i>
            </button>
        
        </div>

        <table class="table" id="sampleTable">
            <thead>
                <tr>
                    <td># NOMBRES Y APELLIDOS</td>
                    <td>IDENTIFICACION</td>
                    <td>TELEFONO</td>
                    <td>ACCION</td>
                </tr>
            </thead>
            <tbody>
                <!-- <tr v-for="comment in comments.data" :key="comment.id"> -->
                <tr v-for="variable in arrayPacientes">
                    <td>{{variable.nombres_apellidos}}</td>
                    <td>{{variable.identificacion}}</td>
                    <td>{{variable.telefono}}</td>
                    <td>
                       <button class="btn btn-danger btn-sm" @click="eliminarData(variable.id)">Eliminar <i class="fa fa-trash-o" aria-hidden="true"></i></button>
                       <button class="btn btn-success btn-sm"   @click="abrirModal('paciente', 'editar', variable)"  type="button" title=""    >Editar <i class="fa fa-view" aria-hidden="true"></i></button>
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
            search: "",
            arrayPacientes: [],
            modal: 0,
            titulo: "",
            nombres: "",
            identificacion: "",
            telefono:"",
            sexo:"",
            id:"",
        };
    },
    mounted() {
        this.base = "/";
          this.getPacientes();
  
    },
    methods: {

        getPacientes()
        {
              axios.get("listar_pacientes").then(respuesta => {  
                  const resp = respuesta.data;                
                  this.arrayPacientes = resp;
                  console.log(this.arrayPacientes);
            });
        },
          cerrarModal()
          {
              this.modal = 0;
          },
          abrirModal(modelo, accion, data = []) {
            switch (modelo) {
                case "paciente": {
                    switch (accion) {
                        case "creacion": {
                            this.modal = 1;
                            this.titulo = "Creacion de Pacientes"
                            this.tipoAccion = 1;
                            break;
                        }
                        case "ver": {
                            alert("entro aqui a ver")
                            this.modal = 1;
                            break;
                        }
                        case "editar": {
                            console.log(data, "mi data");
                            this.modal = 1;
                            this.nombres = data.nombres_apellidos;
                            this.identificacion = data.identificacion;
                            this.telefono = data.telefono;
                            this.sexo = data.sexo;
                            this.id = data.id;
                            this.tipoAccion = 2;
                            break;
                        }
                    }
                }
            }
        },

     registrarData()
     {
            let me = this;
            if (this.tipoAccion == 1) {            
            axios
            .post(me.base + "pacientes/registrar", {
                nombres: me.nombres,
                identificacion: me.identificacion,
                telefono: me.telefono,
                sexo: me.sexo,
               
            })
            .then(function(response) {
                me.$swal({
                        title: "Muy bien!",
                        text: "Registro Almacenado!",
                        icon: "success",
                        button: "Aww yiss!"
                    });
                me.limpiarCampos();
                me.cerrarModal();
              
            })
            .catch(function(error) {
            console.log(error);
            });
        }
         if (this.tipoAccion == 2) {
             axios
            .post(me.base + "pacientes/editar", {
                nombres: me.nombres,
                identificacion: me.identificacion,
                telefono: me.telefono,
                sexo: me.sexo,
                id: me.id,
               
            })
            .then(function(response) {
                me.$swal({
                        title: "Muy bien!",
                        text: "Registro Editado!",
                        icon: "success",
                        button: "Aww yiss!"
                    });
                me.getPacientes();                    
                me.limpiarCampos();
                me.cerrarModal();
              
            })
            .catch(function(error) {
            console.log(error);
            });
         } 
            
     },
     limpiarCampos()
     {
         this.nombres = "";
         this.identificacion = "";
         this.telefono = "";
         this.sexo = "";
     },
     eliminarData(id)
     {
         let me = this;
            axios
            .post(me.base + "pacientes/eliminar", {
                id: id,
               
            })
            .then(function(response) {
                me.getPacientes();
                me.$swal({
                        title: "Muy bien!",
                        text: "Registro Eliminado!",
                        icon: "success",
                        button: "Aww yiss!"
                    });
              
            })
            .catch(function(error) {
            console.log(error);
            });
     },
        // cerrarModal() {
        //     this.modal = 0;
        // },
        // abrirModal(modelo, accion, data = []) {
        //     switch (modelo) {
        //         case "paciente": {
        //             switch (accion) {
        //                 case "crear": {
        //                     console.log(1111);
        //                     this.modal = 1;
        //                     this.title = "Crear Paciente";
        //                     this.nombres_apellidos = "";
        //                     this.fecha_hora = "";
        //                     this.identificacion = "";
        //                     this.edad = "";
        //                     this.sexo = "";
        //                     this.fecha_nacimiento = "";
        //                     this.estado_civil = "";
        //                     this.eps = "";
        //                     this.acompaniante = "";
        //                     this.procedencia = "";
        //                     this.ocupacion = "";
        //                     this.telefono = "";
        //                     this.tipoAccion = 1;
        //                     break;
        //                 }
        //                 case "ver": {
        //                     console.log(1111);
        //                     this.modal = 1;
        //                     this.title = "Ver Paciente";
        //                     this.tipoAccion = 2;
        //                     break;
        //                 }
        //                 case "editar": {
        //                     console.log(data);
        //                     this.modal = 1;
        //                     this.title = "Editar Paciente";
        //                     this.nombres_apellidos = data["nombres_apellidos"];
        //                     this.fecha_hora = data["fecha_hora"];
        //                     this.identificacion = data["identificacion"];
        //                     this.edad = data["edad"];
        //                     this.sexo = data["sexo"];
        //                     this.fecha_nacimiento = data["fecha_nacimiento"];
        //                     this.estado_civil = data["estado_civil"];
        //                     this.eps = data["eps"];
        //                     this.acompaniante = data["acompaniante"];
        //                     this.procedencia = data["procedencia"];
        //                     this.ocupacion = data["ocupacion"];
        //                     this.telefono = data["telefono"];
        //                     this.tipoAccion = 3;
        //                     this.idPrimary = data["id"];
        //                     break;
        //                 }
        //             }
        //         }
        //     }
        // },
        // Our method to GET results from a Laravel endpoint
        // getResults(page = 1) {
        //     axios.get("/api/comments?page=" + page).then(response => {
        //         this.comments = response.data;
        //     });
        // },

        // delete_comment(comment_id) {
        //     this.$swal({
        //         title: "Are you sure?",
        //         text: "You won´t be able to revert this",
        //         icon: "warning",
        //         showCancelButton: true,
        //         confirmButtonColor: "#3085d6",
        //         cancelButtonColor: "#d33",
        //         confirmButtonText: "Yes, delete it"
        //     }).then(result => {
        //         if (result.value) {
        //             axios
        //                 .delete("/api/comments/" + comment_id)
        //                 .then(response => {
        //                     this.$swal({
        //                         icon: "error",
        //                         title: "Deleted successfully"
        //                     });
        //                     this.getResults();
        //                 })
        //                 .catch(error => {
        //                     this.$swal({
        //                         icon: "error",
        //                         title: "Error happened"
        //                     });
        //                 });
        //         }
        //     });
        // }
    },
     computed: {
    // cols () {
    //   return this.items.length >= 1 ? Object.keys(this.items[0]) : []
    // },
    // rows () {
    //   if (!this.items.length) {
    //     return []
    //   }
      
    //   return this.items.filter(item => {
    //     let props = (this.search && this.column) ? [item[this.column]] : Object.values(item)
        
        
    //     return props.some(prop => !this.search || ((typeof prop === 'string') ? prop.includes(this.search) : prop.toString(10).includes(this.search)))
    //   })
    // }
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
