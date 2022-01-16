<template>
  <div class="home">
    <app-login></app-login>
  </div>
</template>

<script>

// @ is an alias to /src
import header from '../components/header'
import footer from "../components/footer";
//import main from "../components/main";
import login from "../components/login";
// import element from "@/components/product-item";
//import item_page from "@/components/item_page";

export default {
  name: 'Home',
  components: {
    // eslint-disable-next-line vue/no-unused-components
    login,
    // eslint-disable-next-line vue/no-unused-components
    footer,
    // eslint-disable-next-line vue/no-unused-components
    header
  }
}
</script>