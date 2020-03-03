<template>
    <ul>
    <TodoItem
         v-for="items of array"
        v-bind:newItem="items"
    />
    </ul>
</template>

<script>
    import TodoItem from '@/components/TodoItem'
    export default {
        data(){
            return {
                array: [
                    {id:1,name:"1st item"},
                    {id:2,name:"2nd item"},
                    {id:3,name:"3d item"},
                ]
            }
        },
        components:{
            TodoItem,
        }
    }
</script>