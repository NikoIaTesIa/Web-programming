<template>
  <section>
    <app-header></app-header>
    <section class="page-content">
      <div class="container">
        <div class="row">
          <div class="main-content col-xl-12">
            <main class="main-content__inner-wrap inner-wrap">
              <div class="main-content__header">
                <div class="main-content__title">
                  <h1>Список аниме</h1>
                </div>
                <!-- /.main-content__title -->

                <div class="main-content__sorter-items">
                  <span class="main-content__sorter-item main-content__sorter-item_active"><svg class="icon icon-th"><use xlink:href="#icon-th"></use></svg></span>
                  <!-- /.main-content__sorter-item -->
                  <span class="main-content__sorter-item"><svg class="icon icon-th-large"><use xlink:href="#icon-th-large"></use></svg></span>
                  <!-- /.main-content__sorter-item -->
                  <span class="main-content__sorter-item"><svg class="icon icon-th-list"><use xlink:href="#icon-th-list"></use></svg></span>
                  <!-- /.main-content__sorter-item -->
                </div>
                <!-- /.main-content__sorter-items -->
              </div>
              <!-- /.main-content__header -->
              <hr>

              <div class="main-content__products">
                <div class="container">
                  <div class="row">
                    <div class="v-for col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 col-xxl-2" v-for="product_item in product_items" :key="product_item.id">
                      <app-product-item :product_item="product_item"></app-product-item>
                    </div>
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.container -->
              </div>
              <!-- /.main-content__products -->
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
export default {
  name: "main",
  data() {
      return{
          products: []
      }
  },
  created() {
      this.$http.get('/products')
          .then(response => this.products = response.data)
  }
}
</script>

<style scoped src="../assets/css/style.css"></style>
<style scoped src="../assets/css/main.css"></style>
