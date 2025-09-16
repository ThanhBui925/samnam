<template>
  <div>
    <h1>Admin Panel</h1>
    <nav>
      <router-link to="/admin">Dashboard</router-link> |
      <router-link to="/admin/users">Users</router-link>
    </nav>
    <router-view></router-view>
  </div>
</template>
