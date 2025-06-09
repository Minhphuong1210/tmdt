<style scoped>
.header-top {
  height: 10%;
  border-bottom: 1px solid rgb(216, 216, 216);
  display: flex;
  justify-content: space-between;
  padding: 0 20px;
  align-items: center;
}
.search-admin {
  position: relative;
}
.search-admin input {
  all: unset;
  background: #f3f3f9;
  padding: 10px 40px;
  border-radius: 5px;
}
.bi-search-admin {
  position: absolute;
  top: 30%;
  left: 10px;
  color: gray;
}
.header-right {
  height: 100%;
}
.admin-user {
  height: 100%;
  width: 200px;
  background: #f3f3f9;
}
.admin-user-img {
  height: 100%;
  aspect-ratio: 1 / 1;
  display: flex;
  justify-content: center;
  align-items: center;
}
.admin-user-name {
  font-weight: 500;
}
.admin-user-position {
  font-size: 12px;
}
.menu-admin-top {
  height: 100%;
  align-items: center;
}
.menu-admin-top li {
  padding: 15px;
  border-radius: 50%;
  margin-right: 5px;
}
.menu-admin-top li:hover {
  background: #f3f3f9;
}
.notification {
  position: relative;
}
.notification .number-ntf {
  position: absolute;
  top: 5px;
  right: 5px;
  font-size: 12px;
  padding: 1px 6px;
  border-radius: 50%;
  background: red;
  color: white;
}
</style>
<template>
  <div class="header-top">
    <div class="search-admin">
      <input type="text" placeholder="Search...." class="search-admin" />
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="20"
        height="20"
        fill="currentColor"
        class="bi bi-search bi-search-admin"
        viewBox="0 0 16 16"
      >
        <path
          d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"
        />
      </svg>
    </div>
    <div class="header-right d-flex">
      <div>
        <ul class="d-flex menu-admin-top">
          <li class="notification">
            <a href="">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                fill="currentColor"
                class="bi bi-bell"
                viewBox="0 0 16 16"
              >
                <path
                  d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"
                />
              </svg>
            </a>
            <p class="number-ntf">1</p>
          </li>
          <li>
            <a href="#">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                fill="currentColor"
                class="bi bi-bag"
                viewBox="0 0 16 16"
              >
                <path
                  d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"
                />
              </svg>
            </a>
          </li>
          <li>
            <a href="#">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                fill="currentColor"
                class="bi bi-moon"
                viewBox="0 0 16 16"
              >
                <path
                  d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278M4.858 1.311A7.27 7.27 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.32 7.32 0 0 0 5.205-2.162q-.506.063-1.029.063c-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286"
                />
              </svg>
            </a>
          </li>
          <li>
            <a href="#">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                fill="currentColor"
                class="bi bi-columns-gap"
                viewBox="0 0 16 16"
              >
                <path
                  d="M6 1v3H1V1zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1zm14 12v3h-5v-3zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM6 8v7H1V8zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1zm14-6v7h-5V1zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1z"
                />
              </svg>
            </a>
          </li>
          <li>
            <a href="#">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                fill="currentColor"
                class="bi bi-fullscreen"
                viewBox="0 0 16 16"
              >
                <path
                  d="M1.5 1a.5.5 0 0 0-.5.5v4a.5.5 0 0 1-1 0v-4A1.5 1.5 0 0 1 1.5 0h4a.5.5 0 0 1 0 1zM10 .5a.5.5 0 0 1 .5-.5h4A1.5 1.5 0 0 1 16 1.5v4a.5.5 0 0 1-1 0v-4a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 1-.5-.5M.5 10a.5.5 0 0 1 .5.5v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 0 14.5v-4a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v4a1.5 1.5 0 0 1-1.5 1.5h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 1 .5-.5"
                />
              </svg>
            </a>
          </li>
        </ul>
      </div>
      <div class="admin-user d-flex">
        <div class="admin-user-img"><img src="#" alt="ảnh" /></div>
        <div class="admin-user-text ms-2 d-flex align-items-center">
          <div>
            <p class="admin-user-name mb-0">Admin</p>
            <p class="admin-user-position">quản lý</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>