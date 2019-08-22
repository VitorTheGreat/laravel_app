<template>
    <div class="container">
        <!-- v-text is a directive that inserts text to the button, this directive is comming from the compoment as an attribute, to accept it we have to called ir by props (see below) -->
       <button :type="type" v-text="test"></button>
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
    }
</style>
