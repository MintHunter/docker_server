<template>
    <li>
        <div>time: {{newItem.time}}</div>
        <div>disclaimer: {{newItem.disclaimer}}</div>
        <div>chartName: {{newItem.chartName}}</div>
        <div>bpi: {{newItem.bpi}}</div>
        <div>bpi=>USD: {{newItem.bpi.USD}}</div>
        <div>bpi=>EUR: {{newItem.bpi.EUR}}</div>

    </li>
</template>

<script>
export default {
    props:{
        newItem:{

        }
    },
}
</script>