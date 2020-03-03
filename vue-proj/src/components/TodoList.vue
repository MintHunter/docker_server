<template>
    <ul>
    <TodoItem
        v-bind:newItem="array"
    />
    </ul>
</template>

<script>
    import TodoItem from '@/components/TodoItem'
    export default {
        data(){
            return {
                array: null
            }
        },
        mounted(){
            fetch('https://api.coindesk.com/v1/bpi/currentprice.json')
                .then(response => response.json())
                .then(json => (this.array=json))
        },
        components:{
            TodoItem,
        }
    }
</script>