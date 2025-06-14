<style scoped>
.main {
  height: 100vh;
  background: #efefef;
}
.user_title {
  padding: 10px 20px;
  background: white;
}
.admin-user {
  margin: 20px;
  background: white;
  height: auto;
}
.admin-user-top {
  height: auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 20px;
}
.user_add {
  display: inline-block;
  padding: 8px 15px;
  margin: 10px;
  background: #0ab39c;
  color: white;
  border-radius: 5px;
}
.admin-user-search {
  position: relative;
}
.admin-user-search input {
  padding: 5px 35px;
  border-radius: 5px;
  border: 1px solid rgb(215, 215, 215);
}
.admin-user-search svg {
  position: absolute;
  top: 7px;
  left: 7px;
  color: rgb(171, 171, 171);
}
/* table */
.table-th {
  background: rgb(202, 202, 202) !important;
}
.action a {
  padding: 8px 15px 10px 15px;
  margin-right: 10px;
  border-radius: 3px;
  color: white;
  font-size: 13px;
}
.action-edit {
  background: #0ab39c;
}
.action-edit:hover {
  background: #0b9c89;
}
.action-remove {
  background: #f06548;
}
.action-remove:hover {
  background: #b74b36;
}
</style>
<template>
  <div class="main">
    <div class="user_title">
      <h4>Danh sách khách hàng</h4>
    </div>
    <div class="admin-user">
      <div class="admin-user-top">
        <div class="admin-user-tl">
          <a class="user_add" href="#">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="20"
              height="20"
              fill="currentColor"
              class="bi bi-plus"
              viewBox="0 0 16 16"
            >
              <path
                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"
              />
            </svg>
            Add</a
          >
        </div>
        <div class="admin-user-tr">
          <div class="admin-user-search">
            <input type="text" placeholder="Search..." />
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="20"
              height="20"
              fill="currentColor"
              class="bi bi-search bi-search-user"
              viewBox="0 0 16 16"
            >
              <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"
              />
            </svg>
          </div>
        </div>
      </div>
      <div class="admin-user-bottom">
        <table class="table table-hover">
          <thead>
            <tr class="table-th">
              <th scope="col">
                <input class="check-all" type="checkbox" />
              </th>
              <th scope="col">Customer</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Address</th>
              <th scope="col">Delivery Status</th>
              <th scope="col">action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><input type="checkbox" /></th>
              <td>name</td>
              <td>abc@gmail.com</td>
              <td>0348952451</td>
              <td>Hà Nội</td>
              <td>block</td>
              <td class="action">
                <a href="#" class="action-edit">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    fill="currentColor"
                    class="bi bi-pencil-square"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"
                    />
                    <path
                      fill-rule="evenodd"
                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"
                    />
                  </svg>
                </a>
                <a href="#" class="action-remove">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    fill="currentColor"
                    class="bi bi-trash"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"
                    />
                    <path
                      d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"
                    />
                  </svg>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script setup>
import api from "../../axios";
import axios from "axios";
import { crudUser } from "../../stores/crudBase/crud-user";

const user = crudUser();
onMounted(() => {
  user.getUser();
});
console.log(user.data);
</script>