<template>
  <div>
    <h1>Admin Panel</h1>
    <nav>
      <router-link to="/admin">Dashboard</router-link> |
      <router-link to="/admin/users">Users</router-link> |
      <router-link to="/admin/categories">Categories</router-link> 
    </nav>
    <router-view></router-view>
  </div>
</template>
