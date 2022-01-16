<template>
  <div class="home">
    <app-main></app-main>
  </div>
</template>

<script>

// @ is an alias to /src
import header from '../components/header'
import footer from "../components/footer";
import main from "../components/main";
//import login from "../components/login";
// import element from "@/components/product-item";
//import item_page from "@/components/item_page";

export default {
  name: 'Home',
  components: {
    // eslint-disable-next-line vue/no-unused-components
    header,
    // eslint-disable-next-line vue/no-unused-components
    main,
    // eslint-disable-next-line vue/no-unused-components
    footer,
  }
}
</script>
