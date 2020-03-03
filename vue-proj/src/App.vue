<template>
  <div id="app">
<h1>1st Application</h1>
    <hr>
<NewComp />
    <hr>
<TodoList />
  </div>
</template>

<script>
import NewComp from '@/components/NewComp'
import TodoList from '@/components/TodoList'

export default {
  name: 'App',
  components: {
    NewComp,
    TodoList
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
