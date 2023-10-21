<template>
    <div class="row mt-3">
      <div class="col-md-6 offset-md-3">
      <div class="card">
        <div class="card-header bg-dark text-white text-center">
          Registrar estudiante
        </div>
          <div class="card-body">
              <form v-on:submit="guardar">
                <div class="d-grid col-6 mx-auto mb-3">
                  <img v-if="this.avatar" height="100" :src="this.avatar" id="avatarimg" class="img-thumbnail" alt="">
                  <img v-else height="100" src="https://cdn3.iconfinder.com/data/icons/fairy-tale-color-line/48/12-wizard-512.png" class="img-thumbnail" alt="">
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                  <input type="text" v-model="nombres" id="nombres" placeholder="Nombre del dreamer" required class="form-control">
                </div> 
                <div class="input-group mb-3">
                  <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                  <input type="text" v-model="apellidos" id="apellidos" placeholder="Apellidos del dreamer" required class="form-control">
                </div> 
                <div class="input-group mb-3">
                  <span class="input-group-text"><i class="fa-solid fa-folder"></i></span> 
                  <input  v-on:change="previsualizarAvatar" type="file" accept="image/png, image/jpeg, image/jpg" class="form-control">
                </div> 
                <div class="d-grid col-6 mx-auto mb-3">
                  <button class="btn btn-success"><i class="fa-solid fa-floppy-disk"> Registrar</i></button>
                </div> 
              </form>
          </div> 
        </div>
      </div>
    </div>
  </template>

<script>

import { mostrarAlerta, enviarSolicitud } from '../funciones'

export default {
  data(){
    return {
      nombres:'',
      apellidos:'',
      fecha_de_nacimiento:'',
      avatar:'',
      cargando:false
    }
  },
 
  methods:{
    guardar(){
      event.preventDefault();
      var miAvatar = document.getElementById('avatarimg');
      this.avatar = miAvatar.src;

      if(this.nombres.trim()===''){
        mostrarAlerta('Ingresa un nombre para tu dreamer', 'warning','nombres');
      }else if(this.apellidos.trim()===''){
        mostrarAlerta('Ingresa un apellido para tu dreamer','warning','apellidos');
      }
      
      
    },
    previsualizarAvatar(event) {
      var reader = new FileReader();
      reader.readAsDataURL(event.target.files[0]);
      reader.onload = () => {
        var miAvatar = document.getElementById('avatarimg');
        if (miAvatar) {
          miAvatar.src = reader.result;
          this.avatar = reader.result;

    
}
    }
  }
  }
}

</script>

