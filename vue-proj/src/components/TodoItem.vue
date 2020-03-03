<template>
    <li>
        <div>chartName: {{newItem.chartName}}</div>
        <div>USD: {{newItem.bpi.USD.rate}}</div>
        <div>EUR: {{newItem.bpi.EUR.rate}}</div>
        <div>updated time: {{newItem.time.updated}}</div>
        <div>disclaimer: {{newItem.disclaimer}}</div>

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