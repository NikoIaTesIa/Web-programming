<template>
  <div class="product-item">
    <router-link :to="{name: 'product', params: {product: product_item, id: product_item.id}}">
      <div class="product-item__card">
        <a href="#"><div class="product-item__overlay"><span class="product-item__btn">Просмотр</span></div></a>
        <!-- /.product-item__overlay -->
        <div class="product-item__poster">
          <img class="product-item__img" :src="require(`../assets/img/products/${product_item.id}.jpg`)" alt="product_item.title">
          <!-- /.product-item__img -->
        </div>
        <!-- /.product-item__poster -->
      </div>
      <!-- /.product-item__card -->
    </router-link>

    <div class="product-item__description">
      <div class="product-item__origin-title">{{ product_item.origin_title }}</div>
      <!-- /.product-item__origin-title -->
      <router-link :to="{name: 'product', params: {product: product_item, id: product_item.id}}">
        <div class="product-item__title"><a href="#">{{ product_item.title }}</a></div>
        <!-- /.product-item__title -->
      </router-link>
      <div class="product-item__subtitle">
        <span class="product-item__type">{{ product_item.type }}</span>
        <!-- /.product-item__type -->
        <span class="product-item__divider">/</span>
        <!-- /.product-item__divider  -->
        <span class="product-item__release-year">{{ product_item.release_year }}</span>
        <!-- /.product-item__release-year -->
      </div>
      <!-- /.product-item__subtitle -->
    </div>
    <!-- /.product-item__description -->
  </div>
  <!-- /.product-item -->
</template>

<script>
export default {
  name: "product-item",
  props: ['product_item']
}
</script>

<style scoped src="../assets/css/style.css"></style>
<style scoped src="../assets/css/main.css"></style>