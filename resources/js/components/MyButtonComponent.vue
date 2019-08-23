<template>
    <div>
       <button :type="type" v-text="test.name" class="css"></button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');

            axios.post('api/vue', {})
                .then(response => {
                    this.test = response.data;
                });
        },
        data: function () {
            return {
                test: null
            }
        },
        props: [
            'text',
            'type'
        ]
    }
</script>

<style lang="scss">
    .css {
        background: black;
        padding: 10px;
        color: white;
    }
</style>
