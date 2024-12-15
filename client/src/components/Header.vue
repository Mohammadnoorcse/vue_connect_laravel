<template>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <router-link class="navbar-brand" to="/">Navbar</router-link>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <router-link class="nav-link active" to="/">Home
            <span class="visually-hidden">(current)</span>
          </router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link" to="/addcontact">Add Contact</router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link" to="#">Pricing</router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link" to="#">About</router-link>
        </li>
        <li class="nav-item dropdown">
          <router-link class="nav-link dropdown-toggle" data-bs-toggle="dropdown" to="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</router-link>
          <div class="dropdown-menu">
            <router-link class="dropdown-item" to="#">Action</router-link>
            <router-link class="dropdown-item" to="#">Another action</router-link>
            <router-link class="dropdown-item" to="#">Something else here</router-link>
            <div class="dropdown-divider"></div>
            <router-link class="dropdown-item" to="#">Separated link</router-link>
          </div>
        </li>
      </ul>
    
    </div>
  </div>
</nav>
</template>
<script setup>

</script>
