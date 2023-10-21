<template>
  <div class="row mt-3">
    <div class="col-md-6 offset-md-3">
    <div class="card">
      <div class="card-header bg-dark text-white text-center">
        Bienvenido a Smile & Learn 
      </div>
        <div class="card-body">
          </div>
          <div class="centered-container">
          <img height="250" src="https://www.smileandlearn.com/wp-content/uploads/2021/03/Smile-and-Learn-descargar-pc-logo-1.png" />
       </div> 
       <div class="centered-container">
       <div>
        <h2>¿Qué deseas hacer?</h2>
       </div>
      </div>
      <div class="d-grid col-6 mx-auto mb-3">
        <div>
          <div class="d-grid col-6 mx-auto mb-3">
            <a href="viewD" class="btn btn-success">
              <i class="fa-solid fa-floppy-disk"></i> Ver todos los dreamers
            </a>
          </div>

          <div class="d-grid col-6 mx-auto mb-3">
            <a href="/createD" class="btn btn-success">
              <i class="fa-solid fa-magic"></i> Crear nuevo dreamer
            </a>
          </div>

          <div class="d-grid col-6 mx-auto mb-3">
            <a href="/gruposview" class="btn btn-success">
              <i class="fa-solid fa-users"></i> Ver Grupos
            </a>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>

</template>

<style>
.centered-container {
  display: flex;
  justify-content: center;
  align-items: center;
  
}
</style>