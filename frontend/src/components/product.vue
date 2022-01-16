<template>
  <section>
    <app-header></app-header>
    <section class="page-content">
      <div class="container">
        <div class="row">
          <div class="main-content col-12">
            <main class="main-content__inner-wrap inner-wrap">
              <div class="product">
                <div class="product__card">
                  <div class="product__poster">
                    <img class="product__img" :src="require(`../assets/img/products/${product.id}.jpg`)" alt="product.title">
                    <!-- /.product__img -->
                  </div>
                  <!-- /.product__poster -->

                  <div class="product__adding inner-wrap">
                    <span class="product__btn-wrap"><button class="product__btn" type="submit" value="Войти">Добавить</button></span>
                    <!-- /.product__btn-wrap -->
                    <button class="product__btn product__btn_black product__btn_disabled" type="submit" value="Войти">Удалить</button>
                    <!-- /.product__btn-wrap -->
                  </div>
                  <!-- /.product__adding -->

                </div>
                <!-- /.product__card -->

                <div class="product__description">
                  <div class="main-content__header product__header">
                    <div class="main-content__title product__title"><h1>{{ product.title }}</h1></div>
                    <!-- /.product__title -->
                    <div class="product__origin-title">{{ product.origin_title }}</div>
                    <!-- /.product__origin-title -->
                  </div>
                  <!-- /.product__header -->
                  <hr>

                  <div class="product__info">
                    <dl class="row">
                      <dt class="row__title col-6 col-sm-4">Тип</dt><dd class="row__value col-6 col-sm-8">{{ product.type }}</dd>
                      <dt class="row__title col-6 col-sm-4">Эпизоды</dt><dd class="row__value col-6 col-sm-8">{{ product.episodes_count }}</dd>
                      <dt class="row__title col-6 col-sm-4">Год выхода</dt><dd class="row__value col-6 col-sm-8">{{ product.release_year }}</dd>
                      <dt class="row__title col-6 col-sm-4">Студия</dt><dd class="row__value col-6 col-sm-8">{{ product.studio }}</dd>
                      <dt class="row__title col-6 col-sm-4">Режиссёр</dt><dd class="row__value col-6 col-sm-8">{{ product.author }}</dd>
                      <dt class="row__title col-6 col-sm-4">Возрастные ограничения</dt><dd class="row__value col-6 col-sm-8">{{ product.age_rating }}</dd>
                    </dl>
                  </div>
                  <!-- /.product__info -->
                  <hr>

                  <div class="product__synopsis">{{ product.synopsis }}</div>
                  <!-- /.product__synopsis -->
                </div>
                <!-- /.product__description -->
              </div>
              <!-- /.product -->
            </main>
            <!-- /.main-content__inner-wrap -->
          </div>
          <!-- /.main-content -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.page-content -->
    <app-footer></app-footer>
  </section>
</template>

<script>
import product from "@/components/product-item"
export default {
  name: "product",
  props: {
    product: product,
    id: String
  },
  components: {
    // eslint-disable-next-line vue/no-unused-components
    product,
  },
  beforeCreate: function() {
    document.body.className = 'item_page';
  },
  created() {
    this.id = this.$route.params.id
    this.product = this.$route.params.product
  }
}
</script>

<style scoped src="../assets/css/style.css"></style>
<style scoped src="../assets/css/product.css"></style>