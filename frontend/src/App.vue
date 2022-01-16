<template>
  <div id="app">
    <router-view/>
  </div>
</template>

<script>
import main from "@/components/main";

export default {
  name: 'App',
  components: {
    // eslint-disable-next-line vue/no-unused-components
    main
  }
}
</script>

<style></style>
