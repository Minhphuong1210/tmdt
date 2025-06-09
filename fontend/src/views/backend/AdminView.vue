<style scoped>
.body {
  height: 100vh;
}
body {
  overflow: hidden;
}
</style>
<template>
  <div class="body">
    <div class="row">
      <div class="col-2 px-0">
        <sidebar />
      </div>
      <div class="col-10 ps-0">
        <headertop />

        <router-view />
      </div>
    </div>
  </div>
</template>
<script setup>
import sidebar from "../../components/menu/menu-left.vue";
import headertop from "../../components/header_admin/header-admin.vue";
</script>

