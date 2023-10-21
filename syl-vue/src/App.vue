<template>
  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Smile & Learn</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Inicio</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dreamers
          </a>
          <ul class="dropdown-menu">
            
            <li>
              <router-link class="dropdown-item" to="/createD">Crear Dreamers</router-link>
            </li>
            <li>
              <router-link class="dropdown-item" to="/editD">Editar Dreamers</router-link>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <router-link class="dropdown-item" to="/viewD">Todos los Dreamers</router-link>
              </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/gruposview">Grupos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid"></div>
  <router-view/>
</template>


