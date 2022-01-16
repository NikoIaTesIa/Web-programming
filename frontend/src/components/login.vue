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
                    <form class="form" onsubmit="return false;">
                      <div class="form__item">
                          <p class="form__message">{{ this.message }}</p>
                          <!-- /.form__message -->
                      </div>
                      <!-- /.form__item -->
                      <div class="form__item">
                        <label for="username">Логин</label>
                        <input type="text" class="form__input" name="username" id="username">
                        <!-- /.form__input -->
                      </div>
                      <!-- /.form__item -->
                      <div class="form__item">
                        <label for="password">Пароль</label>
                        <input type="password" class="form__input" name="password" id="password">
                        <!-- /.form__input -->
                      </div>
                      <!-- /.form__item -->
                      <div class="form__item form__item_centered">
                      <span class="form__wrap">
                        <button class="form__btn" type="submit" value="Войти" @click = "authorization()">Войти</button>
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
    name: "login",
    data() {
        return {
            userId: null,
            username: 'NicolaTesla',
            password: null,
            message: '',
            correct: false
        }
    },
    methods: {
        authorization() {
            const params = {
                name: this.username, password: this.password
            }
            this.$http.post('/user', params)
                .then(response => this.checkCorrect(response.data.userId))
        },
        checkCorrect(data) {
            if(data !== -1)
            {
                this.userId = data
                this.correct = true
                this.$router.push('/')
                this.message = ""
                localStorage.userId = this.userId
                localStorage.username = this.username
            }
            else
            {
                this.message = "Неверный логин или пароль."
            }
            console.log(this.correct)
        }
    },
    mounted() {
        if (localStorage.userId) {
            this.userId = localStorage.userId;
        }
    }
}
</script>

<style scoped src="../assets/css/style.css"></style>
<style scoped src="../assets/css/login.css"></style>
