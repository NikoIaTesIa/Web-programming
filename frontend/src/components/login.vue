<template>
  <section>
    <app-header></app-header>
    <section class="page-content">
      <div class="container">
        <div class="row justify-content-center">
          <div class="main-content col-sm-8 col-md-7 col-lg-6 col-xl-5">
            <main class="main-content__inner-wrap inner-wrap">
              <div class="main-content__header colored-header">
                <img class="main-content__icon" src="../assets/img/login/login.png" alt="login">
                <h2 class="main-content__title colored-header__title">Вход</h2>
                <!-- /.main-content__title -->
              </div>
              <!-- /.main-content__header -->

              <div class="row">
                <div class="col-12">
                  <div class="main-content__form">
                    <form action="" class="form" method="post">
                      <div class="form__item">
                        <label for="username">Логин</label>
                        <input type="text" class="form__input" name="username" id="username">
                        <!-- /.form__input -->
                      </div>
                      <!-- /.form__item -->
                      <div class="form__item">
                        <label for="password">Пароль</label>
                        <input type="text" class="form__input" name="password" id="password">
                        <!-- /.form__input -->
                      </div>
                      <!-- /.form__item -->
                      <div class="form__item form__item_centered">
                      <span class="form__wrap">
                        <router-link :to="{name: 'main'}">
                          <button class="form__btn" type="submit" value="Войти">Войти</button>
                        </router-link>
                      </span>
                      </div>
                      <!-- /.form__item -->

                      <div class="form__item form__item_centered"><a href="#" class="form__forgot-pswd">Забыли пароль?</a></div>
                      <!-- /.form__item -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.main-content__form -->
                </div>
              </div>
              <!-- /.row -->

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
  name: "login"
}
</script>

<style scoped src="../assets/css/style.css"></style>
<style scoped src="../assets/css/login.css"></style>