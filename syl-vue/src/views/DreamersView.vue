<template>
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>dreamer_id</th>
                <th>Avatar</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Fecha de nacimiento</th>
                <th></th>
            </tr>
            </thead>
            <tbody class="table-group-divider" id="contenido">
              <tr v-if="this.cargando">
                <td colspan="6"><h3>Cargando...</h3></td>
              </tr>
              <tr v-else v-for="est, i in this.dreamers" :key="est.id">
                <td v-text="(i+1)"></td>
                <td v-text="est.dreamer_id"></td>
                <td>
                  <img v-if="est.avatar" style="width: 150px !important;" :src="est.foto" class="img-thumbnail" alt="">
                  <img v-else height="30" src="https://cdn3.iconfinder.com/data/icons/fairy-tale-color-line/48/12-wizard-512.png" class="" alt="">
                </td>
                <td v-text="est.nombres"></td>
                <td v-text="est.apellidos"></td>
                <td v-text="est.fecha_de_nacimiento"></td>
                <td>
                  <router-link :to="{path:'view/'+est.dreamer_id}" class="btn btn-info">
                    <i class="fa-solid fa-eye"></i>
                  </router-link>
                  &nbsp;
                  <router-link :to="{path:'edit/'+est.dreamer_id}" class="btn btn-warning">
                    <i class="fa-solid fa-edit"></i>
                  </router-link>
                  &nbsp;
                  <button class="btn btn-danger" v-on:click="$event => eliminar(est.dreamer_id,est.nombres)">
                    <i class="fa-solid fa-trash"></i>
                  </button>
                </td>
              </tr>
            </tbody>
    </table>
        </div>
      </div>
    </div>
    </template>
    
    <script>
      import axios from 'axios';
      import { confirmar } from '../funciones'
    
      export default {
        data(){
          return {
            dreamers:null,
            cargando:false
          }
        },
        mounted(){
          this.getDreamers();
        },
        methods:{
          getDreamers(){
            this.cargando = true;
            axios.get('http://127.0.0.1:8000/api/dreamers').then(
              res=>{
                this.dreamers = res.data;
                this.cargando=false;
              }
            );
          },
          eliminar(dreamers_id){
            confirmar('http://127.0.0.1:8000/api/dreamers/',dreamers_id,'Elminar Dreamer','¿Quieres eliminar a este dreamer?');
            this.cargando = false;
          }
        }
      }
    </script>
  
  