<template>
  <header class="header">
    <div class="container">
      <div class="header__inner-wrap">
        <nav class="navbar">
          <router-link :to="{name: 'main'}"><a href="/" class="navbar__logo"><img src="../assets/img/logo.png" alt="AnimeGO"></a></router-link>
          <!-- /.navbar__logo -->

          <router-link class="navbar__item" :to="{name: 'main'}"><a href="#">Аниме</a></router-link>
          <a class="navbar__item" href="#">Манга</a>
          <a class="navbar__item" href="#">О нас</a>
        </nav>
        <!-- /.navbar -->

        <div class="profile-tools">
          <!-- <a class="profile-tools__btn">Profile</a> -->
          <!-- /.profile-tools__btn -->
          <router-link class="profile-tools__item" :to="{name: 'login'}"><a href="#">Войти</a></router-link>
          <!-- /.profile-tools__btn -->
          <a class="profile-tools__item" href="#"><svg class="icon icon-search"><use xlink:href="#icon-search"></use></svg></a>
          <!-- /.profile-tools__btn -->
        </div>
        <!-- /.profile-tools -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->

    <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0" display="none">
      <symbol viewBox="0 0 24 24" id="icon-search" xmlns="http://www.w3.org/2000/svg"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path><path d="M0 0h24v24H0z" fill="none"></path></symbol>
      <symbol viewBox="0 0 32 32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" id="icon-options" xmlns="http://www.w3.org/2000/svg"><path d="M28 6H4m24 10H4m24 10H4M24 3v6M8 13v6m12 4v6"></path></symbol>
      <symbol viewBox="0 0 1792 1792" id="icon-th" xmlns="http://www.w3.org/2000/svg"><path d="M512 1248v192q0 40-28 68t-68 28H96q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h320q40 0 68 28t28 68zm0-512v192q0 40-28 68t-68 28H96q-40 0-68-28T0 928V736q0-40 28-68t68-28h320q40 0 68 28t28 68zm640 512v192q0 40-28 68t-68 28H736q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h320q40 0 68 28t28 68zM512 224v192q0 40-28 68t-68 28H96q-40 0-68-28T0 416V224q0-40 28-68t68-28h320q40 0 68 28t28 68zm640 512v192q0 40-28 68t-68 28H736q-40 0-68-28t-28-68V736q0-40 28-68t68-28h320q40 0 68 28t28 68zm640 512v192q0 40-28 68t-68 28h-320q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h320q40 0 68 28t28 68zM1152 224v192q0 40-28 68t-68 28H736q-40 0-68-28t-28-68V224q0-40 28-68t68-28h320q40 0 68 28t28 68zm640 512v192q0 40-28 68t-68 28h-320q-40 0-68-28t-28-68V736q0-40 28-68t68-28h320q40 0 68 28t28 68zm0-512v192q0 40-28 68t-68 28h-320q-40 0-68-28t-28-68V224q0-40 28-68t68-28h320q40 0 68 28t28 68z"></path></symbol>
      <symbol viewBox="0 0 1792 1792" id="icon-th-large" xmlns="http://www.w3.org/2000/svg"><path d="M832 1024v384q0 52-38 90t-90 38H192q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38H192q-52 0-90-38t-38-90V256q0-52 38-90t90-38h512q52 0 90 38t38 90zm896 768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90V256q0-52 38-90t90-38h512q52 0 90 38t38 90z"></path></symbol>
      <symbol viewBox="0 0 1792 1792" id="icon-th-list" xmlns="http://www.w3.org/2000/svg"><path d="M512 1248v192q0 40-28 68t-68 28H96q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h320q40 0 68 28t28 68zm0-512v192q0 40-28 68t-68 28H96q-40 0-68-28T0 928V736q0-40 28-68t68-28h320q40 0 68 28t28 68zm1280 512v192q0 40-28 68t-68 28H736q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h960q40 0 68 28t28 68zM512 224v192q0 40-28 68t-68 28H96q-40 0-68-28T0 416V224q0-40 28-68t68-28h320q40 0 68 28t28 68zm1280 512v192q0 40-28 68t-68 28H736q-40 0-68-28t-28-68V736q0-40 28-68t68-28h960q40 0 68 28t28 68zm0-512v192q0 40-28 68t-68 28H736q-40 0-68-28t-28-68V224q0-40 28-68t68-28h960q40 0 68 28t28 68z"></path></symbol>
    </svg>
  </header>
  <!-- /.header -->
</template>

<script>
export default {
  name: "header"
}
</script>

<style scoped src="../assets/css/style.css"></style>