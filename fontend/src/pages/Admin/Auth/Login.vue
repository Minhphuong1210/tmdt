<template>
  <div class="bg_login">
    <div class="box-section container">
      <div class="row g-0 h-100">
        <div class="col-6 left-section">
          <div class="logo">VELZON</div>
          <div class="quote-section">
            <div
              id="carouselExampleControls"
              class="carousel slide"
              data-bs-ride="carousel"
            >
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <p>Chào mừng bạn</p>
                </div>
                <div class="carousel-item">
                  <p>Đến với chúng tôi</p>
                </div>
                <div class="carousel-item">
                  <p>hahahah</p>
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
        <div class="col-6 right-section">
          <h2 class="mb-3">Welcome Back !</h2>
          <p class="text-muted mb-3">Sign in to continue to Velzon.</p>

          <div v-if="errors" class="error-login mb-2">{{ errors }}</div>

          <form @submit.prevent="login">
            <div class="mb-3">
              <label for="email" class="form-label"
                >Nhập số điện thoại hoặc email
                <span style="color: red">*</span></label
              >
              <input
                type="text"
                class="form-control"
                id="email"
                placeholder="Enter email address"
                required
                v-model="text"
              />
            </div>

            <div class="mb-3">
              <label for="password" class="form-label"
                >Password <span style="color: red">*</span></label
              >
              <input
                type="password"
                class="form-control"
                id="password"
                placeholder="Enter password"
                required
                autocomplete
                v-model="password"
              />
            </div>
            <div class="mb-3">
              <p class="text-muted small">
                By registering you agree to the Velzon
                <a href="#" class="text-decoration-none text-teal"
                  >Terms of Use</a
                >
              </p>
            </div>
            <button type="submit" class="btn btn-custom text-white w-100 py-2">
              Sign in
            </button>
          </form>

          <div class="text-center mt-3">
            <p class="text-muted">
              Don't have an account ?
              <a href="#" class="text-decoration-none text-teal">Signup</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style>
.bg_login {
  width: 100%;
  height: 100vh;
  display: flex;
  align-items: center;
  background: linear-gradient(to right, #a8dadc, #1d3557);
}
.box-section {
  width: 100%;
  height: 70%;
}
.left-section {
  background-color: #405188;
}
.left-section {
  background: url("https://via.placeholder.com/150") no-repeat center center;
  background-color: #405188;
  background-size: cover;
  position: relative;
  padding: 30px;
}
.logo {
  color: white;
  font-size: 24px;
  font-weight: bold;
}
.quote-section {
  color: white;
  text-align: left;
  position: absolute;
  bottom: 30px;
  width: 165px;
}
.quote-section .quote-icon {
  font-size: 30px;
  color: #00c4b4;
}
.quote-section p {
  font-size: 16px;
  margin: 10px 0;
}
.quote-section .author {
  font-size: 14px;
  opacity: 0.8;
}
.right-section {
  padding: 40px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.btn-custom {
  background-color: #00c4b4;
  border: none;
  transition: background-color 0.3s;
}
.btn-custom:hover {
  background-color: #00a89a;
}
.social-btn {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  border: none;
  transition: opacity 0.3s;
}
.btn-facebook {
  background-color: #3b5998;
}
.btn-google {
  background-color: #db4437;
}
.btn-twitter {
  background-color: #1da1f2;
}
.social-btn:hover {
  opacity: 0.9;
}
.footer {
  position: absolute;
  bottom: 10px;
  left: 0;
  right: 0;
  text-align: center;
  color: white;
  font-size: 12px;
}
.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
  top: -48px;
}
.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
  top: -24px;
  left: 24px;
}
.right-section {
  background: white;
}
.error-login {
  padding: 10px 30px;
  background: #ec8d84;
  color: white;
  border-radius: 5px;
  font-size: 15px;
}
</style>
<script setup>
import { reactive, ref, toRefs } from "vue";
import api from "@/axios";
import axios from "axios";
import { useAuthStore } from "../../../stores/auth.js";

const errors = ref("");

const data = reactive({
  text: "",
  password: "",
});
const { text, password } = toRefs(data);
const auth = useAuthStore();
const login = async () => {
  try {
    await auth.login({ ...data });
    console.log(1);
    // router.push("/dashboard");
  } catch (error) {
    errors.value = error.response.data.message;
    console.log(errors.value);
  }
};
</script>
