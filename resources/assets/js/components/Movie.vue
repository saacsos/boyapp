<template>
    <div class="box">
        <h2>{{ movieObject.name }}</h2>

        <div>Duration: {{ movieObject.duration }}</div>
    </div>
</template>

<script>
export default {
    name: 'Movie',
    data() {
        return {
            
        }
    },
    props: ['movieObject']
}
</script>
